<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationSignInSummary File
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
* ApplicationSignInSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationSignInSummary extends Entity
{
    /**
    * Gets the appDisplayName
    * Name of the application that the user signed in to.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * Name of the application that the user signed in to.
    *
    * @param string $val The appDisplayName
    *
    * @return ApplicationSignInSummary
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the failedSignInCount
    * Count of failed sign-ins made by the application.
    *
    * @return int The failedSignInCount
    */
    public function getFailedSignInCount()
    {
        if (array_key_exists("failedSignInCount", $this->_propDict)) {
            return $this->_propDict["failedSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedSignInCount
    * Count of failed sign-ins made by the application.
    *
    * @param int $val The failedSignInCount
    *
    * @return ApplicationSignInSummary
    */
    public function setFailedSignInCount($val)
    {
        $this->_propDict["failedSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successfulSignInCount
    * Count of successful sign-ins made by the application.
    *
    * @return int The successfulSignInCount
    */
    public function getSuccessfulSignInCount()
    {
        if (array_key_exists("successfulSignInCount", $this->_propDict)) {
            return $this->_propDict["successfulSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulSignInCount
    * Count of successful sign-ins made by the application.
    *
    * @param int $val The successfulSignInCount
    *
    * @return ApplicationSignInSummary
    */
    public function setSuccessfulSignInCount($val)
    {
        $this->_propDict["successfulSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successPercentage
    * Percentage of successful sign-ins made by the application.
    *
    * @return float The successPercentage
    */
    public function getSuccessPercentage()
    {
        if (array_key_exists("successPercentage", $this->_propDict)) {
            return $this->_propDict["successPercentage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successPercentage
    * Percentage of successful sign-ins made by the application.
    *
    * @param float $val The successPercentage
    *
    * @return ApplicationSignInSummary
    */
    public function setSuccessPercentage($val)
    {
        $this->_propDict["successPercentage"] = $val;
        return $this;
    }
    
}
