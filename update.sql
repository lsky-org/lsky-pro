--
-- Sql更新文件，选择数据库后导入，或直接复制内容执行
--
UPDATE `lsky_config` SET `value` = '1.2.1' WHERE `lsky_config`.`name` = 'system_version';
