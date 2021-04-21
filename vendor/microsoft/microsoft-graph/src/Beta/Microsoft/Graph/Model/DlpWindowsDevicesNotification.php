<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpWindowsDevicesNotification File
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
* DlpWindowsDevicesNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DlpWindowsDevicesNotification extends DlpNotification
{
    /**
    * Gets the contentName
    *
    * @return string The contentName
    */
    public function getContentName()
    {
        if (array_key_exists("contentName", $this->_propDict)) {
            return $this->_propDict["contentName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentName
    *
    * @param string $val The value of the contentName
    *
    * @return DlpWindowsDevicesNotification
    */
    public function setContentName($val)
    {
        $this->_propDict["contentName"] = $val;
        return $this;
    }
    /**
    * Gets the lastModfiedBy
    *
    * @return string The lastModfiedBy
    */
    public function getLastModfiedBy()
    {
        if (array_key_exists("lastModfiedBy", $this->_propDict)) {
            return $this->_propDict["lastModfiedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastModfiedBy
    *
    * @param string $val The value of the lastModfiedBy
    *
    * @return DlpWindowsDevicesNotification
    */
    public function setLastModfiedBy($val)
    {
        $this->_propDict["lastModfiedBy"] = $val;
        return $this;
    }
}
