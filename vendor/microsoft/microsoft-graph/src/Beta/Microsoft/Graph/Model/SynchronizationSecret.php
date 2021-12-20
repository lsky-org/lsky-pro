<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSecret File
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
* SynchronizationSecret class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationSecret extends Enum
{
    /**
    * The Enum SynchronizationSecret
    */
    const NONE = "none";
    const USER_NAME = "userName";
    const PASSWORD = "password";
    const SECRET_TOKEN = "secretToken";
    const APP_KEY = "appKey";
    const BASE_ADDRESS = "baseAddress";
    const CLIENT_IDENTIFIER = "clientIdentifier";
    const CLIENT_SECRET = "clientSecret";
    const SINGLE_SIGN_ON_TYPE = "singleSignOnType";
    const SANDBOX = "sandbox";
    const URL = "url";
    const DOMAIN = "domain";
    const CONSUMER_KEY = "consumerKey";
    const CONSUMER_SECRET = "consumerSecret";
    const TOKEN_KEY = "tokenKey";
    const TOKEN_EXPIRATION = "tokenExpiration";
    const OAUTH2_ACCESS_TOKEN = "oauth2AccessToken";
    const OAUTH2_ACCESS_TOKEN_CREATION_TIME = "oauth2AccessTokenCreationTime";
    const OAUTH2_REFRESH_TOKEN = "oauth2RefreshToken";
    const SYNC_ALL = "syncAll";
    const INSTANCE_NAME = "instanceName";
    const OAUTH2_CLIENT_ID = "oauth2ClientId";
    const OAUTH2_CLIENT_SECRET = "oauth2ClientSecret";
    const COMPANY_ID = "companyId";
    const UPDATE_KEY_ON_SOFT_DELETE = "updateKeyOnSoftDelete";
    const SYNCHRONIZATION_SCHEDULE = "synchronizationSchedule";
    const SYSTEM_OF_RECORD = "systemOfRecord";
    const SANDBOX_NAME = "sandboxName";
    const ENFORCE_DOMAIN = "enforceDomain";
    const SYNC_NOTIFICATION_SETTINGS = "syncNotificationSettings";
    const SKIP_OUT_OF_SCOPE_DELETIONS = "skipOutOfScopeDeletions";
    const OAUTH2_AUTHORIZATION_CODE = "oauth2AuthorizationCode";
    const OAUTH2_REDIRECT_URI = "oauth2RedirectUri";
    const APPLICATION_TEMPLATE_IDENTIFIER = "applicationTemplateIdentifier";
    const SERVER = "server";
    const PERFORM_INBOUND_ENTITLEMENT_GRANTS = "performInboundEntitlementGrants";
    const HARD_DELETES_ENABLED = "hardDeletesEnabled";
    const SYNC_AGENT_COMPATIBILITY_KEY = "syncAgentCompatibilityKey";
    const SYNC_AGENT_AD_CONTAINER = "syncAgentADContainer";
    const VALIDATE_DOMAIN = "validateDomain";
    const TEST_REFERENCES = "testReferences";
}