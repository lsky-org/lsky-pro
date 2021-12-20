SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lsky`
--

--
-- 表的结构 `lsky_config`
--

DROP TABLE IF EXISTS `lsky_config`;
CREATE TABLE IF NOT EXISTS `lsky_config` (
  `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `key` varchar(32) DEFAULT NULL COMMENT 'key',
  `type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'text|bool|textarea|select',
  `input_type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'input type属性',
  `name` varchar(32) CHARACTER SET utf8mb4 NOT NULL UNIQUE COMMENT '配置名',
  `title` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '配置标题',
  `tip` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '配置描述',
  `value` text CHARACTER SET utf8mb4 NOT NULL COMMENT '配置值',
  `extend` text CHARACTER SET utf8mb4 NOT NULL COMMENT '扩展属性',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='系统配置' ROW_FORMAT=COMPACT;

--
-- 表的结构 `lsky_images`
--

DROP TABLE IF EXISTS `lsky_images`;
CREATE TABLE IF NOT EXISTS `lsky_images` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户ID，为0表示游客上传',
  `folder_id` int(11) NOT NULL DEFAULT 0 COMMENT '文件夹ID',
  `strategy` varchar(32) NOT NULL DEFAULT 'local' COMMENT '储存策略，默认本地',
  `path` varchar(500) NOT NULL COMMENT '保存路径',
  `name` varchar(500) NOT NULL COMMENT '保存名称',
  `alias_name` varchar(255) NULL DEFAULT NULL COMMENT '别名',
  `pathname` varchar(500) NOT NULL COMMENT '保存名称',
  `size` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '图片大小(字节：b)',
  `mime` varchar(32) NOT NULL COMMENT '文件MIME类型',
  `sha1` varchar(100) NOT NULL COMMENT 'hash sha1',
  `md5` varchar(32) NOT NULL COMMENT 'hash md5',
  `ip` varchar(128) DEFAULT NULL COMMENT '上传者IP',
  `suspicious` tinyint(1) NOT NULL DEFAULT '0' COMMENT '可疑图片',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='图片表';

--
-- 表的结构 `lsky_users`
--

DROP TABLE IF EXISTS `lsky_users`;
CREATE TABLE IF NOT EXISTS `lsky_users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色组ID',
  `username` varchar(32) NOT NULL UNIQUE COMMENT '用户名',
  `nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `email` varchar(100) NOT NULL UNIQUE COMMENT '邮箱',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `quota` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '可用配额容量(字节：b)',
  `default_folder` varchar(32) DEFAULT NULL COMMENT '默认上传文件夹',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为管理员',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0：冻结，1：正常',
  `token` varchar(32) DEFAULT NULL COMMENT 'Token',
  `reg_ip` varchar(128) DEFAULT NULL COMMENT '注册IP',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `create_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='用户表';

--
-- 表的结构 `lsky_folders`
--

DROP TABLE IF EXISTS `lsky_folders`;
CREATE TABLE `lsky_folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上级文件夹ID',
  `name` varchar(100) NOT NULL COMMENT '文件夹名称',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='文件夹表';

--
-- 表的结构 `lsky_users_group`
--

