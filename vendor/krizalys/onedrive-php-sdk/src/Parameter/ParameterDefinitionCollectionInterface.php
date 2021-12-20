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

namespace Krizalys\Onedrive\Parameter;

/**
 * An interface defining the contract for a parameter definition collection.
 *
 * @since 2.5.0
 */
interface ParameterDefinitionCollectionInterface
{
    /**
     * Builds options.
     *
     * @param mixed[string] $options
     *        The options.
     *
     * @return mixed[string]
     *         The options.
     *
     * @since 2.5.0
     */
    public function buildOptions(array $options);
}
