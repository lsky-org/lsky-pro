<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeliveryOptimizationConfiguration File
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
* WindowsDeliveryOptimizationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDeliveryOptimizationConfiguration extends DeviceConfiguration
{
    /**
    * Gets the backgroundDownloadFromHttpDelayInSeconds
    * Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
    *
    * @return int The backgroundDownloadFromHttpDelayInSeconds
    */
    public function getBackgroundDownloadFromHttpDelayInSeconds()
    {
        if (array_key_exists("backgroundDownloadFromHttpDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["backgroundDownloadFromHttpDelayInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the backgroundDownloadFromHttpDelayInSeconds
    * Specifies number of seconds to delay an HTTP source in a background download that is allowed to use peer-to-peer. Valid values 0 to 4294967295
    *
    * @param int $val The backgroundDownloadFromHttpDelayInSeconds
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setBackgroundDownloadFromHttpDelayInSeconds($val)
    {
        $this->_propDict["backgroundDownloadFromHttpDelayInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the bandwidthMode
    * Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
    *
    * @return DeliveryOptimizationBandwidth The bandwidthMode
    */
    public function getBandwidthMode()
    {
        if (array_key_exists("bandwidthMode", $this->_propDict)) {
            if (is_a($this->_propDict["bandwidthMode"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationBandwidth")) {
                return $this->_propDict["bandwidthMode"];
            } else {
                $this->_propDict["bandwidthMode"] = new DeliveryOptimizationBandwidth($this->_propDict["bandwidthMode"]);
                return $this->_propDict["bandwidthMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bandwidthMode
    * Specifies foreground and background bandwidth usage using percentages, absolutes, or hours.
    *
    * @param DeliveryOptimizationBandwidth $val The bandwidthMode
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setBandwidthMode($val)
    {
        $this->_propDict["bandwidthMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds
    * Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
    *
    * @return int The cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds
    */
    public function getCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds()
    {
        if (array_key_exists("cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds
    * Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a background download. Valid values 0 to 2592000.
    *
    * @param int $val The cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setCacheServerBackgroundDownloadFallbackToHttpDelayInSeconds($val)
    {
        $this->_propDict["cacheServerBackgroundDownloadFallbackToHttpDelayInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds
    * Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
    *
    * @return int The cacheServerForegroundDownloadFallbackToHttpDelayInSeconds
    */
    public function getCacheServerForegroundDownloadFallbackToHttpDelayInSeconds()
    {
        if (array_key_exists("cacheServerForegroundDownloadFallbackToHttpDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["cacheServerForegroundDownloadFallbackToHttpDelayInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cacheServerForegroundDownloadFallbackToHttpDelayInSeconds
    * Specifies number of seconds to delay a fall back from cache servers to an HTTP source for a foreground download. Valid values 0 to 2592000.​
    *
    * @param int $val The cacheServerForegroundDownloadFallbackToHttpDelayInSeconds
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setCacheServerForegroundDownloadFallbackToHttpDelayInSeconds($val)
    {
        $this->_propDict["cacheServerForegroundDownloadFallbackToHttpDelayInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the cacheServerHostNames
    * Specifies cache servers host names.
    *
    * @return string The cacheServerHostNames
    */
    public function getCacheServerHostNames()
    {
        if (array_key_exists("cacheServerHostNames", $this->_propDict)) {
            return $this->_propDict["cacheServerHostNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cacheServerHostNames
    * Specifies cache servers host names.
    *
    * @param string $val The cacheServerHostNames
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setCacheServerHostNames($val)
    {
        $this->_propDict["cacheServerHostNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the deliveryOptimizationMode
    * Specifies the download method that delivery optimization can use to manage network bandwidth consumption for large content distribution scenarios. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @return WindowsDeliveryOptimizationMode The deliveryOptimizationMode
    */
    public function getDeliveryOptimizationMode()
    {
        if (array_key_exists("deliveryOptimizationMode", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryOptimizationMode"], "\Beta\Microsoft\Graph\Model\WindowsDeliveryOptimizationMode")) {
                return $this->_propDict["deliveryOptimizationMode"];
            } else {
                $this->_propDict["deliveryOptimizationMode"] = new WindowsDeliveryOptimizationMode($this->_propDict["deliveryOptimizationMode"]);
                return $this->_propDict["deliveryOptimizationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deliveryOptimizationMode
    * Specifies the download method that delivery optimization can use to manage network bandwidth consumption for large content distribution scenarios. Possible values are: userDefined, httpOnly, httpWithPeeringNat, httpWithPeeringPrivateGroup, httpWithInternetPeering, simpleDownload, bypassMode.
    *
    * @param WindowsDeliveryOptimizationMode $val The deliveryOptimizationMode
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setDeliveryOptimizationMode($val)
    {
        $this->_propDict["deliveryOptimizationMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the foregroundDownloadFromHttpDelayInSeconds
    * Specifying 0 sets Delivery Optimization to manage this setting using the cloud service. Valid values 0 to 86400
    *
    * @return int The foregroundDownloadFromHttpDelayInSeconds
    */
    public function getForegroundDownloadFromHttpDelayInSeconds()
    {
        if (array_key_exists("foregroundDownloadFromHttpDelayInSeconds", $this->_propDict)) {
            return $this->_propDict["foregroundDownloadFromHttpDelayInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the foregroundDownloadFromHttpDelayInSeconds
    * Specifying 0 sets Delivery Optimization to manage this setting using the cloud service. Valid values 0 to 86400
    *
    * @param int $val The foregroundDownloadFromHttpDelayInSeconds
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setForegroundDownloadFromHttpDelayInSeconds($val)
    {
        $this->_propDict["foregroundDownloadFromHttpDelayInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the groupIdSource
    * The options set in this policy only apply to Delivery Optimization mode Group (2) download mode. If Group (2) isn't set as Download mode, this policy will be ignored. For option 3 - DHCP Option ID, the client will query DHCP Option ID 234 and use the returned GUID value as the Group ID.
    *
    * @return DeliveryOptimizationGroupIdSource The groupIdSource
    */
    public function getGroupIdSource()
    {
        if (array_key_exists("groupIdSource", $this->_propDict)) {
            if (is_a($this->_propDict["groupIdSource"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationGroupIdSource")) {
                return $this->_propDict["groupIdSource"];
            } else {
                $this->_propDict["groupIdSource"] = new DeliveryOptimizationGroupIdSource($this->_propDict["groupIdSource"]);
                return $this->_propDict["groupIdSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the groupIdSource
    * The options set in this policy only apply to Delivery Optimization mode Group (2) download mode. If Group (2) isn't set as Download mode, this policy will be ignored. For option 3 - DHCP Option ID, the client will query DHCP Option ID 234 and use the returned GUID value as the Group ID.
    *
    * @param DeliveryOptimizationGroupIdSource $val The groupIdSource
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setGroupIdSource($val)
    {
        $this->_propDict["groupIdSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximumCacheAgeInDays
    * Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
    *
    * @return int The maximumCacheAgeInDays
    */
    public function getMaximumCacheAgeInDays()
    {
        if (array_key_exists("maximumCacheAgeInDays", $this->_propDict)) {
            return $this->_propDict["maximumCacheAgeInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumCacheAgeInDays
    * Specifies the maximum time in days that each file is held in the Delivery Optimization cache after downloading successfully (0-3650). Valid values 0 to 3650
    *
    * @param int $val The maximumCacheAgeInDays
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMaximumCacheAgeInDays($val)
    {
        $this->_propDict["maximumCacheAgeInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumCacheSize
    * Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
    *
    * @return DeliveryOptimizationMaxCacheSize The maximumCacheSize
    */
    public function getMaximumCacheSize()
    {
        if (array_key_exists("maximumCacheSize", $this->_propDict)) {
            if (is_a($this->_propDict["maximumCacheSize"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationMaxCacheSize")) {
                return $this->_propDict["maximumCacheSize"];
            } else {
                $this->_propDict["maximumCacheSize"] = new DeliveryOptimizationMaxCacheSize($this->_propDict["maximumCacheSize"]);
                return $this->_propDict["maximumCacheSize"];
            }
        }
        return null;
    }
    
    /**
    * Sets the maximumCacheSize
    * Specifies the maximum cache size that Delivery Optimization either as a percentage or in GB.
    *
    * @param DeliveryOptimizationMaxCacheSize $val The maximumCacheSize
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMaximumCacheSize($val)
    {
        $this->_propDict["maximumCacheSize"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumBatteryPercentageAllowedToUpload
    * The default value is 0. The value 0 (zero) means "not limited" and the cloud service default value will be used. Valid values 0 to 100
    *
    * @return int The minimumBatteryPercentageAllowedToUpload
    */
    public function getMinimumBatteryPercentageAllowedToUpload()
    {
        if (array_key_exists("minimumBatteryPercentageAllowedToUpload", $this->_propDict)) {
            return $this->_propDict["minimumBatteryPercentageAllowedToUpload"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumBatteryPercentageAllowedToUpload
    * The default value is 0. The value 0 (zero) means "not limited" and the cloud service default value will be used. Valid values 0 to 100
    *
    * @param int $val The minimumBatteryPercentageAllowedToUpload
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMinimumBatteryPercentageAllowedToUpload($val)
    {
        $this->_propDict["minimumBatteryPercentageAllowedToUpload"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumDiskSizeAllowedToPeerInGigabytes
    * Recommended values: 64 GB to 256 GB. Valid values 1 to 100000
    *
    * @return int The minimumDiskSizeAllowedToPeerInGigabytes
    */
    public function getMinimumDiskSizeAllowedToPeerInGigabytes()
    {
        if (array_key_exists("minimumDiskSizeAllowedToPeerInGigabytes", $this->_propDict)) {
            return $this->_propDict["minimumDiskSizeAllowedToPeerInGigabytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumDiskSizeAllowedToPeerInGigabytes
    * Recommended values: 64 GB to 256 GB. Valid values 1 to 100000
    *
    * @param int $val The minimumDiskSizeAllowedToPeerInGigabytes
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMinimumDiskSizeAllowedToPeerInGigabytes($val)
    {
        $this->_propDict["minimumDiskSizeAllowedToPeerInGigabytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumFileSizeToCacheInMegabytes
    * Recommended values: 1 MB to 100,000 MB. Valid values 1 to 100000
    *
    * @return int The minimumFileSizeToCacheInMegabytes
    */
    public function getMinimumFileSizeToCacheInMegabytes()
    {
        if (array_key_exists("minimumFileSizeToCacheInMegabytes", $this->_propDict)) {
            return $this->_propDict["minimumFileSizeToCacheInMegabytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumFileSizeToCacheInMegabytes
    * Recommended values: 1 MB to 100,000 MB. Valid values 1 to 100000
    *
    * @param int $val The minimumFileSizeToCacheInMegabytes
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMinimumFileSizeToCacheInMegabytes($val)
    {
        $this->_propDict["minimumFileSizeToCacheInMegabytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumRamAllowedToPeerInGigabytes
    * Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
    *
    * @return int The minimumRamAllowedToPeerInGigabytes
    */
    public function getMinimumRamAllowedToPeerInGigabytes()
    {
        if (array_key_exists("minimumRamAllowedToPeerInGigabytes", $this->_propDict)) {
            return $this->_propDict["minimumRamAllowedToPeerInGigabytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumRamAllowedToPeerInGigabytes
    * Specifies the minimum RAM size in GB to use Peer Caching (1-100000). Valid values 1 to 100000
    *
    * @param int $val The minimumRamAllowedToPeerInGigabytes
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setMinimumRamAllowedToPeerInGigabytes($val)
    {
        $this->_propDict["minimumRamAllowedToPeerInGigabytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the modifyCacheLocation
    * Specifies the drive that Delivery Optimization should use for its cache.
    *
    * @return string The modifyCacheLocation
    */
    public function getModifyCacheLocation()
    {
        if (array_key_exists("modifyCacheLocation", $this->_propDict)) {
            return $this->_propDict["modifyCacheLocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modifyCacheLocation
    * Specifies the drive that Delivery Optimization should use for its cache.
    *
    * @param string $val The modifyCacheLocation
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setModifyCacheLocation($val)
    {
        $this->_propDict["modifyCacheLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the restrictPeerSelectionBy
    * Option 1 (Subnet mask) only applies to Delivery Optimization modes Download Mode LAN (1) and Group (2).
    *
    * @return DeliveryOptimizationRestrictPeerSelectionByOptions The restrictPeerSelectionBy
    */
    public function getRestrictPeerSelectionBy()
    {
        if (array_key_exists("restrictPeerSelectionBy", $this->_propDict)) {
            if (is_a($this->_propDict["restrictPeerSelectionBy"], "\Beta\Microsoft\Graph\Model\DeliveryOptimizationRestrictPeerSelectionByOptions")) {
                return $this->_propDict["restrictPeerSelectionBy"];
            } else {
                $this->_propDict["restrictPeerSelectionBy"] = new DeliveryOptimizationRestrictPeerSelectionByOptions($this->_propDict["restrictPeerSelectionBy"]);
                return $this->_propDict["restrictPeerSelectionBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the restrictPeerSelectionBy
    * Option 1 (Subnet mask) only applies to Delivery Optimization modes Download Mode LAN (1) and Group (2).
    *
    * @param DeliveryOptimizationRestrictPeerSelectionByOptions $val The restrictPeerSelectionBy
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setRestrictPeerSelectionBy($val)
    {
        $this->_propDict["restrictPeerSelectionBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the vpnPeerCaching
    * Specifies whether the device is allowed to participate in Peer Caching while connected via VPN to the domain network.
    *
    * @return Enablement The vpnPeerCaching
    */
    public function getVpnPeerCaching()
    {
        if (array_key_exists("vpnPeerCaching", $this->_propDict)) {
            if (is_a($this->_propDict["vpnPeerCaching"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["vpnPeerCaching"];
            } else {
                $this->_propDict["vpnPeerCaching"] = new Enablement($this->_propDict["vpnPeerCaching"]);
                return $this->_propDict["vpnPeerCaching"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vpnPeerCaching
    * Specifies whether the device is allowed to participate in Peer Caching while connected via VPN to the domain network.
    *
    * @param Enablement $val The vpnPeerCaching
    *
    * @return WindowsDeliveryOptimizationConfiguration
    */
    public function setVpnPeerCaching($val)
    {
        $this->_propDict["vpnPeerCaching"] = $val;
        return $this;
    }
    
}
