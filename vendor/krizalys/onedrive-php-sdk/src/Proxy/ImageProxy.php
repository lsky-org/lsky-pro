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
use Microsoft\Graph\Model\Image;

/**
 * A proxy to a \Microsoft\Graph\Model\Image instance.
 *
 * @property-read int $height
 *                The height, in pixels.
 * @property-read int $width
 *                The width, in pixels.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Image.php
 */
class ImageProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Image $image
     *        The image.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Image $image)
    {
        parent::__construct($graph, $image);
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
     * @since 2.6.0
     */
    public function __get($name)
    {
        $image = $this->entity;

        switch ($name) {
            case 'height':
                return $image->getHeight();

            case 'width':
                return $image->getWidth();

            default:
                return parent::__get($name);
        }
    }
}
