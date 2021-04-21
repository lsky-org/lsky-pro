<?php

namespace Krizalys\Onedrive;

// The Onedrive SDK autoloader.  You probably shouldn't be using this.  Instead,
// use a global autoloader, like the Composer autoloader.
//
// But if you really don't want to use a global autoloader, do this:
//
//     require_once __DIR__ . '/Onedrive/autoload.php'

/**
 * @param string $name The name.
 *
 * @deprecated 2.7.0 Using the local autoloader is deprecated and will be
 *             removed in version 3.
 *
 * @internal
 */
function autoload($name)
{
    $message = 'Using the local autoloader is deprecated and will be removed in'
        . ' version 3; use Composer instead';

    @trigger_error($message, E_USER_DEPRECATED);

    // If the name doesn't start with "Krizalys\Onedrive\", then it's not one of our classes.
    if (substr_compare($name, 'Krizalys\\Onedrive\\', 0, 18) !== 0) {
        return;
    }

    // Take the "Krizalys\Onedrive\" prefix off.
    $stem = substr($name, 18);

    // Convert "\" and "_" to path separators.
    $pathifiedStem = str_replace(['\\', '_'], '/', $stem);

    $path = __DIR__ . "/src/$pathifiedStem.php";

    if (is_file($path)) {
        require_once $path;
    }
}

spl_autoload_register('Krizalys\Onedrive\autoload');
