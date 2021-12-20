<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkforceIntegrationEncryption File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WorkforceIntegrationEncryption class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkforceIntegrationEncryption extends Entity
{

    /**
    * Gets the protocol
    * Possible values are: sharedSecret, unknownFutureValue.
    *
    * @return WorkforceIntegrationEncryptionProtocol The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Microsoft\Graph\Model\WorkforceIntegrationEncryptionProtocol")) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new WorkforceIntegrationEncryptionProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    * Possible values are: sharedSecret, unknownFutureValue.
    *
    * @param WorkforceIntegrationEncryptionProtocol $val The value to assign to the protocol
    *
    * @return WorkforceIntegrationEncryption The WorkforceIntegrationEncryption
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
         return $this;
    }
    /**
    * Gets the secret
    * Encryption shared secret.
    *
    * @return string The secret
    */
    public function getSecret()
    {
        if (array_key_exists("secret", $this->_propDict)) {
            return $this->_propDict["secret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the secret
    * Encryption shared secret.
    *
    * @param string $val The value of the secret
    *
    * @return WorkforceIntegrationEncryption
    */
    public function setSecret($val)
    {
        $this->_propDict["secret"] = $val;
        return $this;
    }
}
