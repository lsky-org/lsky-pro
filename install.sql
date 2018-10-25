-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018-09-28 17:54:47
-- 服务器版本： 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lsky`
--

-- --------------------------------------------------------

--
-- 表的结构 `lsky_config`
--

DROP TABLE IF EXISTS `lsky_config`;
CREATE TABLE IF NOT EXISTS `lsky_config` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `key` varchar(32) DEFAULT NULL COMMENT 'key',
  `type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'text|bool|textarea|select',
  `input_type` varchar(32) NOT NULL DEFAULT 'text' COMMENT 'input type属性',
  `name` varchar(32) CHARACTER SET utf8mb4 NOT NULL COMMENT '配置名',
  `title` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '配置标题',
  `tip` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT '配置描述',
  `value` text CHARACTER SET utf8mb4 NOT NULL COMMENT '配置值',
  `extend` text CHARACTER SET utf8mb4 NOT NULL COMMENT '扩展属性'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='系统配置' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `lsky_config`
--

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
(11, 'upload', 'text', 'text', 'file_naming_rule', '文件路径命名规则', '<a href="javascript:void(0)" mdui-dialog="{target: \'#file-var\'}">文件命名变量对照表</a>', '{uniqid}', ''),
(12, 'user', 'text', 'text', 'user_initial_quota', '用户初始配额容量', '单位：b，默认1073741824：1G，最大18位', '1073741824', ''),
(13, 'mail', 'select', 'text', 'mail_send_mode', '邮件发送方式', NULL, 'smtp', '{\"smtp\":\"SMTP\"}'),
(14, 'mail', 'select', 'text', 'mail_smtp_secure', 'SMTP验证方式', NULL, 'none', '{\"none\":\"None\",\"tls\":\"TLS\",\"ssl\":\"SSL\"}'),
(15, 'mail', 'text', 'text', 'mail_smtp_host', 'SMTP主机地址', NULL, '', ''),
(16, 'mail', 'text', 'text', 'mail_smtp_username', 'SMTP用户名', NULL, '', ''),
(17, 'mail', 'text', 'password', 'mail_smtp_password', 'SMTP密码', NULL, '', ''),
(18, 'mail', 'text', 'number', 'mail_smtp_port', 'SMTP端口', '25/465', '25', ''),
(19, 'mail', 'text', 'email', 'mail_form_email', '发件人邮箱', NULL, '', ''),
(20, 'other', 'bool', 'checkbox', 'soft_delete', '软删除', '删除图片时不删除源文件，不建议开启', '0', ''),

(21, 'storage_strategy', 'select', 'text', 'storage_strategy', '储存策略', NULL, 'local', ''),
(22, 'local', 'text', 'text', 'local_cdn_domain', 'CDN加速域名', '为空使用当前站点域名', '', ''),
(23, 'oss', 'text', 'text', 'oss_cdn_domain', 'Bucket域名', '为空使用当前站点域名', '', ''),
(24, 'oss', 'text', 'text', 'oss_access_key_id', 'AccessKeyId', NULL, '', ''),
(25, 'oss', 'text', 'text', 'oss_access_key_secret', 'AccessKeySecret', NULL, '', ''),
(26, 'oss', 'text', 'text', 'oss_endpoint', 'Endpoint', '地域节点', '', ''),
(27, 'oss', 'text', 'text', 'oss_bucket', 'Bucket', NULL, '', ''),
(28, 'cos', 'text', 'text', 'cos_cdn_domain', 'CDN加速域名', '为空使用当前站点域名，储存桶->域名管理->加速域名', '', ''),
(29, 'cos', 'text', 'text', 'cos_secret_id', 'SecretId', NULL, '', ''),
(30, 'cos', 'text', 'text', 'cos_secret_key', 'SecretKey', NULL, '', ''),
(31, 'cos', 'text', 'text', 'cos_region', '所属地域', NULL, '', ''),
(32, 'cos', 'text', 'text', 'cos_bucket', 'Bucket', '储存桶名称', '', ''),
(33, 'qiniu', 'text', 'text', 'qiniu_cdn_domain', 'CDN加速域名', '为空使用当前站点域名', '', ''),
(34, 'qiniu', 'text', 'text', 'qiniu_access_key', 'AccessKey', NULL, '', ''),
(35, 'qiniu', 'text', 'text', 'qiniu_secret_key', 'SecretKey', NULL, '', ''),
(36, 'qiniu', 'text', 'text', 'qiniu_bucket', 'Bucket', NULL, '', ''),
(37, 'upyun', 'text', 'text', 'upyun_cdn_domain', 'CDN加速域名', '为空使用当前站点域名', '', ''),
(38, 'upyun', 'text', 'text', 'upyun_operator_name', 'OperatorName', '操作员账号', '', ''),
(39, 'upyun', 'text', 'password', 'upyun_operator_pwd', 'OperatorPwd', '操作员密码', '', ''),
(40, 'upyun', 'text', 'text', 'upyun_service_name', 'ServiceName', '云储存服务名称', '', ''),
(41, '', 'text', 'text', 'system_version', '系统版本', NULL, '1.0', '');

-- --------------------------------------------------------

--
-- 表的结构 `lsky_images`
--

DROP TABLE IF EXISTS `lsky_images`;
CREATE TABLE IF NOT EXISTS `lsky_images` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'ID',
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户ID，为0表示游客上传',
  `strategy` varchar(32) NOT NULL DEFAULT 'local' COMMENT '储存策略，默认本地',
  `path` varchar(500) NOT NULL COMMENT '保存路径',
  `name` varchar(500) NOT NULL COMMENT '保存名称',
  `pathname` varchar(500) NOT NULL COMMENT '保存名称',
  `size` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '图片大小(字节：b)',
  `mime` varchar(32) NOT NULL COMMENT '文件MIME类型',
  `sha1` varchar(100) NOT NULL COMMENT 'hash sha1',
  `md5` varchar(32) NOT NULL COMMENT 'hash md5',
  `ip` varchar(128) DEFAULT NULL COMMENT '上传者IP',
  `create_time` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='图片表';

-- --------------------------------------------------------

--
-- 表的结构 `lsky_users`
--

DROP TABLE IF EXISTS `lsky_users`;
CREATE TABLE IF NOT EXISTS `lsky_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `nickname` varchar(32) DEFAULT NULL COMMENT '昵称',
  `email` varchar(100) NOT NULL COMMENT '邮箱',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `quota` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '可用配额容量(字节：b)',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为管理员',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0：冻结，1：正常',
  `token` varchar(32) DEFAULT NULL COMMENT 'Token',
  `reg_ip` varchar(32) DEFAULT NULL COMMENT '注册IP',
  `delete_time` int(11) DEFAULT NULL COMMENT '删除时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  `create_time` int(11) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lsky_config`
--
ALTER TABLE `lsky_config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `lsky_images`
--
ALTER TABLE `lsky_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lsky_users`
--
ALTER TABLE `lsky_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `lsky_config`
--
ALTER TABLE `lsky_config`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 使用表AUTO_INCREMENT `lsky_images`
--
ALTER TABLE `lsky_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `lsky_users`
--
ALTER TABLE `lsky_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;