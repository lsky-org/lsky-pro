<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEndpoint File
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
* VirtualEndpoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEndpoint extends Entity
{

     /** 
     * Gets the cloudPCs
    * Cloud managed virtual desktops.
     *
     * @return array The cloudPCs
     */
    public function getCloudPCs()
    {
        if (array_key_exists("cloudPCs", $this->_propDict)) {
           return $this->_propDict["cloudPCs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cloudPCs
    * Cloud managed virtual desktops.
    *
    * @param CloudPC $val The cloudPCs
    *
    * @return VirtualEndpoint
    */
    public function setCloudPCs($val)
    {
		$this->_propDict["cloudPCs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceImages
    * The image resource on cloud PC.
     *
     * @return array The deviceImages
     */
    public function getDeviceImages()
    {
        if (array_key_exists("deviceImages", $this->_propDict)) {
           return $this->_propDict["deviceImages"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceImages
    * The image resource on cloud PC.
    *
    * @param CloudPcDeviceImage $val The deviceImages
    *
    * @return VirtualEndpoint
    */
    public function setDeviceImages($val)
    {
		$this->_propDict["deviceImages"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for cloud PCs.
     *
     * @return array The onPremisesConnections
     */
    public function getOnPremisesConnections()
    {
        if (array_key_exists("onPremisesConnections", $this->_propDict)) {
           return $this->_propDict["onPremisesConnections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onPremisesConnections
    * A defined collection of Azure resource information that can be used to establish on-premises network connectivity for cloud PCs.
    *
    * @param CloudPcOnPremisesConnection $val The onPremisesConnections
    *
    * @return VirtualEndpoint
    */
    public function setOnPremisesConnections($val)
    {
		$this->_propDict["onPremisesConnections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioningPolicies
    * cloud PC provisioning policy.
     *
     * @return array The provisioningPolicies
     */
    public function getProvisioningPolicies()
    {
        if (array_key_exists("provisioningPolicies", $this->_propDict)) {
           return $this->_propDict["provisioningPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisioningPolicies
    * cloud PC provisioning policy.
    *
    * @param CloudPcProvisioningPolicy $val The provisioningPolicies
    *
    * @return VirtualEndpoint
    */
    public function setProvisioningPolicies($val)
    {
		$this->_propDict["provisioningPolicies"] = $val;
        return $this;
    }
    
}
