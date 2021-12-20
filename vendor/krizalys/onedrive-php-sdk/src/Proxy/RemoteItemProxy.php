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
use Microsoft\Graph\Model\RemoteItem;

/**
 * A proxy to a \Microsoft\Graph\Model\RemoteItem instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $createdBy
 *                The "created by" identity set.
 * @property-read \DateTime $createdDateTime
 *                The created date/time.
 * @property-read \Krizalys\Onedrive\Proxy\FileProxy $file
 *                The file.
 * @property-read \Krizalys\Onedrive\Proxy\FileSystemInfoProxy $fileSystemInfo
 *                The file system info.
 * @property-read \Krizalys\Onedrive\Proxy\FolderProxy $folder
 *                The folder.
 * @property-read \Krizalys\Onedrive\Proxy\IdentitySetProxy $lastModifiedBy
 *                The "last modified by" identity set.
 * @property-read \DateTime $lastModifiedDateTime
 *                The last modified date/time.
 * @property-read string $name
 *                The name.
 * @property-read \Krizalys\Onedrive\Proxy\PackageProxy $package
 *                The package.
 * @property-read \Krizalys\Onedrive\Proxy\ItemReferenceProxy $parentReference
 *                The parent reference.
 * @property-read \Krizalys\Onedrive\Proxy\SharedProxy $shared
 *                The shared.
 * @property-read \Krizalys\Onedrive\Proxy\SharepointIdsProxy $sharepointIds
 *                The sharepoint IDs.
 * @property-read int $size
 *                The size.
 * @property-read \Krizalys\Onedrive\Proxy\SpecialFolderProxy $specialFolder
 *                The special folder.
 * @property-read string $webDavUrl
 *                The WebDAV URL.
 * @property-read string $webUrl
 *                The web URL.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/RemoteItem.php
 */
class RemoteItemProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\RemoteItem $remoteItem
     *        The remote item.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, RemoteItem $remoteItem)
    {
        parent::__construct($graph, $remoteItem);
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
        $remoteItem = $this->entity;

        switch ($name) {
            case 'createdBy':
                $createdBy = $remoteItem->getCreatedBy();
                return $createdBy !== null ? new IdentitySetProxy($this->graph, $createdBy) : null;

            case 'createdDateTime':
                return $remoteItem->getCreatedDateTime();

            case 'file':
                $file = $remoteItem->getFile();
                return $file !== null ? new FileProxy($this->graph, $file) : null;

            case 'fileSystemInfo':
                $fileSystemInfo = $remoteItem->getFileSystemInfo();
                return $fileSystemInfo !== null ? new FileSystemInfoProxy($this->graph, $fileSystemInfo) : null;

            case 'folder':
                $folder = $remoteItem->getFolder();
                return $folder !== null ? new FolderProxy($this->graph, $folder) : null;

            case 'lastModifiedBy':
                $lastModifiedBy = $remoteItem->getLastModifiedBy();
                return $lastModifiedBy !== null ? new IdentitySetProxy($this->graph, $lastModifiedBy) : null;

            case 'lastModifiedDateTime':
                return $remoteItem->getLastModifiedDateTime();

            case 'name':
                return $remoteItem->getName();

            case 'package':
                $package = $remoteItem->getPackage();
                return $package !== null ? new PackageProxy($this->graph, $package) : null;

            case 'parentReference':
                $parentReference = $remoteItem->getParentReference();
                return $parentReference !== null ? new ItemReferenceProxy($this->graph, $parentReference) : null;

            case 'shared':
                $shared = $remoteItem->getShared();
                return $shared !== null ? new SharedProxy($this->graph, $shared) : null;

            case 'sharepointIds':
                $sharepointIds = $remoteItem->getSharepointIds();
                return $sharepointIds !== null ? new SharepointIdsProxy($this->graph, $sharepointIds) : null;

            case 'size':
                return $remoteItem->getSize();

            case 'specialFolder':
                $specialFolder = $remoteItem->getSpecialFolder();
                return $specialFolder !== null ? new SpecialFolderProxy($this->graph, $specialFolder) : null;

            case 'webDavUrl':
                return $remoteItem->getWebDavUrl();

            case 'webUrl':
                return $remoteItem->getWebUrl();

            default:
                return parent::__get($name);
        }
    }
}
