<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageSecurityState File
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
* MessageSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageSecurityState extends Entity
{
    /**
    * Gets the connectingIP
    *
    * @return string The connectingIP
    */
    public function getConnectingIP()
    {
        if (array_key_exists("connectingIP", $this->_propDict)) {
            return $this->_propDict["connectingIP"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectingIP
    *
    * @param string $val The value of the connectingIP
    *
    * @return MessageSecurityState
    */
    public function setConnectingIP($val)
    {
        $this->_propDict["connectingIP"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryAction
    *
    * @return string The deliveryAction
    */
    public function getDeliveryAction()
    {
        if (array_key_exists("deliveryAction", $this->_propDict)) {
            return $this->_propDict["deliveryAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryAction
    *
    * @param string $val The value of the deliveryAction
    *
    * @return MessageSecurityState
    */
    public function setDeliveryAction($val)
    {
        $this->_propDict["deliveryAction"] = $val;
        return $this;
    }
    /**
    * Gets the deliveryLocation
    *
    * @return string The deliveryLocation
    */
    public function getDeliveryLocation()
    {
        if (array_key_exists("deliveryLocation", $this->_propDict)) {
            return $this->_propDict["deliveryLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deliveryLocation
    *
    * @param string $val The value of the deliveryLocation
    *
    * @return MessageSecurityState
    */
    public function setDeliveryLocation($val)
    {
        $this->_propDict["deliveryLocation"] = $val;
        return $this;
    }
    /**
    * Gets the directionality
    *
    * @return string The directionality
    */
    public function getDirectionality()
    {
        if (array_key_exists("directionality", $this->_propDict)) {
            return $this->_propDict["directionality"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directionality
    *
    * @param string $val The value of the directionality
    *
    * @return MessageSecurityState
    */
    public function setDirectionality($val)
    {
        $this->_propDict["directionality"] = $val;
        return $this;
    }
    /**
    * Gets the internetMessageId
    *
    * @return string The internetMessageId
    */
    public function getInternetMessageId()
    {
        if (array_key_exists("internetMessageId", $this->_propDict)) {
            return $this->_propDict["internetMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internetMessageId
    *
    * @param string $val The value of the internetMessageId
    *
    * @return MessageSecurityState
    */
    public function setInternetMessageId($val)
    {
        $this->_propDict["internetMessageId"] = $val;
        return $this;
    }
    /**
    * Gets the messageFingerprint
    *
    * @return string The messageFingerprint
    */
    public function getMessageFingerprint()
    {
        if (array_key_exists("messageFingerprint", $this->_propDict)) {
            return $this->_propDict["messageFingerprint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageFingerprint
    *
    * @param string $val The value of the messageFingerprint
    *
    * @return MessageSecurityState
    */
    public function setMessageFingerprint($val)
    {
        $this->_propDict["messageFingerprint"] = $val;
        return $this;
    }

    /**
    * Gets the messageReceivedDateTime
    *
    * @return \DateTime The messageReceivedDateTime
    */
    public function getMessageReceivedDateTime()
    {
        if (array_key_exists("messageReceivedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["messageReceivedDateTime"], "\DateTime")) {
                return $this->_propDict["messageReceivedDateTime"];
            } else {
                $this->_propDict["messageReceivedDateTime"] = new \DateTime($this->_propDict["messageReceivedDateTime"]);
                return $this->_propDict["messageReceivedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the messageReceivedDateTime
    *
    * @param \DateTime $val The value to assign to the messageReceivedDateTime
    *
    * @return MessageSecurityState The MessageSecurityState
    */
    public function setMessageReceivedDateTime($val)
    {
        $this->_propDict["messageReceivedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the messageSubject
    *
    * @return string The messageSubject
    */
    public function getMessageSubject()
    {
        if (array_key_exists("messageSubject", $this->_propDict)) {
            return $this->_propDict["messageSubject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the messageSubject
    *
    * @param string $val The value of the messageSubject
    *
    * @return MessageSecurityState
    */
    public function setMessageSubject($val)
    {
        $this->_propDict["messageSubject"] = $val;
        return $this;
    }
    /**
    * Gets the networkMessageId
    *
    * @return string The networkMessageId
    */
    public function getNetworkMessageId()
    {
        if (array_key_exists("networkMessageId", $this->_propDict)) {
            return $this->_propDict["networkMessageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the networkMessageId
    *
    * @param string $val The value of the networkMessageId
    *
    * @return MessageSecurityState
    */
    public function setNetworkMessageId($val)
    {
        $this->_propDict["networkMessageId"] = $val;
        return $this;
    }
}
