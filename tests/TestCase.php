<?php

namespace Tests;

use Database\Seeders\InstallSeeder;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected array $links = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->links = \config('filesystems.links');
        $this->seed(InstallSeeder::class);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        foreach (array_flip($this->links) as $link) {
            @unlink($link);
            // 因 phpunit 运行时根目录和 env 同级，所以创建的符号链接被放到了根目录
            // 清理根目录生成的符号链接
            @unlink(str_replace('/public', '', $link));
        }
    }
}
