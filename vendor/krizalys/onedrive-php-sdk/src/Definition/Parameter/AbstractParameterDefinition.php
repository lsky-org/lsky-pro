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

namespace Krizalys\Onedrive\Definition\Parameter;

use Krizalys\Onedrive\Parameter\Injector\InjectorInterface;
use Krizalys\Onedrive\Serializer\SerializerInterface;

/**
 * An abstract implementation for a parameter definition.
 *
 * @since 2.3.0
 */
abstract class AbstractParameterDefinition implements ParameterDefinitionInterface
{
    /**
     * @var \Krizalys\Onedrive\Parameter\Injector\InjectorInterface
     *      The injector.
     */
    private $injector;

    /**
     * @var \Krizalys\Onedrive\Serializer\SerializerInterface
     *      The serializer.
     */
    private $serializer;

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Parameter\Injector\InjectorInterface $injector
     *        The injector.
     * @param \Krizalys\Onedrive\Serializer\SerializerInterface $serializer
     *        The serializer.
     *
     * @since 2.3.0
     */
    public function __construct(
        InjectorInterface $injector,
        SerializerInterface $serializer
    ) {
        $this->injector   = $injector;
        $this->serializer = $serializer;
    }

    /**
     * {@inheritDoc}
     *
     * @param mixed $value
     *        The value to serialize.
     *
     * @return string
     *         The serialized value.
     *
     * @since 2.3.0
     */
    public function serializeValue($value)
    {
        return $this->serializer->serialize($value);
    }

    /**
     * {@inheritDoc}
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
    public function injectValue(array $values, $value)
    {
        return $this->injector->inject($values, $value);
    }
}
