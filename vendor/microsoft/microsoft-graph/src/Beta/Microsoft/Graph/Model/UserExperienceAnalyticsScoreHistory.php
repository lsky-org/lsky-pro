<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsScoreHistory File
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
* UserExperienceAnalyticsScoreHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsScoreHistory extends Entity
{
    /**
    * Gets the startupDateTime
    * The user experience analytics device startup date time.
    *
    * @return \DateTime The startupDateTime
    */
    public function getStartupDateTime()
    {
        if (array_key_exists("startupDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startupDateTime"], "\DateTime")) {
                return $this->_propDict["startupDateTime"];
            } else {
                $this->_propDict["startupDateTime"] = new \DateTime($this->_propDict["startupDateTime"]);
                return $this->_propDict["startupDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startupDateTime
    * The user experience analytics device startup date time.
    *
    * @param \DateTime $val The startupDateTime
    *
    * @return UserExperienceAnalyticsScoreHistory
    */
    public function setStartupDateTime($val)
    {
        $this->_propDict["startupDateTime"] = $val;
        return $this;
    }
    
}
