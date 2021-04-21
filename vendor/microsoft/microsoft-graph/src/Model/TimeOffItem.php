<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeOffItem File
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
* TimeOffItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeOffItem extends ScheduleEntity
{
    /**
    * Gets the timeOffReasonId
    * ID of the timeOffReason for this timeOffItem. Required.
    *
    * @return string The timeOffReasonId
    */
    public function getTimeOffReasonId()
    {
        if (array_key_exists("timeOffReasonId", $this->_propDict)) {
            return $this->_propDict["timeOffReasonId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeOffReasonId
    * ID of the timeOffReason for this timeOffItem. Required.
    *
    * @param string $val The value of the timeOffReasonId
    *
    * @return TimeOffItem
    */
    public function setTimeOffReasonId($val)
    {
        $this->_propDict["timeOffReasonId"] = $val;
        return $this;
    }
}
