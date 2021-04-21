<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSAssociatedDomainsItem File
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
* MacOSAssociatedDomainsItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSAssociatedDomainsItem extends Entity
{
    /**
    * Gets the applicationIdentifier
    * The application identifier of the app to associate domains with.
    *
    * @return string The applicationIdentifier
    */
    public function getApplicationIdentifier()
    {
        if (array_key_exists("applicationIdentifier", $this->_propDict)) {
            return $this->_propDict["applicationIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationIdentifier
    * The application identifier of the app to associate domains with.
    *
    * @param string $val The value of the applicationIdentifier
    *
    * @return MacOSAssociatedDomainsItem
    */
    public function setApplicationIdentifier($val)
    {
        $this->_propDict["applicationIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the directDownloadsEnabled
    * Determines whether data should be downloaded directly or via a CDN.
    *
    * @return bool The directDownloadsEnabled
    */
    public function getDirectDownloadsEnabled()
    {
        if (array_key_exists("directDownloadsEnabled", $this->_propDict)) {
            return $this->_propDict["directDownloadsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the directDownloadsEnabled
    * Determines whether data should be downloaded directly or via a CDN.
    *
    * @param bool $val The value of the directDownloadsEnabled
    *
    * @return MacOSAssociatedDomainsItem
    */
    public function setDirectDownloadsEnabled($val)
    {
        $this->_propDict["directDownloadsEnabled"] = $val;
        return $this;
    }
    /**
    * Gets the domains
    * The list of domains to associate.
    *
    * @return string The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * The list of domains to associate.
    *
    * @param string $val The value of the domains
    *
    * @return MacOSAssociatedDomainsItem
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
        return $this;
    }
}
