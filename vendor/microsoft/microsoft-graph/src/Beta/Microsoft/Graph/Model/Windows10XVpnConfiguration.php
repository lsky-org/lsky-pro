<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10XVpnConfiguration File
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
* Windows10XVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10XVpnConfiguration extends DeviceManagementResourceAccessProfileBase
{
    /**
    * Gets the authenticationCertificateId
    * ID to the Authentication Certificate
    *
    * @return string The authenticationCertificateId
    */
    public function getAuthenticationCertificateId()
    {
        if (array_key_exists("authenticationCertificateId", $this->_propDict)) {
            return $this->_propDict["authenticationCertificateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationCertificateId
    * ID to the Authentication Certificate
    *
    * @param string $val The authenticationCertificateId
    *
    * @return Windows10XVpnConfiguration
    */
    public function setAuthenticationCertificateId($val)
    {
        $this->_propDict["authenticationCertificateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the customXml
    * Custom XML commands that configures the VPN connection. (UTF8 byte encoding)
    *
    * @return \GuzzleHttp\Psr7\Stream The customXml
    */
    public function getCustomXml()
    {
        if (array_key_exists("customXml", $this->_propDict)) {
            if (is_a($this->_propDict["customXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["customXml"];
            } else {
                $this->_propDict["customXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["customXml"]);
                return $this->_propDict["customXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the customXml
    * Custom XML commands that configures the VPN connection. (UTF8 byte encoding)
    *
    * @param \GuzzleHttp\Psr7\Stream $val The customXml
    *
    * @return Windows10XVpnConfiguration
    */
    public function setCustomXml($val)
    {
        $this->_propDict["customXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the customXmlFileName
    * Custom Xml file name.
    *
    * @return string The customXmlFileName
    */
    public function getCustomXmlFileName()
    {
        if (array_key_exists("customXmlFileName", $this->_propDict)) {
            return $this->_propDict["customXmlFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customXmlFileName
    * Custom Xml file name.
    *
    * @param string $val The customXmlFileName
    *
    * @return Windows10XVpnConfiguration
    */
    public function setCustomXmlFileName($val)
    {
        $this->_propDict["customXmlFileName"] = $val;
        return $this;
    }
    
}
