<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81ImportedPFXCertificateProfile File
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
* WindowsPhone81ImportedPFXCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81ImportedPFXCertificateProfile extends WindowsCertificateProfileBase
{
    /**
    * Gets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @return IntendedPurpose The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict)) {
            if (is_a($this->_propDict["intendedPurpose"], "\Beta\Microsoft\Graph\Model\IntendedPurpose")) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new IntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @param IntendedPurpose $val The intendedPurpose
    *
    * @return WindowsPhone81ImportedPFXCertificateProfile
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices
     *
     * @return array The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists("managedDeviceCertificateStates", $this->_propDict)) {
           return $this->_propDict["managedDeviceCertificateStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices
    *
    * @param ManagedDeviceCertificateState $val The managedDeviceCertificateStates
    *
    * @return WindowsPhone81ImportedPFXCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
		$this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
