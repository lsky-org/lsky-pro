<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10AssociatedApps File
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
* Windows10AssociatedApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10AssociatedApps extends Entity
{

    /**
    * Gets the appType
    * Application type. Possible values are: desktop, universal.
    *
    * @return Windows10AppType The appType
    */
    public function getAppType()
    {
        if (array_key_exists("appType", $this->_propDict)) {
            if (is_a($this->_propDict["appType"], "\Beta\Microsoft\Graph\Model\Windows10AppType")) {
                return $this->_propDict["appType"];
            } else {
                $this->_propDict["appType"] = new Windows10AppType($this->_propDict["appType"]);
                return $this->_propDict["appType"];
            }
        }
        return null;
    }

    /**
    * Sets the appType
    * Application type. Possible values are: desktop, universal.
    *
    * @param Windows10AppType $val The value to assign to the appType
    *
    * @return Windows10AssociatedApps The Windows10AssociatedApps
    */
    public function setAppType($val)
    {
        $this->_propDict["appType"] = $val;
         return $this;
    }
    /**
    * Gets the identifier
    * Identifier.
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identifier
    * Identifier.
    *
    * @param string $val The value of the identifier
    *
    * @return Windows10AssociatedApps
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }
}
