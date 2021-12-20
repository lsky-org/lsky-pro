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
 * The folder view type.
 *
 * @since 2.5.0
 *
 * @api
 */
class FolderViewType
{
    /**
     * @var string
     *      Default type.
     *
     * @since 2.5.0
     *
     * @api
     */
    const DEFAULT_ = 'default';

    /**
     * @var string
     *      Icons type.
     *
     * @since 2.5.0
     *
     * @api
     */
    const ICONS = 'icons';

    /**
     * @var string
     *      Details type.
     *
     * @since 2.5.0
     *
     * @api
     */
    const DETAILS = 'details';

    /**
     * @var string
     *      Thumbnails type.
     *
     * @since 2.5.0
     *
     * @api
     */
    const THUMBNAILS = 'thumbnails';
}
