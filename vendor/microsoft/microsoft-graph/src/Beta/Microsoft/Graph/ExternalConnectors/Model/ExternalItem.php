<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ExternalItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalItem extends \Beta\Microsoft\Graph\Model\Entity
{

     /** 
     * Gets the acl
     *
     * @return array The acl
     */
    public function getAcl()
    {
        if (array_key_exists("acl", $this->_propDict)) {
           return $this->_propDict["acl"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the acl
    *
    * @param Acl $val The acl
    *
    * @return ExternalItem
    */
    public function setAcl($val)
    {
		$this->_propDict["acl"] = $val;
        return $this;
    }
    
    /**
    * Gets the content
    *
    * @return ExternalItemContent The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\ExternalItemContent")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new ExternalItemContent($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    *
    * @param ExternalItemContent $val The content
    *
    * @return ExternalItem
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalItemProperties
    *
    * @return Properties The externalItemProperties
    */
    public function getExternalItemProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "\Beta\Microsoft\Graph\ExternalConnectors\Model\Properties")) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new Properties($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalItemProperties
    *
    * @param Properties $val The externalItemProperties
    *
    * @return ExternalItem
    */
    public function setExternalItemProperties($val)
    {
        $this->_propDict["properties"] = $val;
        return $this;
    }
    
}
