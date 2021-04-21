<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchLookupJob File
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
* ExactMatchLookupJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchLookupJob extends ExactMatchJobBase
{
    /**
    * Gets the state
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the state
    *
    * @param string $val The state
    *
    * @return ExactMatchLookupJob
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    

     /** 
     * Gets the matchingRows
     *
     * @return array The matchingRows
     */
    public function getMatchingRows()
    {
        if (array_key_exists("matchingRows", $this->_propDict)) {
           return $this->_propDict["matchingRows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the matchingRows
    *
    * @param LookupResultRow $val The matchingRows
    *
    * @return ExactMatchLookupJob
    */
    public function setMatchingRows($val)
    {
		$this->_propDict["matchingRows"] = $val;
        return $this;
    }
    
}
