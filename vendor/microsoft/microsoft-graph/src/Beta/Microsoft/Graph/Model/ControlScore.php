<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ControlScore File
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
* ControlScore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ControlScore extends Entity
{
    /**
    * Gets the controlCategory
    * Control action category (Identity, Data, Device, Apps, Infrastructure).
    *
    * @return string The controlCategory
    */
    public function getControlCategory()
    {
        if (array_key_exists("controlCategory", $this->_propDict)) {
            return $this->_propDict["controlCategory"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlCategory
    * Control action category (Identity, Data, Device, Apps, Infrastructure).
    *
    * @param string $val The value of the controlCategory
    *
    * @return ControlScore
    */
    public function setControlCategory($val)
    {
        $this->_propDict["controlCategory"] = $val;
        return $this;
    }
    /**
    * Gets the controlName
    * Control unique name.
    *
    * @return string The controlName
    */
    public function getControlName()
    {
        if (array_key_exists("controlName", $this->_propDict)) {
            return $this->_propDict["controlName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the controlName
    * Control unique name.
    *
    * @param string $val The value of the controlName
    *
    * @return ControlScore
    */
    public function setControlName($val)
    {
        $this->_propDict["controlName"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Description of the control.
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
    * Description of the control.
    *
    * @param string $val The value of the description
    *
    * @return ControlScore
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the score
    * Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
    *
    * @return float The score
    */
    public function getScore()
    {
        if (array_key_exists("score", $this->_propDict)) {
            return $this->_propDict["score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the score
    * Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
    *
    * @param float $val The value of the score
    *
    * @return ControlScore
    */
    public function setScore($val)
    {
        $this->_propDict["score"] = $val;
        return $this;
    }
}
