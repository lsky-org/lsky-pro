<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DataSharingConsent File
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
* DataSharingConsent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DataSharingConsent extends Entity
{
    /**
    * Gets the grantDateTime
    * The time consent was granted for this account
    *
    * @return \DateTime The grantDateTime
    */
    public function getGrantDateTime()
    {
        if (array_key_exists("grantDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["grantDateTime"], "\DateTime")) {
                return $this->_propDict["grantDateTime"];
            } else {
                $this->_propDict["grantDateTime"] = new \DateTime($this->_propDict["grantDateTime"]);
                return $this->_propDict["grantDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grantDateTime
    * The time consent was granted for this account
    *
    * @param \DateTime $val The grantDateTime
    *
    * @return DataSharingConsent
    */
    public function setGrantDateTime($val)
    {
        $this->_propDict["grantDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the granted
    * The granted state for the data sharing consent
    *
    * @return bool The granted
    */
    public function getGranted()
    {
        if (array_key_exists("granted", $this->_propDict)) {
            return $this->_propDict["granted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the granted
    * The granted state for the data sharing consent
    *
    * @param bool $val The granted
    *
    * @return DataSharingConsent
    */
    public function setGranted($val)
    {
        $this->_propDict["granted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the grantedByUpn
    * The Upn of the user that granted consent for this account
    *
    * @return string The grantedByUpn
    */
    public function getGrantedByUpn()
    {
        if (array_key_exists("grantedByUpn", $this->_propDict)) {
            return $this->_propDict["grantedByUpn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the grantedByUpn
    * The Upn of the user that granted consent for this account
    *
    * @param string $val The grantedByUpn
    *
    * @return DataSharingConsent
    */
    public function setGrantedByUpn($val)
    {
        $this->_propDict["grantedByUpn"] = $val;
        return $this;
    }
    
    /**
    * Gets the grantedByUserId
    * The UserId of the user that granted consent for this account
    *
    * @return string The grantedByUserId
    */
    public function getGrantedByUserId()
    {
        if (array_key_exists("grantedByUserId", $this->_propDict)) {
            return $this->_propDict["grantedByUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the grantedByUserId
    * The UserId of the user that granted consent for this account
    *
    * @param string $val The grantedByUserId
    *
    * @return DataSharingConsent
    */
    public function setGrantedByUserId($val)
    {
        $this->_propDict["grantedByUserId"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceDisplayName
    * The display name of the service work flow
    *
    * @return string The serviceDisplayName
    */
    public function getServiceDisplayName()
    {
        if (array_key_exists("serviceDisplayName", $this->_propDict)) {
            return $this->_propDict["serviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceDisplayName
    * The display name of the service work flow
    *
    * @param string $val The serviceDisplayName
    *
    * @return DataSharingConsent
    */
    public function setServiceDisplayName($val)
    {
        $this->_propDict["serviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsUrl
    * The TermsUrl for the data sharing consent
    *
    * @return string The termsUrl
    */
    public function getTermsUrl()
    {
        if (array_key_exists("termsUrl", $this->_propDict)) {
            return $this->_propDict["termsUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the termsUrl
    * The TermsUrl for the data sharing consent
    *
    * @param string $val The termsUrl
    *
    * @return DataSharingConsent
    */
    public function setTermsUrl($val)
    {
        $this->_propDict["termsUrl"] = $val;
        return $this;
    }
    
}
