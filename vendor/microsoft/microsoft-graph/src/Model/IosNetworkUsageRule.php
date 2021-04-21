<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosNetworkUsageRule File
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
* IosNetworkUsageRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosNetworkUsageRule extends Entity
{
    /**
    * Gets the cellularDataBlocked
    * If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
    *
    * @return bool The cellularDataBlocked
    */
    public function getCellularDataBlocked()
    {
        if (array_key_exists("cellularDataBlocked", $this->_propDict)) {
            return $this->_propDict["cellularDataBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularDataBlocked
    * If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
    *
    * @param bool $val The value of the cellularDataBlocked
    *
    * @return IosNetworkUsageRule
    */
    public function setCellularDataBlocked($val)
    {
        $this->_propDict["cellularDataBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the cellularDataBlockWhenRoaming
    * If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
    *
    * @return bool The cellularDataBlockWhenRoaming
    */
    public function getCellularDataBlockWhenRoaming()
    {
        if (array_key_exists("cellularDataBlockWhenRoaming", $this->_propDict)) {
            return $this->_propDict["cellularDataBlockWhenRoaming"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularDataBlockWhenRoaming
    * If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
    *
    * @param bool $val The value of the cellularDataBlockWhenRoaming
    *
    * @return IosNetworkUsageRule
    */
    public function setCellularDataBlockWhenRoaming($val)
    {
        $this->_propDict["cellularDataBlockWhenRoaming"] = $val;
        return $this;
    }

    /**
    * Gets the managedApps
    * Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
    *
    * @return AppListItem The managedApps
    */
    public function getManagedApps()
    {
        if (array_key_exists("managedApps", $this->_propDict)) {
            if (is_a($this->_propDict["managedApps"], "\Microsoft\Graph\Model\AppListItem")) {
                return $this->_propDict["managedApps"];
            } else {
                $this->_propDict["managedApps"] = new AppListItem($this->_propDict["managedApps"]);
                return $this->_propDict["managedApps"];
            }
        }
        return null;
    }

    /**
    * Sets the managedApps
    * Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The value to assign to the managedApps
    *
    * @return IosNetworkUsageRule The IosNetworkUsageRule
    */
    public function setManagedApps($val)
    {
        $this->_propDict["managedApps"] = $val;
         return $this;
    }
}
