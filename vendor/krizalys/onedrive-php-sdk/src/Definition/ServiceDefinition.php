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

namespace Krizalys\Onedrive\Definition;

/**
 * A service definition.
 *
 * @since 2.5.0
 */
class ServiceDefinition implements ServiceDefinitionInterface
{
    /**
     * @var \Krizalys\Onedrive\Definition\ResourceDefinitionInterface[string]
     *      The resource definitions.
     */
    private $resourceDefinitions;

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Definition\ResourceDefinitionInterface[string] $resourceDefinitions
     *        The resource definitions.
     *
     * @since 2.5.0
     */
    public function __construct(array $resourceDefinitions)
    {
        $this->resourceDefinitions = $resourceDefinitions;
    }

    /**
     * {@inheritDoc}
     *
     * @param string $name
     *        The name.
     *
     * @return \Krizalys\Onedrive\Definition\ResourceDefinitionInterface
     *         The resource definition.
     *
     * @since 2.5.0
     */
    public function getResourceDefinition($name)
    {
        return $this->resourceDefinitions[$name];
    }
}
