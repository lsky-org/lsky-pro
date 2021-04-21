<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidForWorkEnrollmentProfile File
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
* AndroidForWorkEnrollmentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidForWorkEnrollmentProfile extends Entity
{
    /**
    * Gets the accountId
    * Tenant GUID the enrollment profile belongs to.
    *
    * @return string The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountId
    * Tenant GUID the enrollment profile belongs to.
    *
    * @param string $val The accountId
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Date time the enrollment profile was created.
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
    * Date time the enrollment profile was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Description for the enrollment profile.
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
    * Description for the enrollment profile.
    *
    * @param string $val The description
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Display name for the enrollment profile.
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
    * Display name for the enrollment profile.
    *
    * @param string $val The displayName
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrolledDeviceCount
    * Total number of Android devices that have enrolled using this enrollment profile.
    *
    * @return int The enrolledDeviceCount
    */
    public function getEnrolledDeviceCount()
    {
        if (array_key_exists("enrolledDeviceCount", $this->_propDict)) {
            return $this->_propDict["enrolledDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enrolledDeviceCount
    * Total number of Android devices that have enrolled using this enrollment profile.
    *
    * @param int $val The enrolledDeviceCount
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setEnrolledDeviceCount($val)
    {
        $this->_propDict["enrolledDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Date time the enrollment profile was last modified.
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
    * Date time the enrollment profile was last modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @return string The qrCodeContent
    */
    public function getQrCodeContent()
    {
        if (array_key_exists("qrCodeContent", $this->_propDict)) {
            return $this->_propDict["qrCodeContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @param string $val The qrCodeContent
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setQrCodeContent($val)
    {
        $this->_propDict["qrCodeContent"] = $val;
        return $this;
    }
    
    /**
    * Gets the qrCodeImage
    * String used to generate a QR code for the token.
    *
    * @return MimeContent The qrCodeImage
    */
    public function getQrCodeImage()
    {
        if (array_key_exists("qrCodeImage", $this->_propDict)) {
            if (is_a($this->_propDict["qrCodeImage"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["qrCodeImage"];
            } else {
                $this->_propDict["qrCodeImage"] = new MimeContent($this->_propDict["qrCodeImage"]);
                return $this->_propDict["qrCodeImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qrCodeImage
    * String used to generate a QR code for the token.
    *
    * @param MimeContent $val The qrCodeImage
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setQrCodeImage($val)
    {
        $this->_propDict["qrCodeImage"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenExpirationDateTime
    * Date time the most recently created token will expire.
    *
    * @return \DateTime The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenExpirationDateTime
    * Date time the most recently created token will expire.
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenValue
    * Value of the most recently created token for this enrollment profile.
    *
    * @return string The tokenValue
    */
    public function getTokenValue()
    {
        if (array_key_exists("tokenValue", $this->_propDict)) {
            return $this->_propDict["tokenValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenValue
    * Value of the most recently created token for this enrollment profile.
    *
    * @param string $val The tokenValue
    *
    * @return AndroidForWorkEnrollmentProfile
    */
    public function setTokenValue($val)
    {
        $this->_propDict["tokenValue"] = $val;
        return $this;
    }
    
}
