<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcOnPremisesConnection File
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
* CloudPcOnPremisesConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcOnPremisesConnection extends Entity
{
    /**
    * Gets the adDomainName
    * The fully qualified domain name (FQDN) of the Active Directory domain you want to join.
    *
    * @return string The adDomainName
    */
    public function getAdDomainName()
    {
        if (array_key_exists("adDomainName", $this->_propDict)) {
            return $this->_propDict["adDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainName
    * The fully qualified domain name (FQDN) of the Active Directory domain you want to join.
    *
    * @param string $val The adDomainName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainName($val)
    {
        $this->_propDict["adDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the adDomainPassword
    * The password associated with adDomainUsername.
    *
    * @return string The adDomainPassword
    */
    public function getAdDomainPassword()
    {
        if (array_key_exists("adDomainPassword", $this->_propDict)) {
            return $this->_propDict["adDomainPassword"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainPassword
    * The password associated with adDomainUsername.
    *
    * @param string $val The adDomainPassword
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainPassword($val)
    {
        $this->_propDict["adDomainPassword"] = $val;
        return $this;
    }
    
    /**
    * Gets the adDomainUsername
    * The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com.
    *
    * @return string The adDomainUsername
    */
    public function getAdDomainUsername()
    {
        if (array_key_exists("adDomainUsername", $this->_propDict)) {
            return $this->_propDict["adDomainUsername"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the adDomainUsername
    * The username of an Active Directory account (user or service account) that has permissions to create computer objects in Active Directory. Required format: admin@contoso.com.
    *
    * @param string $val The adDomainUsername
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setAdDomainUsername($val)
    {
        $this->_propDict["adDomainUsername"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the on-premises connection.
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
    * The display name for the on-premises connection.
    *
    * @param string $val The displayName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the healthCheckStatus
    * The status of the most recent health check done on the on-premises connection. For example, if status is 'passed', the on-premises connection has passed all checks run by the service. Possible values are: pending, running, passed, failed, unknownFutureValue. Read-only.
    *
    * @return CloudPcOnPremisesConnectionStatus The healthCheckStatus
    */
    public function getHealthCheckStatus()
    {
        if (array_key_exists("healthCheckStatus", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatus"], "\Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatus")) {
                return $this->_propDict["healthCheckStatus"];
            } else {
                $this->_propDict["healthCheckStatus"] = new CloudPcOnPremisesConnectionStatus($this->_propDict["healthCheckStatus"]);
                return $this->_propDict["healthCheckStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthCheckStatus
    * The status of the most recent health check done on the on-premises connection. For example, if status is 'passed', the on-premises connection has passed all checks run by the service. Possible values are: pending, running, passed, failed, unknownFutureValue. Read-only.
    *
    * @param CloudPcOnPremisesConnectionStatus $val The healthCheckStatus
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setHealthCheckStatus($val)
    {
        $this->_propDict["healthCheckStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the healthCheckStatusDetails
    * The details of the connection's health checks and the corresponding results. Returned only on $select.For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an on-premises connection, including healthCheckStatusDetails. Read-only.
    *
    * @return CloudPcOnPremisesConnectionStatusDetails The healthCheckStatusDetails
    */
    public function getHealthCheckStatusDetails()
    {
        if (array_key_exists("healthCheckStatusDetails", $this->_propDict)) {
            if (is_a($this->_propDict["healthCheckStatusDetails"], "\Beta\Microsoft\Graph\Model\CloudPcOnPremisesConnectionStatusDetails")) {
                return $this->_propDict["healthCheckStatusDetails"];
            } else {
                $this->_propDict["healthCheckStatusDetails"] = new CloudPcOnPremisesConnectionStatusDetails($this->_propDict["healthCheckStatusDetails"]);
                return $this->_propDict["healthCheckStatusDetails"];
            }
        }
        return null;
    }
    
    /**
    * Sets the healthCheckStatusDetails
    * The details of the connection's health checks and the corresponding results. Returned only on $select.For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an on-premises connection, including healthCheckStatusDetails. Read-only.
    *
    * @param CloudPcOnPremisesConnectionStatusDetails $val The healthCheckStatusDetails
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setHealthCheckStatusDetails($val)
    {
        $this->_propDict["healthCheckStatusDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the inUse
    * When true, the on-premises connection is in use. When false, the connection is not in use. You cannot delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an on-premises connection, including healthCheckStatusDetails. Read-only.
    *
    * @return bool The inUse
    */
    public function getInUse()
    {
        if (array_key_exists("inUse", $this->_propDict)) {
            return $this->_propDict["inUse"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the inUse
    * When true, the on-premises connection is in use. When false, the connection is not in use. You cannot delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an on-premises connection, including healthCheckStatusDetails. Read-only.
    *
    * @param bool $val The inUse
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setInUse($val)
    {
        $this->_propDict["inUse"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the organizationalUnit
    * The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
    *
    * @return string The organizationalUnit
    */
    public function getOrganizationalUnit()
    {
        if (array_key_exists("organizationalUnit", $this->_propDict)) {
            return $this->_propDict["organizationalUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the organizationalUnit
    * The organizational unit (OU) in which the computer account is created. If left null, the OU that’s configured as the default (a well-known computer object container) in your Active Directory domain (OU) is used. Optional.
    *
    * @param string $val The organizationalUnit
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setOrganizationalUnit($val)
    {
        $this->_propDict["organizationalUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceGroupId
    * The ID of the target resource group. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}'.
    *
    * @return string The resourceGroupId
    */
    public function getResourceGroupId()
    {
        if (array_key_exists("resourceGroupId", $this->_propDict)) {
            return $this->_propDict["resourceGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceGroupId
    * The ID of the target resource group. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}'.
    *
    * @param string $val The resourceGroupId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setResourceGroupId($val)
    {
        $this->_propDict["resourceGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subnetId
    * The ID of the target subnet. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}'.
    *
    * @return string The subnetId
    */
    public function getSubnetId()
    {
        if (array_key_exists("subnetId", $this->_propDict)) {
            return $this->_propDict["subnetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subnetId
    * The ID of the target subnet. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}'.
    *
    * @param string $val The subnetId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubnetId($val)
    {
        $this->_propDict["subnetId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptionId
    * The ID of the target Azure subscription that’s associated with your tenant.
    *
    * @return string The subscriptionId
    */
    public function getSubscriptionId()
    {
        if (array_key_exists("subscriptionId", $this->_propDict)) {
            return $this->_propDict["subscriptionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subscriptionId
    * The ID of the target Azure subscription that’s associated with your tenant.
    *
    * @param string $val The subscriptionId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubscriptionId($val)
    {
        $this->_propDict["subscriptionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptionName
    * The name of the target Azure subscription. Read-only.
    *
    * @return string The subscriptionName
    */
    public function getSubscriptionName()
    {
        if (array_key_exists("subscriptionName", $this->_propDict)) {
            return $this->_propDict["subscriptionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subscriptionName
    * The name of the target Azure subscription. Read-only.
    *
    * @param string $val The subscriptionName
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setSubscriptionName($val)
    {
        $this->_propDict["subscriptionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the virtualNetworkId
    * The ID of the target virtual network. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}'.
    *
    * @return string The virtualNetworkId
    */
    public function getVirtualNetworkId()
    {
        if (array_key_exists("virtualNetworkId", $this->_propDict)) {
            return $this->_propDict["virtualNetworkId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the virtualNetworkId
    * The ID of the target virtual network. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}'.
    *
    * @param string $val The virtualNetworkId
    *
    * @return CloudPcOnPremisesConnection
    */
    public function setVirtualNetworkId($val)
    {
        $this->_propDict["virtualNetworkId"] = $val;
        return $this;
    }
    
}
