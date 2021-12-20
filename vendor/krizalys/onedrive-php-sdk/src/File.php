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

/**
 * A proxy to a file stored on a OneDrive drive.
 *
 * A `File` instance is a kind of {@see \Krizalys\Onedrive\DriveItem DriveItem}
 * instance which may have content, downloadable using
 * {@see File::fetchContent() fetchContent()}, but may not have child OneDrive
 * items.
 *
 * @since 1.0.0
 *
 * @deprecated 2.0.0 Superseded by \Krizalys\Onedrive\Proxy\DriveItemProxy and
 *             \Krizalys\Onedrive\Proxy\File.
 *
 * @see \Krizalys\Onedrive\Proxy\DriveItemProxy
 * @see \Krizalys\Onedrive\Proxy\File
 */
class File extends DriveItem
{
    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Client $client
     *        The `Client` instance owning this DriveItem instance.
     * @param null|string $id
     *        The unique ID of the OneDrive drive item referenced by this
     *        DriveItem instance.
     * @param mixed[]|object $options
     *        The options. See DriveItem::__construct() for supported options.
     *
     * @since 1.0.0
     *
     * @deprecated 2.7.0 Superseded by \Krizalys\Onedrive\Proxy\FileProxy.
     */
    public function __construct(Client $client, $id, $options = [])
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\FileProxy instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        parent::__construct($client, $id, $options);
    }

    /**
     * Fetches the content of the OneDrive file referenced by this File
     * instance.
     *
     * @param mixed[string] $options
     *        The extra cURL options to apply. Unused.
     *
     * @return string
     *         The content of the OneDrive file referenced by this `File`
     *         instance.
     *
     * @todo Should somewhat return the content-type as well; this information
     *       is not disclosed by OneDrive.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Redundant feature. Use
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::content.
     */
    public function fetchContent(array $options = [])
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::content'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive = $client->getMyDrive();
        $item  = $client->getDriveItemById($drive->id, $this->id);

        return (string) $item->content;
    }

    /**
     * Copies the OneDrive file referenced by this File instance into another
     * OneDrive folder.
     *
     * `$destinationId` must refer to a folder.
     *
     * @param null|string $destinationId
     *        The unique ID of the OneDrive folder into which to copy the
     *        OneDrive file referenced by this `File` instance, or `null` to
     *        copy it in the OneDrive root folder. Default: `null`.
     *
     * @since 1.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::copy().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::copy()
     */
    public function copy($destinationId = null)
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::copy()'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive           = $client->getMyDrive();
        $item            = $client->getDriveItemById($drive->id, $this->id);
        $destinationItem = $client->getDriveItemById($drive->id, $destinationId);

        return $item->copy($destinationItem);
    }
}