DROP TABLE IF EXISTS `lsky_group`;
CREATE TABLE `lsky_group` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `strategy` varchar(32) NOT NULL COMMENT '使用策略',
  `name` varchar(32) NOT NULL COMMENT '组名称',
  `default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '默认',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci COMMENT='文件夹表';

-- --------------------------------------------------------

--
-- 表中的数据 `lsky_config`
--

INSERT INTO `lsky_config` (`id`, `key`, `type`, `input_type`, `name`, `title`, `tip`, `value`, `extend`) VALUES
(NULL, 'basics', 'bool', 'checkbox', 'close_register', '关闭注册', NULL, '0', ''),
(NULL, 'basics', 'text', 'text', 'site_name', '网站标题', NULL, 'Lsky Pro', ''),
(NULL, 'basics', 'text', 'text', 'site_keywords', '网站关键字', NULL, 'Lsky Pro', ''),
(NULL, 'basics', 'text', 'text', 'site_description', '网站描述', NULL, 'Lsky Pro, Your photo album on the cloud.', ''),
(NULL, 'basics', 'textarea', 'textarea', 'custom_style', '自定义CSS', NULL, '<!-- 可以直接引入第三方css样式 -->\r\n<style>\r\n  /* body {} */\r\n</style>', ''),
(NULL, 'basics', 'textarea', 'textarea', 'statistics_code', '统计代码', NULL, '<script>\r\n// js统计代码</script>', ''),
(NULL, 'basics', 'text', 'text', 'icp_number', '备案号', NULL, '', ''),
(NULL, 'upload', 'bool', 'checkbox', 'allowed_tourist_upload', '允许游客上传', '是否允许游客上传', '1', ''),
(NULL, 'upload', 'text', 'text', 'upload_max_size', '最大上传大小', '单位：b，默认5242880：5M', '5242880', ''),
(NULL, 'upload', 'text', 'number', 'upload_single_num', '单次同时上传数量', NULL, '10', ''),
(NULL, 'upload', 'text', 'text', 'upload_allowed_exts', '允许上传的文件后缀', '逗号隔开', 'jpg,jpeg,gif,png,ico', ''),
(NULL, 'upload', 'text', 'text', 'path_naming_rule', '文件路径命名规则', '<a href="javascript:void(0)" mdui-dialog="{target: \'#path-var\'}">路径命名变量对照表</a>', '{Y}/{m}/{d}', ''),
(NULL, 'upload', 'text', 'text', 'file_naming_rule', '文件命名规则', '<a href="javascript:void(0)" mdui-dialog="{target: \'#file-var\'}">文件命名变量对照表</a>', '{uniqid}', ''),
(NULL, 'user', 'text', 'text', 'user_initial_quota', '用户初始配额容量', '单位：b，默认1073741824：1G，最大18位', '1073741824', ''),
(NULL, 'mail', 'select', 'text', 'mail_send_mode', '邮件发送方式', NULL, 'smtp', '{\"smtp\":\"SMTP\"}'),
(NULL, 'mail', 'select', 'text', 'mail_smtp_secure', 'SMTP验证方式', NULL, 'none', '{\"none\":\"None\",\"tls\":\"TLS\",\"ssl\":\"SSL\"}'),
(NULL, 'mail', 'text', 'text', 'mail_smtp_host', 'SMTP主机地址', NULL, '', ''),
(NULL, 'mail', 'text', 'text', 'mail_smtp_username', 'SMTP用户名', NULL, '', ''),
(NULL, 'mail', 'text', 'password', 'mail_smtp_password', 'SMTP密码', NULL, '', ''),
(NULL, 'mail', 'text', 'number', 'mail_smtp_port', 'SMTP端口', '25/465', '25', ''),
(NULL, 'mail', 'text', 'email', 'mail_form_email', '发件人邮箱', NULL, '', ''),

(NULL, 'other', 'bool', 'checkbox', 'soft_delete', '软删除', '删除图片时不删除源文件，不建议开启', '0', ''),
(NULL, 'other', 'bool', 'checkbox', 'open_gallery', '开启画廊', '开启画廊功能，游客上传的图片将会出现在画廊中', '0', ''),
(NULL, 'other', 'bool', 'checkbox', 'open_api', '开启API', '是否开放接口', '0', ''),
(NULL, 'other', 'textarea', 'textarea', 'ban_ip', '封禁IP', '封禁IP, 多个使用逗号隔开', '', ''),

(NULL, 'storage_strategy', 'select', 'text', 'storage_strategy', '储存策略', NULL, 'local', ''),
(NULL, 'local', 'text', 'text', 'local_cdn_domain', '域名', NULL, '', ''),
(NULL, 'oss', 'text', 'text', 'oss_cdn_domain', '域名', NULL, '', ''),
(NULL, 'oss', 'text', 'text', 'oss_access_key_id', 'AccessKeyId', NULL, '', ''),
(NULL, 'oss', 'text', 'text', 'oss_access_key_secret', 'AccessKeySecret', NULL, '', ''),
(NULL, 'oss', 'text', 'text', 'oss_endpoint', 'Endpoint', '地域节点', '', ''),
(NULL, 'oss', 'text', 'text', 'oss_bucket', 'Bucket', NULL, '', ''),
(NULL, 'cos', 'text', 'text', 'cos_cdn_domain', '域名', NULL, '', ''),
(NULL, 'cos', 'text', 'text', 'cos_secret_id', 'SecretId', NULL, '', ''),
(NULL, 'cos', 'text', 'text', 'cos_secret_key', 'SecretKey', NULL, '', ''),
(NULL, 'cos', 'text', 'text', 'cos_region', '所属地域', NULL, '', ''),
(NULL, 'cos', 'text', 'text', 'cos_bucket', 'Bucket', '储存桶名称', '', ''),
(NULL, 'kodo', 'text', 'text', 'kodo_cdn_domain', '域名', NULL, '', ''),
(NULL, 'kodo', 'text', 'text', 'kodo_access_key', 'AccessKey', NULL, '', ''),
(NULL, 'kodo', 'text', 'text', 'kodo_secret_key', 'SecretKey', NULL, '', ''),
(NULL, 'kodo', 'text', 'text', 'kodo_bucket', 'Bucket', NULL, '', ''),
(NULL, 'uss', 'text', 'text', 'uss_cdn_domain', '域名', NULL, '', ''),
(NULL, 'uss', 'text', 'text', 'uss_operator_name', 'OperatorName', '操作员账号', '', ''),
(NULL, 'uss', 'text', 'password', 'uss_operator_pwd', 'OperatorPwd', '操作员密码', '', ''),
(NULL, 'uss', 'text', 'text', 'uss_service_name', 'ServiceName', '云储存服务名称', '', ''),
(NULL, 'basics', 'textarea', 'textarea', 'notice', '系统公告', '支持html', '', ''),
(NULL, 'remote', 'text', 'text', 'remote_cdn_domain', '域名', NULL, '', ''),
(NULL, 'remote', 'select', 'text', 'remote_type', '远程储存类型', NULL, 'ftp', '{\"ftp\":\"ftp\"}'),
(NULL, 'remote', 'bool', 'checkbox', 'remote_pasv', '被动模式', NULL, '0', ''),
(NULL, 'remote', 'text', 'text', 'remote_host', '连接地址', NULL, '', ''),
(NULL, 'remote', 'text', 'text', 'remote_name', '登录账号', NULL, '', ''),
(NULL, 'remote', 'text', 'password', 'remote_password', '登录密码', NULL, '', ''),
(NULL, 'remote', 'text', 'number', 'remote_port', '连接端口', NULL, '21', ''),

(NULL, 'audit', 'bool', 'checkbox', 'open_audit', '开启图片鉴黄', '接口申请地址：<a href="https://www.moderatecontent.com" target="_blank">https://www.moderatecontent.com</a>', '0', ''),
(NULL, 'audit', 'text', 'text', 'audit_key', 'Key', NULL, '', ''),
(NULL, 'audit', 'select', 'text', 'audit_index', '内容评级', '1=所有人，2=少年，3=成人', '3', '{\"1\": \"所有人\", \"2\": \"少年\", \"3\": \"成人\"}'),

(NULL, '', 'text', 'text', 'system_version', '系统版本', NULL, '1.6.3', '');

INSERT INTO `lsky_group` (`id`, `strategy`, `name`, `default`, `update_time`, `create_time`) VALUES (NULL, 'local', '默认组', '1', '0', '0');
