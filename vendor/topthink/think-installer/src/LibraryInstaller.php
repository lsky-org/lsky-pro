<?php

namespace think\composer;

use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use React\Promise\PromiseInterface;

abstract class LibraryInstaller extends \Composer\Installer\LibraryInstaller
{
    public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        return $this->makePromise(parent::install($repo, $package));
    }

    public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        return $this->makePromise(parent::update($repo, $initial, $target));
    }

    protected function makePromise($promise)
    {
        if ($promise instanceof PromiseInterface) {
            return $promise;
        }
        return new Promise();
    }
}
