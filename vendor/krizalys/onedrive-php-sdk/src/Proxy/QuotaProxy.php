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
use Microsoft\Graph\Model\Quota;

/**
 * A proxy to a \Microsoft\Graph\Model\Quota instance.
 *
 * @property-read int $deleted
 *                The deleted.
 * @property-read int $remaining
 *                The remaining.
 * @property-read string $state
 *                The state.
 * @property-read int $total
 *                The total.
 * @property-read int $used
 *                The used.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Quota.php
 */
class QuotaProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Quota $quota
     *        The quota.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Quota $quota)
    {
        parent::__construct($graph, $quota);
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
        $quota = $this->entity;

        switch ($name) {
            case 'deleted':
                return $quota->getDeleted();

            case 'remaining':
                return $quota->getRemaining();

            case 'state':
                return $quota->getState();

            case 'total':
                return $quota->getTotal();

            case 'used':
                return $quota->getUsed();

            default:
                return parent::__get($name);
        }
    }
}
