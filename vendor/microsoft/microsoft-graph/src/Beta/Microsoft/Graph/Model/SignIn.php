<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignIn File
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
* SignIn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignIn extends Entity
{
    /**
    * Gets the alternateSignInName
    * The alternate sign-in identity whenever you use phone number to sign-in.
    *
    * @return string The alternateSignInName
    */
    public function getAlternateSignInName()
    {
        if (array_key_exists("alternateSignInName", $this->_propDict)) {
            return $this->_propDict["alternateSignInName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alternateSignInName
    * The alternate sign-in identity whenever you use phone number to sign-in.
    *
    * @param string $val The alternateSignInName
    *
    * @return SignIn
    */
    public function setAlternateSignInName($val)
    {
        $this->_propDict["alternateSignInName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * The application name displayed in the Azure Portal.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * The application name displayed in the Azure Portal.
    *
    * @param string $val The appDisplayName
    *
    * @return SignIn
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * The application identifier in Azure Active Directory.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    * The application identifier in Azure Active Directory.
    *
    * @param string $val The appId
    *
    * @return SignIn
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appliedConditionalAccessPolicies
    * A list of conditional access policies that are triggered by the corresponding sign-in activity.
     *
     * @return array The appliedConditionalAccessPolicies
     */
    public function getAppliedConditionalAccessPolicies()
    {
        if (array_key_exists("appliedConditionalAccessPolicies", $this->_propDict)) {
           return $this->_propDict["appliedConditionalAccessPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appliedConditionalAccessPolicies
    * A list of conditional access policies that are triggered by the corresponding sign-in activity.
    *
    * @param AppliedConditionalAccessPolicy $val The appliedConditionalAccessPolicies
    *
    * @return SignIn
    */
    public function setAppliedConditionalAccessPolicies($val)
    {
		$this->_propDict["appliedConditionalAccessPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authenticationDetails
    * The result of the authentication attempt and additional details on the authentication method.
     *
     * @return array The authenticationDetails
     */
    public function getAuthenticationDetails()
    {
        if (array_key_exists("authenticationDetails", $this->_propDict)) {
           return $this->_propDict["authenticationDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authenticationDetails
    * The result of the authentication attempt and additional details on the authentication method.
    *
    * @param AuthenticationDetail $val The authenticationDetails
    *
    * @return SignIn
    */
    public function setAuthenticationDetails($val)
    {
		$this->_propDict["authenticationDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethodsUsed
    * The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
    *
    * @return string The authenticationMethodsUsed
    */
    public function getAuthenticationMethodsUsed()
    {
        if (array_key_exists("authenticationMethodsUsed", $this->_propDict)) {
            return $this->_propDict["authenticationMethodsUsed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationMethodsUsed
    * The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
    *
    * @param string $val The authenticationMethodsUsed
    *
    * @return SignIn
    */
    public function setAuthenticationMethodsUsed($val)
    {
        $this->_propDict["authenticationMethodsUsed"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authenticationProcessingDetails
    * Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     *
     * @return array The authenticationProcessingDetails
     */
    public function getAuthenticationProcessingDetails()
    {
        if (array_key_exists("authenticationProcessingDetails", $this->_propDict)) {
           return $this->_propDict["authenticationProcessingDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authenticationProcessingDetails
    * Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
    *
    * @param KeyValue $val The authenticationProcessingDetails
    *
    * @return SignIn
    */
    public function setAuthenticationProcessingDetails($val)
    {
		$this->_propDict["authenticationProcessingDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationRequirement
    * This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed.
    *
    * @return string The authenticationRequirement
    */
    public function getAuthenticationRequirement()
    {
        if (array_key_exists("authenticationRequirement", $this->_propDict)) {
            return $this->_propDict["authenticationRequirement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationRequirement
    * This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed.
    *
    * @param string $val The authenticationRequirement
    *
    * @return SignIn
    */
    public function setAuthenticationRequirement($val)
    {
        $this->_propDict["authenticationRequirement"] = $val;
        return $this;
    }
    

     /** 
     * Gets the authenticationRequirementPolicies
     *
     * @return array The authenticationRequirementPolicies
     */
    public function getAuthenticationRequirementPolicies()
    {
        if (array_key_exists("authenticationRequirementPolicies", $this->_propDict)) {
           return $this->_propDict["authenticationRequirementPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the authenticationRequirementPolicies
    *
    * @param AuthenticationRequirementPolicy $val The authenticationRequirementPolicies
    *
    * @return SignIn
    */
    public function setAuthenticationRequirementPolicies($val)
    {
		$this->_propDict["authenticationRequirementPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientAppUsed
    * The legacy client used for sign-in activity. For example: Browser, Exchange Active Sync, Modern clients, IMAP, MAPI, SMTP, or POP.
    *
    * @return string The clientAppUsed
    */
    public function getClientAppUsed()
    {
        if (array_key_exists("clientAppUsed", $this->_propDict)) {
            return $this->_propDict["clientAppUsed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientAppUsed
    * The legacy client used for sign-in activity. For example: Browser, Exchange Active Sync, Modern clients, IMAP, MAPI, SMTP, or POP.
    *
    * @param string $val The clientAppUsed
    *
    * @return SignIn
    */
    public function setClientAppUsed($val)
    {
        $this->_propDict["clientAppUsed"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessStatus
    * The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue.
    *
    * @return ConditionalAccessStatus The conditionalAccessStatus
    */
    public function getConditionalAccessStatus()
    {
        if (array_key_exists("conditionalAccessStatus", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessStatus"], "\Beta\Microsoft\Graph\Model\ConditionalAccessStatus")) {
                return $this->_propDict["conditionalAccessStatus"];
            } else {
                $this->_propDict["conditionalAccessStatus"] = new ConditionalAccessStatus($this->_propDict["conditionalAccessStatus"]);
                return $this->_propDict["conditionalAccessStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessStatus
    * The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue.
    *
    * @param ConditionalAccessStatus $val The conditionalAccessStatus
    *
    * @return SignIn
    */
    public function setConditionalAccessStatus($val)
    {
        $this->_propDict["conditionalAccessStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the correlationId
    * The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support.
    *
    * @return string The correlationId
    */
    public function getCorrelationId()
    {
        if (array_key_exists("correlationId", $this->_propDict)) {
            return $this->_propDict["correlationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the correlationId
    * The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support.
    *
    * @param string $val The correlationId
    *
    * @return SignIn
    */
    public function setCorrelationId($val)
    {
        $this->_propDict["correlationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SignIn
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDetail
    * The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser.
    *
    * @return DeviceDetail The deviceDetail
    */
    public function getDeviceDetail()
    {
        if (array_key_exists("deviceDetail", $this->_propDict)) {
            if (is_a($this->_propDict["deviceDetail"], "\Beta\Microsoft\Graph\Model\DeviceDetail")) {
                return $this->_propDict["deviceDetail"];
            } else {
                $this->_propDict["deviceDetail"] = new DeviceDetail($this->_propDict["deviceDetail"]);
                return $this->_propDict["deviceDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceDetail
    * The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser.
    *
    * @param DeviceDetail $val The deviceDetail
    *
    * @return SignIn
    */
    public function setDeviceDetail($val)
    {
        $this->_propDict["deviceDetail"] = $val;
        return $this;
    }
    
    /**
    * Gets the flaggedForReview
    *
    * @return bool The flaggedForReview
    */
    public function getFlaggedForReview()
    {
        if (array_key_exists("flaggedForReview", $this->_propDict)) {
            return $this->_propDict["flaggedForReview"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the flaggedForReview
    *
    * @param bool $val The flaggedForReview
    *
    * @return SignIn
    */
    public function setFlaggedForReview($val)
    {
        $this->_propDict["flaggedForReview"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the homeTenantId
    *
    * @return string The homeTenantId
    */
    public function getHomeTenantId()
    {
        if (array_key_exists("homeTenantId", $this->_propDict)) {
            return $this->_propDict["homeTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the homeTenantId
    *
    * @param string $val The homeTenantId
    *
    * @return SignIn
    */
    public function setHomeTenantId($val)
    {
        $this->_propDict["homeTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipAddress
    * The IP address of the client from where the sign-in occurred.
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipAddress
    * The IP address of the client from where the sign-in occurred.
    *
    * @param string $val The ipAddress
    *
    * @return SignIn
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipAddressFromResourceProvider
    *
    * @return string The ipAddressFromResourceProvider
    */
    public function getIpAddressFromResourceProvider()
    {
        if (array_key_exists("ipAddressFromResourceProvider", $this->_propDict)) {
            return $this->_propDict["ipAddressFromResourceProvider"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipAddressFromResourceProvider
    *
    * @param string $val The ipAddressFromResourceProvider
    *
    * @return SignIn
    */
    public function setIpAddressFromResourceProvider($val)
    {
        $this->_propDict["ipAddressFromResourceProvider"] = $val;
        return $this;
    }
    
    /**
    * Gets the isInteractive
    * Indicates whether a sign-in is interactive or not.
    *
    * @return bool The isInteractive
    */
    public function getIsInteractive()
    {
        if (array_key_exists("isInteractive", $this->_propDict)) {
            return $this->_propDict["isInteractive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isInteractive
    * Indicates whether a sign-in is interactive or not.
    *
    * @param bool $val The isInteractive
    *
    * @return SignIn
    */
    public function setIsInteractive($val)
    {
        $this->_propDict["isInteractive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the location
    * The city, state, and 2 letter country code from where the sign-in occurred.
    *
    * @return SignInLocation The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\SignInLocation")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new SignInLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    * The city, state, and 2 letter country code from where the sign-in occurred.
    *
    * @param SignInLocation $val The location
    *
    * @return SignIn
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the mfaDetail
    *
    * @return MfaDetail The mfaDetail
    */
    public function getMfaDetail()
    {
        if (array_key_exists("mfaDetail", $this->_propDict)) {
            if (is_a($this->_propDict["mfaDetail"], "\Beta\Microsoft\Graph\Model\MfaDetail")) {
                return $this->_propDict["mfaDetail"];
            } else {
                $this->_propDict["mfaDetail"] = new MfaDetail($this->_propDict["mfaDetail"]);
                return $this->_propDict["mfaDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mfaDetail
    *
    * @param MfaDetail $val The mfaDetail
    *
    * @return SignIn
    */
    public function setMfaDetail($val)
    {
        $this->_propDict["mfaDetail"] = $val;
        return $this;
    }
    

     /** 
     * Gets the networkLocationDetails
    * The network location details including the type of network used and its names.
     *
     * @return array The networkLocationDetails
     */
    public function getNetworkLocationDetails()
    {
        if (array_key_exists("networkLocationDetails", $this->_propDict)) {
           return $this->_propDict["networkLocationDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the networkLocationDetails
    * The network location details including the type of network used and its names.
    *
    * @param NetworkLocationDetail $val The networkLocationDetails
    *
    * @return SignIn
    */
    public function setNetworkLocationDetails($val)
    {
		$this->_propDict["networkLocationDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalRequestId
    * The request identifier of the first request in the authentication sequence.
    *
    * @return string The originalRequestId
    */
    public function getOriginalRequestId()
    {
        if (array_key_exists("originalRequestId", $this->_propDict)) {
            return $this->_propDict["originalRequestId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the originalRequestId
    * The request identifier of the first request in the authentication sequence.
    *
    * @param string $val The originalRequestId
    *
    * @return SignIn
    */
    public function setOriginalRequestId($val)
    {
        $this->_propDict["originalRequestId"] = $val;
        return $this;
    }
    
    /**
    * Gets the processingTimeInMilliseconds
    * The request processing time in milliseconds in AD STS.
    *
    * @return int The processingTimeInMilliseconds
    */
    public function getProcessingTimeInMilliseconds()
    {
        if (array_key_exists("processingTimeInMilliseconds", $this->_propDict)) {
            return $this->_propDict["processingTimeInMilliseconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the processingTimeInMilliseconds
    * The request processing time in milliseconds in AD STS.
    *
    * @param int $val The processingTimeInMilliseconds
    *
    * @return SignIn
    */
    public function setProcessingTimeInMilliseconds($val)
    {
        $this->_propDict["processingTimeInMilliseconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the resourceDisplayName
    * The name of the resource that the user signed in to.
    *
    * @return string The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceDisplayName
    * The name of the resource that the user signed in to.
    *
    * @param string $val The resourceDisplayName
    *
    * @return SignIn
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * The identifier of the resource that the user signed in to.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    * The identifier of the resource that the user signed in to.
    *
    * @param string $val The resourceId
    *
    * @return SignIn
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceTenantId
    *
    * @return string The resourceTenantId
    */
    public function getResourceTenantId()
    {
        if (array_key_exists("resourceTenantId", $this->_propDict)) {
            return $this->_propDict["resourceTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceTenantId
    *
    * @param string $val The resourceTenantId
    *
    * @return SignIn
    */
    public function setResourceTenantId($val)
    {
        $this->_propDict["resourceTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskDetail
    * The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskDetail The riskDetail
    */
    public function getRiskDetail()
    {
        if (array_key_exists("riskDetail", $this->_propDict)) {
            if (is_a($this->_propDict["riskDetail"], "\Beta\Microsoft\Graph\Model\RiskDetail")) {
                return $this->_propDict["riskDetail"];
            } else {
                $this->_propDict["riskDetail"] = new RiskDetail($this->_propDict["riskDetail"]);
                return $this->_propDict["riskDetail"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskDetail
    * The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskDetail $val The riskDetail
    *
    * @return SignIn
    */
    public function setRiskDetail($val)
    {
        $this->_propDict["riskDetail"] = $val;
        return $this;
    }
    

     /** 
     * Gets the riskEventTypes
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.
     *
     * @return array The riskEventTypes
     */
    public function getRiskEventTypes()
    {
        if (array_key_exists("riskEventTypes", $this->_propDict)) {
           return $this->_propDict["riskEventTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the riskEventTypes
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.
    *
    * @param RiskEventType $val The riskEventTypes
    *
    * @return SignIn
    */
    public function setRiskEventTypes($val)
    {
		$this->_propDict["riskEventTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.
    *
    * @return string The riskEventTypesV2
    */
    public function getRiskEventTypesV2()
    {
        if (array_key_exists("riskEventTypesV2", $this->_propDict)) {
            return $this->_propDict["riskEventTypesV2"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the riskEventTypesV2
    * The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.
    *
    * @param string $val The riskEventTypesV2
    *
    * @return SignIn
    */
    public function setRiskEventTypesV2($val)
    {
        $this->_propDict["riskEventTypes_v2"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevelAggregated
    * The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskLevel The riskLevelAggregated
    */
    public function getRiskLevelAggregated()
    {
        if (array_key_exists("riskLevelAggregated", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelAggregated"], "\Beta\Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["riskLevelAggregated"];
            } else {
                $this->_propDict["riskLevelAggregated"] = new RiskLevel($this->_propDict["riskLevelAggregated"]);
                return $this->_propDict["riskLevelAggregated"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevelAggregated
    * The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskLevel $val The riskLevelAggregated
    *
    * @return SignIn
    */
    public function setRiskLevelAggregated($val)
    {
        $this->_propDict["riskLevelAggregated"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskLevelDuringSignIn
    * The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @return RiskLevel The riskLevelDuringSignIn
    */
    public function getRiskLevelDuringSignIn()
    {
        if (array_key_exists("riskLevelDuringSignIn", $this->_propDict)) {
            if (is_a($this->_propDict["riskLevelDuringSignIn"], "\Beta\Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["riskLevelDuringSignIn"];
            } else {
                $this->_propDict["riskLevelDuringSignIn"] = new RiskLevel($this->_propDict["riskLevelDuringSignIn"]);
                return $this->_propDict["riskLevelDuringSignIn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskLevelDuringSignIn
    * The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
    *
    * @param RiskLevel $val The riskLevelDuringSignIn
    *
    * @return SignIn
    */
    public function setRiskLevelDuringSignIn($val)
    {
        $this->_propDict["riskLevelDuringSignIn"] = $val;
        return $this;
    }
    
    /**
    * Gets the riskState
    * The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue.
    *
    * @return RiskState The riskState
    */
    public function getRiskState()
    {
        if (array_key_exists("riskState", $this->_propDict)) {
            if (is_a($this->_propDict["riskState"], "\Beta\Microsoft\Graph\Model\RiskState")) {
                return $this->_propDict["riskState"];
            } else {
                $this->_propDict["riskState"] = new RiskState($this->_propDict["riskState"]);
                return $this->_propDict["riskState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the riskState
    * The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue.
    *
    * @param RiskState $val The riskState
    *
    * @return SignIn
    */
    public function setRiskState($val)
    {
        $this->_propDict["riskState"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalId
    * The application identifier used for sign-in. This field is populated when you are signing in using an application.
    *
    * @return string The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalId
    * The application identifier used for sign-in. This field is populated when you are signing in using an application.
    *
    * @param string $val The servicePrincipalId
    *
    * @return SignIn
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the servicePrincipalName
    * The application name used for sign-in. This field is populated when you are signing in using an application.
    *
    * @return string The servicePrincipalName
    */
    public function getServicePrincipalName()
    {
        if (array_key_exists("servicePrincipalName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the servicePrincipalName
    * The application name used for sign-in. This field is populated when you are signing in using an application.
    *
    * @param string $val The servicePrincipalName
    *
    * @return SignIn
    */
    public function setServicePrincipalName($val)
    {
        $this->_propDict["servicePrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInEventTypes
    *
    * @return string The signInEventTypes
    */
    public function getSignInEventTypes()
    {
        if (array_key_exists("signInEventTypes", $this->_propDict)) {
            return $this->_propDict["signInEventTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInEventTypes
    *
    * @param string $val The signInEventTypes
    *
    * @return SignIn
    */
    public function setSignInEventTypes($val)
    {
        $this->_propDict["signInEventTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInIdentifier
    *
    * @return string The signInIdentifier
    */
    public function getSignInIdentifier()
    {
        if (array_key_exists("signInIdentifier", $this->_propDict)) {
            return $this->_propDict["signInIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInIdentifier
    *
    * @param string $val The signInIdentifier
    *
    * @return SignIn
    */
    public function setSignInIdentifier($val)
    {
        $this->_propDict["signInIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInIdentifierType
    *
    * @return SignInIdentifierType The signInIdentifierType
    */
    public function getSignInIdentifierType()
    {
        if (array_key_exists("signInIdentifierType", $this->_propDict)) {
            if (is_a($this->_propDict["signInIdentifierType"], "\Beta\Microsoft\Graph\Model\SignInIdentifierType")) {
                return $this->_propDict["signInIdentifierType"];
            } else {
                $this->_propDict["signInIdentifierType"] = new SignInIdentifierType($this->_propDict["signInIdentifierType"]);
                return $this->_propDict["signInIdentifierType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the signInIdentifierType
    *
    * @param SignInIdentifierType $val The signInIdentifierType
    *
    * @return SignIn
    */
    public function setSignInIdentifierType($val)
    {
        $this->_propDict["signInIdentifierType"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The sign-in status. Includes the error code and description of the error (in case of a sign-in failure).
    *
    * @return SignInStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\SignInStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SignInStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The sign-in status. Includes the error code and description of the error (in case of a sign-in failure).
    *
    * @param SignInStatus $val The status
    *
    * @return SignIn
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenIssuerName
    * The name of the identity provider. For example, sts.microsoft.com.
    *
    * @return string The tokenIssuerName
    */
    public function getTokenIssuerName()
    {
        if (array_key_exists("tokenIssuerName", $this->_propDict)) {
            return $this->_propDict["tokenIssuerName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenIssuerName
    * The name of the identity provider. For example, sts.microsoft.com.
    *
    * @param string $val The tokenIssuerName
    *
    * @return SignIn
    */
    public function setTokenIssuerName($val)
    {
        $this->_propDict["tokenIssuerName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenIssuerType
    * The type of identity provider. Possible values: AzureAD, ADFederationServices, or UnknownFutureValue.
    *
    * @return TokenIssuerType The tokenIssuerType
    */
    public function getTokenIssuerType()
    {
        if (array_key_exists("tokenIssuerType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenIssuerType"], "\Beta\Microsoft\Graph\Model\TokenIssuerType")) {
                return $this->_propDict["tokenIssuerType"];
            } else {
                $this->_propDict["tokenIssuerType"] = new TokenIssuerType($this->_propDict["tokenIssuerType"]);
                return $this->_propDict["tokenIssuerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenIssuerType
    * The type of identity provider. Possible values: AzureAD, ADFederationServices, or UnknownFutureValue.
    *
    * @param TokenIssuerType $val The tokenIssuerType
    *
    * @return SignIn
    */
    public function setTokenIssuerType($val)
    {
        $this->_propDict["tokenIssuerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAgent
    * The user agent information related to sign-in.
    *
    * @return string The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userAgent
    * The user agent information related to sign-in.
    *
    * @param string $val The userAgent
    *
    * @return SignIn
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    * The display name of the user.
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
    * The display name of the user.
    *
    * @param string $val The userDisplayName
    *
    * @return SignIn
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The identifier of the user.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The identifier of the user.
    *
    * @param string $val The userId
    *
    * @return SignIn
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The UPN of the user.
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
    * The UPN of the user.
    *
    * @param string $val The userPrincipalName
    *
    * @return SignIn
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userType
    *
    * @return SignInUserType The userType
    */
    public function getUserType()
    {
        if (array_key_exists("userType", $this->_propDict)) {
            if (is_a($this->_propDict["userType"], "\Beta\Microsoft\Graph\Model\SignInUserType")) {
                return $this->_propDict["userType"];
            } else {
                $this->_propDict["userType"] = new SignInUserType($this->_propDict["userType"]);
                return $this->_propDict["userType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userType
    *
    * @param SignInUserType $val The userType
    *
    * @return SignIn
    */
    public function setUserType($val)
    {
        $this->_propDict["userType"] = $val;
        return $this;
    }
    
}
