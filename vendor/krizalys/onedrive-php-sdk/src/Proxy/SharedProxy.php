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
use Microsoft\Graph\Model\Shared;

/**
 * A proxy to a \Microsoft\Graph\Model\Shared instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $owner
 *                The owner.
 * @property-read string $scope
 *                The scope.
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $sharedBy
 *                The shared by.
 * @property-read \DateTime $sharedDateTime
 *                The shared date/time.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Shared.php
 */
class SharedProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Shared $shared
     *        The shared.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Shared $shared)
    {
        parent::__construct($graph, $shared);
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
     * @since 2.5.0
     */
    public function __get($name)
    {
        $shared = $this->entity;

        switch ($name) {
            case 'owner':
                $owner = $shared->getOwner();
                return $owner !== null ? new IdentitySetProxy($this->graph, $owner) : null;

            case 'scope':
                return $shared->getScope();

            case 'sharedBy':
                $sharedBy = $shared->getSharedBy();
                return $sharedBy !== null ? new IdentitySetProxy($this->graph, $sharedBy) : null;

            case 'sharedDateTime':
                return $shared->getSharedDateTime();

            default:
                return parent::__get($name);
        }
    }
}
