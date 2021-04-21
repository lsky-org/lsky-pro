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
use Microsoft\Graph\Model\SharingLink;

/**
 * A proxy to a \Microsoft\Graph\Model\SharingLink instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\IdentityProxy $application
 *                The application.
 * @property-read string $scope
 *                The scope.
 * @property-read string $type
 *                The type.
 * @property-read string $webUrl
 *                The web URL.
 *
 * @since 2.4.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/SharingLink.php
 */
class SharingLinkProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\SharingLink $sharingLink
     *        The sharing link.
     *
     * @since 2.4.0
     */
    public function __construct(Graph $graph, SharingLink $sharingLink)
    {
        parent::__construct($graph, $sharingLink);
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
        $sharingLink = $this->entity;

        switch ($name) {
            case 'application':
                $application = $sharingLink->getApplication();
                return $application !== null ? new IdentityProxy($this->graph, $application) : null;

            case 'scope':
                return $sharingLink->getScope();

            case 'type':
                return $sharingLink->getType();

            case 'webUrl':
                return $sharingLink->getWebUrl();

            default:
                return parent::__get($name);
        }
    }
}
