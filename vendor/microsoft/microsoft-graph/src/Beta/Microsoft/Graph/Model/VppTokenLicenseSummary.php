<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenLicenseSummary File
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
* VppTokenLicenseSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VppTokenLicenseSummary extends Entity
{
    /**
    * Gets the appleId
    * The Apple Id associated with the given Apple Volume Purchase Program Token.
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
    * The Apple Id associated with the given Apple Volume Purchase Program Token.
    *
    * @param string $val The value of the appleId
    *
    * @return VppTokenLicenseSummary
    */
    public function setAppleId($val)
    {
        $this->_propDict["appleId"] = $val;
        return $this;
    }
    /**
    * Gets the availableLicenseCount
    * The number of VPP licenses available.
    *
    * @return int The availableLicenseCount
    */
    public function getAvailableLicenseCount()
    {
        if (array_key_exists("availableLicenseCount", $this->_propDict)) {
            return $this->_propDict["availableLicenseCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableLicenseCount
    * The number of VPP licenses available.
    *
    * @param int $val The value of the availableLicenseCount
    *
    * @return VppTokenLicenseSummary
    */
    public function setAvailableLicenseCount($val)
    {
        $this->_propDict["availableLicenseCount"] = $val;
        return $this;
    }
    /**
    * Gets the organizationName
    * The organization associated with the Apple Volume Purchase Program Token.
    *
    * @return string The organizationName
    */
    public function getOrganizationName()
    {
        if (array_key_exists("organizationName", $this->_propDict)) {
            return $this->_propDict["organizationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the organizationName
    * The organization associated with the Apple Volume Purchase Program Token.
    *
    * @param string $val The value of the organizationName
    *
    * @return VppTokenLicenseSummary
    */
    public function setOrganizationName($val)
    {
        $this->_propDict["organizationName"] = $val;
        return $this;
    }
    /**
    * Gets the usedLicenseCount
    * The number of VPP licenses in use.
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
    * The number of VPP licenses in use.
    *
    * @param int $val The value of the usedLicenseCount
    *
    * @return VppTokenLicenseSummary
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = $val;
        return $this;
    }
    /**
    * Gets the vppTokenId
    * Identifier of the VPP token.
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
    * Identifier of the VPP token.
    *
    * @param string $val The value of the vppTokenId
    *
    * @return VppTokenLicenseSummary
    */
    public function setVppTokenId($val)
    {
        $this->_propDict["vppTokenId"] = $val;
        return $this;
    }
}
