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
use Microsoft\Graph\Model\Hashes;

/**
 * A proxy to a \Microsoft\Graph\Model\Hashes instance.
 *
 * @property-read string $crc32Hash
 *                The CRC32 hash.
 * @property-read string $quickXorHash
 *                The quick XOR hash.
 * @property-read string $sha1Hash
 *                The SHA1 hash.
 *
 * @since 2.5.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Hashes.php
 */
class HashesProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Hashes $hashes
     *        The hashes.
     *
     * @since 2.5.0
     */
    public function __construct(Graph $graph, Hashes $hashes)
    {
        parent::__construct($graph, $hashes);
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
        $hashes = $this->entity;

        switch ($name) {
            case 'crc32Hash':
                return $hashes->getCrc32Hash();

            case 'quickXorHash':
                return $hashes->getQuickXorHash();

            case 'sha1Hash':
                return $hashes->getSha1Hash();

            default:
                return parent::__get($name);
        }
    }
}
