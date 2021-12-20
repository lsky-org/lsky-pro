<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateBasedAuthConfiguration File
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
* CertificateBasedAuthConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateBasedAuthConfiguration extends Entity
{

     /** 
     * Gets the certificateAuthorities
    * Collection of certificate authorities which creates a trusted certificate chain.
     *
     * @return array The certificateAuthorities
     */
    public function getCertificateAuthorities()
    {
        if (array_key_exists("certificateAuthorities", $this->_propDict)) {
           return $this->_propDict["certificateAuthorities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the certificateAuthorities
    * Collection of certificate authorities which creates a trusted certificate chain.
    *
    * @param CertificateAuthority $val The certificateAuthorities
    *
    * @return CertificateBasedAuthConfiguration
    */
    public function setCertificateAuthorities($val)
    {
		$this->_propDict["certificateAuthorities"] = $val;
        return $this;
    }
    
}
