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
use Microsoft\Graph\Model\BaseItem;

/**
 * A proxy to a \Microsoft\Graph\Model\BaseItem instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $createdBy
 *                The "created by" identity set.
 * @property-read \DateTime $createdDateTime
 *                The created date/time.
 * @property-read string $description
 *                The description.
 * @property-read string $eTag
 *                The ETag.
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $lastModifiedBy
 *                The "last modified by" identity set.
 * @property-read \DateTime $lastModifiedDateTime
 *                The last modified date/time.
 * @property-read string $name
 *                The name.
 * @property-read \Krizalys\Onedrive\Proxy\ItemReferenceProxy $parentReference
 *                The parent reference.
 * @property-read string $webUrl
 *                The web URL.
 * @property-read \Krizalys\Onedrive\Proxy\UserProxy $createdByUser
 *                The "created by" user.
 * @property-read \Krizalys\Onedrive\Proxy\UserProxy $lastModifiedByUser
 *                The "last modified by" user.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/BaseItem.php
 */
class BaseItemProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\BaseItem $baseItem
     *        The base item.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, BaseItem $baseItem)
    {
        parent::__construct($graph, $baseItem);
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
        $baseItem = $this->entity;

        switch ($name) {
            case 'createdBy':
                $createdBy = $baseItem->getCreatedBy();
                return $createdBy !== null ? new IdentitySetProxy($this->graph, $createdBy) : null;

            case 'createdDateTime':
                return $baseItem->getCreatedDateTime();

            case 'description':
                return $baseItem->getDescription();

            case 'eTag':
                return $baseItem->getETag();

            case 'lastModifiedBy':
                $lastModifiedBy = $baseItem->getLastModifiedBy();
                return $lastModifiedBy !== null ? new IdentitySetProxy($this->graph, $lastModifiedBy) : null;

            case 'lastModifiedDateTime':
                return $baseItem->getLastModifiedDateTime();

            case 'name':
                return $baseItem->getName();

            case 'parentReference':
                $parentReference = $baseItem->getParentReference();
                return $parentReference !== null ? new ItemReferenceProxy($this->graph, $parentReference) : null;

            case 'webUrl':
                return $baseItem->getWebUrl();

            case 'createdByUser':
                $createdByUser = $baseItem->getCreatedByUser();
                return $createdByUser !== null ? new UserProxy($this->graph, $createdByUser) : null;

            case 'lastModifiedByUser':
                $lastModifiedByUser = $baseItem->getLastModifiedByUser();
                return $lastModifiedByUser !== null ? new UserProxy($this->graph, $lastModifiedByUser) : null;

            default:
                return parent::__get($name);
        }
    }
}
