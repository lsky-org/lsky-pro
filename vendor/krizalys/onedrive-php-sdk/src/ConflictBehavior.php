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

namespace Krizalys\Onedrive;

/**
 * The behavior to apply when an uploaded file name conflicts with an existing
 * one.
 *
 * @since 2.4.0
 *
 * @api
 *
 * @deprecated 2.4.1 Superseded by \Krizalys\Onedrive\Constant\ConflictBehavior.
 */
class ConflictBehavior
{
    /**
     * @var string
     *      Fail behavior: fail the operation if the drive item exists.
     *
     * @since 2.4.0
     *
     * @api
     */
    const FAIL = 'fail';

    /**
     * @var string
     *      Rename behavior: rename the drive item if it already exists. The
     *      drive item is renamed as "<original name> 1", incrementing the
     *      trailing number until an available file name is discovered.
     *
     * @since 2.4.0
     *
     * @api
     */
    const RENAME = 'rename';

    /**
     * @var string
     *      Replace behavior: replace the drive item if it already exists.
     *
     * @since 2.4.0
     *
     * @api
     */
    const REPLACE = 'replace';
}
