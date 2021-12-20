<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SkillProficiency File
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
* SkillProficiency class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SkillProficiency extends ItemFacet
{
    /**
    * Gets the categories
    * Contains categories a user has associated with the skill (for example, personal, professional, hobby).
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
    * Contains categories a user has associated with the skill (for example, personal, professional, hobby).
    *
    * @param string $val The categories
    *
    * @return SkillProficiency
    */
    public function setCategories($val)
    {
        $this->_propDict["categories"] = $val;
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
    * @return SkillProficiency
    */
    public function setCollaborationTags($val)
    {
        $this->_propDict["collaborationTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Contains a friendly name for the skill.
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
    * Contains a friendly name for the skill.
    *
    * @param string $val The displayName
    *
    * @return SkillProficiency
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the proficiency
    * Detail of the users proficiency with this skill. Possible values are: elementary, limitedWorking, generalProfessional, advancedProfessional, expert, unknownFutureValue.
    *
    * @return SkillProficiencyLevel The proficiency
    */
    public function getProficiency()
    {
        if (array_key_exists("proficiency", $this->_propDict)) {
            if (is_a($this->_propDict["proficiency"], "\Beta\Microsoft\Graph\Model\SkillProficiencyLevel")) {
                return $this->_propDict["proficiency"];
            } else {
                $this->_propDict["proficiency"] = new SkillProficiencyLevel($this->_propDict["proficiency"]);
                return $this->_propDict["proficiency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proficiency
    * Detail of the users proficiency with this skill. Possible values are: elementary, limitedWorking, generalProfessional, advancedProfessional, expert, unknownFutureValue.
    *
    * @param SkillProficiencyLevel $val The proficiency
    *
    * @return SkillProficiency
    */
    public function setProficiency($val)
    {
        $this->_propDict["proficiency"] = $val;
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
    * @return SkillProficiency
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * Contains a link to an information source about the skill.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * Contains a link to an information source about the skill.
    *
    * @param string $val The webUrl
    *
    * @return SkillProficiency
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}
