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
 * The access token status.
 *
 * @since 2.4.0
 *
 * @api
 */
class AccessTokenStatus
{
    /**
     * @var int
     *      Access token is missing.
     *
     * @since 2.4.0
     *
     * @api
     */
    const MISSING = 0;

    /**
     * @var int
     *      Access token is expiring soon (1 minute or less).
     *
     * @since 2.4.0
     *
     * @api
     */
    const EXPIRING = -1;

    /**
     * @var int
     *      Access token is expired.
     *
     * @since 2.4.0
     *
     * @api
     */
    const EXPIRED = -2;

    /**
     * @var int
     *      Access token is valid.
     *
     * @since 2.4.0
     *
     * @api
     */
    const VALID = 1;
}
