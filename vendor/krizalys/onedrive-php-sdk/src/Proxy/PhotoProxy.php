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
use Microsoft\Graph\Model\Photo;

/**
 * A proxy to a \Microsoft\Graph\Model\Photo instance.
 *
 * @property-read string $cameraMake
 *                The camera make.
 * @property-read string $cameraModel
 *                The camera model.
 * @property-read float $exposureDenominator
 *                The exposure denominator.
 * @property-read float $exposureNumerator
 *                The exposure numerator.
 * @property-read float $fNumber
 *                The F-stop value.
 * @property-read float $focalLength
 *                The focal length.
 * @property-read int $iso
 *                The camera ISO value.
 * @property-read \DateTime $takenDateTime
 *                The taken date/time.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Photo.php
 */
class PhotoProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Photo $photo
     *        The photo.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Photo $photo)
    {
        parent::__construct($graph, $photo);
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
        $photo = $this->entity;

        switch ($name) {
            case 'cameraMake':
                return $photo->getCameraMake();

            case 'cameraModel':
                return $photo->getCameraModel();

            case 'exposureDenominator':
                return $photo->getExposureDenominator();

            case 'exposureNumerator':
                return $photo->getExposureNumerator();

            case 'fNumber':
                return $photo->getFNumber();

            case 'focalLength':
                return $photo->getFocalLength();

            case 'iso':
                return $photo->getIso();

            case 'takenDateTime':
                return $photo->getTakenDateTime();

            default:
                return parent::__get($name);
        }
    }
}
