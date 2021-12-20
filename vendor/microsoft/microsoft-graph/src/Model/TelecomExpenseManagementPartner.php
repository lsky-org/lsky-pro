<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TelecomExpenseManagementPartner File
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
* TelecomExpenseManagementPartner class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TelecomExpenseManagementPartner extends Entity
{
    /**
    * Gets the appAuthorized
    * Whether the partner's AAD app has been authorized to access Intune.
    *
    * @return bool The appAuthorized
    */
    public function getAppAuthorized()
    {
        if (array_key_exists("appAuthorized", $this->_propDict)) {
            return $this->_propDict["appAuthorized"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appAuthorized
    * Whether the partner's AAD app has been authorized to access Intune.
    *
    * @param bool $val The appAuthorized
    *
    * @return TelecomExpenseManagementPartner
    */
    public function setAppAuthorized($val)
    {
        $this->_propDict["appAuthorized"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name of the TEM partner.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Display name of the TEM partner.
    *
    * @param string $val The displayName
    *
    * @return TelecomExpenseManagementPartner
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enabled
    * Whether Intune's connection to the TEM service is currently enabled or disabled.
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    * Whether Intune's connection to the TEM service is currently enabled or disabled.
    *
    * @param bool $val The enabled
    *
    * @return TelecomExpenseManagementPartner
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastConnectionDateTime
    * Timestamp of the last request sent to Intune by the TEM partner.
    *
    * @return \DateTime The lastConnectionDateTime
    */
    public function getLastConnectionDateTime()
    {
        if (array_key_exists("lastConnectionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionDateTime"], "\DateTime")) {
                return $this->_propDict["lastConnectionDateTime"];
            } else {
                $this->_propDict["lastConnectionDateTime"] = new \DateTime($this->_propDict["lastConnectionDateTime"]);
                return $this->_propDict["lastConnectionDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastConnectionDateTime
    * Timestamp of the last request sent to Intune by the TEM partner.
    *
    * @param \DateTime $val The lastConnectionDateTime
    *
    * @return TelecomExpenseManagementPartner
    */
    public function setLastConnectionDateTime($val)
    {
        $this->_propDict["lastConnectionDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    * URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    * URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service.
    *
    * @param string $val The url
    *
    * @return TelecomExpenseManagementPartner
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
}
