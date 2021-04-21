<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Authentication File
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
* Authentication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Authentication extends Entity
{

     /** 
     * Gets the fido2Methods
     *
     * @return array The fido2Methods
     */
    public function getFido2Methods()
    {
        if (array_key_exists("fido2Methods", $this->_propDict)) {
           return $this->_propDict["fido2Methods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the fido2Methods
    *
    * @param Fido2AuthenticationMethod $val The fido2Methods
    *
    * @return Authentication
    */
    public function setFido2Methods($val)
    {
		$this->_propDict["fido2Methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the methods
     *
     * @return array The methods
     */
    public function getMethods()
    {
        if (array_key_exists("methods", $this->_propDict)) {
           return $this->_propDict["methods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the methods
    *
    * @param AuthenticationMethod $val The methods
    *
    * @return Authentication
    */
    public function setMethods($val)
    {
		$this->_propDict["methods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the microsoftAuthenticatorMethods
     *
     * @return array The microsoftAuthenticatorMethods
     */
    public function getMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists("microsoftAuthenticatorMethods", $this->_propDict)) {
           return $this->_propDict["microsoftAuthenticatorMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the microsoftAuthenticatorMethods
    *
    * @param MicrosoftAuthenticatorAuthenticationMethod $val The microsoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setMicrosoftAuthenticatorMethods($val)
    {
		$this->_propDict["microsoftAuthenticatorMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsHelloForBusinessMethods
     *
     * @return array The windowsHelloForBusinessMethods
     */
    public function getWindowsHelloForBusinessMethods()
    {
        if (array_key_exists("windowsHelloForBusinessMethods", $this->_propDict)) {
           return $this->_propDict["windowsHelloForBusinessMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsHelloForBusinessMethods
    *
    * @param WindowsHelloForBusinessAuthenticationMethod $val The windowsHelloForBusinessMethods
    *
    * @return Authentication
    */
    public function setWindowsHelloForBusinessMethods($val)
    {
		$this->_propDict["windowsHelloForBusinessMethods"] = $val;
        return $this;
    }
    
}
