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
use Microsoft\Graph\Model\DriveItemVersion;

/**
 * A proxy to a \Microsoft\Graph\Model\DriveItemVersion instance.
 *
 * @since 2.0.2
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/DriveItemVersion.php
 */
class DriveItemVersionProxy extends BaseItemVersionProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\DriveItemVersion $driveItemVersion
     *        The drive item version.
     *
     * @since 2.0.2
     */
    public function __construct(Graph $graph, DriveItemVersion $driveItemVersion)
    {
        parent::__construct($graph, $driveItemVersion);
    }
}
