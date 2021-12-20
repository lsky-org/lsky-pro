<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PerfectForwardSecrecyGroup File
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
* PerfectForwardSecrecyGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PerfectForwardSecrecyGroup extends Enum
{
    /**
    * The Enum PerfectForwardSecrecyGroup
    */
    const PFS1 = "pfs1";
    const PFS2 = "pfs2";
    const PFS2048 = "pfs2048";
    const ECP256 = "ecp256";
    const ECP384 = "ecp384";
    const PFS_MM = "pfsMM";
    const PFS24 = "pfs24";
}