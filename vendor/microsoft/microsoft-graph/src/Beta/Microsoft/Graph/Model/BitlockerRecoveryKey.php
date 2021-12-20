<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BitlockerRecoveryKey File
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
* BitlockerRecoveryKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BitlockerRecoveryKey extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time when the key was originally backed up to Azure Active Directory.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The date and time when the key was originally backed up to Azure Active Directory.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return BitlockerRecoveryKey
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * ID of the device the BitLocker key is originally backed up from.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    * ID of the device the BitLocker key is originally backed up from.
    *
    * @param string $val The deviceId
    *
    * @return BitlockerRecoveryKey
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the key
    * The BitLocker recovery key.
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the key
    * The BitLocker recovery key.
    *
    * @param string $val The key
    *
    * @return BitlockerRecoveryKey
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    
    /**
    * Gets the volumeType
    * Indicates the type of volume the BitLocker key is associated with. Possible values are: operatingSystemVolume, fixedDataVolume, removableDataVolume, unknownFutureValue.
    *
    * @return VolumeType The volumeType
    */
    public function getVolumeType()
    {
        if (array_key_exists("volumeType", $this->_propDict)) {
            if (is_a($this->_propDict["volumeType"], "\Beta\Microsoft\Graph\Model\VolumeType")) {
                return $this->_propDict["volumeType"];
            } else {
                $this->_propDict["volumeType"] = new VolumeType($this->_propDict["volumeType"]);
                return $this->_propDict["volumeType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the volumeType
    * Indicates the type of volume the BitLocker key is associated with. Possible values are: operatingSystemVolume, fixedDataVolume, removableDataVolume, unknownFutureValue.
    *
    * @param VolumeType $val The volumeType
    *
    * @return BitlockerRecoveryKey
    */
    public function setVolumeType($val)
    {
        $this->_propDict["volumeType"] = $val;
        return $this;
    }
    
}
