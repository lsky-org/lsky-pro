<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CompanyPortalBlockedAction File
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
* CompanyPortalBlockedAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CompanyPortalBlockedAction extends Entity
{

    /**
    * Gets the action
    * Device Action. Possible values are: unknown, remove, reset.
    *
    * @return CompanyPortalAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\CompanyPortalAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new CompanyPortalAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * Device Action. Possible values are: unknown, remove, reset.
    *
    * @param CompanyPortalAction $val The value to assign to the action
    *
    * @return CompanyPortalBlockedAction The CompanyPortalBlockedAction
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }

    /**
    * Gets the ownerType
    * Device ownership type. Possible values are: unknown, company, personal.
    *
    * @return OwnerType The ownerType
    */
    public function getOwnerType()
    {
        if (array_key_exists("ownerType", $this->_propDict)) {
            if (is_a($this->_propDict["ownerType"], "\Beta\Microsoft\Graph\Model\OwnerType")) {
                return $this->_propDict["ownerType"];
            } else {
                $this->_propDict["ownerType"] = new OwnerType($this->_propDict["ownerType"]);
                return $this->_propDict["ownerType"];
            }
        }
        return null;
    }

    /**
    * Sets the ownerType
    * Device ownership type. Possible values are: unknown, company, personal.
    *
    * @param OwnerType $val The value to assign to the ownerType
    *
    * @return CompanyPortalBlockedAction The CompanyPortalBlockedAction
    */
    public function setOwnerType($val)
    {
        $this->_propDict["ownerType"] = $val;
         return $this;
    }

    /**
    * Gets the platform
    * Device OS/Platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @return DevicePlatformType The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\Model\DevicePlatformType")) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new DevicePlatformType($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Device OS/Platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown.
    *
    * @param DevicePlatformType $val The value to assign to the platform
    *
    * @return CompanyPortalBlockedAction The CompanyPortalBlockedAction
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }
}
