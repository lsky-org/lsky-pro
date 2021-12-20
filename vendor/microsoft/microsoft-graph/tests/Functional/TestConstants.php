<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* TestConstants File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2020 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://https://developer.microsoft.com/en-us/graph
*/

namespace Microsoft\Graph\Test;

/**
* To run functional tests, supply a
* client ID, username, and password to
* log in via resource owner credential flow.
* While the tests are written in such a way
* as to preserve the state of the user's account,
* it is best to use a test account for these if
* possible.
*/
define("CLIENT_ID", getenv("client_id"));
define("TENANT_ID", getenv("test_tenantId"));
define("CLIENT_SECRET", getenv("test_secret"));
define("TEST_USER_UPN", getenv("test_user_name"));

// Planner plans can currently not be deleted; you will need
 // to create your own plan and specify the ID here
define("PLAN_ID", getenv("plan_id"));
