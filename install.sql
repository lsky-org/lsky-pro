-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        8.0.13 - MySQL Community Server - GPL
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 lsky.lsky_config 结构
DROP TABLE IF EXISTS `lsky_config`;
CREATE TABLE IF NOT EXISTS `lsky_config` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(32) DEFAULT NULL COMMENT 'key',
  `type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'text|bool|textarea|select',
  `input_type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'input type属性',
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '配置名',
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '配置标题',
  `tip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '配置描述',
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '配置值',
  `extend` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '扩展属性',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT COMMENT='系统配置';

-- 正在导出表  lsky.lsky_config 的数据：~45 rows (大约)
DELETE FROM `lsky_config`;
/*!40000 ALTER TABLE `lsky_config` DISABLE KEYS */;
INSERT INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
	(1, 'basics', 'bool', 'checkbox', 'close_register', '关闭注册', NULL, '0', ''),
	(2, 'basics', 'text', 'text', 'site_name', '网站标题', NULL, 'Lsky Pro', ''),
	(3, 'basics', 'text', 'text', 'site_keywords', '网站关键字', NULL, 'Lsky Pro', ''),
	(4, 'basics', 'text', 'text', 'site_description', '网站描述', NULL, 'Lsky Pro, Your photo album on the cloud.', ''),
	(5, 'basics', 'text', 'text', 'icp_number', '备案号', NULL, '', ''),
	(6, 'upload', 'bool', 'checkbox', 'allowed_tourist_upload', '允许游客上传', '是否允许游客上传', '1', ''),
	(7, 'upload', 'text', 'text', 'upload_max_size', '最大上传大小', '单位：b，默认5242880：5M', '5242880', ''),
	(8, 'upload', 'text', 'number', 'upload_single_num', '单次同时上传数量', NULL, '10', ''),
	(9, 'upload', 'text', 'text', 'upload_allowed_exts', '允许上传的文件后缀', '逗号隔开', 'jpg,jpeg,gif,png,ico', ''),
	(10, 'upload', 'text', 'text', 'path_naming_rule', '文件路径命名规则', '<a href="javascript:void(0)" mdui-dialog="{target: \'#path-var\'}">路径命名变量对照表</a>', '{Y}/{m}/{d}', ''),
	(11, 'upload', 'text', 'text', 'file_naming_rule', '文件命名规则', '<a href="javascript:void(0)" mdui-dialog="{target: \'#file-var\'}">文件命名变量对照表</a>', '{uniqid}', ''),
	(12, 'user', 'text', 'text', 'user_initial_quota', '用户初始配额容量', '单位：b，默认1073741824：1G，最大18位', '1073741824', ''),
	(13, 'mail', 'select', 'text', 'mail_send_mode', '邮件发送方式', NULL, 'smtp', '{"smtp":"SMTP"}'),
	(14, 'mail', 'select', 'text', 'mail_smtp_secure', 'SMTP验证方式', NULL, 'none', '{"none":"None","tls":"TLS","ssl":"SSL"}'),
	(15, 'mail', 'text', 'text', 'mail_smtp_host', 'SMTP主机地址', NULL, '', ''),
	(16, 'mail', 'text', 'text', 'mail_smtp_username', 'SMTP用户名', NULL, '', ''),
	(17, 'mail', 'text', 'password', 'mail_smtp_password', 'SMTP密码', NULL, '', ''),
	(18, 'mail', 'text', 'number', 'mail_smtp_port', 'SMTP端口', '25/465', '25', ''),
	(19, 'mail', 'text', 'email', 'mail_form_email', '发件人邮箱', NULL, '', ''),
	(20, 'other', 'bool', 'checkbox', 'soft_delete', '软删除', '删除图片时不删除源文件，不建议开启', '0', ''),
	(21, 'storage_strategy', 'select', 'text', 'storage_strategy', '储存策略', NULL, 'github', ''),
	(22, 'local', 'text', 'text', 'local_cdn_domain', 'CDN加速域名', NULL, '', ''),
	(23, 'oss', 'text', 'text', 'oss_cdn_domain', 'Bucket域名', NULL, '', ''),
	(24, 'oss', 'text', 'text', 'oss_access_key_id', 'AccessKeyId', NULL, '', ''),
	(25, 'oss', 'text', 'text', 'oss_access_key_secret', 'AccessKeySecret', NULL, '', ''),
	(26, 'oss', 'text', 'text', 'oss_endpoint', 'Endpoint', '地域节点', '', ''),
	(27, 'oss', 'text', 'text', 'oss_bucket', 'Bucket', NULL, '', ''),
	(28, 'cos', 'text', 'text', 'cos_cdn_domain', 'CDN加速域名', NULL, '', ''),
	(29, 'cos', 'text', 'text', 'cos_secret_id', 'SecretId', NULL, '', ''),
	(30, 'cos', 'text', 'text', 'cos_secret_key', 'SecretKey', NULL, '', ''),
	(31, 'cos', 'text', 'text', 'cos_region', '所属地域', NULL, '', ''),
	(32, 'cos', 'text', 'text', 'cos_bucket', 'Bucket', '储存桶名称', '', ''),
	(33, 'kodo', 'text', 'text', 'kodo_cdn_domain', 'CDN加速域名', NULL, '', ''),
	(34, 'kodo', 'text', 'text', 'kodo_access_key', 'AccessKey', NULL, '', ''),
	(35, 'kodo', 'text', 'text', 'kodo_secret_key', 'SecretKey', NULL, '', ''),
	(36, 'kodo', 'text', 'text', 'kodo_bucket', 'Bucket', NULL, '', ''),
	(37, 'uss', 'text', 'text', 'uss_cdn_domain', 'CDN加速域名', NULL, '', ''),
	(38, 'uss', 'text', 'text', 'uss_operator_name', 'OperatorName', '操作员账号', '', ''),
	(39, 'uss', 'text', 'password', 'uss_operator_pwd', 'OperatorPwd', '操作员密码', '', ''),
	(40, 'uss', 'text', 'text', 'uss_service_name', 'ServiceName', '云储存服务名称', '', ''),
	(41, '', 'text', 'text', 'system_version', '系统版本', NULL, '1.4.2', ''),
	(42, 'audit', 'bool', 'checkbox', 'open_audit', '开启图片鉴黄', '鉴黄接口申请地址：https://www.moderatecontent.com', '0', ''),
	(43, 'audit', 'text', 'text', 'audit_key', 'Key', NULL, '', ''),
	(44, 'audit', 'select', 'text', 'audit_index', '内容评级', '1=所有人，2=少年，3=成人', '3', '{"1": "所有人", "2": "少年", "3": "成人"}'),
	(45, 'other', 'bool', 'checkbox', 'open_api', '开启API', '是否开放接口', '1', ''),
	(46, 'github', 'text', 'text', 'github_token', 'Token', '', '', ''),
	(48, 'github', 'text', 'text', 'github_user', '用户账号', '', '', ''),
	(49, 'github', 'text', 'text', 'github_repo', '仓库名称', '', '', ''),
	(50, 'github', 'text', 'text', 'github_path', '存储路径', '', '', ''),
	(51, 'github', 'text', 'text', 'github_message', '提交信息', '', '', ''),
	(52, 'github', 'text', 'text', 'github_branch', '分支', '', '', ''),
	(53, 'github', 'text', 'text', 'github_cdn_domain', '访问url', '', '', '');
/*!40000 ALTER TABLE `lsky_config` ENABLE KEYS */;

-- 导出  表 lsky.lsky_folders 结构
DROP TABLE IF EXISTS `lsky_folders`;
CREATE TABLE IF NOT EXISTS `lsky_folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级文件夹ID',
  `name` varchar(100) NOT NULL COMMENT '文件夹名称',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='文件夹表';

