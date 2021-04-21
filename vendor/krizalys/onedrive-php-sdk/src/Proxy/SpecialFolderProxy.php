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
use Microsoft\Graph\Model\SpecialFolder;

/**
 * A proxy to a \Microsoft\Graph\Model\SpecialFolder instance.
 *
 * @property-read string $name
 *                The name.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/SpecialFolder.php
 */
class SpecialFolderProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\SpecialFolder $specialFolder
     *        The special folder.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, SpecialFolder $specialFolder)
    {
        parent::__construct($graph, $specialFolder);
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
        $specialFolder = $this->entity;

        switch ($name) {
            case 'name':
                return $specialFolder->getName();

            default:
                return parent::__get($name);
        }
    }
}
