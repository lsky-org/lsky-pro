<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CommsNotification File
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
* CommsNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CommsNotification extends Entity
{

    /**
    * Gets the changeType
    * Possible values are: created, updated, deleted.
    *
    * @return ChangeType The changeType
    */
    public function getChangeType()
    {
        if (array_key_exists("changeType", $this->_propDict)) {
            if (is_a($this->_propDict["changeType"], "\Beta\Microsoft\Graph\Model\ChangeType")) {
                return $this->_propDict["changeType"];
            } else {
                $this->_propDict["changeType"] = new ChangeType($this->_propDict["changeType"]);
                return $this->_propDict["changeType"];
            }
        }
        return null;
    }

    /**
    * Sets the changeType
    * Possible values are: created, updated, deleted.
    *
    * @param ChangeType $val The value to assign to the changeType
    *
    * @return CommsNotification The CommsNotification
    */
    public function setChangeType($val)
    {
        $this->_propDict["changeType"] = $val;
         return $this;
    }
    /**
    * Gets the resourceUrl
    * URI of the resource that was changed.
    *
    * @return string The resourceUrl
    */
    public function getResourceUrl()
    {
        if (array_key_exists("resourceUrl", $this->_propDict)) {
            return $this->_propDict["resourceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourceUrl
    * URI of the resource that was changed.
    *
    * @param string $val The value of the resourceUrl
    *
    * @return CommsNotification
    */
    public function setResourceUrl($val)
    {
        $this->_propDict["resourceUrl"] = $val;
        return $this;
    }
}
