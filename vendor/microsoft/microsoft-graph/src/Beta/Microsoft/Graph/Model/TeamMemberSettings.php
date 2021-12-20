<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamMemberSettings File
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
* TeamMemberSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamMemberSettings extends Entity
{
    /**
    * Gets the allowAddRemoveApps
    * If set to true, members can add and remove apps.
    *
    * @return bool The allowAddRemoveApps
    */
    public function getAllowAddRemoveApps()
    {
        if (array_key_exists("allowAddRemoveApps", $this->_propDict)) {
            return $this->_propDict["allowAddRemoveApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAddRemoveApps
    * If set to true, members can add and remove apps.
    *
    * @param bool $val The value of the allowAddRemoveApps
    *
    * @return TeamMemberSettings
    */
    public function setAllowAddRemoveApps($val)
    {
        $this->_propDict["allowAddRemoveApps"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreatePrivateChannels
    * If set to true, members can add and update private channels.
    *
    * @return bool The allowCreatePrivateChannels
    */
    public function getAllowCreatePrivateChannels()
    {
        if (array_key_exists("allowCreatePrivateChannels", $this->_propDict)) {
            return $this->_propDict["allowCreatePrivateChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreatePrivateChannels
    * If set to true, members can add and update private channels.
    *
    * @param bool $val The value of the allowCreatePrivateChannels
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreatePrivateChannels($val)
    {
        $this->_propDict["allowCreatePrivateChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreateUpdateChannels
    * If set to true, members can add and update any channels.
    *
    * @return bool The allowCreateUpdateChannels
    */
    public function getAllowCreateUpdateChannels()
    {
        if (array_key_exists("allowCreateUpdateChannels", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateChannels
    * If set to true, members can add and update any channels.
    *
    * @param bool $val The value of the allowCreateUpdateChannels
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateChannels($val)
    {
        $this->_propDict["allowCreateUpdateChannels"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreateUpdateRemoveConnectors
    * If set to true, members can add, update, and remove connectors.
    *
    * @return bool The allowCreateUpdateRemoveConnectors
    */
    public function getAllowCreateUpdateRemoveConnectors()
    {
        if (array_key_exists("allowCreateUpdateRemoveConnectors", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateRemoveConnectors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateRemoveConnectors
    * If set to true, members can add, update, and remove connectors.
    *
    * @param bool $val The value of the allowCreateUpdateRemoveConnectors
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateRemoveConnectors($val)
    {
        $this->_propDict["allowCreateUpdateRemoveConnectors"] = $val;
        return $this;
    }
    /**
    * Gets the allowCreateUpdateRemoveTabs
    * If set to true, members can add, update, and remove tabs.
    *
    * @return bool The allowCreateUpdateRemoveTabs
    */
    public function getAllowCreateUpdateRemoveTabs()
    {
        if (array_key_exists("allowCreateUpdateRemoveTabs", $this->_propDict)) {
            return $this->_propDict["allowCreateUpdateRemoveTabs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowCreateUpdateRemoveTabs
    * If set to true, members can add, update, and remove tabs.
    *
    * @param bool $val The value of the allowCreateUpdateRemoveTabs
    *
    * @return TeamMemberSettings
    */
    public function setAllowCreateUpdateRemoveTabs($val)
    {
        $this->_propDict["allowCreateUpdateRemoveTabs"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteChannels
    * If set to true, members can delete channels.
    *
    * @return bool The allowDeleteChannels
    */
    public function getAllowDeleteChannels()
    {
        if (array_key_exists("allowDeleteChannels", $this->_propDict)) {
            return $this->_propDict["allowDeleteChannels"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteChannels
    * If set to true, members can delete channels.
    *
    * @param bool $val The value of the allowDeleteChannels
    *
    * @return TeamMemberSettings
    */
    public function setAllowDeleteChannels($val)
    {
        $this->_propDict["allowDeleteChannels"] = $val;
        return $this;
    }
}
