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
 * The folder view sort by.
 *
 * @since 2.5.0
 *
 * @api
 */
class FolderViewSortBy
{
    /**
     * @var string
     *      Default sort.
     *
     * @since 2.5.0
     *
     * @api
     */
    const DEFAULT_ = 'default';

    /**
     * @var string
     *      Sort by name.
     *
     * @since 2.5.0
     *
     * @api
     */
    const NAME = 'name';

    /**
     * @var string
     *      Sort by type.
     *
     * @since 2.5.0
     *
     * @api
     */
    const TYPE = 'type';

    /**
     * @var string
     *      Sort by size.
     *
     * @since 2.5.0
     *
     * @api
     */
    const SIZE = 'size';

    /**
     * @var string
     *      Sort by taken or created date time.
     *
     * @since 2.5.0
     *
     * @api
     */
    const TAKEN_OR_CREATED_DATE_TIME = 'takenOrCreatedDateTime';

    /**
     * @var string
     *      Sort by last modified date time.
     *
     * @since 2.5.0
     *
     * @api
     */
    const LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * @var string
     *      Sort by sequence.
     *
     * @since 2.5.0
     *
     * @api
     */
    const SEQUENCE = 'sequence';
}
