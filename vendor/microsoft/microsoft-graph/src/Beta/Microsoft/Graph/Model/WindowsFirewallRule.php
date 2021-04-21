<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsFirewallRule File
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
* WindowsFirewallRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsFirewallRule extends Entity
{

    /**
    * Gets the action
    * The action the rule enforces. If not specified, the default is Allowed. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new StateManagementSetting($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * The action the rule enforces. If not specified, the default is Allowed. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The value to assign to the action
    *
    * @return WindowsFirewallRule The WindowsFirewallRule
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
    /**
    * Gets the description
    * The description of the rule.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of the rule.
    *
    * @param string $val The value of the description
    *
    * @return WindowsFirewallRule
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of the rule. Does not need to be unique.
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
    * The display name of the rule. Does not need to be unique.
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsFirewallRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the edgeTraversal
    * Indicates whether edge traversal is enabled or disabled for this rule. The EdgeTraversal setting indicates that specific inbound traffic is allowed to tunnel through NATs and other edge devices using the Teredo tunneling technology. In order for this setting to work correctly, the application or service with the inbound firewall rule needs to support IPv6. The primary application of this setting allows listeners on the host to be globally addressable through a Teredo IPv6 address. New rules have the EdgeTraversal property disabled by default. Possible values are: notConfigured, blocked, allowed.
    *
    * @return StateManagementSetting The edgeTraversal
    */
    public function getEdgeTraversal()
    {
        if (array_key_exists("edgeTraversal", $this->_propDict)) {
            if (is_a($this->_propDict["edgeTraversal"], "\Beta\Microsoft\Graph\Model\StateManagementSetting")) {
                return $this->_propDict["edgeTraversal"];
            } else {
                $this->_propDict["edgeTraversal"] = new StateManagementSetting($this->_propDict["edgeTraversal"]);
                return $this->_propDict["edgeTraversal"];
            }
        }
        return null;
    }

    /**
    * Sets the edgeTraversal
    * Indicates whether edge traversal is enabled or disabled for this rule. The EdgeTraversal setting indicates that specific inbound traffic is allowed to tunnel through NATs and other edge devices using the Teredo tunneling technology. In order for this setting to work correctly, the application or service with the inbound firewall rule needs to support IPv6. The primary application of this setting allows listeners on the host to be globally addressable through a Teredo IPv6 address. New rules have the EdgeTraversal property disabled by default. Possible values are: notConfigured, blocked, allowed.
    *
    * @param StateManagementSetting $val The value to assign to the edgeTraversal
    *
    * @return WindowsFirewallRule The WindowsFirewallRule
    */
    public function setEdgeTraversal($val)
    {
        $this->_propDict["edgeTraversal"] = $val;
         return $this;
    }
    /**
    * Gets the filePath
    * The full file path of an app that's affected by the firewall rule.
    *
    * @return string The filePath
    */
    public function getFilePath()
    {
        if (array_key_exists("filePath", $this->_propDict)) {
            return $this->_propDict["filePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the filePath
    * The full file path of an app that's affected by the firewall rule.
    *
    * @param string $val The value of the filePath
    *
    * @return WindowsFirewallRule
    */
    public function setFilePath($val)
    {
        $this->_propDict["filePath"] = $val;
        return $this;
    }

    /**
    * Gets the interfaceTypes
    * The interface types of the rule. Possible values are: notConfigured, remoteAccess, wireless, lan.
    *
    * @return WindowsFirewallRuleInterfaceTypes The interfaceTypes
    */
    public function getInterfaceTypes()
    {
        if (array_key_exists("interfaceTypes", $this->_propDict)) {
            if (is_a($this->_propDict["interfaceTypes"], "\Beta\Microsoft\Graph\Model\WindowsFirewallRuleInterfaceTypes")) {
                return $this->_propDict["interfaceTypes"];
            } else {
                $this->_propDict["interfaceTypes"] = new WindowsFirewallRuleInterfaceTypes($this->_propDict["interfaceTypes"]);
                return $this->_propDict["interfaceTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the interfaceTypes
    * The interface types of the rule. Possible values are: notConfigured, remoteAccess, wireless, lan.
    *
    * @param WindowsFirewallRuleInterfaceTypes $val The value to assign to the interfaceTypes
    *
    * @return WindowsFirewallRule The WindowsFirewallRule
    */
    public function setInterfaceTypes($val)
    {
        $this->_propDict["interfaceTypes"] = $val;
         return $this;
    }
    /**
    * Gets the localAddressRanges
    * List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    *
    * @return string The localAddressRanges
    */
    public function getLocalAddressRanges()
    {
        if (array_key_exists("localAddressRanges", $this->_propDict)) {
            return $this->_propDict["localAddressRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localAddressRanges
    * List of local addresses covered by the rule. Default is any address. Valid tokens include:'' indicates any local address. If present, this must be the only token included.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    *
    * @param string $val The value of the localAddressRanges
    *
    * @return WindowsFirewallRule
    */
    public function setLocalAddressRanges($val)
    {
        $this->_propDict["localAddressRanges"] = $val;
        return $this;
    }
    /**
    * Gets the localPortRanges
    * List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    *
    * @return string The localPortRanges
    */
    public function getLocalPortRanges()
    {
        if (array_key_exists("localPortRanges", $this->_propDict)) {
            return $this->_propDict["localPortRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localPortRanges
    * List of local port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    *
    * @param string $val The value of the localPortRanges
    *
    * @return WindowsFirewallRule
    */
    public function setLocalPortRanges($val)
    {
        $this->_propDict["localPortRanges"] = $val;
        return $this;
    }
    /**
    * Gets the localUserAuthorizations
    * Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
    *
    * @return string The localUserAuthorizations
    */
    public function getLocalUserAuthorizations()
    {
        if (array_key_exists("localUserAuthorizations", $this->_propDict)) {
            return $this->_propDict["localUserAuthorizations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localUserAuthorizations
    * Specifies the list of authorized local users for the app container. This is a string in Security Descriptor Definition Language (SDDL) format.
    *
    * @param string $val The value of the localUserAuthorizations
    *
    * @return WindowsFirewallRule
    */
    public function setLocalUserAuthorizations($val)
    {
        $this->_propDict["localUserAuthorizations"] = $val;
        return $this;
    }
    /**
    * Gets the packageFamilyName
    * The package family name of a Microsoft Store application that's affected by the firewall rule.
    *
    * @return string The packageFamilyName
    */
    public function getPackageFamilyName()
    {
        if (array_key_exists("packageFamilyName", $this->_propDict)) {
            return $this->_propDict["packageFamilyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the packageFamilyName
    * The package family name of a Microsoft Store application that's affected by the firewall rule.
    *
    * @param string $val The value of the packageFamilyName
    *
    * @return WindowsFirewallRule
    */
    public function setPackageFamilyName($val)
    {
        $this->_propDict["packageFamilyName"] = $val;
        return $this;
    }

    /**
    * Gets the profileTypes
    * Specifies the profiles to which the rule belongs. If not specified, the default is All. Possible values are: notConfigured, domain, private, public.
    *
    * @return WindowsFirewallRuleNetworkProfileTypes The profileTypes
    */
    public function getProfileTypes()
    {
        if (array_key_exists("profileTypes", $this->_propDict)) {
            if (is_a($this->_propDict["profileTypes"], "\Beta\Microsoft\Graph\Model\WindowsFirewallRuleNetworkProfileTypes")) {
                return $this->_propDict["profileTypes"];
            } else {
                $this->_propDict["profileTypes"] = new WindowsFirewallRuleNetworkProfileTypes($this->_propDict["profileTypes"]);
                return $this->_propDict["profileTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the profileTypes
    * Specifies the profiles to which the rule belongs. If not specified, the default is All. Possible values are: notConfigured, domain, private, public.
    *
    * @param WindowsFirewallRuleNetworkProfileTypes $val The value to assign to the profileTypes
    *
    * @return WindowsFirewallRule The WindowsFirewallRule
    */
    public function setProfileTypes($val)
    {
        $this->_propDict["profileTypes"] = $val;
         return $this;
    }
    /**
    * Gets the protocol
    * 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
    *
    * @return int The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            return $this->_propDict["protocol"];
        } else {
            return null;
        }
    }

    /**
    * Sets the protocol
    * 0-255 number representing the IP protocol (TCP = 6, UDP = 17). If not specified, the default is All. Valid values 0 to 255
    *
    * @param int $val The value of the protocol
    *
    * @return WindowsFirewallRule
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
        return $this;
    }
    /**
    * Gets the remoteAddressRanges
    * List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    *
    * @return string The remoteAddressRanges
    */
    public function getRemoteAddressRanges()
    {
        if (array_key_exists("remoteAddressRanges", $this->_propDict)) {
            return $this->_propDict["remoteAddressRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remoteAddressRanges
    * List of tokens specifying the remote addresses covered by the rule. Tokens are case insensitive. Default is any address. Valid tokens include:'' indicates any remote address. If present, this must be the only token included.'Defaultgateway''DHCP''DNS''WINS''Intranet' (supported on Windows versions 1809+)'RmtIntranet' (supported on Windows versions 1809+)'Internet' (supported on Windows versions 1809+)'Ply2Renders' (supported on Windows versions 1809+)'LocalSubnet' indicates any local address on the local subnet.A subnet can be specified using either the subnet mask or network prefix notation. If neither a subnet mask nor a network prefix is specified, the subnet mask defaults to 255.255.255.255.A valid IPv6 address.An IPv4 address range in the format of 'start address - end address' with no spaces included.An IPv6 address range in the format of 'start address - end address' with no spaces included.
    *
    * @param string $val The value of the remoteAddressRanges
    *
    * @return WindowsFirewallRule
    */
    public function setRemoteAddressRanges($val)
    {
        $this->_propDict["remoteAddressRanges"] = $val;
        return $this;
    }
    /**
    * Gets the remotePortRanges
    * List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    *
    * @return string The remotePortRanges
    */
    public function getRemotePortRanges()
    {
        if (array_key_exists("remotePortRanges", $this->_propDict)) {
            return $this->_propDict["remotePortRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remotePortRanges
    * List of remote port ranges. For example, '100-120', '200', '300-320'. If not specified, the default is All.
    *
    * @param string $val The value of the remotePortRanges
    *
    * @return WindowsFirewallRule
    */
    public function setRemotePortRanges($val)
    {
        $this->_propDict["remotePortRanges"] = $val;
        return $this;
    }
    /**
    * Gets the serviceName
    * The name used in cases when a service, not an application, is sending or receiving traffic.
    *
    * @return string The serviceName
    */
    public function getServiceName()
    {
        if (array_key_exists("serviceName", $this->_propDict)) {
            return $this->_propDict["serviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceName
    * The name used in cases when a service, not an application, is sending or receiving traffic.
    *
    * @param string $val The value of the serviceName
    *
    * @return WindowsFirewallRule
    */
    public function setServiceName($val)
    {
        $this->_propDict["serviceName"] = $val;
        return $this;
    }

    /**
    * Gets the trafficDirection
    * The traffic direction that the rule is enabled for. If not specified, the default is Out. Possible values are: notConfigured, out, in.
    *
    * @return WindowsFirewallRuleTrafficDirectionType The trafficDirection
    */
    public function getTrafficDirection()
    {
        if (array_key_exists("trafficDirection", $this->_propDict)) {
            if (is_a($this->_propDict["trafficDirection"], "\Beta\Microsoft\Graph\Model\WindowsFirewallRuleTrafficDirectionType")) {
                return $this->_propDict["trafficDirection"];
            } else {
                $this->_propDict["trafficDirection"] = new WindowsFirewallRuleTrafficDirectionType($this->_propDict["trafficDirection"]);
                return $this->_propDict["trafficDirection"];
            }
        }
        return null;
    }

    /**
    * Sets the trafficDirection
    * The traffic direction that the rule is enabled for. If not specified, the default is Out. Possible values are: notConfigured, out, in.
    *
    * @param WindowsFirewallRuleTrafficDirectionType $val The value to assign to the trafficDirection
    *
    * @return WindowsFirewallRule The WindowsFirewallRule
    */
    public function setTrafficDirection($val)
    {
        $this->_propDict["trafficDirection"] = $val;
         return $this;
    }
}
