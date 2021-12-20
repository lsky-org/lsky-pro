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
 * The quota status.
 *
 * @since 2.4.0
 *
 * @api
 */
class QuotaStatus
{
    /**
     * @var string
     *      Normal usage.
     *
     * @since 2.4.0
     *
     * @api
     */
    const NORMAL = 'normal';

    /**
     * @var string
     *      Usage nearing quota.
     *
     * @since 2.4.0
     *
     * @api
     */
    const NEARING = 'nearing';

    /**
     * @var string
     *      Critical usage.
     *
     * @since 2.4.0
     *
     * @api
     */
    const CRITICAL = 'critical';

    /**
     * @var string
     *      Usage exceeded quota.
     *
     * @since 2.4.0
     *
     * @api
     */
    const EXCEEDED = 'exceeded';
}
