<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10PFXImportCertificateProfile File
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
* Windows10PFXImportCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10PFXImportCertificateProfile extends DeviceConfiguration
{
    /**
    * Gets the keyStorageProvider
    * Not yet documented. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    *
    * @return KeyStorageProviderOption The keyStorageProvider
    */
    public function getKeyStorageProvider()
    {
        if (array_key_exists("keyStorageProvider", $this->_propDict)) {
            if (is_a($this->_propDict["keyStorageProvider"], "\Beta\Microsoft\Graph\Model\KeyStorageProviderOption")) {
                return $this->_propDict["keyStorageProvider"];
            } else {
                $this->_propDict["keyStorageProvider"] = new KeyStorageProviderOption($this->_propDict["keyStorageProvider"]);
                return $this->_propDict["keyStorageProvider"];
            }
        }
        return null;
    }
    
    /**
    * Sets the keyStorageProvider
    * Not yet documented. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    *
    * @param KeyStorageProviderOption $val The keyStorageProvider
    *
    * @return Windows10PFXImportCertificateProfile
    */
    public function setKeyStorageProvider($val)
    {
        $this->_propDict["keyStorageProvider"] = $val;
        return $this;
    }
    
}
