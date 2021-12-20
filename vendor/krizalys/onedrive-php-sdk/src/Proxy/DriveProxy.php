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

use Krizalys\Onedrive\Definition\ResourceDefinitionInterface;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\Drive;
use Microsoft\Graph\Model\DriveItem;

/**
 * A proxy to a \Microsoft\Graph\Model\Drive instance.
 *
 * @property-read string $driveType
 *                The drive type.
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $owner
 *                The owner.
 * @property-read \Krizalys\Onedrive\Proxy\QuotaProxy $quota
 *                The quota.
 * @property-read \Krizalys\Onedrive\Proxy\SharepointIdsProxy $sharePointIds
 *                The SharePoint IDs.
 * @property-read \Krizalys\Onedrive\Proxy\SystemFacetProxy $system
 *                The system facet.
 * @property-read \Krizalys\Onedrive\Proxy\DriveItemProxy[] $items
 *                The items.
 * @property-read \Krizalys\Onedrive\Proxy\GraphListProxy $list
 *                The list.
 * @property-read \Krizalys\Onedrive\Proxy\DriveItemProxy $root
 *                The root.
 * @property-read \Krizalys\Onedrive\Proxy\DriveItemProxy $special
 *                The special.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Drive.php
 */
class DriveProxy extends BaseItemProxy
{
    /**
     * @var \Krizalys\Onedrive\Definition\ResourceDefinitionInterface
     *      The drive item resource definition.
     */
    private $driveItemResourceDefinition;

    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Drive $drive
     *        The drive.
     * @param \Krizalys\Onedrive\Definition\ResourceDefinitionInterface $driveItemResourceDefinition
     *        The drive item resource definition.
     *
     * @since 2.0.0
     */
    public function __construct(
        Graph $graph,
        Drive $drive,
        ResourceDefinitionInterface $driveItemResourceDefinition
    ) {
        parent::__construct($graph, $drive);
        $this->driveItemResourceDefinition = $driveItemResourceDefinition;
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
        $drive = $this->entity;

        switch ($name) {
            case 'driveType':
                return $drive->getDriveType();

            case 'owner':
                $owner = $drive->getOwner();
                return $owner !== null ? new IdentitySetProxy($this->graph, $owner) : null;

            case 'quota':
                $quota = $drive->getQuota();
                return $quota !== null ? new QuotaProxy($this->graph, $quota) : null;

            case 'sharePointIds':
                $sharePointIds = $drive->getSharePointIds();
                return $sharePointIds !== null ? new SharepointIdsProxy($this->graph, $sharePointIds) : null;

            case 'system':
                $system = $drive->getSystem();
                return $system !== null ? new SystemFacetProxy($this->graph, $system) : null;

            case 'items':
                $items = $drive->getItems();

                return $items !== null ? array_map(function (DriveItem $item) {
                    return new DriveItemProxy(
                        $this->graph,
                        $item,
                        $this->driveItemResourceDefinition
                    );
                }, $items) : null;

            case 'list':
                $list = $drive->getList();
                return $list !== null ? new GraphListProxy($this->graph, $list) : null;

            case 'root':
                $root = $drive->getRoot();
                return $root !== null ?
                    new DriveItemProxy(
                        $this->graph,
                        $root,
                        $this->driveItemResourceDefinition
                    )
                    : null;

            case 'special':
                $special = $drive->getSpecial();
                return $special !== null ?
                    new DriveItemProxy(
                        $this->graph,
                        $special,
                        $this->driveItemResourceDefinition
                    )
                    : null;

            default:
                return parent::__get($name);
        }
    }

    /**
     * Gets a drive item by ID from this instance.
     *
     * @param string $itemId
     *        The drive item ID.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The drive item.
     *
     * @since 2.2.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getDriveItemById($itemId)
    {
        $driveLocator = "/drives/{$this->id}";
        $itemLocator  = "/items/$itemId";
        $endpoint     = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->driveItemResourceDefinition
        );
    }

    /**
     * Gets a drive item by path from this instance.
     *
     * The path is given as an absolute path from the root of the drive, for
     * example:
     *
     * ```php
     * $driveItem = $driveItem->getDriveItemByPath('/path/to/file.txt');
     * ```
     *
     * @param string $path
     *        The path.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The drive item.
     *
     * @since 2.2.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getDriveItemByPath($path)
    {
        $driveLocator = "/drives/{$this->id}";
        $itemLocator  = "/root:$path";
        $endpoint     = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->driveItemResourceDefinition
        );
    }

    /**
     * Gets the root of this instance.
     *
     * @return \Krizalys\Onedrive\Proxy\DriveItemProxy
     *         The root.
     *
     * @since 2.0.0
     *
     * @api
     *
     * @link https://docs.microsoft.com/en-us/onedrive/developer/rest-api/api/driveitem_get?view=odsp-graph-online
     *       Get a DriveItem resource
     */
    public function getRoot()
    {
        $driveLocator = "/drives/{$this->id}";
        $itemLocator  = '/items/root';
        $endpoint     = "$driveLocator$itemLocator";

        $response = $this
            ->graph
            ->createRequest('GET', $endpoint)
            ->execute();

        $status = $response->getStatus();

        if ($status != 200) {
            throw new \Exception("Unexpected status code produced by 'GET $endpoint': $status");
        }

        $driveItem = $response->getResponseAsObject(DriveItem::class);

        return new DriveItemProxy(
            $this->graph,
            $driveItem,
            $this->driveItemResourceDefinition
        );
    }
}
