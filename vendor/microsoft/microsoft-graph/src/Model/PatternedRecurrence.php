<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PatternedRecurrence File
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
* PatternedRecurrence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PatternedRecurrence extends Entity
{

    /**
    * Gets the pattern
    * The frequency of an event.
    *
    * @return RecurrencePattern The pattern
    */
    public function getPattern()
    {
        if (array_key_exists("pattern", $this->_propDict)) {
            if (is_a($this->_propDict["pattern"], "\Microsoft\Graph\Model\RecurrencePattern")) {
                return $this->_propDict["pattern"];
            } else {
                $this->_propDict["pattern"] = new RecurrencePattern($this->_propDict["pattern"]);
                return $this->_propDict["pattern"];
            }
        }
        return null;
    }

    /**
    * Sets the pattern
    * The frequency of an event.
    *
    * @param RecurrencePattern $val The value to assign to the pattern
    *
    * @return PatternedRecurrence The PatternedRecurrence
    */
    public function setPattern($val)
    {
        $this->_propDict["pattern"] = $val;
         return $this;
    }

    /**
    * Gets the range
    * The duration of an event.
    *
    * @return RecurrenceRange The range
    */
    public function getRange()
    {
        if (array_key_exists("range", $this->_propDict)) {
            if (is_a($this->_propDict["range"], "\Microsoft\Graph\Model\RecurrenceRange")) {
                return $this->_propDict["range"];
            } else {
                $this->_propDict["range"] = new RecurrenceRange($this->_propDict["range"]);
                return $this->_propDict["range"];
            }
        }
        return null;
    }

    /**
    * Sets the range
    * The duration of an event.
    *
    * @param RecurrenceRange $val The value to assign to the range
    *
    * @return PatternedRecurrence The PatternedRecurrence
    */
    public function setRange($val)
    {
        $this->_propDict["range"] = $val;
         return $this;
    }
}
