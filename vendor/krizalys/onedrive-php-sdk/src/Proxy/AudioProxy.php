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
use Microsoft\Graph\Model\Audio;

/**
 * A proxy to a \Microsoft\Graph\Model\Audio instance.
 *
 * @property-read string $album
 *                The album.
 * @property-read string $albumArtist
 *                The album artist.
 * @property-read string $artist
 *                The artist.
 * @property-read int $bitrate
 *                The bitrate, in kilobits per second.
 * @property-read string $composers
 *                The composers.
 * @property-read string $copyright
 *                The copyright.
 * @property-read int $disc
 *                The disc.
 * @property-read int $discCount
 *                The disc count.
 * @property-read int $duration
 *                The duration, in milliseconds.
 * @property-read string $genre
 *                The genre.
 * @property-read bool $hasDrm
 *                The has DRM.
 * @property-read bool $isVariableBitrate
 *                The is variable bitrate.
 * @property-read string $title
 *                The title.
 * @property-read int $track
 *                The track.
 * @property-read int $trackCount
 *                The track count.
 * @property-read int $year
 *                The year.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Audio.php
 */
class AudioProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Audio $audio
     *        The audio.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Audio $audio)
    {
        parent::__construct($graph, $audio);
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
        $audio = $this->entity;

        switch ($name) {
            case 'album':
                return $audio->getAlbum();

            case 'albumArtist':
                return $audio->getAlbumArtist();

            case 'artist':
                return $audio->getArtist();

            case 'bitrate':
                return $audio->getBitrate();

            case 'composers':
                return $audio->getComposers();

            case 'copyright':
                return $audio->getCopyright();

            case 'disc':
                return $audio->getDisc();

            case 'discCount':
                return $audio->getDiscCount();

            case 'duration':
                return $audio->getDuration();

            case 'genre':
                return $audio->getGenre();

            case 'hasDrm':
                return $audio->getHasDrm();

            case 'isVariableBitrate':
                return $audio->getIsVariableBitrate();

            case 'title':
                return $audio->getTitle();

            case 'track':
                return $audio->getTrack();

            case 'trackCount':
                return $audio->getTrackCount();

            case 'year':
                return $audio->getYear();

            default:
                return parent::__get($name);
        }
    }
}
