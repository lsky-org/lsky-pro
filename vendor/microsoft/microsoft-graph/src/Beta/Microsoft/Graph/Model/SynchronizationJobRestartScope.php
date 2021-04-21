<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* SynchronizationJobRestartScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobRestartScope extends Enum
{
    /**
    * The Enum SynchronizationJobRestartScope
    */
    const NONE = "none";
    const CONNECTOR_DATA_STORE = "connectorDataStore";
    const ESCROWS = "escrows";
    const WATERMARK = "watermark";
    const QUARANTINE_STATE = "quarantineState";
    const FULL = "full";
    const FORCE_DELETES = "forceDeletes";
}