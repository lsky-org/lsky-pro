<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenFolderPage File
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
* IosHomeScreenFolderPage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosHomeScreenFolderPage extends Entity
{

    /**
    * Gets the apps
    * A list of apps and web clips to appear on a page within a folder. This collection can contain a maximum of 500 elements.
    *
    * @return IosHomeScreenApp The apps
    */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
            if (is_a($this->_propDict["apps"], "\Beta\Microsoft\Graph\Model\IosHomeScreenApp")) {
                return $this->_propDict["apps"];
            } else {
                $this->_propDict["apps"] = new IosHomeScreenApp($this->_propDict["apps"]);
                return $this->_propDict["apps"];
            }
        }
        return null;
    }

    /**
    * Sets the apps
    * A list of apps and web clips to appear on a page within a folder. This collection can contain a maximum of 500 elements.
    *
    * @param IosHomeScreenApp $val The value to assign to the apps
    *
    * @return IosHomeScreenFolderPage The IosHomeScreenFolderPage
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Name of the folder page
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
    * Name of the folder page
    *
    * @param string $val The value of the displayName
    *
    * @return IosHomeScreenFolderPage
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
