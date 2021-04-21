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
use Microsoft\Graph\Model\FolderView;

/**
 * A proxy to a \Microsoft\Graph\Model\FolderView instance.
 *
 * @property-read string $sortBy
 *                The sort by.
 * @property-read string $sortOrder
 *                The sort order.
 * @property-read string $viewType
 *                The view type.
 *
 * @since 2.5.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/FolderView.php
 */
class FolderViewProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\FolderView $folderView
     *        The folder view.
     *
     * @since 2.5.0
     */
    public function __construct(Graph $graph, FolderView $folderView)
    {
        parent::__construct($graph, $folderView);
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
     * @since 2.5.0
     */
    public function __get($name)
    {
        $folderView = $this->entity;

        switch ($name) {
            case 'sortBy':
                return $folderView->getSortBy();

            case 'sortOrder':
                return $folderView->getSortOrder();

            case 'viewType':
                return $folderView->getViewType();

            default:
                return parent::__get($name);
        }
    }
}
