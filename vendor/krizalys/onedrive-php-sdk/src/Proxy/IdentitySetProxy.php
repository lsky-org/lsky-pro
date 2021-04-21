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
use Microsoft\Graph\Model\IdentitySet;

/**
 * A proxy to a \Microsoft\Graph\Model\IdentitySet instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\IdentityProxy $application
 *                The application.
 * @property-read \Krizalys\Onedrive\Proxy\IdentityProxy $device
 *                The device.
 * @property-read \Krizalys\Onedrive\Proxy\IdentityProxy $user
 *                The user.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/IdentitySet.php
 */
class IdentitySetProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\IdentitySet $identitySet
     *        The identity set.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, IdentitySet $identitySet)
    {
        parent::__construct($graph, $identitySet);
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
        $identitySet = $this->entity;

        switch ($name) {
            case 'application':
                $application = $identitySet->getApplication();
                return $application !== null ? new IdentityProxy($this->graph, $application) : null;

            case 'device':
                $device = $identitySet->getDevice();
                return $device !== null ? new IdentityProxy($this->graph, $device) : null;

            case 'user':
                $user = $identitySet->getUser();
                return $user !== null ? new IdentityProxy($this->graph, $user) : null;

            default:
                return parent::__get($name);
        }
    }
}
