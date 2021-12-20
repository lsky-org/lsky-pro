<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncompleteData File
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
* IncompleteData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncompleteData extends Entity
{

    /**
    * Gets the missingDataBeforeDateTime
    * The service does not have source data before the specified time.
    *
    * @return \DateTime The missingDataBeforeDateTime
    */
    public function getMissingDataBeforeDateTime()
    {
        if (array_key_exists("missingDataBeforeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["missingDataBeforeDateTime"], "\DateTime")) {
                return $this->_propDict["missingDataBeforeDateTime"];
            } else {
                $this->_propDict["missingDataBeforeDateTime"] = new \DateTime($this->_propDict["missingDataBeforeDateTime"]);
                return $this->_propDict["missingDataBeforeDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the missingDataBeforeDateTime
    * The service does not have source data before the specified time.
    *
    * @param \DateTime $val The value to assign to the missingDataBeforeDateTime
    *
    * @return IncompleteData The IncompleteData
    */
    public function setMissingDataBeforeDateTime($val)
    {
        $this->_propDict["missingDataBeforeDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the wasThrottled
    * Some data was not recorded due to excessive activity.
    *
    * @return bool The wasThrottled
    */
    public function getWasThrottled()
    {
        if (array_key_exists("wasThrottled", $this->_propDict)) {
            return $this->_propDict["wasThrottled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wasThrottled
    * Some data was not recorded due to excessive activity.
    *
    * @param bool $val The value of the wasThrottled
    *
    * @return IncompleteData
    */
    public function setWasThrottled($val)
    {
        $this->_propDict["wasThrottled"] = $val;
        return $this;
    }
}
