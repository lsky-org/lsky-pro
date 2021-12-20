<?php

/**
 * This file is part of Krizalys' OneDrive SDK for PHP.
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @author    Christophe Vidal
 * @copyright 2008-2021 Christophe Vidal (http://www.krizalys.com)
 * @license   https://opensource.org/licenses/BSD-3-Clause 3-Clause BSD License
 * @link      https://github.com/krizalys/onedrive-php-sdk
 */

namespace Krizalys\Onedrive\Parameter\Injector;

/**
 * An interface defining the contract for parameter injection.
 *
 * @since 2.4.0
 */
interface InjectorInterface
{
    /**
     * Injects a given value into a given array of values.
     *
     * @param mixed[string] $values
     *        The array of values.
     * @param mixed $value
     *        The value to inject.
     *
     * @return mixed[string]
     *         The resulting array of values.
     *
     * @since 2.4.0
     */
    public function inject(array $values, $value);
}
