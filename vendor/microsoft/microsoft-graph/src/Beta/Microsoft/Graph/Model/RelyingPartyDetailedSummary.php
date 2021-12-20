<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RelyingPartyDetailedSummary File
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
* RelyingPartyDetailedSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RelyingPartyDetailedSummary extends Entity
{
    /**
    * Gets the failedSignInCount
    * Number of failed sign in on Active Directory Federation Service in the period specified.
    *
    * @return int The failedSignInCount
    */
    public function getFailedSignInCount()
    {
        if (array_key_exists("failedSignInCount", $this->_propDict)) {
            return $this->_propDict["failedSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedSignInCount
    * Number of failed sign in on Active Directory Federation Service in the period specified.
    *
    * @param int $val The failedSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setFailedSignInCount($val)
    {
        $this->_propDict["failedSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the migrationStatus
    * Indication of whether the application can be moved to Azure AD or require more investigation. Possible values are: ready, needsReview, additionalStepsRequired, unknownFutureValue.
    *
    * @return MigrationStatus The migrationStatus
    */
    public function getMigrationStatus()
    {
        if (array_key_exists("migrationStatus", $this->_propDict)) {
            if (is_a($this->_propDict["migrationStatus"], "\Beta\Microsoft\Graph\Model\MigrationStatus")) {
                return $this->_propDict["migrationStatus"];
            } else {
                $this->_propDict["migrationStatus"] = new MigrationStatus($this->_propDict["migrationStatus"]);
                return $this->_propDict["migrationStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the migrationStatus
    * Indication of whether the application can be moved to Azure AD or require more investigation. Possible values are: ready, needsReview, additionalStepsRequired, unknownFutureValue.
    *
    * @param MigrationStatus $val The migrationStatus
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setMigrationStatus($val)
    {
        $this->_propDict["migrationStatus"] = $val;
        return $this;
    }
    

     /** 
     * Gets the migrationValidationDetails
    * Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
     *
     * @return array The migrationValidationDetails
     */
    public function getMigrationValidationDetails()
    {
        if (array_key_exists("migrationValidationDetails", $this->_propDict)) {
           return $this->_propDict["migrationValidationDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the migrationValidationDetails
    * Specifies all the validations check done on applications configuration details to evaluate if the application is ready to be moved to Azure AD.
    *
    * @param KeyValuePair $val The migrationValidationDetails
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setMigrationValidationDetails($val)
    {
		$this->_propDict["migrationValidationDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the relyingPartyId
    * This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
    *
    * @return string The relyingPartyId
    */
    public function getRelyingPartyId()
    {
        if (array_key_exists("relyingPartyId", $this->_propDict)) {
            return $this->_propDict["relyingPartyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relyingPartyId
    * This identifier is used to identify the relying party to this Federation Service. It is used when issuing claims to the relying party.
    *
    * @param string $val The relyingPartyId
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setRelyingPartyId($val)
    {
        $this->_propDict["relyingPartyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the relyingPartyName
    * Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
    *
    * @return string The relyingPartyName
    */
    public function getRelyingPartyName()
    {
        if (array_key_exists("relyingPartyName", $this->_propDict)) {
            return $this->_propDict["relyingPartyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the relyingPartyName
    * Name of application or other entity on the internet that uses an identity provider to authenticate a user who wants to log in.
    *
    * @param string $val The relyingPartyName
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setRelyingPartyName($val)
    {
        $this->_propDict["relyingPartyName"] = $val;
        return $this;
    }
    
    /**
    * Gets the replyUrls
    * Specifies where the relying party expects to receive the token.
    *
    * @return string The replyUrls
    */
    public function getReplyUrls()
    {
        if (array_key_exists("replyUrls", $this->_propDict)) {
            return $this->_propDict["replyUrls"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the replyUrls
    * Specifies where the relying party expects to receive the token.
    *
    * @param string $val The replyUrls
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setReplyUrls($val)
    {
        $this->_propDict["replyUrls"] = $val;
        return $this;
    }
    
    /**
    * Gets the serviceId
    * Uniquely identifies the Active Directory forest.
    *
    * @return string The serviceId
    */
    public function getServiceId()
    {
        if (array_key_exists("serviceId", $this->_propDict)) {
            return $this->_propDict["serviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serviceId
    * Uniquely identifies the Active Directory forest.
    *
    * @param string $val The serviceId
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setServiceId($val)
    {
        $this->_propDict["serviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInSuccessRate
    * Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
    *
    * @return float The signInSuccessRate
    */
    public function getSignInSuccessRate()
    {
        if (array_key_exists("signInSuccessRate", $this->_propDict)) {
            return $this->_propDict["signInSuccessRate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInSuccessRate
    * Number of successful / (number of successful + number of failed sign ins) on Active Directory Federation Service in the period specified.
    *
    * @param float $val The signInSuccessRate
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setSignInSuccessRate($val)
    {
        $this->_propDict["signInSuccessRate"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulSignInCount
    * Number of successful sign ins on Active Directory Federation Service.
    *
    * @return int The successfulSignInCount
    */
    public function getSuccessfulSignInCount()
    {
        if (array_key_exists("successfulSignInCount", $this->_propDict)) {
            return $this->_propDict["successfulSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulSignInCount
    * Number of successful sign ins on Active Directory Federation Service.
    *
    * @param int $val The successfulSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setSuccessfulSignInCount($val)
    {
        $this->_propDict["successfulSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalSignInCount
    * Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
    *
    * @return int The totalSignInCount
    */
    public function getTotalSignInCount()
    {
        if (array_key_exists("totalSignInCount", $this->_propDict)) {
            return $this->_propDict["totalSignInCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalSignInCount
    * Number of successful + failed sign ins failed sign ins on Active Directory Federation Service in the period specified.
    *
    * @param int $val The totalSignInCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setTotalSignInCount($val)
    {
        $this->_propDict["totalSignInCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the uniqueUserCount
    * Number of unique users that have signed into the application.
    *
    * @return int The uniqueUserCount
    */
    public function getUniqueUserCount()
    {
        if (array_key_exists("uniqueUserCount", $this->_propDict)) {
            return $this->_propDict["uniqueUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uniqueUserCount
    * Number of unique users that have signed into the application.
    *
    * @param int $val The uniqueUserCount
    *
    * @return RelyingPartyDetailedSummary
    */
    public function setUniqueUserCount($val)
    {
        $this->_propDict["uniqueUserCount"] = intval($val);
        return $this;
    }
    
}
