<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DiffieHellmanGroup File
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
* DiffieHellmanGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DiffieHellmanGroup extends Enum
{
    /**
    * The Enum DiffieHellmanGroup
    */
    const GROUP1 = "group1";
    const GROUP2 = "group2";
    const GROUP14 = "group14";
    const ECP256 = "ecp256";
    const ECP384 = "ecp384";
    const GROUP24 = "group24";
}