<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextClassificationRequest File
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
* TextClassificationRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TextClassificationRequest extends Entity
{
    /**
    * Gets the fileExtension
    *
    * @return string The fileExtension
    */
    public function getFileExtension()
    {
        if (array_key_exists("fileExtension", $this->_propDict)) {
            return $this->_propDict["fileExtension"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileExtension
    *
    * @param string $val The fileExtension
    *
    * @return TextClassificationRequest
    */
    public function setFileExtension($val)
    {
        $this->_propDict["fileExtension"] = $val;
        return $this;
    }
    
    /**
    * Gets the matchTolerancesToInclude
    *
    * @return MlClassificationMatchTolerance The matchTolerancesToInclude
    */
    public function getMatchTolerancesToInclude()
    {
        if (array_key_exists("matchTolerancesToInclude", $this->_propDict)) {
            if (is_a($this->_propDict["matchTolerancesToInclude"], "\Beta\Microsoft\Graph\Model\MlClassificationMatchTolerance")) {
                return $this->_propDict["matchTolerancesToInclude"];
            } else {
                $this->_propDict["matchTolerancesToInclude"] = new MlClassificationMatchTolerance($this->_propDict["matchTolerancesToInclude"]);
                return $this->_propDict["matchTolerancesToInclude"];
            }
        }
        return null;
    }
    
    /**
    * Sets the matchTolerancesToInclude
    *
    * @param MlClassificationMatchTolerance $val The matchTolerancesToInclude
    *
    * @return TextClassificationRequest
    */
    public function setMatchTolerancesToInclude($val)
    {
        $this->_propDict["matchTolerancesToInclude"] = $val;
        return $this;
    }
    
    /**
    * Gets the scopesToRun
    *
    * @return SensitiveTypeScope The scopesToRun
    */
    public function getScopesToRun()
    {
        if (array_key_exists("scopesToRun", $this->_propDict)) {
            if (is_a($this->_propDict["scopesToRun"], "\Beta\Microsoft\Graph\Model\SensitiveTypeScope")) {
                return $this->_propDict["scopesToRun"];
            } else {
                $this->_propDict["scopesToRun"] = new SensitiveTypeScope($this->_propDict["scopesToRun"]);
                return $this->_propDict["scopesToRun"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scopesToRun
    *
    * @param SensitiveTypeScope $val The scopesToRun
    *
    * @return TextClassificationRequest
    */
    public function setScopesToRun($val)
    {
        $this->_propDict["scopesToRun"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitiveTypeIds
    *
    * @return string The sensitiveTypeIds
    */
    public function getSensitiveTypeIds()
    {
        if (array_key_exists("sensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["sensitiveTypeIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sensitiveTypeIds
    *
    * @param string $val The sensitiveTypeIds
    *
    * @return TextClassificationRequest
    */
    public function setSensitiveTypeIds($val)
    {
        $this->_propDict["sensitiveTypeIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    *
    * @param string $val The text
    *
    * @return TextClassificationRequest
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
}
