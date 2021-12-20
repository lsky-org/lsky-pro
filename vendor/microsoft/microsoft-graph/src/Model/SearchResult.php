<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SearchResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchResult extends Entity
{
    /**
    * Gets the onClickTelemetryUrl
    * A callback URL that can be used to record telemetry information. The application should issue a GET on this URL if the user interacts with this item to improve the quality of results.
    *
    * @return string The onClickTelemetryUrl
    */
    public function getOnClickTelemetryUrl()
    {
        if (array_key_exists("onClickTelemetryUrl", $this->_propDict)) {
            return $this->_propDict["onClickTelemetryUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the onClickTelemetryUrl
    * A callback URL that can be used to record telemetry information. The application should issue a GET on this URL if the user interacts with this item to improve the quality of results.
    *
    * @param string $val The value of the onClickTelemetryUrl
    *
    * @return SearchResult
    */
    public function setOnClickTelemetryUrl($val)
    {
        $this->_propDict["onClickTelemetryUrl"] = $val;
        return $this;
    }
}
