<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmbeddedSIMActivationCode File
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
* EmbeddedSIMActivationCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmbeddedSIMActivationCode extends Entity
{
    /**
    * Gets the integratedCircuitCardIdentifier
    * The input must match the following regular expression: '^[0-9]{19}[0-9]?$'.
    *
    * @return string The integratedCircuitCardIdentifier
    */
    public function getIntegratedCircuitCardIdentifier()
    {
        if (array_key_exists("integratedCircuitCardIdentifier", $this->_propDict)) {
            return $this->_propDict["integratedCircuitCardIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the integratedCircuitCardIdentifier
    * The input must match the following regular expression: '^[0-9]{19}[0-9]?$'.
    *
    * @param string $val The value of the integratedCircuitCardIdentifier
    *
    * @return EmbeddedSIMActivationCode
    */
    public function setIntegratedCircuitCardIdentifier($val)
    {
        $this->_propDict["integratedCircuitCardIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the matchingIdentifier
    * The input must match the following regular expression: '^[a-zA-Z0-9\-]*$'.
    *
    * @return string The matchingIdentifier
    */
    public function getMatchingIdentifier()
    {
        if (array_key_exists("matchingIdentifier", $this->_propDict)) {
            return $this->_propDict["matchingIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchingIdentifier
    * The input must match the following regular expression: '^[a-zA-Z0-9\-]*$'.
    *
    * @param string $val The value of the matchingIdentifier
    *
    * @return EmbeddedSIMActivationCode
    */
    public function setMatchingIdentifier($val)
    {
        $this->_propDict["matchingIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the smdpPlusServerAddress
    * The input must match the following regular expression: '^([a-zA-Z0-9]+(-[a-zA-Z0-9]+)*\.)+[a-zA-Z]{2,}$'.
    *
    * @return string The smdpPlusServerAddress
    */
    public function getSmdpPlusServerAddress()
    {
        if (array_key_exists("smdpPlusServerAddress", $this->_propDict)) {
            return $this->_propDict["smdpPlusServerAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the smdpPlusServerAddress
    * The input must match the following regular expression: '^([a-zA-Z0-9]+(-[a-zA-Z0-9]+)*\.)+[a-zA-Z]{2,}$'.
    *
    * @param string $val The value of the smdpPlusServerAddress
    *
    * @return EmbeddedSIMActivationCode
    */
    public function setSmdpPlusServerAddress($val)
    {
        $this->_propDict["smdpPlusServerAddress"] = $val;
        return $this;
    }
}
