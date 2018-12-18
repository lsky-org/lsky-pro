--
-- Sql更新文件，选择数据库后导入，或直接复制内容执行
--

-- v1.2.0
UPDATE `lsky_config` SET `value` = '1.2.1' WHERE `lsky_config`.`name` = 'system_version';

-- v1.3.2
UPDATE `lsky_config` SET `value` = '1.3.2' WHERE `lsky_config`.`name` = 'system_version';

INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'audit', 'bool', 'checkbox', 'open_audit', '开启图片鉴黄', '鉴黄接口申请地址：https://www.moderatecontent.com', '0', ''),
(NULL, 'audit', 'text', 'text', 'audit_key', 'Key', NULL, '', ''),
(NULL, 'audit', 'select', 'text', 'audit_index', '内容评级', '1=所有人，2=少年，3=成人', '3', '{\"1\": \"所有人\", \"2\": \"少年\", \"3\": \"成人\"}'),
(NULL, 'other', 'bool', 'checkbox', 'open_api', '开启API', '是否开放接口', '0', '');

-- v1.3.3
UPDATE `lsky_config` SET `value` = '1.3.3' WHERE `lsky_config`.`name` = 'system_version';

-- v1.4.0
UPDATE `lsky_config` SET `value` = '1.4.0' WHERE `lsky_config`.`name` = 'system_version';
UPDATE `lsky_config` SET `key` = 'uss', `name` = 'uss_cdn_domain' WHERE `lsky_config`.`name` = 'upyun_cdn_domain';
UPDATE `lsky_config` SET `key` = 'uss', `name` = 'uss_operator_name' WHERE `lsky_config`.`name` = 'upyun_operator_name';
UPDATE `lsky_config` SET `key` = 'uss', `name` = 'uss_operator_pwd' WHERE `lsky_config`.`name` = 'upyun_operator_pwd';
UPDATE `lsky_config` SET `key` = 'uss', `name` = 'uss_service_name' WHERE `lsky_config`.`name` = 'upyun_service_name';
UPDATE `lsky_config` SET `key` = 'kodo', `name` = 'kodo_cdn_domain' WHERE `lsky_config`.`name` = 'qiniu_cdn_domain';
UPDATE `lsky_config` SET `key` = 'kodo', `name` = 'kodo_access_key' WHERE `lsky_config`.`name` = 'qiniu_access_key';
UPDATE `lsky_config` SET `key` = 'kodo', `name` = 'kodo_secret_key' WHERE `lsky_config`.`name` = 'qiniu_secret_key';
UPDATE `lsky_config` SET `key` = 'kodo', `name` = 'kodo_bucket' WHERE `lsky_config`.`name` = 'qiniu_bucket';
UPDATE `lsky_config` SET `value` = 'kodo' WHERE `lsky_config`.`value` = 'qiniu';
UPDATE `lsky_config` SET `value` = 'uss' WHERE `lsky_config`.`value` = 'upyun';
