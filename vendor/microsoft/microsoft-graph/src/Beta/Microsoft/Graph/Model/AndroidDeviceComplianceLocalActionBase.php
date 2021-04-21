<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceComplianceLocalActionBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AndroidDeviceComplianceLocalActionBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceComplianceLocalActionBase extends Entity
{
    /**
    * Gets the gracePeriodInMinutes
    * Number of minutes to wait till a local action is enforced. Valid values 0 to 2147483647
    *
    * @return int The gracePeriodInMinutes
    */
    public function getGracePeriodInMinutes()
    {
        if (array_key_exists("gracePeriodInMinutes", $this->_propDict)) {
            return $this->_propDict["gracePeriodInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gracePeriodInMinutes
    * Number of minutes to wait till a local action is enforced. Valid values 0 to 2147483647
    *
    * @param int $val The gracePeriodInMinutes
    *
    * @return AndroidDeviceComplianceLocalActionBase
    */
    public function setGracePeriodInMinutes($val)
    {
        $this->_propDict["gracePeriodInMinutes"] = intval($val);
        return $this;
    }
    
}
