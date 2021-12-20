<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationOrganization File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* EducationOrganization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationOrganization extends Entity
{
    /**
    * Gets the description
    * Organization description.
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
    * Organization description.
    *
    * @param string $val The description
    *
    * @return EducationOrganization
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Organization display name.
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
    * Organization display name.
    *
    * @param string $val The displayName
    *
    * @return EducationOrganization
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSource
    * Where this user was created from. Possible values are: sis, lms, or manual.
    *
    * @return EducationExternalSource The externalSource
    */
    public function getExternalSource()
    {
        if (array_key_exists("externalSource", $this->_propDict)) {
            if (is_a($this->_propDict["externalSource"], "\Microsoft\Graph\Model\EducationExternalSource")) {
                return $this->_propDict["externalSource"];
            } else {
                $this->_propDict["externalSource"] = new EducationExternalSource($this->_propDict["externalSource"]);
                return $this->_propDict["externalSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the externalSource
    * Where this user was created from. Possible values are: sis, lms, or manual.
    *
    * @param EducationExternalSource $val The externalSource
    *
    * @return EducationOrganization
    */
    public function setExternalSource($val)
    {
        $this->_propDict["externalSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalSourceDetail
    *
    * @return string The externalSourceDetail
    */
    public function getExternalSourceDetail()
    {
        if (array_key_exists("externalSourceDetail", $this->_propDict)) {
            return $this->_propDict["externalSourceDetail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalSourceDetail
    *
    * @param string $val The externalSourceDetail
    *
    * @return EducationOrganization
    */
    public function setExternalSourceDetail($val)
    {
        $this->_propDict["externalSourceDetail"] = $val;
        return $this;
    }
    
}
