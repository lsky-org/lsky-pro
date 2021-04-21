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
use Microsoft\Graph\Model\FileSystemInfo;

/**
 * A proxy to a \Microsoft\Graph\Model\FileSystemInfo instance.
 *
 * @property-read \DateTime $createdDateTime
 *                The created date/time.
 * @property-read \DateTime $lastAccessedDateTime
 *                The last accessed date/time.
 * @property-read \DateTime $lastModifiedDateTime
 *                The last modified date/time.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/FileSystemInfo.php
 */
class FileSystemInfoProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\FileSystemInfo $fileSystemInfo
     *        The file system info.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, FileSystemInfo $fileSystemInfo)
    {
        parent::__construct($graph, $fileSystemInfo);
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
        $fileSystemInfo = $this->entity;

        switch ($name) {
            case 'createdDateTime':
                return $fileSystemInfo->getCreatedDateTime();

            case 'lastAccessedDateTime':
                return $fileSystemInfo->getLastAccessedDateTime();

            case 'lastModifiedDateTime':
                return $fileSystemInfo->getLastModifiedDateTime();

            default:
                return parent::__get($name);
        }
    }
}
