<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileApp File
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
* MobileApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileApp extends Entity
{
    /**
    * Gets the createdDateTime
    * The date and time the app was created.
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
    * The date and time the app was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return MobileApp
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the dependentAppCount
    * The total number of dependencies the child app has.
    *
    * @return int The dependentAppCount
    */
    public function getDependentAppCount()
    {
        if (array_key_exists("dependentAppCount", $this->_propDict)) {
            return $this->_propDict["dependentAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dependentAppCount
    * The total number of dependencies the child app has.
    *
    * @param int $val The dependentAppCount
    *
    * @return MobileApp
    */
    public function setDependentAppCount($val)
    {
        $this->_propDict["dependentAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the app.
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
    * The description of the app.
    *
    * @param string $val The description
    *
    * @return MobileApp
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the developer
    * The developer of the app.
    *
    * @return string The developer
    */
    public function getDeveloper()
    {
        if (array_key_exists("developer", $this->_propDict)) {
            return $this->_propDict["developer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the developer
    * The developer of the app.
    *
    * @param string $val The developer
    *
    * @return MobileApp
    */
    public function setDeveloper($val)
    {
        $this->_propDict["developer"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The admin provided or imported title of the app.
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
    * The admin provided or imported title of the app.
    *
    * @param string $val The displayName
    *
    * @return MobileApp
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the informationUrl
    * The more information Url.
    *
    * @return string The informationUrl
    */
    public function getInformationUrl()
    {
        if (array_key_exists("informationUrl", $this->_propDict)) {
            return $this->_propDict["informationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the informationUrl
    * The more information Url.
    *
    * @param string $val The informationUrl
    *
    * @return MobileApp
    */
    public function setInformationUrl($val)
    {
        $this->_propDict["informationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAssigned
    * The value indicating whether the app is assigned to at least one group.
    *
    * @return bool The isAssigned
    */
    public function getIsAssigned()
    {
        if (array_key_exists("isAssigned", $this->_propDict)) {
            return $this->_propDict["isAssigned"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAssigned
    * The value indicating whether the app is assigned to at least one group.
    *
    * @param bool $val The isAssigned
    *
    * @return MobileApp
    */
    public function setIsAssigned($val)
    {
        $this->_propDict["isAssigned"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isFeatured
    * The value indicating whether the app is marked as featured by the admin.
    *
    * @return bool The isFeatured
    */
    public function getIsFeatured()
    {
        if (array_key_exists("isFeatured", $this->_propDict)) {
            return $this->_propDict["isFeatured"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFeatured
    * The value indicating whether the app is marked as featured by the admin.
    *
    * @param bool $val The isFeatured
    *
    * @return MobileApp
    */
    public function setIsFeatured($val)
    {
        $this->_propDict["isFeatured"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the largeIcon
    * The large icon, to be displayed in the app details and used for upload of the icon.
    *
    * @return MimeContent The largeIcon
    */
    public function getLargeIcon()
    {
        if (array_key_exists("largeIcon", $this->_propDict)) {
            if (is_a($this->_propDict["largeIcon"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["largeIcon"];
            } else {
                $this->_propDict["largeIcon"] = new MimeContent($this->_propDict["largeIcon"]);
                return $this->_propDict["largeIcon"];
            }
        }
        return null;
    }
    
    /**
    * Sets the largeIcon
    * The large icon, to be displayed in the app details and used for upload of the icon.
    *
    * @param MimeContent $val The largeIcon
    *
    * @return MobileApp
    */
    public function setLargeIcon($val)
    {
        $this->_propDict["largeIcon"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The date and time the app was last modified.
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
    * The date and time the app was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return MobileApp
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the notes
    * Notes for the app.
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    * Notes for the app.
    *
    * @param string $val The notes
    *
    * @return MobileApp
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    * The owner of the app.
    *
    * @return string The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the owner
    * The owner of the app.
    *
    * @param string $val The owner
    *
    * @return MobileApp
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the privacyInformationUrl
    * The privacy statement Url.
    *
    * @return string The privacyInformationUrl
    */
    public function getPrivacyInformationUrl()
    {
        if (array_key_exists("privacyInformationUrl", $this->_propDict)) {
            return $this->_propDict["privacyInformationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the privacyInformationUrl
    * The privacy statement Url.
    *
    * @param string $val The privacyInformationUrl
    *
    * @return MobileApp
    */
    public function setPrivacyInformationUrl($val)
    {
        $this->_propDict["privacyInformationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    * The publisher of the app.
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    * The publisher of the app.
    *
    * @param string $val The publisher
    *
    * @return MobileApp
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishingState
    * The publishing state for the app. The app cannot be assigned unless the app is published. Possible values are: notPublished, processing, published.
    *
    * @return MobileAppPublishingState The publishingState
    */
    public function getPublishingState()
    {
        if (array_key_exists("publishingState", $this->_propDict)) {
            if (is_a($this->_propDict["publishingState"], "\Beta\Microsoft\Graph\Model\MobileAppPublishingState")) {
                return $this->_propDict["publishingState"];
            } else {
                $this->_propDict["publishingState"] = new MobileAppPublishingState($this->_propDict["publishingState"]);
                return $this->_propDict["publishingState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishingState
    * The publishing state for the app. The app cannot be assigned unless the app is published. Possible values are: notPublished, processing, published.
    *
    * @param MobileAppPublishingState $val The publishingState
    *
    * @return MobileApp
    */
    public function setPublishingState($val)
    {
        $this->_propDict["publishingState"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of scope tag ids for this mobile app.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of scope tag ids for this mobile app.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return MobileApp
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the supersededAppCount
    * The total number of apps this app is directly or indirectly superseded by.
    *
    * @return int The supersededAppCount
    */
    public function getSupersededAppCount()
    {
        if (array_key_exists("supersededAppCount", $this->_propDict)) {
            return $this->_propDict["supersededAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supersededAppCount
    * The total number of apps this app is directly or indirectly superseded by.
    *
    * @param int $val The supersededAppCount
    *
    * @return MobileApp
    */
    public function setSupersededAppCount($val)
    {
        $this->_propDict["supersededAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the supersedingAppCount
    * The total number of apps this app directly or indirectly supersedes.
    *
    * @return int The supersedingAppCount
    */
    public function getSupersedingAppCount()
    {
        if (array_key_exists("supersedingAppCount", $this->_propDict)) {
            return $this->_propDict["supersedingAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supersedingAppCount
    * The total number of apps this app directly or indirectly supersedes.
    *
    * @param int $val The supersedingAppCount
    *
    * @return MobileApp
    */
    public function setSupersedingAppCount($val)
    {
        $this->_propDict["supersedingAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the uploadState
    * The upload state.
    *
    * @return int The uploadState
    */
    public function getUploadState()
    {
        if (array_key_exists("uploadState", $this->_propDict)) {
            return $this->_propDict["uploadState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uploadState
    * The upload state.
    *
    * @param int $val The uploadState
    *
    * @return MobileApp
    */
    public function setUploadState($val)
    {
        $this->_propDict["uploadState"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the assignments
    * The list of group assignments for this mobile app.
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
    * The list of group assignments for this mobile app.
    *
    * @param MobileAppAssignment $val The assignments
    *
    * @return MobileApp
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * The list of categories for this app.
     *
     * @return array The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categories
    * The list of categories for this app.
    *
    * @param MobileAppCategory $val The categories
    *
    * @return MobileApp
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceStatuses
    * The list of installation states for this mobile app.
     *
     * @return array The deviceStatuses
     */
    public function getDeviceStatuses()
    {
        if (array_key_exists("deviceStatuses", $this->_propDict)) {
           return $this->_propDict["deviceStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceStatuses
    * The list of installation states for this mobile app.
    *
    * @param MobileAppInstallStatus $val The deviceStatuses
    *
    * @return MobileApp
    */
    public function setDeviceStatuses($val)
    {
		$this->_propDict["deviceStatuses"] = $val;
        return $this;
    }
    
    /**
    * Gets the installSummary
    * Mobile App Install Summary.
    *
    * @return MobileAppInstallSummary The installSummary
    */
    public function getInstallSummary()
    {
        if (array_key_exists("installSummary", $this->_propDict)) {
            if (is_a($this->_propDict["installSummary"], "\Beta\Microsoft\Graph\Model\MobileAppInstallSummary")) {
                return $this->_propDict["installSummary"];
            } else {
                $this->_propDict["installSummary"] = new MobileAppInstallSummary($this->_propDict["installSummary"]);
                return $this->_propDict["installSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installSummary
    * Mobile App Install Summary.
    *
    * @param MobileAppInstallSummary $val The installSummary
    *
    * @return MobileApp
    */
    public function setInstallSummary($val)
    {
        $this->_propDict["installSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the relationships
    * List of relationships for this mobile app.
     *
     * @return array The relationships
     */
    public function getRelationships()
    {
        if (array_key_exists("relationships", $this->_propDict)) {
           return $this->_propDict["relationships"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the relationships
    * List of relationships for this mobile app.
    *
    * @param MobileAppRelationship $val The relationships
    *
    * @return MobileApp
    */
    public function setRelationships($val)
    {
		$this->_propDict["relationships"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userStatuses
    * The list of installation states for this mobile app.
     *
     * @return array The userStatuses
     */
    public function getUserStatuses()
    {
        if (array_key_exists("userStatuses", $this->_propDict)) {
           return $this->_propDict["userStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userStatuses
    * The list of installation states for this mobile app.
    *
    * @param UserAppInstallStatus $val The userStatuses
    *
    * @return MobileApp
    */
    public function setUserStatuses($val)
    {
		$this->_propDict["userStatuses"] = $val;
        return $this;
    }
    
}
