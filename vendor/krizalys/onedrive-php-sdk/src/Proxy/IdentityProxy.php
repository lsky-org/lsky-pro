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
use Microsoft\Graph\Model\Identity;

/**
 * A proxy to a \Microsoft\Graph\Model\Identity instance.
 *
 * @property-read string $displayName
 *                The display name.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Identity.php
 */
class IdentityProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Identity $identity
     *        The identity.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Identity $identity)
    {
        parent::__construct($graph, $identity);
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
        $identity = $this->entity;

        switch ($name) {
            case 'displayName':
                return $identity->getDisplayName();

            default:
                return parent::__get($name);
        }
    }
}
