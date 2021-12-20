<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphCase File
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
* GraphCase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphCase extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the closedBy
    * The user who closed the case.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The closedBy
    */
    public function getClosedBy()
    {
        if (array_key_exists("closedBy", $this->_propDict)) {
            if (is_a($this->_propDict["closedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["closedBy"];
            } else {
                $this->_propDict["closedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["closedBy"]);
                return $this->_propDict["closedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedBy
    * The user who closed the case.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The closedBy
    *
    * @return Case
    */
    public function setClosedBy($val)
    {
        $this->_propDict["closedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The closedDateTime
    */
    public function getClosedDateTime()
    {
        if (array_key_exists("closedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closedDateTime"], "\DateTime")) {
                return $this->_propDict["closedDateTime"];
            } else {
                $this->_propDict["closedDateTime"] = new \DateTime($this->_propDict["closedDateTime"]);
                return $this->_propDict["closedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closedDateTime
    * The date and time when the case was closed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The closedDateTime
    *
    * @return Case
    */
    public function setClosedDateTime($val)
    {
        $this->_propDict["closedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Case
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The case description.
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
    * The case description.
    *
    * @param string $val The description
    *
    * @return Case
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The case name.
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
    * The case name.
    *
    * @param string $val The displayName
    *
    * @return Case
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * The external case number for customer reference.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * The external case number for customer reference.
    *
    * @param string $val The externalId
    *
    * @return Case
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * The last user who modified the entity.
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
    * The last user who modified the entity.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return Case
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The latest date and time when the case was modified. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Case
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
    *
    * @return CaseStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Ediscovery\Model\CaseStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CaseStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The case status. Possible values are unknown, active, pendingDelete, closing, closed, and closedWithError. For details, see the following table.
    *
    * @param CaseStatus $val The status
    *
    * @return Case
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the custodians
     *
     * @return array The custodians
     */
    public function getCustodians()
    {
        if (array_key_exists("custodians", $this->_propDict)) {
           return $this->_propDict["custodians"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the custodians
    *
    * @param Custodian $val The custodians
    *
    * @return Case
    */
    public function setCustodians($val)
    {
		$this->_propDict["custodians"] = $val;
        return $this;
    }
    

     /** 
     * Gets the legalHolds
     *
     * @return array The legalHolds
     */
    public function getLegalHolds()
    {
        if (array_key_exists("legalHolds", $this->_propDict)) {
           return $this->_propDict["legalHolds"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the legalHolds
    *
    * @param LegalHold $val The legalHolds
    *
    * @return Case
    */
    public function setLegalHolds($val)
    {
		$this->_propDict["legalHolds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the noncustodialDataSources
     *
     * @return array The noncustodialDataSources
     */
    public function getNoncustodialDataSources()
    {
        if (array_key_exists("noncustodialDataSources", $this->_propDict)) {
           return $this->_propDict["noncustodialDataSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the noncustodialDataSources
    *
    * @param NoncustodialDataSource $val The noncustodialDataSources
    *
    * @return Case
    */
    public function setNoncustodialDataSources($val)
    {
		$this->_propDict["noncustodialDataSources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    *
    * @param CaseOperation $val The operations
    *
    * @return Case
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reviewSets
     *
     * @return array The reviewSets
     */
    public function getReviewSets()
    {
        if (array_key_exists("reviewSets", $this->_propDict)) {
           return $this->_propDict["reviewSets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewSets
    *
    * @param ReviewSet $val The reviewSets
    *
    * @return Case
    */
    public function setReviewSets($val)
    {
		$this->_propDict["reviewSets"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    *
    * @return Settings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Ediscovery\Model\Settings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Settings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    *
    * @param Settings $val The settings
    *
    * @return Case
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sourceCollections
    * Returns a list of sourceCollection objects associated with this case.
     *
     * @return array The sourceCollections
     */
    public function getSourceCollections()
    {
        if (array_key_exists("sourceCollections", $this->_propDict)) {
           return $this->_propDict["sourceCollections"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sourceCollections
    * Returns a list of sourceCollection objects associated with this case.
    *
    * @param SourceCollection $val The sourceCollections
    *
    * @return Case
    */
    public function setSourceCollections($val)
    {
		$this->_propDict["sourceCollections"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tags
    * Returns a list of tag objects associated to this case.
     *
     * @return array The tags
     */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
           return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tags
    * Returns a list of tag objects associated to this case.
    *
    * @param Tag $val The tags
    *
    * @return Case
    */
    public function setTags($val)
    {
		$this->_propDict["tags"] = $val;
        return $this;
    }
    
}
