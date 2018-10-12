<?php
/**
 * A tiny script for generate cos-autoloader.php.
 * $ php -f ./cos-autoloader-generator.php > ./cos-autoloader.php
 */

echo "<?php\n\n";
echo '$mapping = array(' . "\n";

$iter = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(dirname(__FILE__) . '/src'));
$iter->rewind();
while ($iter->valid()) {
    if (!$iter->isDot()) {
        $path = $iter->getSubPathName();
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        if ($ext === 'php') {
            $namespace =  preg_replace('/.php$/s', '', $path);
            $path = str_replace('\\', '/', $path);
            echo "    '$namespace' => 'src/$path',\n";
        }
    }

    $iter->next();
}

echo ");\n";

echo '
spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);' . "\n";
