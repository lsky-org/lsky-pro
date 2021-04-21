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
 * A parameter definition collection.
 *
 * @since 2.5.0
 */
class ParameterDefinitionCollection implements ParameterDefinitionCollectionInterface
{
    /**
     * @var \Krizalys\Onedrive\Parameter\ParameterBuilderInterface
     *      The parameter builder.
     */
    private $parameterBuilder;

    /**
     * @var \Krizalys\Onedrive\Definition\Parameter\ParameterDefinitionInterface[string]
     *      The parameter definitions.
     */
    private $parameterDefinitions;

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Parameter\ParameterBuilderInterface $parameterBuilder
     *        The parameter builder.
     * @param \Krizalys\Onedrive\Definition\Parameter\ParameterDefinitionInterface[string] $parameterDefinitions
     *        The parameter definitions.
     *
     * @since 2.5.0
     */
    public function __construct(
        ParameterBuilderInterface $parameterBuilder,
        array $parameterDefinitions
    ) {
        $this->parameterBuilder     = $parameterBuilder;
        $this->parameterDefinitions = $parameterDefinitions;
    }

    /**
     * {@inheritDoc}
     *
     * @param mixed[string] $options
     *        The options.
     *
     * @return mixed[string]
     *         The options.
     *
     * @since 2.5.0
     */
    public function buildOptions(array $options)
    {
        return $this
            ->parameterBuilder
            ->build($this->parameterDefinitions, $options);
    }
}
