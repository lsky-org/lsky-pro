<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnsupportedGroupPolicyExtension File
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
* UnsupportedGroupPolicyExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnsupportedGroupPolicyExtension extends Entity
{
    /**
    * Gets the extensionType
    * ExtensionType of the unsupported extension.
    *
    * @return string The extensionType
    */
    public function getExtensionType()
    {
        if (array_key_exists("extensionType", $this->_propDict)) {
            return $this->_propDict["extensionType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the extensionType
    * ExtensionType of the unsupported extension.
    *
    * @param string $val The extensionType
    *
    * @return UnsupportedGroupPolicyExtension
    */
    public function setExtensionType($val)
    {
        $this->_propDict["extensionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the namespaceUrl
    * Namespace Url of the unsupported extension.
    *
    * @return string The namespaceUrl
    */
    public function getNamespaceUrl()
    {
        if (array_key_exists("namespaceUrl", $this->_propDict)) {
            return $this->_propDict["namespaceUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the namespaceUrl
    * Namespace Url of the unsupported extension.
    *
    * @param string $val The namespaceUrl
    *
    * @return UnsupportedGroupPolicyExtension
    */
    public function setNamespaceUrl($val)
    {
        $this->_propDict["namespaceUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the nodeName
    * Node name of the unsupported extension.
    *
    * @return string The nodeName
    */
    public function getNodeName()
    {
        if (array_key_exists("nodeName", $this->_propDict)) {
            return $this->_propDict["nodeName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the nodeName
    * Node name of the unsupported extension.
    *
    * @param string $val The nodeName
    *
    * @return UnsupportedGroupPolicyExtension
    */
    public function setNodeName($val)
    {
        $this->_propDict["nodeName"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingScope
    * Setting Scope of the unsupported extension. Possible values are: unknown, device, user.
    *
    * @return GroupPolicySettingScope The settingScope
    */
    public function getSettingScope()
    {
        if (array_key_exists("settingScope", $this->_propDict)) {
            if (is_a($this->_propDict["settingScope"], "\Beta\Microsoft\Graph\Model\GroupPolicySettingScope")) {
                return $this->_propDict["settingScope"];
            } else {
                $this->_propDict["settingScope"] = new GroupPolicySettingScope($this->_propDict["settingScope"]);
                return $this->_propDict["settingScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settingScope
    * Setting Scope of the unsupported extension. Possible values are: unknown, device, user.
    *
    * @param GroupPolicySettingScope $val The settingScope
    *
    * @return UnsupportedGroupPolicyExtension
    */
    public function setSettingScope($val)
    {
        $this->_propDict["settingScope"] = $val;
        return $this;
    }
    
}
