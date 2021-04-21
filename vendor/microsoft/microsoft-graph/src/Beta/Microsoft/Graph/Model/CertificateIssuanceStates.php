<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateIssuanceStates File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* CertificateIssuanceStates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateIssuanceStates extends Enum
{
    /**
    * The Enum CertificateIssuanceStates
    */
    const UNKNOWN = "unknown";
    const CHALLENGE_ISSUED = "challengeIssued";
    const CHALLENGE_ISSUE_FAILED = "challengeIssueFailed";
    const REQUEST_CREATION_FAILED = "requestCreationFailed";
    const REQUEST_SUBMIT_FAILED = "requestSubmitFailed";
    const CHALLENGE_VALIDATION_SUCCEEDED = "challengeValidationSucceeded";
    const CHALLENGE_VALIDATION_FAILED = "challengeValidationFailed";
    const ISSUE_FAILED = "issueFailed";
    const ISSUE_PENDING = "issuePending";
    const ISSUED = "issued";
    const RESPONSE_PROCESSING_FAILED = "responseProcessingFailed";
    const RESPONSE_PENDING = "responsePending";
    const ENROLLMENT_SUCCEEDED = "enrollmentSucceeded";
    const ENROLLMENT_NOT_NEEDED = "enrollmentNotNeeded";
    const REVOKED = "revoked";
    const REMOVED_FROM_COLLECTION = "removedFromCollection";
    const RENEW_VERIFIED = "renewVerified";
    const INSTALL_FAILED = "installFailed";
    const INSTALLED = "installed";
    const DELETE_FAILED = "deleteFailed";
    const DELETED = "deleted";
    const RENEWAL_REQUESTED = "renewalRequested";
    const REQUESTED = "requested";
}