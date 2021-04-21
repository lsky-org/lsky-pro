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
use Microsoft\Graph\Model\File;

/**
 * A proxy to a \Microsoft\Graph\Model\File instance.
 *
 * @property-read \Krizalys\Onedrive\Proxy\HashesProxy $hashes
 *                The hashes.
 * @property-read string $mimeType
 *                The MIME type.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/File.php
 */
class FileProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\File $file
     *        The file.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, File $file)
    {
        parent::__construct($graph, $file);
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
        $file = $this->entity;

        switch ($name) {
            case 'hashes':
                $hashes = $file->getHashes();
                return $hashes !== null ? new HashesProxy($this->graph, $hashes) : null;

            case 'mimeType':
                return $file->getMimeType();

            default:
                return parent::__get($name);
        }
    }
}
