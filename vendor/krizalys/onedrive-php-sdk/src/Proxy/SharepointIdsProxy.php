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
use Microsoft\Graph\Model\SharepointIds;

/**
 * A proxy to a \Microsoft\Graph\Model\SharepointIds instance.
 *
 * @property-read string $listId
 *                The list ID.
 * @property-read string $listItemId
 *                The list item ID.
 * @property-read string $listItemUniqueId
 *                The list item unique ID.
 * @property-read string $siteId
 *                The site ID.
 * @property-read string $siteUrl
 *                The site URL.
 * @property-read string $webId
 *                The web ID.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/SharepointIds.php
 */
class SharepointIdsProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\SharepointIds $sharepointIds
     *        The SharePoint IDs.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, SharepointIds $sharepointIds)
    {
        parent::__construct($graph, $sharepointIds);
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
        $sharepointIds = $this->entity;

        switch ($name) {
            case 'listId':
                return $sharepointIds->getListId();

            case 'listItemId':
                return $sharepointIds->getListItemId();

            case 'listItemUniqueId':
                return $sharepointIds->getListItemUniqueId();

            case 'siteId':
                return $sharepointIds->getSiteId();

            case 'siteUrl':
                return $sharepointIds->getSiteUrl();

            case 'webId':
                return $sharepointIds->getWebId();

            default:
                return parent::__get($name);
        }
    }
}
