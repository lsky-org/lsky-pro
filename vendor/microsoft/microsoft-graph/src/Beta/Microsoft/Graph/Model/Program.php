<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Program File
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
* Program class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Program extends Entity
{
    /**
    * Gets the description
    * The description of the program.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of the program.
    *
    * @param string $val The description
    *
    * @return Program
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the program.  Required on create.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the program.  Required on create.
    *
    * @param string $val The displayName
    *
    * @return Program
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the controls
    * Controls associated with the program.
     *
     * @return array The controls
     */
    public function getControls()
    {
        if (array_key_exists("controls", $this->_propDict)) {
           return $this->_propDict["controls"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the controls
    * Controls associated with the program.
    *
    * @param ProgramControl $val The controls
    *
    * @return Program
    */
    public function setControls($val)
    {
		$this->_propDict["controls"] = $val;
        return $this;
    }
    
}
