<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProjectParticipation File
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
* ProjectParticipation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProjectParticipation extends ItemFacet
{
    /**
    * Gets the categories
    * Contains categories a user has associated with the project (for example, digital transformation, oil rig).
    *
    * @return string The categories
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
    * Contains categories a user has associated with the project (for example, digital transformation, oil rig).
    *
    * @param string $val The categories
    *
    * @return ProjectParticipation
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
        return $this;
    }
    
    /**
    * Gets the client
    * Contains detailed information about the client the project was for.
    *
    * @return CompanyDetail The client
    */
    public function getClient()
    {
        if (array_key_exists("client", $this->_propDict)) {
            if (is_a($this->_propDict["client"], "\Beta\Microsoft\Graph\Model\CompanyDetail")) {
                return $this->_propDict["client"];
            } else {
                $this->_propDict["client"] = new CompanyDetail($this->_propDict["client"]);
                return $this->_propDict["client"];
            }
        }
        return null;
    }
    
    /**
    * Sets the client
    * Contains detailed information about the client the project was for.
    *
    * @param CompanyDetail $val The client
    *
    * @return ProjectParticipation
    */
    public function setClient($val)
    {
        $this->_propDict["client"] = $val;
        return $this;
    }
    
    /**
    * Gets the collaborationTags
    * Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
    *
    * @return string The collaborationTags
    */
    public function getCollaborationTags()
    {
        if (array_key_exists("collaborationTags", $this->_propDict)) {
            return $this->_propDict["collaborationTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the collaborationTags
    * Contains experience scenario tags a user has associated with the interest. Allowed values in the collection are: askMeAbout, ableToMentor, wantsToLearn, wantsToImprove.
    *
    * @param string $val The collaborationTags
    *
    * @return ProjectParticipation
    */
    public function setCollaborationTags($val)
    {
        $this->_propDict["collaborationTags"] = $val;
        return $this;
    }
    

     /** 
     * Gets the colleagues
    * Lists people that also worked on the project.
     *
     * @return array The colleagues
     */
    public function getColleagues()
    {
        if (array_key_exists("colleagues", $this->_propDict)) {
           return $this->_propDict["colleagues"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the colleagues
    * Lists people that also worked on the project.
    *
    * @param RelatedPerson $val The colleagues
    *
    * @return ProjectParticipation
    */
    public function setColleagues($val)
    {
		$this->_propDict["colleagues"] = $val;
        return $this;
    }
    
    /**
    * Gets the detail
    * Contains detail about the user's role on the project.
    *
    * @return PositionDetail The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\Model\PositionDetail")) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new PositionDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the detail
    * Contains detail about the user's role on the project.
    *
    * @param PositionDetail $val The detail
    *
    * @return ProjectParticipation
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Contains a friendly name for the project.
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
    * Contains a friendly name for the project.
    *
    * @param string $val The displayName
    *
    * @return ProjectParticipation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sponsors
    * The Person or people who sponsored the project.
     *
     * @return array The sponsors
     */
    public function getSponsors()
    {
        if (array_key_exists("sponsors", $this->_propDict)) {
           return $this->_propDict["sponsors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sponsors
    * The Person or people who sponsored the project.
    *
    * @param RelatedPerson $val The sponsors
    *
    * @return ProjectParticipation
    */
    public function setSponsors($val)
    {
		$this->_propDict["sponsors"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnailUrl
    *
    * @return string The thumbnailUrl
    */
    public function getThumbnailUrl()
    {
        if (array_key_exists("thumbnailUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbnailUrl
    *
    * @param string $val The thumbnailUrl
    *
    * @return ProjectParticipation
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
}
