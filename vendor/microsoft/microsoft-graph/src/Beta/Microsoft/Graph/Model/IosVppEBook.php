<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppEBook File
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
* IosVppEBook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppEBook extends ManagedEBook
{
    /**
    * Gets the appleId
    * The Apple ID associated with Vpp token.
    *
    * @return string The appleId
    */
    public function getAppleId()
    {
        if (array_key_exists("appleId", $this->_propDict)) {
            return $this->_propDict["appleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleId
    * The Apple ID associated with Vpp token.
    *
    * @param string $val The appleId
    *
    * @return IosVppEBook
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the genres
    * Genres.
    *
    * @return string The genres
    */
    public function getGenres()
    {
        if (array_key_exists("genres", $this->_propDict)) {
            return $this->_propDict["genres"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the genres
    * Genres.
    *
    * @param string $val The genres
    *
    * @return IosVppEBook
    */
    public function setGenres($val)
    {
        $this->_propDict["genres"] = $val;
        return $this;
    }
    
    /**
    * Gets the language
    * Language.
    *
    * @return string The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the language
    * Language.
    *
    * @param string $val The language
    *
    * @return IosVppEBook
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
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
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return IosVppEBook
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the seller
    * Seller.
    *
    * @return string The seller
    */
    public function getSeller()
    {
        if (array_key_exists("seller", $this->_propDict)) {
            return $this->_propDict["seller"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the seller
    * Seller.
    *
    * @param string $val The seller
    *
    * @return IosVppEBook
    */
    public function setSeller($val)
    {
        $this->_propDict["seller"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalLicenseCount
    * Total license count.
    *
    * @return int The totalLicenseCount
    */
    public function getTotalLicenseCount()
    {
        if (array_key_exists("totalLicenseCount", $this->_propDict)) {
            return $this->_propDict["totalLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalLicenseCount
    * Total license count.
    *
    * @param int $val The totalLicenseCount
    *
    * @return IosVppEBook
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the usedLicenseCount
    * Used license count.
    *
    * @return int The usedLicenseCount
    */
    public function getUsedLicenseCount()
    {
        if (array_key_exists("usedLicenseCount", $this->_propDict)) {
            return $this->_propDict["usedLicenseCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedLicenseCount
    * Used license count.
    *
    * @param int $val The usedLicenseCount
    *
    * @return IosVppEBook
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the vppOrganizationName
    * The Vpp token's organization name.
    *
    * @return string The vppOrganizationName
    */
    public function getVppOrganizationName()
    {
        if (array_key_exists("vppOrganizationName", $this->_propDict)) {
            return $this->_propDict["vppOrganizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppOrganizationName
    * The Vpp token's organization name.
    *
    * @param string $val The vppOrganizationName
    *
    * @return IosVppEBook
    */
    public function setVppOrganizationName($val)
    {
        $this->_propDict["vppOrganizationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenId
    * The Vpp token ID.
    *
    * @return string The vppTokenId
    */
    public function getVppTokenId()
    {
        if (array_key_exists("vppTokenId", $this->_propDict)) {
            return $this->_propDict["vppTokenId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppTokenId
    * The Vpp token ID.
    *
    * @param string $val The vppTokenId
    *
    * @return IosVppEBook
    */
    public function setVppTokenId($val)
    {
        $this->_propDict["vppTokenId"] = $val;
        return $this;
    }
    
}
