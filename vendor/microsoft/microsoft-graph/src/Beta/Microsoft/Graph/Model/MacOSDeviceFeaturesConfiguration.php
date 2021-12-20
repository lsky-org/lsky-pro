<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSDeviceFeaturesConfiguration File
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
* MacOSDeviceFeaturesConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase
{
    /**
    * Gets the adminShowHostInfo
    * Whether to show admin host information on the login window.
    *
    * @return bool The adminShowHostInfo
    */
    public function getAdminShowHostInfo()
    {
        if (array_key_exists("adminShowHostInfo", $this->_propDict)) {
            return $this->_propDict["adminShowHostInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adminShowHostInfo
    * Whether to show admin host information on the login window.
    *
    * @param bool $val The adminShowHostInfo
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAdminShowHostInfo($val)
    {
        $this->_propDict["adminShowHostInfo"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the appAssociatedDomains
    * Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
     *
     * @return array The appAssociatedDomains
     */
    public function getAppAssociatedDomains()
    {
        if (array_key_exists("appAssociatedDomains", $this->_propDict)) {
           return $this->_propDict["appAssociatedDomains"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appAssociatedDomains
    * Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSAssociatedDomainsItem $val The appAssociatedDomains
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAppAssociatedDomains($val)
    {
		$this->_propDict["appAssociatedDomains"] = $val;
        return $this;
    }
    

     /** 
     * Gets the associatedDomains
    * DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
     *
     * @return array The associatedDomains
     */
    public function getAssociatedDomains()
    {
        if (array_key_exists("associatedDomains", $this->_propDict)) {
           return $this->_propDict["associatedDomains"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the associatedDomains
    * DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
    *
    * @param KeyValuePair $val The associatedDomains
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAssociatedDomains($val)
    {
		$this->_propDict["associatedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHidden
    * Whether to show the name and password dialog or a list of users on the login window.
    *
    * @return bool The authorizedUsersListHidden
    */
    public function getAuthorizedUsersListHidden()
    {
        if (array_key_exists("authorizedUsersListHidden", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHidden
    * Whether to show the name and password dialog or a list of users on the login window.
    *
    * @param bool $val The authorizedUsersListHidden
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHidden($val)
    {
        $this->_propDict["authorizedUsersListHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideAdminUsers
    * Whether to hide admin users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideAdminUsers
    */
    public function getAuthorizedUsersListHideAdminUsers()
    {
        if (array_key_exists("authorizedUsersListHideAdminUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideAdminUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideAdminUsers
    * Whether to hide admin users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideAdminUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideAdminUsers($val)
    {
        $this->_propDict["authorizedUsersListHideAdminUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideLocalUsers
    * Whether to show only network and system users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideLocalUsers
    */
    public function getAuthorizedUsersListHideLocalUsers()
    {
        if (array_key_exists("authorizedUsersListHideLocalUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideLocalUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideLocalUsers
    * Whether to show only network and system users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideLocalUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideLocalUsers($val)
    {
        $this->_propDict["authorizedUsersListHideLocalUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListHideMobileAccounts
    * Whether to hide mobile users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListHideMobileAccounts
    */
    public function getAuthorizedUsersListHideMobileAccounts()
    {
        if (array_key_exists("authorizedUsersListHideMobileAccounts", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListHideMobileAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListHideMobileAccounts
    * Whether to hide mobile users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListHideMobileAccounts
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListHideMobileAccounts($val)
    {
        $this->_propDict["authorizedUsersListHideMobileAccounts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListIncludeNetworkUsers
    * Whether to show network users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListIncludeNetworkUsers
    */
    public function getAuthorizedUsersListIncludeNetworkUsers()
    {
        if (array_key_exists("authorizedUsersListIncludeNetworkUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListIncludeNetworkUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListIncludeNetworkUsers
    * Whether to show network users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListIncludeNetworkUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListIncludeNetworkUsers($val)
    {
        $this->_propDict["authorizedUsersListIncludeNetworkUsers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authorizedUsersListShowOtherManagedUsers
    * Whether to show other users in the authorized users list on the login window.
    *
    * @return bool The authorizedUsersListShowOtherManagedUsers
    */
    public function getAuthorizedUsersListShowOtherManagedUsers()
    {
        if (array_key_exists("authorizedUsersListShowOtherManagedUsers", $this->_propDict)) {
            return $this->_propDict["authorizedUsersListShowOtherManagedUsers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authorizedUsersListShowOtherManagedUsers
    * Whether to show other users in the authorized users list on the login window.
    *
    * @param bool $val The authorizedUsersListShowOtherManagedUsers
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAuthorizedUsersListShowOtherManagedUsers($val)
    {
        $this->_propDict["authorizedUsersListShowOtherManagedUsers"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the autoLaunchItems
    * List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     *
     * @return array The autoLaunchItems
     */
    public function getAutoLaunchItems()
    {
        if (array_key_exists("autoLaunchItems", $this->_propDict)) {
           return $this->_propDict["autoLaunchItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the autoLaunchItems
    * List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSLaunchItem $val The autoLaunchItems
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setAutoLaunchItems($val)
    {
		$this->_propDict["autoLaunchItems"] = $val;
        return $this;
    }
    
    /**
    * Gets the consoleAccessDisabled
    * Whether the Other user will disregard use of the `&amp;gt;console&amp;gt; special user name.
    *
    * @return bool The consoleAccessDisabled
    */
    public function getConsoleAccessDisabled()
    {
        if (array_key_exists("consoleAccessDisabled", $this->_propDict)) {
            return $this->_propDict["consoleAccessDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consoleAccessDisabled
    * Whether the Other user will disregard use of the `&amp;gt;console&amp;gt; special user name.
    *
    * @param bool $val The consoleAccessDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setConsoleAccessDisabled($val)
    {
        $this->_propDict["consoleAccessDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingBlockDeletion
    * Prevents content caches from purging content to free up disk space for other apps.
    *
    * @return bool The contentCachingBlockDeletion
    */
    public function getContentCachingBlockDeletion()
    {
        if (array_key_exists("contentCachingBlockDeletion", $this->_propDict)) {
            return $this->_propDict["contentCachingBlockDeletion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingBlockDeletion
    * Prevents content caches from purging content to free up disk space for other apps.
    *
    * @param bool $val The contentCachingBlockDeletion
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingBlockDeletion($val)
    {
        $this->_propDict["contentCachingBlockDeletion"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the contentCachingClientListenRanges
    * A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
     *
     * @return array The contentCachingClientListenRanges
     */
    public function getContentCachingClientListenRanges()
    {
        if (array_key_exists("contentCachingClientListenRanges", $this->_propDict)) {
           return $this->_propDict["contentCachingClientListenRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentCachingClientListenRanges
    * A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
    *
    * @param IpRange $val The contentCachingClientListenRanges
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingClientListenRanges($val)
    {
		$this->_propDict["contentCachingClientListenRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingClientPolicy
    * Determines the method in which content caching servers will listen for clients. Possible values are: notConfigured, clientsInLocalNetwork, clientsWithSamePublicIpAddress, clientsInCustomLocalNetworks, clientsInCustomLocalNetworksWithFallback.
    *
    * @return MacOSContentCachingClientPolicy The contentCachingClientPolicy
    */
    public function getContentCachingClientPolicy()
    {
        if (array_key_exists("contentCachingClientPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["contentCachingClientPolicy"], "\Beta\Microsoft\Graph\Model\MacOSContentCachingClientPolicy")) {
                return $this->_propDict["contentCachingClientPolicy"];
            } else {
                $this->_propDict["contentCachingClientPolicy"] = new MacOSContentCachingClientPolicy($this->_propDict["contentCachingClientPolicy"]);
                return $this->_propDict["contentCachingClientPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentCachingClientPolicy
    * Determines the method in which content caching servers will listen for clients. Possible values are: notConfigured, clientsInLocalNetwork, clientsWithSamePublicIpAddress, clientsInCustomLocalNetworks, clientsInCustomLocalNetworksWithFallback.
    *
    * @param MacOSContentCachingClientPolicy $val The contentCachingClientPolicy
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingClientPolicy($val)
    {
        $this->_propDict["contentCachingClientPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingDataPath
    * The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
    *
    * @return string The contentCachingDataPath
    */
    public function getContentCachingDataPath()
    {
        if (array_key_exists("contentCachingDataPath", $this->_propDict)) {
            return $this->_propDict["contentCachingDataPath"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingDataPath
    * The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
    *
    * @param string $val The contentCachingDataPath
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingDataPath($val)
    {
        $this->_propDict["contentCachingDataPath"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingDisableConnectionSharing
    * Disables internet connection sharing.
    *
    * @return bool The contentCachingDisableConnectionSharing
    */
    public function getContentCachingDisableConnectionSharing()
    {
        if (array_key_exists("contentCachingDisableConnectionSharing", $this->_propDict)) {
            return $this->_propDict["contentCachingDisableConnectionSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingDisableConnectionSharing
    * Disables internet connection sharing.
    *
    * @param bool $val The contentCachingDisableConnectionSharing
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingDisableConnectionSharing($val)
    {
        $this->_propDict["contentCachingDisableConnectionSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingEnabled
    * Enables content caching and prevents it from being disabled by the user.
    *
    * @return bool The contentCachingEnabled
    */
    public function getContentCachingEnabled()
    {
        if (array_key_exists("contentCachingEnabled", $this->_propDict)) {
            return $this->_propDict["contentCachingEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingEnabled
    * Enables content caching and prevents it from being disabled by the user.
    *
    * @param bool $val The contentCachingEnabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingEnabled($val)
    {
        $this->_propDict["contentCachingEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingForceConnectionSharing
    * Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
    *
    * @return bool The contentCachingForceConnectionSharing
    */
    public function getContentCachingForceConnectionSharing()
    {
        if (array_key_exists("contentCachingForceConnectionSharing", $this->_propDict)) {
            return $this->_propDict["contentCachingForceConnectionSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingForceConnectionSharing
    * Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
    *
    * @param bool $val The contentCachingForceConnectionSharing
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingForceConnectionSharing($val)
    {
        $this->_propDict["contentCachingForceConnectionSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingKeepAwake
    * Prevent the device from sleeping if content caching is enabled.
    *
    * @return bool The contentCachingKeepAwake
    */
    public function getContentCachingKeepAwake()
    {
        if (array_key_exists("contentCachingKeepAwake", $this->_propDict)) {
            return $this->_propDict["contentCachingKeepAwake"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingKeepAwake
    * Prevent the device from sleeping if content caching is enabled.
    *
    * @param bool $val The contentCachingKeepAwake
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingKeepAwake($val)
    {
        $this->_propDict["contentCachingKeepAwake"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingLogClientIdentities
    * Enables logging of IP addresses and ports of clients that request cached content.
    *
    * @return bool The contentCachingLogClientIdentities
    */
    public function getContentCachingLogClientIdentities()
    {
        if (array_key_exists("contentCachingLogClientIdentities", $this->_propDict)) {
            return $this->_propDict["contentCachingLogClientIdentities"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingLogClientIdentities
    * Enables logging of IP addresses and ports of clients that request cached content.
    *
    * @param bool $val The contentCachingLogClientIdentities
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingLogClientIdentities($val)
    {
        $this->_propDict["contentCachingLogClientIdentities"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingMaxSizeBytes
    * The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
    *
    * @return int The contentCachingMaxSizeBytes
    */
    public function getContentCachingMaxSizeBytes()
    {
        if (array_key_exists("contentCachingMaxSizeBytes", $this->_propDict)) {
            return $this->_propDict["contentCachingMaxSizeBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingMaxSizeBytes
    * The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
    *
    * @param int $val The contentCachingMaxSizeBytes
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingMaxSizeBytes($val)
    {
        $this->_propDict["contentCachingMaxSizeBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingParents
    * A list of IP addresses representing parent content caches.
    *
    * @return string The contentCachingParents
    */
    public function getContentCachingParents()
    {
        if (array_key_exists("contentCachingParents", $this->_propDict)) {
            return $this->_propDict["contentCachingParents"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingParents
    * A list of IP addresses representing parent content caches.
    *
    * @param string $val The contentCachingParents
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingParents($val)
    {
        $this->_propDict["contentCachingParents"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingParentSelectionPolicy
    * Determines the method in which content caching servers will select parents if multiple are present. Possible values are: notConfigured, roundRobin, firstAvailable, urlPathHash, random, stickyAvailable.
    *
    * @return MacOSContentCachingParentSelectionPolicy The contentCachingParentSelectionPolicy
    */
    public function getContentCachingParentSelectionPolicy()
    {
        if (array_key_exists("contentCachingParentSelectionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["contentCachingParentSelectionPolicy"], "\Beta\Microsoft\Graph\Model\MacOSContentCachingParentSelectionPolicy")) {
                return $this->_propDict["contentCachingParentSelectionPolicy"];
            } else {
                $this->_propDict["contentCachingParentSelectionPolicy"] = new MacOSContentCachingParentSelectionPolicy($this->_propDict["contentCachingParentSelectionPolicy"]);
                return $this->_propDict["contentCachingParentSelectionPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentCachingParentSelectionPolicy
    * Determines the method in which content caching servers will select parents if multiple are present. Possible values are: notConfigured, roundRobin, firstAvailable, urlPathHash, random, stickyAvailable.
    *
    * @param MacOSContentCachingParentSelectionPolicy $val The contentCachingParentSelectionPolicy
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingParentSelectionPolicy($val)
    {
        $this->_propDict["contentCachingParentSelectionPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contentCachingPeerFilterRanges
    * A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
     *
     * @return array The contentCachingPeerFilterRanges
     */
    public function getContentCachingPeerFilterRanges()
    {
        if (array_key_exists("contentCachingPeerFilterRanges", $this->_propDict)) {
           return $this->_propDict["contentCachingPeerFilterRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentCachingPeerFilterRanges
    * A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
    *
    * @param IpRange $val The contentCachingPeerFilterRanges
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingPeerFilterRanges($val)
    {
		$this->_propDict["contentCachingPeerFilterRanges"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contentCachingPeerListenRanges
    * A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
     *
     * @return array The contentCachingPeerListenRanges
     */
    public function getContentCachingPeerListenRanges()
    {
        if (array_key_exists("contentCachingPeerListenRanges", $this->_propDict)) {
           return $this->_propDict["contentCachingPeerListenRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentCachingPeerListenRanges
    * A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
    *
    * @param IpRange $val The contentCachingPeerListenRanges
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingPeerListenRanges($val)
    {
		$this->_propDict["contentCachingPeerListenRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingPeerPolicy
    * Determines the method in which content caches peer with other caches. Possible values are: notConfigured, peersInLocalNetwork, peersWithSamePublicIpAddress, peersInCustomLocalNetworks.
    *
    * @return MacOSContentCachingPeerPolicy The contentCachingPeerPolicy
    */
    public function getContentCachingPeerPolicy()
    {
        if (array_key_exists("contentCachingPeerPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["contentCachingPeerPolicy"], "\Beta\Microsoft\Graph\Model\MacOSContentCachingPeerPolicy")) {
                return $this->_propDict["contentCachingPeerPolicy"];
            } else {
                $this->_propDict["contentCachingPeerPolicy"] = new MacOSContentCachingPeerPolicy($this->_propDict["contentCachingPeerPolicy"]);
                return $this->_propDict["contentCachingPeerPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentCachingPeerPolicy
    * Determines the method in which content caches peer with other caches. Possible values are: notConfigured, peersInLocalNetwork, peersWithSamePublicIpAddress, peersInCustomLocalNetworks.
    *
    * @param MacOSContentCachingPeerPolicy $val The contentCachingPeerPolicy
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingPeerPolicy($val)
    {
        $this->_propDict["contentCachingPeerPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingPort
    * Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
    *
    * @return int The contentCachingPort
    */
    public function getContentCachingPort()
    {
        if (array_key_exists("contentCachingPort", $this->_propDict)) {
            return $this->_propDict["contentCachingPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingPort
    * Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
    *
    * @param int $val The contentCachingPort
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingPort($val)
    {
        $this->_propDict["contentCachingPort"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the contentCachingPublicRanges
    * A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
     *
     * @return array The contentCachingPublicRanges
     */
    public function getContentCachingPublicRanges()
    {
        if (array_key_exists("contentCachingPublicRanges", $this->_propDict)) {
           return $this->_propDict["contentCachingPublicRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentCachingPublicRanges
    * A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
    *
    * @param IpRange $val The contentCachingPublicRanges
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingPublicRanges($val)
    {
		$this->_propDict["contentCachingPublicRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentCachingShowAlerts
    * Display content caching alerts as system notifications.
    *
    * @return bool The contentCachingShowAlerts
    */
    public function getContentCachingShowAlerts()
    {
        if (array_key_exists("contentCachingShowAlerts", $this->_propDict)) {
            return $this->_propDict["contentCachingShowAlerts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentCachingShowAlerts
    * Display content caching alerts as system notifications.
    *
    * @param bool $val The contentCachingShowAlerts
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingShowAlerts($val)
    {
        $this->_propDict["contentCachingShowAlerts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the contentCachingType
    * Determines what type of content is allowed to be cached by Apple's content caching service. Possible values are: notConfigured, userContentOnly, sharedContentOnly.
    *
    * @return MacOSContentCachingType The contentCachingType
    */
    public function getContentCachingType()
    {
        if (array_key_exists("contentCachingType", $this->_propDict)) {
            if (is_a($this->_propDict["contentCachingType"], "\Beta\Microsoft\Graph\Model\MacOSContentCachingType")) {
                return $this->_propDict["contentCachingType"];
            } else {
                $this->_propDict["contentCachingType"] = new MacOSContentCachingType($this->_propDict["contentCachingType"]);
                return $this->_propDict["contentCachingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contentCachingType
    * Determines what type of content is allowed to be cached by Apple's content caching service. Possible values are: notConfigured, userContentOnly, sharedContentOnly.
    *
    * @param MacOSContentCachingType $val The contentCachingType
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setContentCachingType($val)
    {
        $this->_propDict["contentCachingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginWindowText
    * Custom text to be displayed on the login window.
    *
    * @return string The loginWindowText
    */
    public function getLoginWindowText()
    {
        if (array_key_exists("loginWindowText", $this->_propDict)) {
            return $this->_propDict["loginWindowText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginWindowText
    * Custom text to be displayed on the login window.
    *
    * @param string $val The loginWindowText
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setLoginWindowText($val)
    {
        $this->_propDict["loginWindowText"] = $val;
        return $this;
    }
    
    /**
    * Gets the logOutDisabledWhileLoggedIn
    * Whether the Log Out menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The logOutDisabledWhileLoggedIn
    */
    public function getLogOutDisabledWhileLoggedIn()
    {
        if (array_key_exists("logOutDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["logOutDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the logOutDisabledWhileLoggedIn
    * Whether the Log Out menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The logOutDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setLogOutDisabledWhileLoggedIn($val)
    {
        $this->_propDict["logOutDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macOSSingleSignOnExtension
    * Gets or sets a single sign-on extension profile.
    *
    * @return MacOSSingleSignOnExtension The macOSSingleSignOnExtension
    */
    public function getMacOSSingleSignOnExtension()
    {
        if (array_key_exists("macOSSingleSignOnExtension", $this->_propDict)) {
            if (is_a($this->_propDict["macOSSingleSignOnExtension"], "\Beta\Microsoft\Graph\Model\MacOSSingleSignOnExtension")) {
                return $this->_propDict["macOSSingleSignOnExtension"];
            } else {
                $this->_propDict["macOSSingleSignOnExtension"] = new MacOSSingleSignOnExtension($this->_propDict["macOSSingleSignOnExtension"]);
                return $this->_propDict["macOSSingleSignOnExtension"];
            }
        }
        return null;
    }
    
    /**
    * Sets the macOSSingleSignOnExtension
    * Gets or sets a single sign-on extension profile.
    *
    * @param MacOSSingleSignOnExtension $val The macOSSingleSignOnExtension
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setMacOSSingleSignOnExtension($val)
    {
        $this->_propDict["macOSSingleSignOnExtension"] = $val;
        return $this;
    }
    
    /**
    * Gets the powerOffDisabledWhileLoggedIn
    * Whether the Power Off menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The powerOffDisabledWhileLoggedIn
    */
    public function getPowerOffDisabledWhileLoggedIn()
    {
        if (array_key_exists("powerOffDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["powerOffDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the powerOffDisabledWhileLoggedIn
    * Whether the Power Off menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The powerOffDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setPowerOffDisabledWhileLoggedIn($val)
    {
        $this->_propDict["powerOffDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restartDisabled
    * Whether to hide the Restart button item on the login window.
    *
    * @return bool The restartDisabled
    */
    public function getRestartDisabled()
    {
        if (array_key_exists("restartDisabled", $this->_propDict)) {
            return $this->_propDict["restartDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restartDisabled
    * Whether to hide the Restart button item on the login window.
    *
    * @param bool $val The restartDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setRestartDisabled($val)
    {
        $this->_propDict["restartDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the restartDisabledWhileLoggedIn
    * Whether the Restart menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The restartDisabledWhileLoggedIn
    */
    public function getRestartDisabledWhileLoggedIn()
    {
        if (array_key_exists("restartDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["restartDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the restartDisabledWhileLoggedIn
    * Whether the Restart menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The restartDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setRestartDisabledWhileLoggedIn($val)
    {
        $this->_propDict["restartDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the screenLockDisableImmediate
    * Whether to disable the immediate screen lock functions.
    *
    * @return bool The screenLockDisableImmediate
    */
    public function getScreenLockDisableImmediate()
    {
        if (array_key_exists("screenLockDisableImmediate", $this->_propDict)) {
            return $this->_propDict["screenLockDisableImmediate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the screenLockDisableImmediate
    * Whether to disable the immediate screen lock functions.
    *
    * @param bool $val The screenLockDisableImmediate
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setScreenLockDisableImmediate($val)
    {
        $this->_propDict["screenLockDisableImmediate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shutDownDisabled
    * Whether to hide the Shut Down button item on the login window.
    *
    * @return bool The shutDownDisabled
    */
    public function getShutDownDisabled()
    {
        if (array_key_exists("shutDownDisabled", $this->_propDict)) {
            return $this->_propDict["shutDownDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shutDownDisabled
    * Whether to hide the Shut Down button item on the login window.
    *
    * @param bool $val The shutDownDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setShutDownDisabled($val)
    {
        $this->_propDict["shutDownDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the shutDownDisabledWhileLoggedIn
    * Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
    *
    * @return bool The shutDownDisabledWhileLoggedIn
    */
    public function getShutDownDisabledWhileLoggedIn()
    {
        if (array_key_exists("shutDownDisabledWhileLoggedIn", $this->_propDict)) {
            return $this->_propDict["shutDownDisabledWhileLoggedIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shutDownDisabledWhileLoggedIn
    * Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
    *
    * @param bool $val The shutDownDisabledWhileLoggedIn
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setShutDownDisabledWhileLoggedIn($val)
    {
        $this->_propDict["shutDownDisabledWhileLoggedIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the singleSignOnExtension
    * Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
    *
    * @return SingleSignOnExtension The singleSignOnExtension
    */
    public function getSingleSignOnExtension()
    {
        if (array_key_exists("singleSignOnExtension", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnExtension"], "\Beta\Microsoft\Graph\Model\SingleSignOnExtension")) {
                return $this->_propDict["singleSignOnExtension"];
            } else {
                $this->_propDict["singleSignOnExtension"] = new SingleSignOnExtension($this->_propDict["singleSignOnExtension"]);
                return $this->_propDict["singleSignOnExtension"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnExtension
    * Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
    *
    * @param SingleSignOnExtension $val The singleSignOnExtension
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setSingleSignOnExtension($val)
    {
        $this->_propDict["singleSignOnExtension"] = $val;
        return $this;
    }
    
    /**
    * Gets the sleepDisabled
    * Whether to hide the Sleep menu item on the login window.
    *
    * @return bool The sleepDisabled
    */
    public function getSleepDisabled()
    {
        if (array_key_exists("sleepDisabled", $this->_propDict)) {
            return $this->_propDict["sleepDisabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sleepDisabled
    * Whether to hide the Sleep menu item on the login window.
    *
    * @param bool $val The sleepDisabled
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setSleepDisabled($val)
    {
        $this->_propDict["sleepDisabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the singleSignOnExtensionPkinitCertificate
    * PKINIT Certificate for the authentication with single sign-on extensions.
    *
    * @return MacOSCertificateProfileBase The singleSignOnExtensionPkinitCertificate
    */
    public function getSingleSignOnExtensionPkinitCertificate()
    {
        if (array_key_exists("singleSignOnExtensionPkinitCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnExtensionPkinitCertificate"], "\Beta\Microsoft\Graph\Model\MacOSCertificateProfileBase")) {
                return $this->_propDict["singleSignOnExtensionPkinitCertificate"];
            } else {
                $this->_propDict["singleSignOnExtensionPkinitCertificate"] = new MacOSCertificateProfileBase($this->_propDict["singleSignOnExtensionPkinitCertificate"]);
                return $this->_propDict["singleSignOnExtensionPkinitCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnExtensionPkinitCertificate
    * PKINIT Certificate for the authentication with single sign-on extensions.
    *
    * @param MacOSCertificateProfileBase $val The singleSignOnExtensionPkinitCertificate
    *
    * @return MacOSDeviceFeaturesConfiguration
    */
    public function setSingleSignOnExtensionPkinitCertificate($val)
    {
        $this->_propDict["singleSignOnExtensionPkinitCertificate"] = $val;
        return $this;
    }
    
}
