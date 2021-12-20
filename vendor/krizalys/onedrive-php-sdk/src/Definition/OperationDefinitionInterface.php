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
 * An interface defining the contract for an operation definition.
 *
 * @since 2.5.0
 */
interface OperationDefinitionInterface
{
    /**
     * Gets the body parameter definitions.
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The body parameter definitions.
     *
     * @since 2.5.0
     */
    public function getBodyParameterDefinitions();

    /**
     * Gets the header parameter definitions.
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The header parameter definitions.
     *
     * @since 2.5.0
     */
    public function getHeaderParameterDefinitions();

    /**
     * Gets the query string parameter definitions.
     *
     * @return \Krizalys\Onedrive\Parameter\ParameterDefinitionCollectionInterface
     *         The query string parameter definitions.
     *
     * @since 2.5.0
     */
    public function getQueryStringParameterDefinitions();
}
