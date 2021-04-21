<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSAppleEventReceiver File
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
* MacOSAppleEventReceiver class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSAppleEventReceiver extends Entity
{
    /**
    * Gets the allowed
    * Allow or block this app from receiving Apple events.
    *
    * @return bool The allowed
    */
    public function getAllowed()
    {
        if (array_key_exists("allowed", $this->_propDict)) {
            return $this->_propDict["allowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowed
    * Allow or block this app from receiving Apple events.
    *
    * @param bool $val The value of the allowed
    *
    * @return MacOSAppleEventReceiver
    */
    public function setAllowed($val)
    {
        $this->_propDict["allowed"] = $val;
        return $this;
    }
    /**
    * Gets the codeRequirement
    * Code requirement for the app or binary that receives the Apple Event.
    *
    * @return string The codeRequirement
    */
    public function getCodeRequirement()
    {
        if (array_key_exists("codeRequirement", $this->_propDict)) {
            return $this->_propDict["codeRequirement"];
        } else {
            return null;
        }
    }

    /**
    * Sets the codeRequirement
    * Code requirement for the app or binary that receives the Apple Event.
    *
    * @param string $val The value of the codeRequirement
    *
    * @return MacOSAppleEventReceiver
    */
    public function setCodeRequirement($val)
    {
        $this->_propDict["codeRequirement"] = $val;
        return $this;
    }
    /**
    * Gets the identifier
    * Bundle ID of the app or file path of the process or executable that receives the Apple Event.
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    * Bundle ID of the app or file path of the process or executable that receives the Apple Event.
    *
    * @param string $val The value of the identifier
    *
    * @return MacOSAppleEventReceiver
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }

    /**
    * Gets the identifierType
    * Use bundle ID for an app or path for a process or executable that receives the Apple Event. Possible values are: bundleID, path.
    *
    * @return MacOSProcessIdentifierType The identifierType
    */
    public function getIdentifierType()
    {
        if (array_key_exists("identifierType", $this->_propDict)) {
            if (is_a($this->_propDict["identifierType"], "\Beta\Microsoft\Graph\Model\MacOSProcessIdentifierType")) {
                return $this->_propDict["identifierType"];
            } else {
                $this->_propDict["identifierType"] = new MacOSProcessIdentifierType($this->_propDict["identifierType"]);
                return $this->_propDict["identifierType"];
            }
        }
        return null;
    }

    /**
    * Sets the identifierType
    * Use bundle ID for an app or path for a process or executable that receives the Apple Event. Possible values are: bundleID, path.
    *
    * @param MacOSProcessIdentifierType $val The value to assign to the identifierType
    *
    * @return MacOSAppleEventReceiver The MacOSAppleEventReceiver
    */
    public function setIdentifierType($val)
    {
        $this->_propDict["identifierType"] = $val;
         return $this;
    }
}
