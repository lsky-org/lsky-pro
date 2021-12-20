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
use Microsoft\Graph\Model\Folder;

/**
 * A proxy to a \Microsoft\Graph\Model\Folder instance.
 *
 * @property-read int $childCount
 *                The child count.
 * @property-read \Krizalys\Onedrive\Proxy\FolderViewProxy $view
 *                The view.
 *
 * @since 2.0.0
 *
 * @api
 *
 * @link https://github.com/microsoftgraph/msgraph-sdk-php/blob/dev/src/Model/Folder.php
 */
class FolderProxy extends EntityProxy
{
    /**
     * Constructor.
     *
     * @param \Microsoft\Graph\Graph $graph
     *        The Microsoft Graph.
     * @param \Microsoft\Graph\Model\Folder $folder
     *        The folder.
     *
     * @since 2.0.0
     */
    public function __construct(Graph $graph, Folder $folder)
    {
        parent::__construct($graph, $folder);
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
        $folder = $this->entity;

        switch ($name) {
            case 'childCount':
                return $folder->getChildCount();

            case 'view':
                $view = $folder->getView();
                return $view !== null ? new FolderViewProxy($this->graph, $view) : null;

            default:
                return parent::__get($name);
        }
    }
}
