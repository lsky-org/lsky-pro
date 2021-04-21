<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosSingleSignOnSettings File
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
* IosSingleSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosSingleSignOnSettings extends Entity
{

    /**
    * Gets the allowedAppsList
    * List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
    *
    * @return AppListItem The allowedAppsList
    */
    public function getAllowedAppsList()
    {
        if (array_key_exists("allowedAppsList", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAppsList"], "\Beta\Microsoft\Graph\Model\AppListItem")) {
                return $this->_propDict["allowedAppsList"];
            } else {
                $this->_propDict["allowedAppsList"] = new AppListItem($this->_propDict["allowedAppsList"]);
                return $this->_propDict["allowedAppsList"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedAppsList
    * List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The value to assign to the allowedAppsList
    *
    * @return IosSingleSignOnSettings The IosSingleSignOnSettings
    */
    public function setAllowedAppsList($val)
    {
        $this->_propDict["allowedAppsList"] = $val;
         return $this;
    }
    /**
    * Gets the allowedUrls
    * List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
    *
    * @return string The allowedUrls
    */
    public function getAllowedUrls()
    {
        if (array_key_exists("allowedUrls", $this->_propDict)) {
            return $this->_propDict["allowedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedUrls
    * List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
    *
    * @param string $val The value of the allowedUrls
    *
    * @return IosSingleSignOnSettings
    */
    public function setAllowedUrls($val)
    {
        $this->_propDict["allowedUrls"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of login settings shown on the receiving device.
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
    * The display name of login settings shown on the receiving device.
    *
    * @param string $val The value of the displayName
    *
    * @return IosSingleSignOnSettings
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the kerberosPrincipalName
    * A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
    *
    * @return string The kerberosPrincipalName
    */
    public function getKerberosPrincipalName()
    {
        if (array_key_exists("kerberosPrincipalName", $this->_propDict)) {
            return $this->_propDict["kerberosPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosPrincipalName
    * A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
    *
    * @param string $val The value of the kerberosPrincipalName
    *
    * @return IosSingleSignOnSettings
    */
    public function setKerberosPrincipalName($val)
    {
        $this->_propDict["kerberosPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the kerberosRealm
    * A Kerberos realm name. Case sensitive.
    *
    * @return string The kerberosRealm
    */
    public function getKerberosRealm()
    {
        if (array_key_exists("kerberosRealm", $this->_propDict)) {
            return $this->_propDict["kerberosRealm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosRealm
    * A Kerberos realm name. Case sensitive.
    *
    * @param string $val The value of the kerberosRealm
    *
    * @return IosSingleSignOnSettings
    */
    public function setKerberosRealm($val)
    {
        $this->_propDict["kerberosRealm"] = $val;
        return $this;
    }
}
