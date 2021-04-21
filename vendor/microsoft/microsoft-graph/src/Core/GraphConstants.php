<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* Constants File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2020 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/

namespace Microsoft\Graph\Core;

final class GraphConstants
{
    // These can be overwritten in setters in the Graph object
    const API_VERSION = "v1.0";
    const REST_ENDPOINT = "https://graph.microsoft.com/";

    // Define HTTP request constants
    const SDK_VERSION = "1.30.0";

    // Define error constants
    const MAX_PAGE_SIZE = 999;
    const MAX_PAGE_SIZE_ERROR = "Page size must be less than " . self::MAX_PAGE_SIZE;
    const TIMEOUT = "Timeout error";

    // Define error message constants
    const BASE_URL_MISSING = "Base URL cannot be null or empty.";
    const REQUEST_TIMED_OUT = "The request timed out.";
    const UNABLE_TO_CREATE_INSTANCE_OF_TYPE = "Unable to create instance of type";

    // Define user error constants
    const INVALID_FILE = "Unable to open file stream for the given path.";
    const NO_ACCESS_TOKEN = "No access token has been provided.";
    const NO_APP_ID = "No app ID has been provided.";
    const NO_APP_SECRET = "No app secret has been provided.";

    // Define server error constants
    const UNABLE_TO_PARSE_RESPONSE = "The HTTP client sent back an invalid response";
}
