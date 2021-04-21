<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharePointSiteUsageDetail File
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
* SharePointSiteUsageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharePointSiteUsageDetail extends Entity
{
    /**
    * Gets the activeFileCount
    *
    * @return int The activeFileCount
    */
    public function getActiveFileCount()
    {
        if (array_key_exists("activeFileCount", $this->_propDict)) {
            return $this->_propDict["activeFileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeFileCount
    *
    * @param int $val The activeFileCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setActiveFileCount($val)
    {
        $this->_propDict["activeFileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the anonymousLinkCount
    *
    * @return int The anonymousLinkCount
    */
    public function getAnonymousLinkCount()
    {
        if (array_key_exists("anonymousLinkCount", $this->_propDict)) {
            return $this->_propDict["anonymousLinkCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the anonymousLinkCount
    *
    * @param int $val The anonymousLinkCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setAnonymousLinkCount($val)
    {
        $this->_propDict["anonymousLinkCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the companyLinkCount
    *
    * @return int The companyLinkCount
    */
    public function getCompanyLinkCount()
    {
        if (array_key_exists("companyLinkCount", $this->_propDict)) {
            return $this->_propDict["companyLinkCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the companyLinkCount
    *
    * @param int $val The companyLinkCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setCompanyLinkCount($val)
    {
        $this->_propDict["companyLinkCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the externalSharing
    *
    * @return bool The externalSharing
    */
    public function getExternalSharing()
    {
        if (array_key_exists("externalSharing", $this->_propDict)) {
            return $this->_propDict["externalSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalSharing
    *
    * @param bool $val The externalSharing
    *
    * @return SharePointSiteUsageDetail
    */
    public function setExternalSharing($val)
    {
        $this->_propDict["externalSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileCount
    *
    * @return int The fileCount
    */
    public function getFileCount()
    {
        if (array_key_exists("fileCount", $this->_propDict)) {
            return $this->_propDict["fileCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileCount
    *
    * @param int $val The fileCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setFileCount($val)
    {
        $this->_propDict["fileCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the geolocation
    *
    * @return string The geolocation
    */
    public function getGeolocation()
    {
        if (array_key_exists("geolocation", $this->_propDict)) {
            return $this->_propDict["geolocation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the geolocation
    *
    * @param string $val The geolocation
    *
    * @return SharePointSiteUsageDetail
    */
    public function setGeolocation($val)
    {
        $this->_propDict["geolocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeleted
    *
    * @return bool The isDeleted
    */
    public function getIsDeleted()
    {
        if (array_key_exists("isDeleted", $this->_propDict)) {
            return $this->_propDict["isDeleted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeleted
    *
    * @param bool $val The isDeleted
    *
    * @return SharePointSiteUsageDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \DateTime The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\DateTime")) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \DateTime($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \DateTime $val The lastActivityDate
    *
    * @return SharePointSiteUsageDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerDisplayName
    *
    * @return string The ownerDisplayName
    */
    public function getOwnerDisplayName()
    {
        if (array_key_exists("ownerDisplayName", $this->_propDict)) {
            return $this->_propDict["ownerDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerDisplayName
    *
    * @param string $val The ownerDisplayName
    *
    * @return SharePointSiteUsageDetail
    */
    public function setOwnerDisplayName($val)
    {
        $this->_propDict["ownerDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ownerPrincipalName
    *
    * @return string The ownerPrincipalName
    */
    public function getOwnerPrincipalName()
    {
        if (array_key_exists("ownerPrincipalName", $this->_propDict)) {
            return $this->_propDict["ownerPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ownerPrincipalName
    *
    * @param string $val The ownerPrincipalName
    *
    * @return SharePointSiteUsageDetail
    */
    public function setOwnerPrincipalName($val)
    {
        $this->_propDict["ownerPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the pageViewCount
    *
    * @return int The pageViewCount
    */
    public function getPageViewCount()
    {
        if (array_key_exists("pageViewCount", $this->_propDict)) {
            return $this->_propDict["pageViewCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pageViewCount
    *
    * @param int $val The pageViewCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setPageViewCount($val)
    {
        $this->_propDict["pageViewCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return SharePointSiteUsageDetail
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return SharePointSiteUsageDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootWebTemplate
    *
    * @return string The rootWebTemplate
    */
    public function getRootWebTemplate()
    {
        if (array_key_exists("rootWebTemplate", $this->_propDict)) {
            return $this->_propDict["rootWebTemplate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rootWebTemplate
    *
    * @param string $val The rootWebTemplate
    *
    * @return SharePointSiteUsageDetail
    */
    public function setRootWebTemplate($val)
    {
        $this->_propDict["rootWebTemplate"] = $val;
        return $this;
    }
    
    /**
    * Gets the secureLinkForGuestCount
    *
    * @return int The secureLinkForGuestCount
    */
    public function getSecureLinkForGuestCount()
    {
        if (array_key_exists("secureLinkForGuestCount", $this->_propDict)) {
            return $this->_propDict["secureLinkForGuestCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the secureLinkForGuestCount
    *
    * @param int $val The secureLinkForGuestCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setSecureLinkForGuestCount($val)
    {
        $this->_propDict["secureLinkForGuestCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the secureLinkForMemberCount
    *
    * @return int The secureLinkForMemberCount
    */
    public function getSecureLinkForMemberCount()
    {
        if (array_key_exists("secureLinkForMemberCount", $this->_propDict)) {
            return $this->_propDict["secureLinkForMemberCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the secureLinkForMemberCount
    *
    * @param int $val The secureLinkForMemberCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setSecureLinkForMemberCount($val)
    {
        $this->_propDict["secureLinkForMemberCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the siteId
    *
    * @return string The siteId
    */
    public function getSiteId()
    {
        if (array_key_exists("siteId", $this->_propDict)) {
            return $this->_propDict["siteId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteId
    *
    * @param string $val The siteId
    *
    * @return SharePointSiteUsageDetail
    */
    public function setSiteId($val)
    {
        $this->_propDict["siteId"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteSensitivityLabelId
    *
    * @return string The siteSensitivityLabelId
    */
    public function getSiteSensitivityLabelId()
    {
        if (array_key_exists("siteSensitivityLabelId", $this->_propDict)) {
            return $this->_propDict["siteSensitivityLabelId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteSensitivityLabelId
    *
    * @param string $val The siteSensitivityLabelId
    *
    * @return SharePointSiteUsageDetail
    */
    public function setSiteSensitivityLabelId($val)
    {
        $this->_propDict["siteSensitivityLabelId"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteUrl
    *
    * @return string The siteUrl
    */
    public function getSiteUrl()
    {
        if (array_key_exists("siteUrl", $this->_propDict)) {
            return $this->_propDict["siteUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteUrl
    *
    * @param string $val The siteUrl
    *
    * @return SharePointSiteUsageDetail
    */
    public function setSiteUrl($val)
    {
        $this->_propDict["siteUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the storageAllocatedInBytes
    *
    * @return int The storageAllocatedInBytes
    */
    public function getStorageAllocatedInBytes()
    {
        if (array_key_exists("storageAllocatedInBytes", $this->_propDict)) {
            return $this->_propDict["storageAllocatedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageAllocatedInBytes
    *
    * @param int $val The storageAllocatedInBytes
    *
    * @return SharePointSiteUsageDetail
    */
    public function setStorageAllocatedInBytes($val)
    {
        $this->_propDict["storageAllocatedInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the storageUsedInBytes
    *
    * @return int The storageUsedInBytes
    */
    public function getStorageUsedInBytes()
    {
        if (array_key_exists("storageUsedInBytes", $this->_propDict)) {
            return $this->_propDict["storageUsedInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the storageUsedInBytes
    *
    * @param int $val The storageUsedInBytes
    *
    * @return SharePointSiteUsageDetail
    */
    public function setStorageUsedInBytes($val)
    {
        $this->_propDict["storageUsedInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unmanagedDevicePolicy
    *
    * @return string The unmanagedDevicePolicy
    */
    public function getUnmanagedDevicePolicy()
    {
        if (array_key_exists("unmanagedDevicePolicy", $this->_propDict)) {
            return $this->_propDict["unmanagedDevicePolicy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unmanagedDevicePolicy
    *
    * @param string $val The unmanagedDevicePolicy
    *
    * @return SharePointSiteUsageDetail
    */
    public function setUnmanagedDevicePolicy($val)
    {
        $this->_propDict["unmanagedDevicePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the visitedPageCount
    *
    * @return int The visitedPageCount
    */
    public function getVisitedPageCount()
    {
        if (array_key_exists("visitedPageCount", $this->_propDict)) {
            return $this->_propDict["visitedPageCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visitedPageCount
    *
    * @param int $val The visitedPageCount
    *
    * @return SharePointSiteUsageDetail
    */
    public function setVisitedPageCount($val)
    {
        $this->_propDict["visitedPageCount"] = intval($val);
        return $this;
    }
    
}
