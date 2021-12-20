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
namespace Beta\Microsoft\Graph\Model;

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
     * Gets the emailMethods
     *
     * @return array The emailMethods
     */
    public function getEmailMethods()
    {
        if (array_key_exists("emailMethods", $this->_propDict)) {
           return $this->_propDict["emailMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the emailMethods
    *
    * @param EmailAuthenticationMethod $val The emailMethods
    *
    * @return Authentication
    */
    public function setEmailMethods($val)
    {
		$this->_propDict["emailMethods"] = $val;
        return $this;
    }
    

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
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param LongRunningOperation $val The operations
    *
    * @return Authentication
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordlessMicrosoftAuthenticatorMethods
     *
     * @return array The passwordlessMicrosoftAuthenticatorMethods
     */
    public function getPasswordlessMicrosoftAuthenticatorMethods()
    {
        if (array_key_exists("passwordlessMicrosoftAuthenticatorMethods", $this->_propDict)) {
           return $this->_propDict["passwordlessMicrosoftAuthenticatorMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the passwordlessMicrosoftAuthenticatorMethods
    *
    * @param PasswordlessMicrosoftAuthenticatorAuthenticationMethod $val The passwordlessMicrosoftAuthenticatorMethods
    *
    * @return Authentication
    */
    public function setPasswordlessMicrosoftAuthenticatorMethods($val)
    {
		$this->_propDict["passwordlessMicrosoftAuthenticatorMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordMethods
     *
     * @return array The passwordMethods
     */
    public function getPasswordMethods()
    {
        if (array_key_exists("passwordMethods", $this->_propDict)) {
           return $this->_propDict["passwordMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the passwordMethods
    *
    * @param PasswordAuthenticationMethod $val The passwordMethods
    *
    * @return Authentication
    */
    public function setPasswordMethods($val)
    {
		$this->_propDict["passwordMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the phoneMethods
     *
     * @return array The phoneMethods
     */
    public function getPhoneMethods()
    {
        if (array_key_exists("phoneMethods", $this->_propDict)) {
           return $this->_propDict["phoneMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the phoneMethods
    *
    * @param PhoneAuthenticationMethod $val The phoneMethods
    *
    * @return Authentication
    */
    public function setPhoneMethods($val)
    {
		$this->_propDict["phoneMethods"] = $val;
        return $this;
    }
    

     /** 
     * Gets the temporaryAccessPassMethods
     *
     * @return array The temporaryAccessPassMethods
     */
    public function getTemporaryAccessPassMethods()
    {
        if (array_key_exists("temporaryAccessPassMethods", $this->_propDict)) {
           return $this->_propDict["temporaryAccessPassMethods"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the temporaryAccessPassMethods
    *
    * @param TemporaryAccessPassAuthenticationMethod $val The temporaryAccessPassMethods
    *
    * @return Authentication
    */
    public function setTemporaryAccessPassMethods($val)
    {
		$this->_propDict["temporaryAccessPassMethods"] = $val;
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
