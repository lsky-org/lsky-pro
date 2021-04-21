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

namespace Krizalys\Onedrive\Constant;

/**
 * The sharing link type.
 *
 * @since 2.4.1
 *
 * @api
 */
class SharingLinkType
{
    /**
     * @var string
     *      View sharing link type.
     *
     * @since 2.4.1
     *
     * @api
     */
    const VIEW = 'view';

    /**
     * @var string
     *      Edit sharing link type.
     *
     * @since 2.4.1
     *
     * @api
     */
    const EDIT = 'edit';

    /**
     * @var string
     *      Embed sharing link type.
     *
     * @since 2.4.1
     *
     * @api
     */
    const EMBED = 'embed';
}
