<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Office365ActiveUserDetail File
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
* Office365ActiveUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Office365ActiveUserDetail extends Entity
{
    /**
    * Gets the assignedProducts
    * All the products assigned for the user.
    *
    * @return string The assignedProducts
    */
    public function getAssignedProducts()
    {
        if (array_key_exists("assignedProducts", $this->_propDict)) {
            return $this->_propDict["assignedProducts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedProducts
    * All the products assigned for the user.
    *
    * @param string $val The assignedProducts
    *
    * @return Office365ActiveUserDetail
    */
    public function setAssignedProducts($val)
    {
        $this->_propDict["assignedProducts"] = $val;
        return $this;
    }
    
    /**
    * Gets the deletedDate
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    *
    * @return \DateTime The deletedDate
    */
    public function getDeletedDate()
    {
        if (array_key_exists("deletedDate", $this->_propDict)) {
            if (is_a($this->_propDict["deletedDate"], "\DateTime")) {
                return $this->_propDict["deletedDate"];
            } else {
                $this->_propDict["deletedDate"] = new \DateTime($this->_propDict["deletedDate"]);
                return $this->_propDict["deletedDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deletedDate
    * The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    *
    * @param \DateTime $val The deletedDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setDeletedDate($val)
    {
        $this->_propDict["deletedDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
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
    * The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
    *
    * @param string $val The displayName
    *
    * @return Office365ActiveUserDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeLastActivityDate
    * The date when user last read or sent email.
    *
    * @return \DateTime The exchangeLastActivityDate
    */
    public function getExchangeLastActivityDate()
    {
        if (array_key_exists("exchangeLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLastActivityDate"], "\DateTime")) {
                return $this->_propDict["exchangeLastActivityDate"];
            } else {
                $this->_propDict["exchangeLastActivityDate"] = new \DateTime($this->_propDict["exchangeLastActivityDate"]);
                return $this->_propDict["exchangeLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeLastActivityDate
    * The date when user last read or sent email.
    *
    * @param \DateTime $val The exchangeLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setExchangeLastActivityDate($val)
    {
        $this->_propDict["exchangeLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeLicenseAssignDate
    * The last date when the user was assigned an Exchange license.
    *
    * @return \DateTime The exchangeLicenseAssignDate
    */
    public function getExchangeLicenseAssignDate()
    {
        if (array_key_exists("exchangeLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["exchangeLicenseAssignDate"];
            } else {
                $this->_propDict["exchangeLicenseAssignDate"] = new \DateTime($this->_propDict["exchangeLicenseAssignDate"]);
                return $this->_propDict["exchangeLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeLicenseAssignDate
    * The last date when the user was assigned an Exchange license.
    *
    * @param \DateTime $val The exchangeLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setExchangeLicenseAssignDate($val)
    {
        $this->_propDict["exchangeLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasExchangeLicense
    * Whether the user has been assigned an Exchange license.
    *
    * @return bool The hasExchangeLicense
    */
    public function getHasExchangeLicense()
    {
        if (array_key_exists("hasExchangeLicense", $this->_propDict)) {
            return $this->_propDict["hasExchangeLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasExchangeLicense
    * Whether the user has been assigned an Exchange license.
    *
    * @param bool $val The hasExchangeLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasExchangeLicense($val)
    {
        $this->_propDict["hasExchangeLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasOneDriveLicense
    * Whether the user has been assigned a OneDrive license.
    *
    * @return bool The hasOneDriveLicense
    */
    public function getHasOneDriveLicense()
    {
        if (array_key_exists("hasOneDriveLicense", $this->_propDict)) {
            return $this->_propDict["hasOneDriveLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasOneDriveLicense
    * Whether the user has been assigned a OneDrive license.
    *
    * @param bool $val The hasOneDriveLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasOneDriveLicense($val)
    {
        $this->_propDict["hasOneDriveLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasSharePointLicense
    * Whether the user has been assigned a SharePoint license.
    *
    * @return bool The hasSharePointLicense
    */
    public function getHasSharePointLicense()
    {
        if (array_key_exists("hasSharePointLicense", $this->_propDict)) {
            return $this->_propDict["hasSharePointLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasSharePointLicense
    * Whether the user has been assigned a SharePoint license.
    *
    * @param bool $val The hasSharePointLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasSharePointLicense($val)
    {
        $this->_propDict["hasSharePointLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasSkypeForBusinessLicense
    * Whether the user has been assigned a Skype For Business license.
    *
    * @return bool The hasSkypeForBusinessLicense
    */
    public function getHasSkypeForBusinessLicense()
    {
        if (array_key_exists("hasSkypeForBusinessLicense", $this->_propDict)) {
            return $this->_propDict["hasSkypeForBusinessLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasSkypeForBusinessLicense
    * Whether the user has been assigned a Skype For Business license.
    *
    * @param bool $val The hasSkypeForBusinessLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasSkypeForBusinessLicense($val)
    {
        $this->_propDict["hasSkypeForBusinessLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasTeamsLicense
    * Whether the user has been assigned a Teams license.
    *
    * @return bool The hasTeamsLicense
    */
    public function getHasTeamsLicense()
    {
        if (array_key_exists("hasTeamsLicense", $this->_propDict)) {
            return $this->_propDict["hasTeamsLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasTeamsLicense
    * Whether the user has been assigned a Teams license.
    *
    * @param bool $val The hasTeamsLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasTeamsLicense($val)
    {
        $this->_propDict["hasTeamsLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasYammerLicense
    * Whether the user has been assigned a Yammer license.
    *
    * @return bool The hasYammerLicense
    */
    public function getHasYammerLicense()
    {
        if (array_key_exists("hasYammerLicense", $this->_propDict)) {
            return $this->_propDict["hasYammerLicense"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasYammerLicense
    * Whether the user has been assigned a Yammer license.
    *
    * @param bool $val The hasYammerLicense
    *
    * @return Office365ActiveUserDetail
    */
    public function setHasYammerLicense($val)
    {
        $this->_propDict["hasYammerLicense"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDeleted
    * Whether this user has been deleted or soft deleted.
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
    * Whether this user has been deleted or soft deleted.
    *
    * @param bool $val The isDeleted
    *
    * @return Office365ActiveUserDetail
    */
    public function setIsDeleted($val)
    {
        $this->_propDict["isDeleted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the oneDriveLastActivityDate
    * The date when user last viewed or edited files, shared files internally or externally, or synced files.
    *
    * @return \DateTime The oneDriveLastActivityDate
    */
    public function getOneDriveLastActivityDate()
    {
        if (array_key_exists("oneDriveLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["oneDriveLastActivityDate"], "\DateTime")) {
                return $this->_propDict["oneDriveLastActivityDate"];
            } else {
                $this->_propDict["oneDriveLastActivityDate"] = new \DateTime($this->_propDict["oneDriveLastActivityDate"]);
                return $this->_propDict["oneDriveLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the oneDriveLastActivityDate
    * The date when user last viewed or edited files, shared files internally or externally, or synced files.
    *
    * @param \DateTime $val The oneDriveLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setOneDriveLastActivityDate($val)
    {
        $this->_propDict["oneDriveLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the oneDriveLicenseAssignDate
    * The last date when the user was assigned a OneDrive license.
    *
    * @return \DateTime The oneDriveLicenseAssignDate
    */
    public function getOneDriveLicenseAssignDate()
    {
        if (array_key_exists("oneDriveLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["oneDriveLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["oneDriveLicenseAssignDate"];
            } else {
                $this->_propDict["oneDriveLicenseAssignDate"] = new \DateTime($this->_propDict["oneDriveLicenseAssignDate"]);
                return $this->_propDict["oneDriveLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the oneDriveLicenseAssignDate
    * The last date when the user was assigned a OneDrive license.
    *
    * @param \DateTime $val The oneDriveLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setOneDriveLicenseAssignDate($val)
    {
        $this->_propDict["oneDriveLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    * The latest date of the content.
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
    * The latest date of the content.
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointLastActivityDate
    * The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
    *
    * @return \DateTime The sharePointLastActivityDate
    */
    public function getSharePointLastActivityDate()
    {
        if (array_key_exists("sharePointLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointLastActivityDate"], "\DateTime")) {
                return $this->_propDict["sharePointLastActivityDate"];
            } else {
                $this->_propDict["sharePointLastActivityDate"] = new \DateTime($this->_propDict["sharePointLastActivityDate"]);
                return $this->_propDict["sharePointLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharePointLastActivityDate
    * The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
    *
    * @param \DateTime $val The sharePointLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSharePointLastActivityDate($val)
    {
        $this->_propDict["sharePointLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointLicenseAssignDate
    * The last date when the user was assigned a SharePoint license.
    *
    * @return \DateTime The sharePointLicenseAssignDate
    */
    public function getSharePointLicenseAssignDate()
    {
        if (array_key_exists("sharePointLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["sharePointLicenseAssignDate"];
            } else {
                $this->_propDict["sharePointLicenseAssignDate"] = new \DateTime($this->_propDict["sharePointLicenseAssignDate"]);
                return $this->_propDict["sharePointLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharePointLicenseAssignDate
    * The last date when the user was assigned a SharePoint license.
    *
    * @param \DateTime $val The sharePointLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSharePointLicenseAssignDate($val)
    {
        $this->_propDict["sharePointLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessLastActivityDate
    * The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
    *
    * @return \DateTime The skypeForBusinessLastActivityDate
    */
    public function getSkypeForBusinessLastActivityDate()
    {
        if (array_key_exists("skypeForBusinessLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["skypeForBusinessLastActivityDate"], "\DateTime")) {
                return $this->_propDict["skypeForBusinessLastActivityDate"];
            } else {
                $this->_propDict["skypeForBusinessLastActivityDate"] = new \DateTime($this->_propDict["skypeForBusinessLastActivityDate"]);
                return $this->_propDict["skypeForBusinessLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the skypeForBusinessLastActivityDate
    * The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
    *
    * @param \DateTime $val The skypeForBusinessLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSkypeForBusinessLastActivityDate($val)
    {
        $this->_propDict["skypeForBusinessLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the skypeForBusinessLicenseAssignDate
    * The last date when the user was assigned a Skype For Business license.
    *
    * @return \DateTime The skypeForBusinessLicenseAssignDate
    */
    public function getSkypeForBusinessLicenseAssignDate()
    {
        if (array_key_exists("skypeForBusinessLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["skypeForBusinessLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["skypeForBusinessLicenseAssignDate"];
            } else {
                $this->_propDict["skypeForBusinessLicenseAssignDate"] = new \DateTime($this->_propDict["skypeForBusinessLicenseAssignDate"]);
                return $this->_propDict["skypeForBusinessLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the skypeForBusinessLicenseAssignDate
    * The last date when the user was assigned a Skype For Business license.
    *
    * @param \DateTime $val The skypeForBusinessLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setSkypeForBusinessLicenseAssignDate($val)
    {
        $this->_propDict["skypeForBusinessLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamsLastActivityDate
    * The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
    *
    * @return \DateTime The teamsLastActivityDate
    */
    public function getTeamsLastActivityDate()
    {
        if (array_key_exists("teamsLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["teamsLastActivityDate"], "\DateTime")) {
                return $this->_propDict["teamsLastActivityDate"];
            } else {
                $this->_propDict["teamsLastActivityDate"] = new \DateTime($this->_propDict["teamsLastActivityDate"]);
                return $this->_propDict["teamsLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teamsLastActivityDate
    * The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
    *
    * @param \DateTime $val The teamsLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setTeamsLastActivityDate($val)
    {
        $this->_propDict["teamsLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the teamsLicenseAssignDate
    * The last date when the user was assigned a Teams license.
    *
    * @return \DateTime The teamsLicenseAssignDate
    */
    public function getTeamsLicenseAssignDate()
    {
        if (array_key_exists("teamsLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["teamsLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["teamsLicenseAssignDate"];
            } else {
                $this->_propDict["teamsLicenseAssignDate"] = new \DateTime($this->_propDict["teamsLicenseAssignDate"]);
                return $this->_propDict["teamsLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teamsLicenseAssignDate
    * The last date when the user was assigned a Teams license.
    *
    * @param \DateTime $val The teamsLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setTeamsLicenseAssignDate($val)
    {
        $this->_propDict["teamsLicenseAssignDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
    *
    * @param string $val The userPrincipalName
    *
    * @return Office365ActiveUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the yammerLastActivityDate
    * The date when user last posted, read, or liked message.
    *
    * @return \DateTime The yammerLastActivityDate
    */
    public function getYammerLastActivityDate()
    {
        if (array_key_exists("yammerLastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["yammerLastActivityDate"], "\DateTime")) {
                return $this->_propDict["yammerLastActivityDate"];
            } else {
                $this->_propDict["yammerLastActivityDate"] = new \DateTime($this->_propDict["yammerLastActivityDate"]);
                return $this->_propDict["yammerLastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the yammerLastActivityDate
    * The date when user last posted, read, or liked message.
    *
    * @param \DateTime $val The yammerLastActivityDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setYammerLastActivityDate($val)
    {
        $this->_propDict["yammerLastActivityDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the yammerLicenseAssignDate
    * The last date when the user was assigned a Yammer license.
    *
    * @return \DateTime The yammerLicenseAssignDate
    */
    public function getYammerLicenseAssignDate()
    {
        if (array_key_exists("yammerLicenseAssignDate", $this->_propDict)) {
            if (is_a($this->_propDict["yammerLicenseAssignDate"], "\DateTime")) {
                return $this->_propDict["yammerLicenseAssignDate"];
            } else {
                $this->_propDict["yammerLicenseAssignDate"] = new \DateTime($this->_propDict["yammerLicenseAssignDate"]);
                return $this->_propDict["yammerLicenseAssignDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the yammerLicenseAssignDate
    * The last date when the user was assigned a Yammer license.
    *
    * @param \DateTime $val The yammerLicenseAssignDate
    *
    * @return Office365ActiveUserDetail
    */
    public function setYammerLicenseAssignDate($val)
    {
        $this->_propDict["yammerLicenseAssignDate"] = $val;
        return $this;
    }
    
}
