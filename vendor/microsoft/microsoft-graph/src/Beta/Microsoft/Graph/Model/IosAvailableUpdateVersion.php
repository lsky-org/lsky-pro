<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosAvailableUpdateVersion File
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
* IosAvailableUpdateVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosAvailableUpdateVersion extends Entity
{

    /**
    * Gets the expirationDateTime
    * The expiration date of the update.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the expirationDateTime
    * The expiration date of the update.
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return IosAvailableUpdateVersion The IosAvailableUpdateVersion
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the postingDateTime
    * The posting date of the update.
    *
    * @return \DateTime The postingDateTime
    */
    public function getPostingDateTime()
    {
        if (array_key_exists("postingDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["postingDateTime"], "\DateTime")) {
                return $this->_propDict["postingDateTime"];
            } else {
                $this->_propDict["postingDateTime"] = new \DateTime($this->_propDict["postingDateTime"]);
                return $this->_propDict["postingDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the postingDateTime
    * The posting date of the update.
    *
    * @param \DateTime $val The value to assign to the postingDateTime
    *
    * @return IosAvailableUpdateVersion The IosAvailableUpdateVersion
    */
    public function setPostingDateTime($val)
    {
        $this->_propDict["postingDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the productVersion
    * The version of the update.
    *
    * @return string The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the productVersion
    * The version of the update.
    *
    * @param string $val The value of the productVersion
    *
    * @return IosAvailableUpdateVersion
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }
    /**
    * Gets the supportedDevices
    * List of supported devices for the update.
    *
    * @return string The supportedDevices
    */
    public function getSupportedDevices()
    {
        if (array_key_exists("supportedDevices", $this->_propDict)) {
            return $this->_propDict["supportedDevices"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedDevices
    * List of supported devices for the update.
    *
    * @param string $val The value of the supportedDevices
    *
    * @return IosAvailableUpdateVersion
    */
    public function setSupportedDevices($val)
    {
        $this->_propDict["supportedDevices"] = $val;
        return $this;
    }
}
