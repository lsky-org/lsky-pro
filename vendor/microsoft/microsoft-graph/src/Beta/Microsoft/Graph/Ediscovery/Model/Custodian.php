<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Custodian File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* Custodian class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Custodian extends DataSourceContainer
{
    /**
    * Gets the acknowledgedDateTime
    * Date and time the custodian acknowledged a hold notification.
    *
    * @return \DateTime The acknowledgedDateTime
    */
    public function getAcknowledgedDateTime()
    {
        if (array_key_exists("acknowledgedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acknowledgedDateTime"], "\DateTime")) {
                return $this->_propDict["acknowledgedDateTime"];
            } else {
                $this->_propDict["acknowledgedDateTime"] = new \DateTime($this->_propDict["acknowledgedDateTime"]);
                return $this->_propDict["acknowledgedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the acknowledgedDateTime
    * Date and time the custodian acknowledged a hold notification.
    *
    * @param \DateTime $val The acknowledgedDateTime
    *
    * @return Custodian
    */
    public function setAcknowledgedDateTime($val)
    {
        $this->_propDict["acknowledgedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the applyHoldToSources
    * Identifies whether a custodian's sources were placed on hold during creation.
    *
    * @return bool The applyHoldToSources
    */
    public function getApplyHoldToSources()
    {
        if (array_key_exists("applyHoldToSources", $this->_propDict)) {
            return $this->_propDict["applyHoldToSources"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applyHoldToSources
    * Identifies whether a custodian's sources were placed on hold during creation.
    *
    * @param bool $val The applyHoldToSources
    *
    * @return Custodian
    */
    public function setApplyHoldToSources($val)
    {
        $this->_propDict["applyHoldToSources"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the email
    * Email address of the custodian.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * Email address of the custodian.
    *
    * @param string $val The email
    *
    * @return Custodian
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    

     /** 
     * Gets the siteSources
    * Data source entity for SharePoint sites associated with the custodian.
     *
     * @return array The siteSources
     */
    public function getSiteSources()
    {
        if (array_key_exists("siteSources", $this->_propDict)) {
           return $this->_propDict["siteSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the siteSources
    * Data source entity for SharePoint sites associated with the custodian.
    *
    * @param SiteSource $val The siteSources
    *
    * @return Custodian
    */
    public function setSiteSources($val)
    {
		$this->_propDict["siteSources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the unifiedGroupSources
    * Data source entity for groups associated with the custodian.
     *
     * @return array The unifiedGroupSources
     */
    public function getUnifiedGroupSources()
    {
        if (array_key_exists("unifiedGroupSources", $this->_propDict)) {
           return $this->_propDict["unifiedGroupSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the unifiedGroupSources
    * Data source entity for groups associated with the custodian.
    *
    * @param UnifiedGroupSource $val The unifiedGroupSources
    *
    * @return Custodian
    */
    public function setUnifiedGroupSources($val)
    {
		$this->_propDict["unifiedGroupSources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSources
    * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
     *
     * @return array The userSources
     */
    public function getUserSources()
    {
        if (array_key_exists("userSources", $this->_propDict)) {
           return $this->_propDict["userSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userSources
    * Data source entity for a the custodian. This is the container for a custodian's mailbox and OneDrive for Business site.
    *
    * @param UserSource $val The userSources
    *
    * @return Custodian
    */
    public function setUserSources($val)
    {
		$this->_propDict["userSources"] = $val;
        return $this;
    }
    
}
