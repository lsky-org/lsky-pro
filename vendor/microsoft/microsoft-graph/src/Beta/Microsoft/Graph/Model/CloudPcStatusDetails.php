<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcStatusDetails File
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
* CloudPcStatusDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcStatusDetails extends Entity
{

    /**
    * Gets the additionalInformation
    * Any additional information about the cloud PC status.
    *
    * @return KeyValuePair The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            if (is_a($this->_propDict["additionalInformation"], "\Beta\Microsoft\Graph\Model\KeyValuePair")) {
                return $this->_propDict["additionalInformation"];
            } else {
                $this->_propDict["additionalInformation"] = new KeyValuePair($this->_propDict["additionalInformation"]);
                return $this->_propDict["additionalInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the additionalInformation
    * Any additional information about the cloud PC status.
    *
    * @param KeyValuePair $val The value to assign to the additionalInformation
    *
    * @return CloudPcStatusDetails The CloudPcStatusDetails
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
         return $this;
    }
    /**
    * Gets the code
    * The code associated with the cloud PC status.
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    * The code associated with the cloud PC status.
    *
    * @param string $val The value of the code
    *
    * @return CloudPcStatusDetails
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the message
    * The status message.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The status message.
    *
    * @param string $val The value of the message
    *
    * @return CloudPcStatusDetails
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
