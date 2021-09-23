<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 上午10:29
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use app\common\model\Images as ImagesModel;
use app\common\model\Users;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use think\facade\Config;
use think\Db;
use think\Exception;

/**
 * 图片管理
 *
 * Class Images
 * @package app\index\controller\admin
 */
class Images extends Base
{
    private $strategyList = [];

    public function initialize()
    {
        parent::initialize();
        $this->strategyList = Config::pull('strategy');
        $this->assign('strategy_list', $this->strategyList);
    }

    public function index($strategy = '', $user_id = '', $suspicious = 0, $keyword = '', $limit = 30)
    {
        $model = new ImagesModel();
        $model = $model->where('suspicious', $suspicious);
        if ($strategy) {
            $model = $model->where('strategy', $strategy);
        }
        if ($user_id) {
            $model = $model->where('user_id', $user_id);
        }
        if (!empty($keyword)) {
            $model = $model->where('pathname|alias_name|sha1|md5|ip', 'like', "%{$keyword}%");
        }
        $images = $model->order('id', 'desc')->paginate($limit, false, [
            'query' => [
                'strategy' => $strategy,
                'keyword' => $keyword
            ]
        ])->each(function ($item) {
            $username = Users::where('id', $item->user_id)->value('username');
            $item->username = $username ? $username : lang('Visitor');
            $item->strategyStr = isset($this->strategyList[$item->strategy]) ? $this->strategyList[$item->strategy]['name'] : lang('Unknown');
            return $item;
        });
        $this->assign([
            'images' => $images,
            'keyword' => $keyword,
            'strategyList' => $this->strategyList,
            'strategy' => $strategy,
            'suspicious' => $suspicious,
            'user_id' => $user_id,
        ]);

        return $this->fetch();
    }

    public function delete()
    {
        if ($this->request->isPost()) {
            Db::startTrans();
            try {
                $id = $this->request->post('id');
                $deletes = []; // 需要删除的文件
                $images = ImagesModel::where('id', 'in', $id)->select();
                foreach ($images as &$value) {
                    // 查找是否有相同 md5 的文件记录，有的话则只删除记录不删除文件
                    if (!$this->exists($value)) {
                        $deletes[$value->strategy][] = $value->pathname;
                    }
                    $value->delete();
                    unset($value);
                }
                // 是否开启软删除(开启了只删除记录，不删除文件)
                if (!$this->getConfig('soft_delete')) {
                    $strategy = [];
                    // 实例化所有储存策略驱动
                    $strategyAll = array_keys($this->strategyList);
                    foreach ($strategyAll as $value) {
                        // 获取储存策略驱动
                        $strategy[$value] = $this->getStrategyInstance($value);
                    }

                    foreach ($deletes as $key => $val) {
                        if (1 === count($val)) {
                            if (!$strategy[$key]->delete(isset($val[0]) ? $val[0] : null)) {
                                // throw new Exception(lang('Deletion failed'));
                            }
                        } else {
                            if (!$strategy[$key]->deletes($val)) {
                                //  throw new Exception(lang('Batch deletion failed'));
                            }
                        }
                    }
                }
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                $this->error($e->getMessage());
            }
            $this->success(lang('Delete succeeded'));
        }
    }

    /**
     * 检测除本身图片以外的记录是否存在
     *
     * @param ImagesModel $image
     * @return float|string
     */
    private function exists(ImagesModel $image)
    {
        return ImagesModel::where('id', 'neq', $image->id)
            ->where('md5', $image->md5)
            ->where('sha1', $image->sha1)
            ->count();
    }

    public function getIpInfo()
    {
        if ($this->request->isPost()) {
            try {
                $data = null;
                $ip = $this->request->post('ip');
                $client = new Client();
                $response = $client->get("https://ip.taobao.com/outGetIpInfo?ip={$ip}&accessKey=alibaba-inc");
                if ($response->getStatusCode() == 200) {
                    $data = json_decode($response->getBody()->getContents(), true);
                    if (isset($data['code']) && $data['code'] == 0) {
                        $data = isset($data['data']) ? $data['data'] : null;
                    }
                }
            } catch (Exception $e) {
                $this->error(lang('Acquisition failed'));
            } catch (RequestException $e) {
                $this->error(lang('The interface is abnormal, %s', [$e->getMessage()]));
            }
            $this->success(lang('Get success'), null, $data);
        }
    }
}
