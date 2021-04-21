<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsMetric File
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
* UserExperienceAnalyticsMetric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsMetric extends Entity
{
    /**
    * Gets the unit
    * The unit of the user experience analytics metric.
    *
    * @return string The unit
    */
    public function getUnit()
    {
        if (array_key_exists("unit", $this->_propDict)) {
            return $this->_propDict["unit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unit
    * The unit of the user experience analytics metric.
    *
    * @param string $val The unit
    *
    * @return UserExperienceAnalyticsMetric
    */
    public function setUnit($val)
    {
        $this->_propDict["unit"] = $val;
        return $this;
    }
    
    /**
    * Gets the value
    * The value of the user experience analytics metric.
    *
    * @return float The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * The value of the user experience analytics metric.
    *
    * @param float $val The value
    *
    * @return UserExperienceAnalyticsMetric
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    
}
