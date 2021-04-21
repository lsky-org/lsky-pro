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
 * A proxy to an item stored on a OneDrive drive.
 *
 * `DriveItem` is an abstract class for either:
 *   - a {@see File file}, or
 *   - a {@see Folder folder}.
 *
 * A `DriveItem` instance is only an interface to an actual OneDrive item. The
 * underlying item is affected only when using exposed methods, such as
 * {@see DriveItem::move() move()}.
 *
 * This class also exposes accessors, such as {@see DriveItem::getParentId()
 * getParentId()}, which retrieve the actual value from the underlying OneDrive
 * item. For better performance, these values are cached on the `DriveItem`
 * instance after first call.
 *
 * @since 1.2.0
 *
 * @deprecated 2.0.0 Superseded by \Krizalys\Onedrive\Proxy\DriveItemProxy.
 *
 * @see \Krizalys\Onedrive\Proxy\DriveItemProxy
 */
abstract class DriveItem
{
    /**
     * @var \Krizalys\Onedrive\Client
     *      The owning Client instance.
     */
    protected $client;

    /**
     * @var string
     *      The unique ID assigned by OneDrive to this drive item.
     */
    protected $id;

    /**
     * @var string
     *      The unique ID assigned by OneDrive to the parent folder of this
     *      drive item.
     */
    private $parentId;

    /**
     * @var string
     *      The name of this drive item.
     */
    private $name;

    /**
     * @var string
     *      The description of this drive item.
     */
    private $description;

    /**
     * @var int
     *      The size of this drive item, in bytes.
     */
    private $size;

    /**
     * @var string
     *      The source link of this drive item.
     */
    private $source;

    /**
     * @var int
     *      The creation time, in seconds since UNIX epoch.
     */
    private $createdTime;

    /**
     * @var int
     *      The last modification time, in seconds since UNIX epoch.
     */
    private $updatedTime;

    /**
     * Constructor.
     *
     * @param \Krizalys\Onedrive\Client $client
     *        The `Client` instance owning this `DriveItem` instance.
     * @param null|string $id
     *        The unique ID of the OneDrive drive item referenced by this
     *        `DriveItem` instance.
     * @param mixed[]|object $options
     *        The options. Supported options:
     *          - `'parent_id'` *(string)*: the unique ID of the parent OneDrive
     *            folder of this drive item ;
     *          - `'name'` *(string)*: the name of this drive item ;
     *          - `'description'` *(string)*: the description of this drive
     *            item. May be empty ;
     *          - `'size'` *(int)*: the size of this drive item, in bytes ;
     *          - `'source'` *(string)*: the source link of this drive item ;
     *          - `'created_time'` *(string)*: the creation time, as an RFC
     *            date/time ;
     *          - `'updated_time'` *(string)*: the last modification time, as an
     *            RFC date/time.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by \Krizalys\Onedrive\Proxy\DriveItemProxy.
     */
    public function __construct(Client $client, $id, $options = [])
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        $options      = (object) $options;
        $this->client = $client;
        $this->id     = $id !== null ? (string) $id : null;

        $this->parentId = property_exists($options, 'parent_id') ?
            (string) $options->parent_id : null;

        $this->name = property_exists($options, 'name') ?
            (string) $options->name : null;

        $this->description = property_exists($options, 'description') ?
            (string) $options->description : null;

        $this->size = property_exists($options, 'size') ?
            (int) $options->size : null;

        $this->source = property_exists($options, 'source') ?
            (string) $options->source : null;

        $this->createdTime = property_exists($options, 'created_time') ?
            strtotime($options->created_time) : null;

