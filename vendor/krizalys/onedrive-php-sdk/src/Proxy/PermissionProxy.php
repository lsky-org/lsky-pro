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
use Microsoft\Graph\Model\Permission;

/**
 * A proxy to a \Microsoft\Graph\Model\Permission instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\SharingLinkProxy $link
 *                The link.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Permission.php
 */
class PermissionProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Permission $permission
     *        The permission.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Permission $permission)
    {
        parent::__construct($graph, $permission);
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
     * @since 2.4.0
     */
    public function __get($name)
    {
        $permission = $this->entity;

        /**
         * @todo Support all properties.
         */
        switch ($name) {
            case 'link':
                $link = $permission->getLink();
                return $link !== null ? new SharingLinkProxy($this->graph, $link) : null;

            default:
                return parent::__get($name);
        }
    }
}
