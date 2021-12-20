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
 * The drive type.
 *
 * @since 2.4.0
 *
 * @api
 */
class DriveType
{
    /**
     * @var string
     *      Personal drive type.
     *
     * @since 2.4.0
     *
     * @api
     */
    const PERSONAL = 'personal';

    /**
     * @var string
     *      Business drive type.
     *
     * @since 2.4.0
     *
     * @api
     */
    const BUSINESS = 'business';

    /**
     * @var string
     *      Document library type.
     *
     * @since 2.4.0
     *
     * @api
     */
    const DOCUMENT_LIBRARY = 'documentLibrary';
}
