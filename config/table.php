<?php

/**
 * 表字段新增
 */

return [
    'lsky_images' => [
        'folder_id' => "ALTER TABLE `lsky_images` ADD `folder_id` INT NOT NULL DEFAULT '0' COMMENT '文件夹ID' AFTER `user_id`;",
        'suspicious' => "ALTER TABLE `lsky_images` ADD `suspicious` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '可疑图片' AFTER `ip`;",
        'alias_name' => "ALTER TABLE `lsky_images` ADD `alias_name` VARCHAR(255) NULL DEFAULT NULL COMMENT '别名' AFTER `name`;"
    ],
    'lsky_users' => [
        'default_folder' => "ALTER TABLE `lsky_users` ADD `default_folder` VARCHAR(32) DEFAULT NULL COMMENT '默认上传文件夹' AFTER `quota`;",
        'group_id' => "ALTER TABLE `lsky_users` ADD `group_id` int(11) NOT NULL DEFAULT 0 COMMENT '角色组ID' AFTER `id`;"
    ],
];
