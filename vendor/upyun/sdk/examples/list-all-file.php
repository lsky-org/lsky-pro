<?php
require  __DIR__ . '/../tests/bootstrap.php';

use Upyun\Config;
use Upyun\Upyun;

$config = new Config(BUCKET, USER_NAME, PWD);
$upyun = new Upyun($config);

$start = null;
$total = 0;
do {
    $list = $upyun->read('/', null, array(
        'X-List-Limit' => 100,
        'X-List-Iter' => $start,
    ));

    if (is_array($list['files'])) {
        foreach ($list['files'] as $file) {
            $total++;
            if ($file['type'] === 'N') {
                echo '文件名: ';
            } else {
                echo '目录名: ';
            }
            echo $file['name'];
            echo ' 大小:' . $file['size'];
            echo ' 修改时间:' . date('Y-m-d H:i:s', $file['time']);
            echo "\n";
        }
    }
    $start = $list['iter'];
} while (!$list['is_end']);

echo '总共存有文件 ' . $total . ' 个';
