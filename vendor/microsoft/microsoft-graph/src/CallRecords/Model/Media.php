<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Media File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* Media class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Media extends \Microsoft\Graph\Model\Entity
{

    /**
    * Gets the calleeDevice
    * Device information associated with the callee endpoint of this media.
    *
    * @return DeviceInfo The calleeDevice
    */
    public function getCalleeDevice()
    {
        if (array_key_exists("calleeDevice", $this->_propDict)) {
            if (is_a($this->_propDict["calleeDevice"], "\Microsoft\Graph\CallRecords\Model\DeviceInfo")) {
                return $this->_propDict["calleeDevice"];
            } else {
                $this->_propDict["calleeDevice"] = new DeviceInfo($this->_propDict["calleeDevice"]);
                return $this->_propDict["calleeDevice"];
            }
        }
        return null;
    }

    /**
    * Sets the calleeDevice
    * Device information associated with the callee endpoint of this media.
    *
    * @param DeviceInfo $val The value to assign to the calleeDevice
    *
    * @return Media The Media
    */
    public function setCalleeDevice($val)
    {
        $this->_propDict["calleeDevice"] = $val;
         return $this;
    }

    /**
    * Gets the calleeNetwork
    * Network information associated with the callee endpoint of this media.
    *
    * @return NetworkInfo The calleeNetwork
    */
    public function getCalleeNetwork()
    {
        if (array_key_exists("calleeNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["calleeNetwork"], "\Microsoft\Graph\CallRecords\Model\NetworkInfo")) {
                return $this->_propDict["calleeNetwork"];
            } else {
                $this->_propDict["calleeNetwork"] = new NetworkInfo($this->_propDict["calleeNetwork"]);
                return $this->_propDict["calleeNetwork"];
            }
        }
        return null;
    }

    /**
    * Sets the calleeNetwork
    * Network information associated with the callee endpoint of this media.
    *
    * @param NetworkInfo $val The value to assign to the calleeNetwork
    *
    * @return Media The Media
    */
    public function setCalleeNetwork($val)
    {
        $this->_propDict["calleeNetwork"] = $val;
         return $this;
    }

    /**
    * Gets the callerDevice
    * Device information associated with the caller endpoint of this media.
    *
    * @return DeviceInfo The callerDevice
    */
    public function getCallerDevice()
    {
        if (array_key_exists("callerDevice", $this->_propDict)) {
            if (is_a($this->_propDict["callerDevice"], "\Microsoft\Graph\CallRecords\Model\DeviceInfo")) {
                return $this->_propDict["callerDevice"];
            } else {
                $this->_propDict["callerDevice"] = new DeviceInfo($this->_propDict["callerDevice"]);
                return $this->_propDict["callerDevice"];
            }
        }
        return null;
    }

    /**
    * Sets the callerDevice
    * Device information associated with the caller endpoint of this media.
    *
    * @param DeviceInfo $val The value to assign to the callerDevice
    *
    * @return Media The Media
    */
    public function setCallerDevice($val)
    {
        $this->_propDict["callerDevice"] = $val;
         return $this;
    }

    /**
    * Gets the callerNetwork
    * Network information associated with the caller endpoint of this media.
    *
    * @return NetworkInfo The callerNetwork
    */
    public function getCallerNetwork()
    {
        if (array_key_exists("callerNetwork", $this->_propDict)) {
            if (is_a($this->_propDict["callerNetwork"], "\Microsoft\Graph\CallRecords\Model\NetworkInfo")) {
                return $this->_propDict["callerNetwork"];
            } else {
                $this->_propDict["callerNetwork"] = new NetworkInfo($this->_propDict["callerNetwork"]);
                return $this->_propDict["callerNetwork"];
            }
        }
        return null;
    }

    /**
    * Sets the callerNetwork
    * Network information associated with the caller endpoint of this media.
    *
    * @param NetworkInfo $val The value to assign to the callerNetwork
    *
    * @return Media The Media
    */
    public function setCallerNetwork($val)
    {
        $this->_propDict["callerNetwork"] = $val;
         return $this;
    }
    /**
    * Gets the label
    * How the media was identified during media negotiation stage.
    *
    * @return string The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            return $this->_propDict["label"];
        } else {
            return null;
        }
    }

    /**
    * Sets the label
    * How the media was identified during media negotiation stage.
    *
    * @param string $val The value of the label
    *
    * @return Media
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
        return $this;
    }

    /**
    * Gets the streams
    * Network streams associated with this media.
    *
    * @return MediaStream The streams
    */
    public function getStreams()
    {
        if (array_key_exists("streams", $this->_propDict)) {
            if (is_a($this->_propDict["streams"], "\Microsoft\Graph\CallRecords\Model\MediaStream")) {
                return $this->_propDict["streams"];
            } else {
                $this->_propDict["streams"] = new MediaStream($this->_propDict["streams"]);
                return $this->_propDict["streams"];
            }
        }
        return null;
    }

    /**
    * Sets the streams
    * Network streams associated with this media.
    *
    * @param MediaStream $val The value to assign to the streams
    *
    * @return Media The Media
    */
    public function setStreams($val)
    {
        $this->_propDict["streams"] = $val;
         return $this;
    }
}
