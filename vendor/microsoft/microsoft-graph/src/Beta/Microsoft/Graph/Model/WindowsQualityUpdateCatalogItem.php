<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsQualityUpdateCatalogItem File
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
* WindowsQualityUpdateCatalogItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsQualityUpdateCatalogItem extends WindowsUpdateCatalogItem
{
    /**
    * Gets the classification
    * Classification of the quality update. Possible values are: all, security, nonSecurity.
    *
    * @return WindowsQualityUpdateClassification The classification
    */
    public function getClassification()
    {
        if (array_key_exists("classification", $this->_propDict)) {
            if (is_a($this->_propDict["classification"], "\Beta\Microsoft\Graph\Model\WindowsQualityUpdateClassification")) {
                return $this->_propDict["classification"];
            } else {
                $this->_propDict["classification"] = new WindowsQualityUpdateClassification($this->_propDict["classification"]);
                return $this->_propDict["classification"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classification
    * Classification of the quality update. Possible values are: all, security, nonSecurity.
    *
    * @param WindowsQualityUpdateClassification $val The classification
    *
    * @return WindowsQualityUpdateCatalogItem
    */
    public function setClassification($val)
    {
        $this->_propDict["classification"] = $val;
        return $this;
    }
    
    /**
    * Gets the isExpeditable
    * Flag indicating if update qualifies for expedite
    *
    * @return bool The isExpeditable
    */
    public function getIsExpeditable()
    {
        if (array_key_exists("isExpeditable", $this->_propDict)) {
            return $this->_propDict["isExpeditable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExpeditable
    * Flag indicating if update qualifies for expedite
    *
    * @param bool $val The isExpeditable
    *
    * @return WindowsQualityUpdateCatalogItem
    */
    public function setIsExpeditable($val)
    {
        $this->_propDict["isExpeditable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kbArticleId
    * Knowledge base article id
    *
    * @return string The kbArticleId
    */
    public function getKbArticleId()
    {
        if (array_key_exists("kbArticleId", $this->_propDict)) {
            return $this->_propDict["kbArticleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kbArticleId
    * Knowledge base article id
    *
    * @param string $val The kbArticleId
    *
    * @return WindowsQualityUpdateCatalogItem
    */
    public function setKbArticleId($val)
    {
        $this->_propDict["kbArticleId"] = $val;
        return $this;
    }
    
}
