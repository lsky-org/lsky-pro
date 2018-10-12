<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Creates release zip
     *
     * @param string $version
     * @see https://gist.github.com/Rarst/5a8a65478755539770df653c4575219a
     */
    public function release($version)
    {
        $package = 'upyun/sdk';
        $name = 'php-sdk';
        $collection = $this->collectionBuilder();
        $workingPath = __DIR__ . DIRECTORY_SEPARATOR . $collection->workDir("release");
        $collection->taskExec("composer create-project {$package} {$name} {$version}")
             ->dir($workingPath)
             ->arg('--prefer-dist')
             ->arg('--no-dev')
             ->arg('-vvv')
             ->taskExec('composer dump-autoload --optimize')
             ->dir($workingPath . DIRECTORY_SEPARATOR . $name)
             ->arg('-vvv');
        $collection->run();

        $zipFile = "release/{$name}-{$version}.zip";
        $this->_remove($zipFile);
        $this->taskPack($zipFile)
            ->addDir("php-sdk", __DIR__ . "/release/php-sdk")
            ->run();
        $this->_deleteDir("release/$name");
    }
}
