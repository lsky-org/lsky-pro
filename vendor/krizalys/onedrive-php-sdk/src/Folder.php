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

namespace Krizalys\Onedrive;

use Krizalys\Onedrive\Proxy\DriveItemProxy;

/**
 * A proxy to a folder stored on a OneDrive drive.
 *
 * A `Folder `instance is a kind of
 * {@see \Krizalys\Onedrive\DriveItem DriveItem} which may have child OneDrive
 * items, retrievable using
 * {@see Folder::fetchChildDriveItems() fetchChildDriveItems()}, but may not
 * have content.
 *
 * @since 1.0.0
 *
 * @deprecated 2.0.0 Superseded by \Krizalys\Onedrive\Proxy\DriveItemProxy and
 *             \Krizalys\Onedrive\Proxy\Folder.
 *
 * @see \Krizalys\Onedrive\Proxy\DriveItemProxy
 * @see \Krizalys\Onedrive\Proxy\Folder
 */
class Folder extends DriveItem
{
    /**
     * {@inheritdoc}
     */
    public function isFolder()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::folder instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        return true;
    }

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Client $client
     *        The `Client` instance owning this DriveItem instance.
     * @param null|string $id
     *        The unique ID of the OneDrive drive item referenced by this
     *        DriveItem instance, or `null` to reference the OneDrive root
     *        folder. Default: `null`.
     * @param mixed[]|object $options
     *        The options. See DriveItem::__construct() for supported options.
     *
     * @since 1.0.0
     *
     * @deprecated 2.7.0 Superseded by \Krizalys\Onedrive\Proxy\FolderProxy.
     */
    public function __construct(Client $client, $id = null, $options = [])
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\FolderProxy instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        parent::__construct($client, $id, $options);
    }

    /**
     * Gets the drive items in the OneDrive folder referenced by this Folder
     * instance.
     *
     * @return \Krizalys\Onedrive\DriveItem[]
     *         The drive items in the OneDrive folder referenced by this
     *         `Folder` instance, as DriveItem instances.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::children.
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::children
     */
    public function fetchDriveItems()
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::children'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $client->getMyDrive();
        $item  = $client->getDriveItemById($drive->id, $this->id);

        return array_map(function (DriveItemProxy $item) use ($client) {
            $options = $client->buildOptions($item, ['parent_id' => $this->id]);

            return $client->isFolder($item) ?
                new self($client, $item->id, $options)
                : new File($client, $item->id, $options);
        }, $item->children);
    }

    /**
     * Gets the child drive items in the OneDrive folder referenced by this
     * Folder instance.
     *
     * @return \Krizalys\Onedrive\DriveItem[]
     *         The drive items in the OneDrive folder referenced by this
     *         `Folder` instance, as DriveItem instances.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::children.
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::children
     */
    public function fetchChildDriveItems()
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::children'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $client->getMyDrive();
        $item  = $client->getDriveItemById($drive->id, $this->id);

        return array_map(function (DriveItemProxy $item) use ($client) {
            $options = $client->buildOptions($item, ['parent_id' => $this->id]);

            return $client->isFolder($item) ?
                new self($client, $item->id, $options)
                : new File($client, $item->id, $options);
        }, $item->children);
    }

    /**
     * Creates a folder in the OneDrive folder referenced by this Folder
     * instance.
     *
     * @param string $name
     *        The name of the OneDrive folder to be created.
     * @param null|string $description
     *        The description of the OneDrive folder to be created, or `null` to
     *        create it without a description. Default: `null`.
     *
     * @return \Krizalys\Onedrive\Folder
     *         The folder created, as a `Folder` instance.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder()
     */
    public function createFolder($name, $description = null)
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::createFolder()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive   = $client->getMyDrive();
        $item    = $client->getDriveItemById($drive->id, $this->id);
        $options = [];

        if ($description !== null) {
            $options += [
                'description' => (string) $description,
            ];
        }

        $item    = $item->createFolder($name, $options);
        $options = $client->buildOptions($item, ['parent_id' => $this->id]);

        return new self($client, $item->id, $options);
    }

    /**
     * Creates a file in the OneDrive folder referenced by this Folder instance.
     *
     * @param string $name
     *        The name of the OneDrive file to be created.
     * @param string|resource $content
     *        The content of the OneDrive file to be created, as a string or
     *        handle to an already opened file. In the latter case, the
     *        responsibility to close the handle is is left to the calling
     *        function. Default: `''`.
     * @param mixed[string] $options
     *        The options. Unused.
     *
     * @return \Krizalys\Onedrive\File
     *         The file created, as a File instance.
     *
     * @throws \Exception
     *         Thrown on I/O errors.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::upload().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::upload()
     */
    public function createFile($name, $content = '', array $options = [])
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::upload()'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive   = $client->getMyDrive();
        $item    = $client->getDriveItemById($drive->id, $this->id);
        $options = [];
        $item    = $item->upload($name, $content, $options);
        $options = $client->buildOptions($item, ['parent_id' => $this->id]);

        return new File($client, $item->id, $options);
    }
}
