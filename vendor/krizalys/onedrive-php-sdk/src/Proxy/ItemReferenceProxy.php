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

namespace Krizalys\Onedrive\Proxy;

use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\ItemReference;

/**
 * A proxy to a \Microsoft\Graph\Model\ItemReference instance.
 *
 * @property-read string $id
 *                The ID.
 * @property-read string $driveId
 *                The drive ID.
 * @property-read string $driveType
 *                The drive type.
 * @property-read string $path
 *                The path.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/ItemReference.php
 */
class ItemReferenceProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\ItemReference $itemReference
     *        The item reference.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, ItemReference $itemReference)
    {
        parent::__construct($graph, $itemReference);
    }

    /**
     * Getter.
     *
     * @param string $name
     *        The name.
     *
     * @return mixed
     *         The value.
     *
     * @since 2.0.0
     */
    public function __get($name)
    {
        $itemReference = $this->entity;

        switch ($name) {
            case 'id':
                return $itemReference->getId();

            case 'driveId':
                return $itemReference->getDriveId();

            case 'driveType':
                return $itemReference->getDriveType();

            case 'path':
                return $itemReference->getPath();

            default:
                return parent::__get($name);
        }
    }
}
