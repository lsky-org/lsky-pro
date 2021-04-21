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
 * @since 1.1.0
 *
 * @deprecated 2.4.0 Superseded by \Krizalys\Onedrive\Constant\ConflictBehavior.
 */
class NameConflictBehavior
{
    /**
     * @var int
     *      Fail behavior: fail the operation if the drive item exists.
     *
     * @since 1.1.0
     */
    const FAIL = 1;

    /**
     * @var int
     *      Rename behavior: rename the drive item if it already exists. The
     *      drive item is renamed as "<original name> 1", incrementing the
     *      trailing number until an available file name is discovered.
     *
     * @since 1.1.0
     */
    const RENAME = 2;

    /**
     * @var int
     *      Replace behavior: replace the drive item if it already exists.
     *
     * @since 1.1.0
     */
    const REPLACE = 3;
}
