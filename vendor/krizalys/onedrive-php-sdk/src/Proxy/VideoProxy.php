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
use Microsoft\Graph\Model\Video;

/**
 * A proxy to a \Microsoft\Graph\Model\Video instance.
 *
 * @property-read int $audioBitsPerSample
 *                The audio bits per sample.
 * @property-read int $audioChannels
 *                The audio channels.
 * @property-read string $audioFormat
 *                The audio format.
 * @property-read int $audioSamplesPerSecond
 *                The audio samples per second.
 * @property-read int $bitrate
 *                The bitrate, in bits per second.
 * @property-read int $duration
 *                The duration, in milliseconds.
 * @property-read string $fourCc
 *                The four character code.
 * @property-read float $frameRate
 *                The frame rate.
 * @property-read int $height
 *                The height, in pixels.
 * @property-read int $width
 *                The width, in pixels.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Video.php
 */
class VideoProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Video $video
     *        The video.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Video $video)
    {
        parent::__construct($graph, $video);
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
        $video = $this->entity;

        switch ($name) {
            case 'audioBitsPerSample':
                return $video->getAudioBitsPerSample();

            case 'audioChannels':
                return $video->getAudioChannels();

            case 'audioFormat':
                return $video->getAudioFormat();

            case 'audioSamplesPerSecond':
                return $video->getAudioSamplesPerSecond();

            case 'bitrate':
                return $video->getBitrate();

            case 'duration':
                return $video->getDuration();

            case 'fourCc':
                return $video->getFourCC();

            case 'frameRate':
                return $video->getFrameRate();

            case 'height':
                return $video->getHeight();

            case 'width':
                return $video->getWidth();

            default:
                return parent::__get($name);
        }
    }
}
