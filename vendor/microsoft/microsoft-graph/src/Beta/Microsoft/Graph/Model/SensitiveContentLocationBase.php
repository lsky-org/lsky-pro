<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitiveContentLocationBase File
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
* SensitiveContentLocationBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitiveContentLocationBase extends Entity
{

    /**
    * Gets the evidences
    *
    * @return SensitiveContentEvidence The evidences
    */
    public function getEvidences()
    {
        if (array_key_exists("evidences", $this->_propDict)) {
            if (is_a($this->_propDict["evidences"], "\Beta\Microsoft\Graph\Model\SensitiveContentEvidence")) {
                return $this->_propDict["evidences"];
            } else {
                $this->_propDict["evidences"] = new SensitiveContentEvidence($this->_propDict["evidences"]);
                return $this->_propDict["evidences"];
            }
        }
        return null;
    }

    /**
    * Sets the evidences
    *
    * @param SensitiveContentEvidence $val The value to assign to the evidences
    *
    * @return SensitiveContentLocationBase The SensitiveContentLocationBase
    */
    public function setEvidences($val)
    {
        $this->_propDict["evidences"] = $val;
         return $this;
    }
    /**
    * Gets the idMatch
    *
    * @return string The idMatch
    */
    public function getIdMatch()
    {
        if (array_key_exists("idMatch", $this->_propDict)) {
            return $this->_propDict["idMatch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the idMatch
    *
    * @param string $val The value of the idMatch
    *
    * @return SensitiveContentLocationBase
    */
    public function setIdMatch($val)
    {
        $this->_propDict["idMatch"] = $val;
        return $this;
    }
    /**
    * Gets the length
    *
    * @return int The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    *
    * @param int $val The value of the length
    *
    * @return SensitiveContentLocationBase
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    *
    * @return int The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    *
    * @param int $val The value of the offset
    *
    * @return SensitiveContentLocationBase
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }
}
