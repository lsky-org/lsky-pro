<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintUsageSummary File
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
* PrintUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintUsageSummary extends Entity
{
    /**
    * Gets the completedJobCount
    *
    * @return int The completedJobCount
    */
    public function getCompletedJobCount()
    {
        if (array_key_exists("completedJobCount", $this->_propDict)) {
            return $this->_propDict["completedJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedJobCount
    *
    * @param int $val The value of the completedJobCount
    *
    * @return PrintUsageSummary
    */
    public function setCompletedJobCount($val)
    {
        $this->_propDict["completedJobCount"] = $val;
        return $this;
    }
    /**
    * Gets the incompleteJobCount
    *
    * @return int The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The value of the incompleteJobCount
    *
    * @return PrintUsageSummary
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = $val;
        return $this;
    }
}
