<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationConstraintItem File
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
* LocationConstraintItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocationConstraintItem extends Location
{
    /**
    * Gets the resolveAvailability
    * If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
    *
    * @return bool The resolveAvailability
    */
    public function getResolveAvailability()
    {
        if (array_key_exists("resolveAvailability", $this->_propDict)) {
            return $this->_propDict["resolveAvailability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resolveAvailability
    * If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true.
    *
    * @param bool $val The value of the resolveAvailability
    *
    * @return LocationConstraintItem
    */
    public function setResolveAvailability($val)
    {
        $this->_propDict["resolveAvailability"] = $val;
        return $this;
    }
}
