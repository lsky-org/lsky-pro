<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditionsAcceptanceStatus File
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
* TermsAndConditionsAcceptanceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsAndConditionsAcceptanceStatus extends Entity
{
    /**
    * Gets the acceptedDateTime
    * DateTime when the terms were last accepted by the user.
    *
    * @return \DateTime The acceptedDateTime
    */
    public function getAcceptedDateTime()
    {
        if (array_key_exists("acceptedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acceptedDateTime"], "\DateTime")) {
                return $this->_propDict["acceptedDateTime"];
            } else {
                $this->_propDict["acceptedDateTime"] = new \DateTime($this->_propDict["acceptedDateTime"]);
                return $this->_propDict["acceptedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the acceptedDateTime
    * DateTime when the terms were last accepted by the user.
    *
    * @param \DateTime $val The acceptedDateTime
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setAcceptedDateTime($val)
    {
        $this->_propDict["acceptedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the acceptedVersion
    * Most recent version number of the T&amp;C accepted by the user.
    *
    * @return int The acceptedVersion
    */
    public function getAcceptedVersion()
    {
        if (array_key_exists("acceptedVersion", $this->_propDict)) {
            return $this->_propDict["acceptedVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the acceptedVersion
    * Most recent version number of the T&amp;C accepted by the user.
    *
    * @param int $val The acceptedVersion
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setAcceptedVersion($val)
    {
        $this->_propDict["acceptedVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    * Display name of the user whose acceptance the entity represents.
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    * Display name of the user whose acceptance the entity represents.
    *
    * @param string $val The userDisplayName
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The userPrincipalName of the User that accepted the term.
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
    * The userPrincipalName of the User that accepted the term.
    *
    * @param string $val The userPrincipalName
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditions
    * Navigation link to the terms and conditions that are assigned.
    *
    * @return TermsAndConditions The termsAndConditions
    */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
            if (is_a($this->_propDict["termsAndConditions"], "\Beta\Microsoft\Graph\Model\TermsAndConditions")) {
                return $this->_propDict["termsAndConditions"];
            } else {
                $this->_propDict["termsAndConditions"] = new TermsAndConditions($this->_propDict["termsAndConditions"]);
                return $this->_propDict["termsAndConditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsAndConditions
    * Navigation link to the terms and conditions that are assigned.
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return TermsAndConditionsAcceptanceStatus
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
}
