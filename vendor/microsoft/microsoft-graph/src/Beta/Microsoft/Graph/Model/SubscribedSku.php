<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SubscribedSku File
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
* SubscribedSku class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SubscribedSku extends Entity
{
    /**
    * Gets the appliesTo
    * For example, 'User' or 'Company'.
    *
    * @return string The appliesTo
    */
    public function getAppliesTo()
    {
        if (array_key_exists("appliesTo", $this->_propDict)) {
            return $this->_propDict["appliesTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appliesTo
    * For example, 'User' or 'Company'.
    *
    * @param string $val The appliesTo
    *
    * @return SubscribedSku
    */
    public function setAppliesTo($val)
    {
        $this->_propDict["appliesTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the capabilityStatus
    * Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut.
    *
    * @return string The capabilityStatus
    */
    public function getCapabilityStatus()
    {
        if (array_key_exists("capabilityStatus", $this->_propDict)) {
            return $this->_propDict["capabilityStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the capabilityStatus
    * Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut.
    *
    * @param string $val The capabilityStatus
    *
    * @return SubscribedSku
    */
    public function setCapabilityStatus($val)
    {
        $this->_propDict["capabilityStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the consumedUnits
    * The number of licenses that have been assigned.
    *
    * @return int The consumedUnits
    */
    public function getConsumedUnits()
    {
        if (array_key_exists("consumedUnits", $this->_propDict)) {
            return $this->_propDict["consumedUnits"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consumedUnits
    * The number of licenses that have been assigned.
    *
    * @param int $val The consumedUnits
    *
    * @return SubscribedSku
    */
    public function setConsumedUnits($val)
    {
        $this->_propDict["consumedUnits"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the prepaidUnits
    * Information about the number and status of prepaid licenses.
    *
    * @return LicenseUnitsDetail The prepaidUnits
    */
    public function getPrepaidUnits()
    {
        if (array_key_exists("prepaidUnits", $this->_propDict)) {
            if (is_a($this->_propDict["prepaidUnits"], "\Beta\Microsoft\Graph\Model\LicenseUnitsDetail")) {
                return $this->_propDict["prepaidUnits"];
            } else {
                $this->_propDict["prepaidUnits"] = new LicenseUnitsDetail($this->_propDict["prepaidUnits"]);
                return $this->_propDict["prepaidUnits"];
            }
        }
        return null;
    }
    
    /**
    * Sets the prepaidUnits
    * Information about the number and status of prepaid licenses.
    *
    * @param LicenseUnitsDetail $val The prepaidUnits
    *
    * @return SubscribedSku
    */
    public function setPrepaidUnits($val)
    {
        $this->_propDict["prepaidUnits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servicePlans
    * Information about the service plans that are available with the SKU. Not nullable
     *
     * @return array The servicePlans
     */
    public function getServicePlans()
    {
        if (array_key_exists("servicePlans", $this->_propDict)) {
           return $this->_propDict["servicePlans"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servicePlans
    * Information about the service plans that are available with the SKU. Not nullable
    *
    * @param ServicePlanInfo $val The servicePlans
    *
    * @return SubscribedSku
    */
    public function setServicePlans($val)
    {
		$this->_propDict["servicePlans"] = $val;
        return $this;
    }
    
    /**
    * Gets the skuId
    * The unique identifier (GUID) for the service SKU.
    *
    * @return string The skuId
    */
    public function getSkuId()
    {
        if (array_key_exists("skuId", $this->_propDict)) {
            return $this->_propDict["skuId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skuId
    * The unique identifier (GUID) for the service SKU.
    *
    * @param string $val The skuId
    *
    * @return SubscribedSku
    */
    public function setSkuId($val)
    {
        $this->_propDict["skuId"] = $val;
        return $this;
    }
    
    /**
    * Gets the skuPartNumber
    * The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
    *
    * @return string The skuPartNumber
    */
    public function getSkuPartNumber()
    {
        if (array_key_exists("skuPartNumber", $this->_propDict)) {
            return $this->_propDict["skuPartNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skuPartNumber
    * The SKU part number; for example: 'AAD_PREMIUM' or 'RMSBASIC'. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
    *
    * @param string $val The skuPartNumber
    *
    * @return SubscribedSku
    */
    public function setSkuPartNumber($val)
    {
        $this->_propDict["skuPartNumber"] = $val;
        return $this;
    }
    
}