        $this->updatedTime = property_exists($options, 'updated_time') ?
            strtotime($options->updated_time) : null;
    }

    /**
     * Determines whether the OneDrive drive item referenced by this DriveItem
     * instance is a folder.
     *
     * @return bool
     *         `true` if the OneDrive drive item referenced by this `DriveItem`
     *         instance is a folder, `false` otherwise.
     *
     * @since 1.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::folder.
     */
    public function isFolder()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::folder instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        return false;
    }

    /**
     * Fetches the properties of the OneDrive drive item referenced by this
     * DriveItem instance.
     *
     * Some properties are cached for faster subsequent access.
     *
     * @return mixed[]
     *         The properties of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Deprecated dependency.
     */
    public function fetchProperties()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $result = $this->client->fetchProperties($this->id);

        $this->parentId = property_exists($result, 'parent_id') ?
            (string) $result->parent_id : null;

        $this->name = $result->name;

        $this->description = property_exists($result, 'description') ?
            (string) $result->description : null;

        $this->size = (int) $result->size;

        /** @todo Handle volatile existence (eg. present only for files). */
        $this->source = property_exists($result, 'source') ?
            (string) $result->source : null;

        $this->createdTime = strtotime($result->created_time);
        $this->updatedTime = strtotime($result->updated_time);

        return $result;
    }

    /**
     * Gets the unique ID of the OneDrive drive item referenced by this
     * DriveItem instance.
     *
     * @return string
     *         The unique ID of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\EntityProxy::id.
     */
    public function getId()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::id instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        return $this->id;
    }

    /**
     * Gets the unique ID of the parent folder of the OneDrive drive item
     * referenced by this DriveItem instance.
     *
     * @return string
     *         The unique ID of the OneDrive folder containing the drive item
     *         referenced by this `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::parentReference.
     */
    public function getParentId()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::parentReference'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->parentId === null) {
            $this->fetchProperties();
        }

        return $this->parentId;
    }

    /**
     * Gets the name of the OneDrive drive item referenced by this DriveItem
     * instance.
     *
     * @return string
     *         The name of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\BaseItemProxy::name.
     */
    public function getName()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\BaseItemProxy::name instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->name === null) {
            $this->fetchProperties();
        }

        return $this->name;
    }

    /**
     * Gets the description of the OneDrive drive item referenced by this
     * DriveItem instance.
     *
     * @return string
     *         The description of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\BaseItemProxy::description.
     */
    public function getDescription()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\BaseItemProxy::description',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->description === null) {
            $this->fetchProperties();
        }

        return $this->description;
    }

    /**
     * Gets the size of the OneDrive drive item referenced by this DriveItem
     * instance.
     *
     * @return int
     *         The size of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::size.
     */
    public function getSize()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::size instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->size === null) {
            $this->fetchProperties();
        }

        return $this->size;
    }

    /**
     * Gets the source link of the OneDrive drive item referenced by this
     * DriveItem instance.
     *
     * @return string
     *         The source link of the OneDrive drive item referenced by this
     *         `DriveItem` instance.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0
     */
    public function getSource()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->source === null) {
            $this->fetchProperties();
        }

        return $this->source;
    }

    /**
     * Gets the creation time of the OneDrive drive item referenced by this
     * DriveItem instance.
     *
     * @return int
     *         The creation time of the drive item referenced by this
     *         `DriveItem` instance, in seconds since UNIX epoch.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\BaseItemProxy::createdDateTime.
     */
    public function getCreatedTime()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\BaseItemProxy::createdDateTime'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->createdTime === null) {
            $this->fetchProperties();
        }

        return $this->createdTime;
    }

    /**
     * Gets the last modification time of the OneDrive drive item referenced by
     * this DriveItem instance.
     *
     * @return int
     *         The last modification time of the drive item referenced by this
     *         `DriveItem` instance, in seconds since UNIX epoch.
     *
     * @since 2.0.0
     *
     * @deprecated 2.7.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\BaseItemProxy::lastModifiedDateTime.
     */
    public function getUpdatedTime()
    {
        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\BaseItemProxy::lastModifiedDateTime'
                . ' instead',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);

        if ($this->updatedTime === null) {
            $this->fetchProperties();
        }

        return $this->updatedTime;
    }

    /**
     * Moves the OneDrive drive item referenced by this DriveItem instance into
     * another OneDrive folder.
     *
     * `$destinationId` must refer to a folder.
     *
     * @param null|string $destinationId
     *        The unique ID of the OneDrive folder into which to move the
     *        OneDrive drive item referenced by this `DriveItem` instance, or
     *        null to move it to the OneDrive root folder. Default: `null`.
     *
     * @since 2.0.0
     *
     * @deprecated 2.0.0 Superseded by
     *             \Krizalys\Onedrive\Proxy\DriveItemProxy::move().
     *
     * @see \Krizalys\Onedrive\Proxy\DriveItemProxy::move()
     */
    public function move($destinationId = null)
    {
        $client = $this->client;

        $message = sprintf(
            '%s() is deprecated and will be removed in version 3;'
                . ' use \Krizalys\Onedrive\Proxy\DriveItemProxy::move()'
                . ' instead.',
            __METHOD__
        );

        @trigger_error($message, E_USER_DEPRECATED);
        $drive           = $client->getMyDrive();
        $item            = $client->getDriveItemById($drive->id, $this->id);
        $destinationItem = $client->getDriveItemById($drive->id, $destinationId);

        return $item->move($destinationItem);
    }
}
