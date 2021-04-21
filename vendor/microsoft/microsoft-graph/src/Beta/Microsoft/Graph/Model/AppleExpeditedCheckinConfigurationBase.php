<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleExpeditedCheckinConfigurationBase File
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
* AppleExpeditedCheckinConfigurationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleExpeditedCheckinConfigurationBase extends DeviceConfiguration
{
    /**
    * Gets the enableExpeditedCheckin
    * Gets or sets whether to enable expedited device check-ins.
    *
    * @return bool The enableExpeditedCheckin
    */
    public function getEnableExpeditedCheckin()
    {
        if (array_key_exists("enableExpeditedCheckin", $this->_propDict)) {
            return $this->_propDict["enableExpeditedCheckin"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableExpeditedCheckin
    * Gets or sets whether to enable expedited device check-ins.
    *
    * @param bool $val The enableExpeditedCheckin
    *
    * @return AppleExpeditedCheckinConfigurationBase
    */
    public function setEnableExpeditedCheckin($val)
    {
        $this->_propDict["enableExpeditedCheckin"] = boolval($val);
        return $this;
    }
    
}
