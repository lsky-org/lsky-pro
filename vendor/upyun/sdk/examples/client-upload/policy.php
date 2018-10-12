<?php
require  __DIR__ . '/../../tests/bootstrap.php';

use Upyun\Config;
use Upyun\Signature;
use Upyun\Util;

$config = new Config(BUCKET, USER_NAME, PWD);
$config->setFormApiKey('Mv83tlocuzkmfKKUFbz2s04FzTw=');

$data['save-key'] = $_GET['save_path'];
$data['expiration'] = time() + 120;
$data['bucket'] = BUCKET;
$policy = Util::base64Json($data);
$method = 'POST';
$uri = '/' . $data['bucket'];
$signature = Signature::getBodySignature($config, $method, $uri, null, $policy);
echo json_encode(array(
    'policy' => $policy,
    'authorization' => $signature
));
