<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcProvisioningPolicy File
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
* CloudPcProvisioningPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcProvisioningPolicy extends Entity
{
    /**
    * Gets the description
    * The provisioning policy description.
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
    * The provisioning policy description.
    *
    * @param string $val The description
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the provisioning policy.
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
    * The display name for the provisioning policy.
    *
    * @param string $val The displayName
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the imageDisplayName
    * The display name for the OS image you’re provisioning.
    *
    * @return string The imageDisplayName
    */
    public function getImageDisplayName()
    {
        if (array_key_exists("imageDisplayName", $this->_propDict)) {
            return $this->_propDict["imageDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imageDisplayName
    * The display name for the OS image you’re provisioning.
    *
    * @param string $val The imageDisplayName
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageDisplayName($val)
    {
        $this->_propDict["imageDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the imageId
    * The ID of the OS image you want to provision on cloud PCs. The format for a gallery type image is: {publisher_offer_sku}.
    *
    * @return string The imageId
    */
    public function getImageId()
    {
        if (array_key_exists("imageId", $this->_propDict)) {
            return $this->_propDict["imageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the imageId
    * The ID of the OS image you want to provision on cloud PCs. The format for a gallery type image is: {publisher_offer_sku}.
    *
    * @param string $val The imageId
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageId($val)
    {
        $this->_propDict["imageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the imageType
    * The type of OS image (custom or gallery) you want to provision on cloud PCs. Possible values are: gallery, custom.
    *
    * @return CloudPcProvisioningPolicyImageType The imageType
    */
    public function getImageType()
    {
        if (array_key_exists("imageType", $this->_propDict)) {
            if (is_a($this->_propDict["imageType"], "\Beta\Microsoft\Graph\Model\CloudPcProvisioningPolicyImageType")) {
                return $this->_propDict["imageType"];
            } else {
                $this->_propDict["imageType"] = new CloudPcProvisioningPolicyImageType($this->_propDict["imageType"]);
                return $this->_propDict["imageType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the imageType
    * The type of OS image (custom or gallery) you want to provision on cloud PCs. Possible values are: gallery, custom.
    *
    * @param CloudPcProvisioningPolicyImageType $val The imageType
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setImageType($val)
    {
        $this->_propDict["imageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesConnectionId
    * The ID of the cloudPcOnPremisesConnection. To ensure that cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the cloud PC service.
    *
    * @return string The onPremisesConnectionId
    */
    public function getOnPremisesConnectionId()
    {
        if (array_key_exists("onPremisesConnectionId", $this->_propDict)) {
            return $this->_propDict["onPremisesConnectionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesConnectionId
    * The ID of the cloudPcOnPremisesConnection. To ensure that cloud PCs have network connectivity and that they domain join, choose a connection with a virtual network that’s validated by the cloud PC service.
    *
    * @param string $val The onPremisesConnectionId
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setOnPremisesConnectionId($val)
    {
        $this->_propDict["onPremisesConnectionId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
    * A defined collection of provisioning policy assignments. Returned only on $expand. See an example of getting the assignments relationship.
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    * A defined collection of provisioning policy assignments. Returned only on $expand. See an example of getting the assignments relationship.
    *
    * @param CloudPcProvisioningPolicyAssignment $val The assignments
    *
    * @return CloudPcProvisioningPolicy
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}
