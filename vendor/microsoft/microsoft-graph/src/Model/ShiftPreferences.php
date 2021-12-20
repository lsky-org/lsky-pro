<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShiftPreferences File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* ShiftPreferences class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ShiftPreferences extends ChangeTrackedEntity
{

     /** 
     * Gets the availability
    * Availability of the user to be scheduled for work and its recurrence pattern.
     *
     * @return array The availability
     */
    public function getAvailability()
    {
        if (array_key_exists("availability", $this->_propDict)) {
           return $this->_propDict["availability"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the availability
    * Availability of the user to be scheduled for work and its recurrence pattern.
    *
    * @param ShiftAvailability $val The availability
    *
    * @return ShiftPreferences
    */
    public function setAvailability($val)
    {
		$this->_propDict["availability"] = $val;
        return $this;
    }
    
}
