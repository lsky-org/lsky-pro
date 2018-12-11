--
-- Sql更新文件，选择数据库后导入，或直接复制内容执行
--

-- v1.2.0
UPDATE `lsky_config` SET `value` = '1.2.1' WHERE `lsky_config`.`name` = 'system_version';

-- v1.3.2
UPDATE `lsky_config` SET `value` = '1.3.2' WHERE `lsky_config`.`name` = 'system_version';
INSERT INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'audit', 'bool', 'checkbox', 'open_audit', '开启图片鉴黄', '鉴黄接口申请地址：https://www.moderatecontent.com', '0', ''),
(NULL, 'audit', 'text', 'text', 'audit_key', 'Key', NULL, '', ''),
(NULL, 'audit', 'select', 'text', 'audit_index', '内容评级', '1=所有人，2=少年，3=成人', '3', '{\"1\": \"所有人\", \"2\": \"少年\", \"3\": \"成人\"}'),
(NULL, 'other', 'bool', 'checkbox', 'open_api', '开启API', '是否开放接口', '0', '');

-- v1.3.3
UPDATE `lsky_config` SET `value` = '1.3.3' WHERE `lsky_config`.`name` = 'system_version';
