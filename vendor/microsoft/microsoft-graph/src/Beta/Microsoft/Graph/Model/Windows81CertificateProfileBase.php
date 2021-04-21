<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81CertificateProfileBase File
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
* Windows81CertificateProfileBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81CertificateProfileBase extends WindowsCertificateProfileBase
{

     /** 
     * Gets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *
     * @return array The customSubjectAlternativeNames
     */
    public function getCustomSubjectAlternativeNames()
    {
        if (array_key_exists("customSubjectAlternativeNames", $this->_propDict)) {
           return $this->_propDict["customSubjectAlternativeNames"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customSubjectAlternativeNames
    * Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    *
    * @param CustomSubjectAlternativeName $val The customSubjectAlternativeNames
    *
    * @return Windows81CertificateProfileBase
    */
    public function setCustomSubjectAlternativeNames($val)
    {
		$this->_propDict["customSubjectAlternativeNames"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *
     * @return array The extendedKeyUsages
     */
    public function getExtendedKeyUsages()
    {
        if (array_key_exists("extendedKeyUsages", $this->_propDict)) {
           return $this->_propDict["extendedKeyUsages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extendedKeyUsages
    * Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
    *
    * @param ExtendedKeyUsage $val The extendedKeyUsages
    *
    * @return Windows81CertificateProfileBase
    */
    public function setExtendedKeyUsages($val)
    {
		$this->_propDict["extendedKeyUsages"] = $val;
        return $this;
    }
    
}
