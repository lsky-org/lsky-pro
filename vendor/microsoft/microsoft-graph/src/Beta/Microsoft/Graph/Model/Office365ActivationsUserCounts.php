<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActivationsUserCounts File
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
* Office365ActivationsUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ActivationsUserCounts extends Entity
{
    /**
    * Gets the activated
    * The number of users who have activated the product.
    *
    * @return int The activated
    */
    public function getActivated()
    {
        if (array_key_exists("activated", $this->_propDict)) {
            return $this->_propDict["activated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activated
    * The number of users who have activated the product.
    *
    * @param int $val The activated
    *
    * @return Office365ActivationsUserCounts
    */
    public function setActivated($val)
    {
        $this->_propDict["activated"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the assigned
    * The number of users have been assigned for the product license.
    *
    * @return int The assigned
    */
    public function getAssigned()
    {
        if (array_key_exists("assigned", $this->_propDict)) {
            return $this->_propDict["assigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assigned
    * The number of users have been assigned for the product license.
    *
    * @param int $val The assigned
    *
    * @return Office365ActivationsUserCounts
    */
    public function setAssigned($val)
    {
        $this->_propDict["assigned"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the productType
    * The product type such as 'Microsoft 365 ProPlus' or 'Project Client'.
    *
    * @return string The productType
    */
    public function getProductType()
    {
        if (array_key_exists("productType", $this->_propDict)) {
            return $this->_propDict["productType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productType
    * The product type such as 'Microsoft 365 ProPlus' or 'Project Client'.
    *
    * @param string $val The productType
    *
    * @return Office365ActivationsUserCounts
    */
    public function setProductType($val)
    {
        $this->_propDict["productType"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ActivationsUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedComputerActivation
    * The number of users who have used the product on a shared computer.
    *
    * @return int The sharedComputerActivation
    */
    public function getSharedComputerActivation()
    {
        if (array_key_exists("sharedComputerActivation", $this->_propDict)) {
            return $this->_propDict["sharedComputerActivation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedComputerActivation
    * The number of users who have used the product on a shared computer.
    *
    * @param int $val The sharedComputerActivation
    *
    * @return Office365ActivationsUserCounts
    */
    public function setSharedComputerActivation($val)
    {
        $this->_propDict["sharedComputerActivation"] = intval($val);
        return $this;
    }
    
}
