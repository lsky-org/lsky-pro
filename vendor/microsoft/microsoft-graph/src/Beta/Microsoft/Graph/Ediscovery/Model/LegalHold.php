<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LegalHold File
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
* LegalHold class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LegalHold extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contentQuery
    * KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    *
    * @return string The contentQuery
    */
    public function getContentQuery()
    {
        if (array_key_exists("contentQuery", $this->_propDict)) {
            return $this->_propDict["contentQuery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentQuery
    * KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    *
    * @param string $val The contentQuery
    *
    * @return LegalHold
    */
    public function setContentQuery($val)
    {
        $this->_propDict["contentQuery"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The user who created the legal hold.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The user who created the legal hold.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return LegalHold
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the legal hold was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The date and time the legal hold was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return LegalHold
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The legal hold description.
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
    * The legal hold description.
    *
    * @param string $val The description
    *
    * @return LegalHold
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the legal hold.
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
    * The display name of the legal hold.
    *
    * @param string $val The displayName
    *
    * @return LegalHold
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errors
    * Lists any errors that happened while placing the hold.
    *
    * @return string The errors
    */
    public function getErrors()
    {
        if (array_key_exists("errors", $this->_propDict)) {
            return $this->_propDict["errors"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errors
    * Lists any errors that happened while placing the hold.
    *
    * @param string $val The errors
    *
    * @return LegalHold
    */
    public function setErrors($val)
    {
        $this->_propDict["errors"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Indicates whether the hold is enabled and actively holding content.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Indicates whether the hold is enabled and actively holding content.
    *
    * @param bool $val The isEnabled
    *
    * @return LegalHold
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * the user who last modified the legal hold.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    * the user who last modified the legal hold.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return LegalHold
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the legal hold was last modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The date and time the legal hold was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return LegalHold
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
    *
    * @return LegalHoldStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Ediscovery\Model\LegalHoldStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new LegalHoldStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
    *
    * @param LegalHoldStatus $val The status
    *
    * @return LegalHold
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the siteSources
    * Data source entity for SharePoint sites associated with the legal hold.
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
    * Data source entity for SharePoint sites associated with the legal hold.
    *
    * @param SiteSource $val The siteSources
    *
    * @return LegalHold
    */
    public function setSiteSources($val)
    {
		$this->_propDict["siteSources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the unifiedGroupSources
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
    *
    * @param UnifiedGroupSource $val The unifiedGroupSources
    *
    * @return LegalHold
    */
    public function setUnifiedGroupSources($val)
    {
		$this->_propDict["unifiedGroupSources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSources
    * Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
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
    * Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
    *
    * @param UserSource $val The userSources
    *
    * @return LegalHold
    */
    public function setUserSources($val)
    {
		$this->_propDict["userSources"] = $val;
        return $this;
    }
    
}
