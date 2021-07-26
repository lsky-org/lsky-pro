--
-- Sql更新文件，选择数据库后导入，或直接复制内容执行
--

-- v1.2.0
UPDATE `lsky_config` SET `value` = '1.2.1' WHERE `lsky_config`.`name` = 'system_version';

-- v1.3.2
UPDATE `lsky_config` SET `value` = '1.3.2' WHERE `lsky_config`.`name` = 'system_version';

INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'audit', 'bool', 'checkbox', 'open_audit', 'Turn on picture yellow identification', 'Turn on picture yellow identification tip', '0', ''),
(NULL, 'audit', 'text', 'text', 'audit_key', 'Key', NULL, '', ''),
(NULL, 'audit', 'select', 'text', 'audit_index', 'Content rating', 'Content rating tip', '3', '{\"1\": \"Very strict\", \"2\": \"Strict\", \"3\": \"Commonly\"}'),
(NULL, 'other', 'bool', 'checkbox', 'open_api', 'Open api', 'Open api tip', '0', '');

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

-- v1.4.1
UPDATE `lsky_config` SET `value` = '1.4.1' WHERE `lsky_config`.`name` = 'system_version';
CREATE TABLE IF NOT EXISTS `lsky_folders` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT 'ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级文件夹ID',
  `name` varchar(100) NOT NULL COMMENT '文件夹名称',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='文件夹表';

-- v1.4.2
UPDATE `lsky_config` SET `value` = '1.4.2' WHERE `lsky_config`.`name` = 'system_version';
UPDATE `lsky_images` SET `strategy` = 'uss' WHERE `lsky_images`.`strategy` = 'upyun';
UPDATE `lsky_images` SET `strategy` = 'kodo' WHERE `lsky_images`.`strategy` = 'qiniu';

-- v1.5.0
UPDATE `lsky_config` SET `value` = '1.5.0' WHERE `lsky_config`.`name` = 'system_version';
UPDATE `lsky_config` SET `tip` = 'Turn on picture yellow identification tip' WHERE `lsky_config`.`name` = 'open_audit';
INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'basics', 'textarea', 'textarea', 'custom_style', 'Custom CSS', NULL, '<!-- 可以直接引入第三方css样式 -->\r\n<style>\r\n  /* body {} */\r\n</style>', ''),
(NULL, 'basics', 'textarea', 'textarea', 'statistics_code', 'Statistical code', NULL, '<script>\r\n  // js统计代码 \r\n</script>', '');
CREATE TABLE IF NOT EXISTS `lsky_group` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `strategy` varchar(32) NOT NULL COMMENT '使用策略',
  `name` varchar(32) NOT NULL COMMENT '组名称',
  `default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '默认',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='文件夹表';
INSERT IGNORE INTO `lsky_group` (`id`, `strategy`, `name`, `default`, `create_time`) VALUES ('1', 'local', 'Default group', '1', '0');

-- v1.5.1
UPDATE `lsky_config` SET `value` = '1.5.1' WHERE `lsky_config`.`name` = 'system_version';
ALTER TABLE `lsky_users` CHANGE `reg_ip` `reg_ip` VARCHAR(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '注册IP';

-- v1.5.2
UPDATE `lsky_config` SET `value` = '1.5.2' WHERE `lsky_config`.`name` = 'system_version';

-- v1.5.3
UPDATE `lsky_config` SET `value` = '1.5.3' WHERE `lsky_config`.`name` = 'system_version';

-- v1.5.4
UPDATE `lsky_config` SET `value` = '1.5.4' WHERE `lsky_config`.`name` = 'system_version';

-- v1.5.5
UPDATE `lsky_config` SET `value` = '1.5.5' WHERE `lsky_config`.`name` = 'system_version';
INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'basics', 'textarea', 'textarea', 'notice', 'System notice', 'System notice tip', '', ''),
(NULL, 'remote', 'text', 'text', 'remote_cdn_domain', 'Domain name', NULL, '', ''),
(NULL, 'remote', 'select', 'text', 'remote_type', 'Remote storage type', NULL, 'ftp', '{\"ftp\":\"Ftp\"}'),
(NULL, 'remote', 'text', 'text', 'remote_host', 'Connection address', NULL, '', ''),
(NULL, 'remote', 'text', 'text', 'remote_name', 'Login account', NULL, '', ''),
(NULL, 'remote', 'text', 'password', 'remote_password', 'Login password', NULL, '', ''),
(NULL, 'remote', 'text', 'number', 'remote_port', 'Connection port', NULL, '21', '');

-- v1.5.6
UPDATE `lsky_config` SET `value` = '1.5.6' WHERE `lsky_config`.`name` = 'system_version';

-- v1.5.7
UPDATE `lsky_config` SET `value` = '1.5.7' WHERE `lsky_config`.`name` = 'system_version';

-- v1.5.8
UPDATE `lsky_config` SET `value` = '1.5.8' WHERE `lsky_config`.`name` = 'system_version';

-- v1.6.0
UPDATE `lsky_config` SET `value` = '1.6.0' WHERE `lsky_config`.`name` = 'system_version';
INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'other', 'textarea', 'textarea', 'ban_ip', 'Ban ip', 'Ban ip tip', '', ''),
(NULL, 'remote', 'bool', 'checkbox', 'remote_pasv', 'Passive mode', NULL, '0', '');

-- v1.6.1
UPDATE `lsky_config` SET `value` = '1.6.1' WHERE `lsky_config`.`name` = 'system_version';

-- v1.6.3
UPDATE `lsky_config` SET `value` = '1.6.3' WHERE `lsky_config`.`name` = 'system_version';
INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'other', 'bool', 'checkbox', 'open_gallery', 'Open gallery', 'Open gallery tip', '', '');

-- v1.6.4
UPDATE `lsky_config` SET `value` = '1.6.4' WHERE `lsky_config`.`name` = 'system_version';
INSERT IGNORE INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'upload', 'text', 'number', 'same_ip_day_max_upload', 'Same ip day max upload', 'Same ip day max upload tip', '0', '');
