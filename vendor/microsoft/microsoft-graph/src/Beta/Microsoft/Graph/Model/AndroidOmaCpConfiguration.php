<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidOmaCpConfiguration File
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
* AndroidOmaCpConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidOmaCpConfiguration extends DeviceConfiguration
{
    /**
    * Gets the configurationXml
    * Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
    *
    * @return \GuzzleHttp\Psr7\Stream The configurationXml
    */
    public function getConfigurationXml()
    {
        if (array_key_exists("configurationXml", $this->_propDict)) {
            if (is_a($this->_propDict["configurationXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["configurationXml"];
            } else {
                $this->_propDict["configurationXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["configurationXml"]);
                return $this->_propDict["configurationXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configurationXml
    * Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The configurationXml
    *
    * @return AndroidOmaCpConfiguration
    */
    public function setConfigurationXml($val)
    {
        $this->_propDict["configurationXml"] = $val;
        return $this;
    }
    
}