-- 正在导出表  lsky.lsky_folders 的数据：~0 rows (大约)
DELETE FROM `lsky_folders`;
/*!40000 ALTER TABLE `lsky_folders` DISABLE KEYS */;
/*!40000 ALTER TABLE `lsky_folders` ENABLE KEYS */;

-- 导出  表 lsky.lsky_images 结构
DROP TABLE IF EXISTS `lsky_images`;
CREATE TABLE IF NOT EXISTS `lsky_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID，为0表示游客上传',
  `folder_id` int(11) NOT NULL DEFAULT '0' COMMENT '文件夹ID',
  `strategy` varchar(32) NOT NULL DEFAULT 'local' COMMENT '储存策略，默认本地',
  `path` varchar(500) NOT NULL COMMENT '保存路径',
  `name` varchar(500) NOT NULL COMMENT '保存名称',
  `pathname` varchar(500) NOT NULL COMMENT '保存名称',
  `size` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '图片大小(字节：b)',
  `mime` varchar(32) NOT NULL COMMENT '文件MIME类型',
  `sha1` varchar(100) NOT NULL COMMENT 'hash sha1',
  `md5` varchar(32) NOT NULL COMMENT 'hash md5',
  `ip` varchar(128) DEFAULT NULL COMMENT '上传者IP',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='图片表';




-- 导出  表 lsky.lsky_users 结构
DROP TABLE IF EXISTS `lsky_users`;
CREATE TABLE IF NOT EXISTS `lsky_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `quota` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '可用配额容量(字节：b)',
  `default_folder` varchar(32) DEFAULT NULL COMMENT '默认上传文件夹',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为管理员',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0：冻结，1：正常',
  `token` varchar(32) DEFAULT NULL COMMENT 'Token',
  `reg_ip` varchar(32) DEFAULT NULL COMMENT '注册IP',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `create_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='用户表';



/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
