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
use Microsoft\Graph\Model\Entity;

/**
 * A proxy to a \Microsoft\Graph\Model\Entity instance.
 *
 * @property-read string $id
 *                The ID.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Entity.php
 */
class EntityProxy
{
    /**
     * @var \Microsoft\Graph\Graph
     *      The Microsoft Graph.
     */
    protected $graph;

    /**
     * @var \Microsoft\Graph\Model\Entity
     *      The entity.
     */
    protected $entity;

    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Entity $entity
     *        The entity.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Entity $entity)
    {
        $this->graph  = $graph;
        $this->entity = $entity;
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
        switch ($name) {
            case 'id':
                return $this->entity->getId();

            default:
                throw new \Exception("Undefined property: $name");
        }
    }
}
