<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\composer;

use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use InvalidArgumentException;

class ThinkTesting extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        if ('topthink/think-testing' !== $package->getPrettyName()) {
            throw new InvalidArgumentException('Unable to install this library!');
        }

        return parent::getInstallPath($package);
    }

    public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        return parent::install($repo, $package)
            ->then(function () use ($package) {
                $this->copyTestDir($package);
            });
    }

    public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        return parent::update($repo, $initial, $target)
            ->then(function () use ($target) {
                $this->copyTestDir($target);
            });
    }

    private function copyTestDir(PackageInterface $package)
    {
        $appDir = dirname($this->vendorDir);
        $source = $this->getInstallPath($package) . DIRECTORY_SEPARATOR . 'example';
        if (!is_file($appDir . DIRECTORY_SEPARATOR . 'phpunit.xml')) {
            $this->filesystem->copyThenRemove($source, $appDir);
        } else {
            $this->filesystem->removeDirectoryPhp($source);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'think-testing' === $packageType;
    }
}
