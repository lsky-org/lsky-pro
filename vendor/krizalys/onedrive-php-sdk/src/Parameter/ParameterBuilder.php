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
 * A class to build parameters.
 *
 * @since 2.3.0
 */
class ParameterBuilder implements ParameterBuilderInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Krizalys\Onedrive\Definition\Parameter\ParameterDefinitionInterface[string] $parameterDefinitions
     *        The parameter definitions.
     * @param mixed[string] $options
     *        The options.
     *
     * @return mixed[string]
     *         The parameters.
     *
     * @since 2.3.0
     */
    public function build(array $parameterDefinitions, array $options)
    {
        $opts = [];
        $defs = array_intersect_key($parameterDefinitions, $options);

        foreach ($defs as $key => $def) {
            $value = $options[$key];
            $value = $def->serializeValue($value);
            $opts  = $def->injectValue($opts, $value);
        }

        return $opts;
    }
}
