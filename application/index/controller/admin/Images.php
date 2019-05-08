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

    public function index($where = '', $keyword = '', $limit = 15)
    {
        $where = json_decode($where, true);
        if (null == $where) {
            $where = [
                'suspicious' => 0,
            ];
        }
        $model = new ImagesModel();
        foreach ($where as $field => $value) {
            $model = $model->where($field, $value);
        }
        if (!empty($keyword)) {
            $model = $model->where('pathname|sha1|md5|ip', 'like', "%{$keyword}%");
        }
        $images = $model->order('id', 'desc')->paginate($limit, false, [
            'query' => [
                'keyword' => $keyword
            ]
        ])->each(function ($item) {
            $username = Users::where('id', $item->user_id)->value('username');
            $item->username = $username ? $username : '访客';
            $item->strategyStr = isset($this->strategyList[$item->strategy]) ? $this->strategyList[$item->strategy]['name'] : '未知';
            return $item;
        });
        $this->assign([
            'images' => $images,
            'keyword' => $keyword,
            'strategyList' => $this->strategyList,
            'strategy' => isset($where['strategy']) ? $where['strategy'] : '',
            'suspicious' => isset($where['suspicious']) ? $where['suspicious'] : 0,
            'user_id' => isset($where['user_id']) ? $where['user_id'] : null,
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
                if (is_array($id)) {
                    $images = ImagesModel::all($id);
                    foreach ($images as &$value) {
                        $deletes[$value->strategy][] = $value->pathname;
                        $value->delete();
                        unset($value);
                    }
                } else {
                    $image = ImagesModel::get($id);
                    if (!$image) {
                        throw new Exception('没有找到该图片数据');
                    }
                    $deletes[$image->strategy][] = $image->pathname;
                    $image->delete();
                }
                // 是否开启软删除(开启了只删除记录，不删除文件)
                if (!$this->config['soft_delete']) {
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
                                throw new Exception('删除失败');
                            }
                        } else {
                            if (!$strategy[$key]->deletes($val)) {
                                throw new Exception('批量删除失败');
                            }
                        }
                    }
                }
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                return $this->error($e->getMessage());
            }
            return $this->success('删除成功');
        }
    }

    public function getIpInfo()
    {
        if ($this->request->isPost()) {
            try {
                $data = null;
                $ip = $this->request->post('ip');
                $client = new Client();
                $response = $client->get('http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip);
                if ($response->getStatusCode() == 200) {
                    $data = json_decode($response->getBody()->getContents(), true);
                    if (isset($data['code']) && $data['code'] == 0) {
                        $data = isset($data['data']) ? $data['data'] : null;
                    }
                }
            } catch (Exception $e) {
                return $this->error('获取失败');
            } catch (RequestException $e) {
                return $this->error('淘宝接口发生异常，状态码：' . $response->getStatusCode());
            }
            return $this->success('获取成功', null, $data);
        }
    }
}
