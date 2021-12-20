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

use Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface;

/**
 * An operation definition.
 *
 * @since 2.5.0
 */
class OperationDefinition implements OperationDefinitionInterface
{
    /**
     * @var \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *      The body parameter definitions.
     *
     * @since 2.5.0
     */
    private $bodyParameterDefinitions;

    /**
     * @var \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *      The header parameter definitions.
     *
     * @since 2.5.0
     */
    private $headerParameterDefinitions;

    /**
     * @var \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *      The query string parameter definitions.
     *
     * @since 2.5.0
     */
    private $queryStringParameterDefinition;

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *        The body parameter definitions.
     * @param \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *        The header parameter definitions.
     * @param \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *        The query string parameter definitions.
     *
     * @since 2.5.0
     */
    public function __construct(
        ParameterDefinitionCollectionInterface $bodyParameterDefinitions,
        ParameterDefinitionCollectionInterface $headerParameterDefinitions,
        ParameterDefinitionCollectionInterface $queryStringParameterDefinitions
    ) {
        $this->bodyParameterDefinitions        = $bodyParameterDefinitions;
        $this->headerParameterDefinitions      = $headerParameterDefinitions;
        $this->queryStringParameterDefinitions = $queryStringParameterDefinitions;
    }

    /**
     * {@inheritDoc}
     *
     * Gets the body parameter definitions.
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The body parameter definitions.
     *
     * @since 2.5.0
     */
    public function getBodyParameterDefinitions()
    {
        return $this->bodyParameterDefinitions;
    }

    /**
     * {@inheritDoc}
     *
     * Gets the header parameter definitions.
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The header parameter definitions.
     *
     * @since 2.5.0
     */
    public function getHeaderParameterDefinitions()
    {
        return $this->headerParameterDefinitions;
    }

    /**
     * {@inheritDoc}
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The query string parameter definitions.
     *
     * @since 2.5.0
     */
    public function getQueryStringParameterDefinitions()
    {
        return $this->queryStringParameterDefinitions;
    }
}
