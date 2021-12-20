<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WiredNetworkInterface File
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
* WiredNetworkInterface class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WiredNetworkInterface extends Enum
{
    /**
    * The Enum WiredNetworkInterface
    */
    const ANY_ETHERNET = "anyEthernet";
    const FIRST_ACTIVE_ETHERNET = "firstActiveEthernet";
    const SECOND_ACTIVE_ETHERNET = "secondActiveEthernet";
    const THIRD_ACTIVE_ETHERNET = "thirdActiveEthernet";
    const FIRST_ETHERNET = "firstEthernet";
    const SECOND_ETHERNET = "secondEthernet";
    const THIRD_ETHERNET = "thirdEthernet";
}