<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemFacet File
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
* ItemFacet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemFacet extends Entity
{
    /**
    * Gets the allowedAudiences
    * The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
    *
    * @return AllowedAudiences The allowedAudiences
    */
    public function getAllowedAudiences()
    {
        if (array_key_exists("allowedAudiences", $this->_propDict)) {
            if (is_a($this->_propDict["allowedAudiences"], "\Beta\Microsoft\Graph\Model\AllowedAudiences")) {
                return $this->_propDict["allowedAudiences"];
            } else {
                $this->_propDict["allowedAudiences"] = new AllowedAudiences($this->_propDict["allowedAudiences"]);
                return $this->_propDict["allowedAudiences"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allowedAudiences
    * The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
    *
    * @param AllowedAudiences $val The allowedAudiences
    *
    * @return ItemFacet
    */
    public function setAllowedAudiences($val)
    {
        $this->_propDict["allowedAudiences"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Provides the identifier of the user and/or application that created the entity.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Provides the identifier of the user and/or application that created the entity.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return ItemFacet
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Provides the dateTimeOffset for when the entity was created.
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
    * Provides the dateTimeOffset for when the entity was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ItemFacet
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the inference
    * Contains inference detail if the entity is inferred by the creating or modifying application.
    *
    * @return InferenceData The inference
    */
    public function getInference()
    {
        if (array_key_exists("inference", $this->_propDict)) {
            if (is_a($this->_propDict["inference"], "\Beta\Microsoft\Graph\Model\InferenceData")) {
                return $this->_propDict["inference"];
            } else {
                $this->_propDict["inference"] = new InferenceData($this->_propDict["inference"]);
                return $this->_propDict["inference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the inference
    * Contains inference detail if the entity is inferred by the creating or modifying application.
    *
    * @param InferenceData $val The inference
    *
    * @return ItemFacet
    */
    public function setInference($val)
    {
        $this->_propDict["inference"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSearchable
    *
    * @return bool The isSearchable
    */
    public function getIsSearchable()
    {
        if (array_key_exists("isSearchable", $this->_propDict)) {
            return $this->_propDict["isSearchable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSearchable
    *
    * @param bool $val The isSearchable
    *
    * @return ItemFacet
    */
    public function setIsSearchable($val)
    {
        $this->_propDict["isSearchable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * Provides the identifier of the user and/or application that last modified the entity.
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    * Provides the identifier of the user and/or application that last modified the entity.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return ItemFacet
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Provides the dateTimeOffset for when the entity was created.
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
    * Provides the dateTimeOffset for when the entity was created.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return ItemFacet
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the source
    * Where the values within an entity originated if synced from another service.
    *
    * @return PersonDataSources The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\PersonDataSources")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new PersonDataSources($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }
    
    /**
    * Sets the source
    * Where the values within an entity originated if synced from another service.
    *
    * @param PersonDataSources $val The source
    *
    * @return ItemFacet
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    
}
