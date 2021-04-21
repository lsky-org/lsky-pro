<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteCollection File
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
* SiteCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteCollection extends Entity
{
    /**
    * Gets the dataLocationCode
    * The geographic region code for where this site collection resides. Read-only.
    *
    * @return string The dataLocationCode
    */
    public function getDataLocationCode()
    {
        if (array_key_exists("dataLocationCode", $this->_propDict)) {
            return $this->_propDict["dataLocationCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dataLocationCode
    * The geographic region code for where this site collection resides. Read-only.
    *
    * @param string $val The value of the dataLocationCode
    *
    * @return SiteCollection
    */
    public function setDataLocationCode($val)
    {
        $this->_propDict["dataLocationCode"] = $val;
        return $this;
    }
    /**
    * Gets the hostname
    * The hostname for the site collection. Read-only.
    *
    * @return string The hostname
    */
    public function getHostname()
    {
        if (array_key_exists("hostname", $this->_propDict)) {
            return $this->_propDict["hostname"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hostname
    * The hostname for the site collection. Read-only.
    *
    * @param string $val The value of the hostname
    *
    * @return SiteCollection
    */
    public function setHostname($val)
    {
        $this->_propDict["hostname"] = $val;
        return $this;
    }

    /**
    * Gets the root
    * If present, indicates that this is a root site collection in SharePoint. Read-only.
    *
    * @return Root The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "\Beta\Microsoft\Graph\Model\Root")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new Root($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }

    /**
    * Sets the root
    * If present, indicates that this is a root site collection in SharePoint. Read-only.
    *
    * @param Root $val The value to assign to the root
    *
    * @return SiteCollection The SiteCollection
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
         return $this;
    }
}
