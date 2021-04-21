<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppApp File
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
* IosVppApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppApp extends MobileApp
{
    /**
    * Gets the applicableDeviceType
    * The applicable iOS Device Type.
    *
    * @return IosDeviceType The applicableDeviceType
    */
    public function getApplicableDeviceType()
    {
        if (array_key_exists("applicableDeviceType", $this->_propDict)) {
            if (is_a($this->_propDict["applicableDeviceType"], "\Beta\Microsoft\Graph\Model\IosDeviceType")) {
                return $this->_propDict["applicableDeviceType"];
            } else {
                $this->_propDict["applicableDeviceType"] = new IosDeviceType($this->_propDict["applicableDeviceType"]);
                return $this->_propDict["applicableDeviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableDeviceType
    * The applicable iOS Device Type.
    *
    * @param IosDeviceType $val The applicableDeviceType
    *
    * @return IosVppApp
    */
    public function setApplicableDeviceType($val)
    {
        $this->_propDict["applicableDeviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the appStoreUrl
    * The store URL.
    *
    * @return string The appStoreUrl
    */
    public function getAppStoreUrl()
    {
        if (array_key_exists("appStoreUrl", $this->_propDict)) {
            return $this->_propDict["appStoreUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appStoreUrl
    * The store URL.
    *
    * @param string $val The appStoreUrl
    *
    * @return IosVppApp
    */
    public function setAppStoreUrl($val)
    {
        $this->_propDict["appStoreUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the bundleId
    * The Identity Name.
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bundleId
    * The Identity Name.
    *
    * @param string $val The bundleId
    *
    * @return IosVppApp
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the licensingType
    * The supported License Type.
    *
    * @return VppLicensingType The licensingType
    */
    public function getLicensingType()
    {
        if (array_key_exists("licensingType", $this->_propDict)) {
            if (is_a($this->_propDict["licensingType"], "\Beta\Microsoft\Graph\Model\VppLicensingType")) {
                return $this->_propDict["licensingType"];
            } else {
                $this->_propDict["licensingType"] = new VppLicensingType($this->_propDict["licensingType"]);
                return $this->_propDict["licensingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the licensingType
    * The supported License Type.
    *
    * @param VppLicensingType $val The licensingType
    *
    * @return IosVppApp
    */
    public function setLicensingType($val)
    {
        $this->_propDict["licensingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the releaseDateTime
    * The VPP application release date and time.
    *
    * @return \DateTime The releaseDateTime
    */
    public function getReleaseDateTime()
    {
        if (array_key_exists("releaseDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releaseDateTime"], "\DateTime")) {
                return $this->_propDict["releaseDateTime"];
            } else {
                $this->_propDict["releaseDateTime"] = new \DateTime($this->_propDict["releaseDateTime"]);
                return $this->_propDict["releaseDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releaseDateTime
    * The VPP application release date and time.
    *
    * @param \DateTime $val The releaseDateTime
    *
    * @return IosVppApp
    */
    public function setReleaseDateTime($val)
    {
        $this->_propDict["releaseDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the revokeLicenseActionResults
    * Results of revoke license actions on this app.
     *
     * @return array The revokeLicenseActionResults
     */
    public function getRevokeLicenseActionResults()
    {
        if (array_key_exists("revokeLicenseActionResults", $this->_propDict)) {
           return $this->_propDict["revokeLicenseActionResults"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the revokeLicenseActionResults
    * Results of revoke license actions on this app.
    *
    * @param IosVppAppRevokeLicensesActionResult $val The revokeLicenseActionResults
    *
    * @return IosVppApp
    */
    public function setRevokeLicenseActionResults($val)
    {
		$this->_propDict["revokeLicenseActionResults"] = $val;
        return $this;
    }
    
    /**
    * Gets the totalLicenseCount
    * The total number of VPP licenses.
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
    * The total number of VPP licenses.
    *
    * @param int $val The totalLicenseCount
    *
    * @return IosVppApp
    */
    public function setTotalLicenseCount($val)
    {
        $this->_propDict["totalLicenseCount"] = intval($val);
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
    * @param int $val The usedLicenseCount
    *
    * @return IosVppApp
    */
    public function setUsedLicenseCount($val)
    {
        $this->_propDict["usedLicenseCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the vppTokenAccountType
    * The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
    *
    * @return VppTokenAccountType The vppTokenAccountType
    */
    public function getVppTokenAccountType()
    {
        if (array_key_exists("vppTokenAccountType", $this->_propDict)) {
            if (is_a($this->_propDict["vppTokenAccountType"], "\Beta\Microsoft\Graph\Model\VppTokenAccountType")) {
                return $this->_propDict["vppTokenAccountType"];
            } else {
                $this->_propDict["vppTokenAccountType"] = new VppTokenAccountType($this->_propDict["vppTokenAccountType"]);
                return $this->_propDict["vppTokenAccountType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the vppTokenAccountType
    * The type of volume purchase program which the given Apple Volume Purchase Program Token is associated with. Possible values are: business, education. Possible values are: business, education.
    *
    * @param VppTokenAccountType $val The vppTokenAccountType
    *
    * @return IosVppApp
    */
    public function setVppTokenAccountType($val)
    {
        $this->_propDict["vppTokenAccountType"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenAppleId
    * The Apple Id associated with the given Apple Volume Purchase Program Token.
    *
    * @return string The vppTokenAppleId
    */
    public function getVppTokenAppleId()
    {
        if (array_key_exists("vppTokenAppleId", $this->_propDict)) {
            return $this->_propDict["vppTokenAppleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppTokenAppleId
    * The Apple Id associated with the given Apple Volume Purchase Program Token.
    *
    * @param string $val The vppTokenAppleId
    *
    * @return IosVppApp
    */
    public function setVppTokenAppleId($val)
    {
        $this->_propDict["vppTokenAppleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenId
    * Identifier of the VPP token associated with this app.
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
    * Identifier of the VPP token associated with this app.
    *
    * @param string $val The vppTokenId
    *
    * @return IosVppApp
    */
    public function setVppTokenId($val)
    {
        $this->_propDict["vppTokenId"] = $val;
        return $this;
    }
    
    /**
    * Gets the vppTokenOrganizationName
    * The organization associated with the Apple Volume Purchase Program Token
    *
    * @return string The vppTokenOrganizationName
    */
    public function getVppTokenOrganizationName()
    {
        if (array_key_exists("vppTokenOrganizationName", $this->_propDict)) {
            return $this->_propDict["vppTokenOrganizationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the vppTokenOrganizationName
    * The organization associated with the Apple Volume Purchase Program Token
    *
    * @param string $val The vppTokenOrganizationName
    *
    * @return IosVppApp
    */
    public function setVppTokenOrganizationName($val)
    {
        $this->_propDict["vppTokenOrganizationName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignedLicenses
    * The licenses assigned to this app.
     *
     * @return array The assignedLicenses
     */
    public function getAssignedLicenses()
    {
        if (array_key_exists("assignedLicenses", $this->_propDict)) {
           return $this->_propDict["assignedLicenses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignedLicenses
    * The licenses assigned to this app.
    *
    * @param IosVppAppAssignedLicense $val The assignedLicenses
    *
    * @return IosVppApp
    */
    public function setAssignedLicenses($val)
    {
		$this->_propDict["assignedLicenses"] = $val;
        return $this;
    }
    
}
