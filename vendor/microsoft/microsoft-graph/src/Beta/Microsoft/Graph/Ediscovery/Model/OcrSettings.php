<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OcrSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;
/**
* OcrSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OcrSettings extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the isEnabled
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The value of the isEnabled
    *
    * @return OcrSettings
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the maxImageSize
    *
    * @return int The maxImageSize
    */
    public function getMaxImageSize()
    {
        if (array_key_exists("maxImageSize", $this->_propDict)) {
            return $this->_propDict["maxImageSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxImageSize
    *
    * @param int $val The value of the maxImageSize
    *
    * @return OcrSettings
    */
    public function setMaxImageSize($val)
    {
        $this->_propDict["maxImageSize"] = $val;
        return $this;
    }

    /**
    * Gets the timeout
    *
    * @return \Beta\Microsoft\Graph\Model\Duration The timeout
    */
    public function getTimeout()
    {
        if (array_key_exists("timeout", $this->_propDict)) {
            if (is_a($this->_propDict["timeout"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["timeout"];
            } else {
                $this->_propDict["timeout"] = new \Beta\Microsoft\Graph\Model\Duration($this->_propDict["timeout"]);
                return $this->_propDict["timeout"];
            }
        }
        return null;
    }

    /**
    * Sets the timeout
    *
    * @param \Beta\Microsoft\Graph\Model\Duration $val The value to assign to the timeout
    *
    * @return OcrSettings The OcrSettings
    */
    public function setTimeout($val)
    {
        $this->_propDict["timeout"] = $val;
         return $this;
    }
}
