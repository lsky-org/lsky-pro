<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingAttendanceReport File
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
* MeetingAttendanceReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingAttendanceReport extends Entity
{

     /** 
     * Gets the attendanceRecords
     *
     * @return array The attendanceRecords
     */
    public function getAttendanceRecords()
    {
        if (array_key_exists("attendanceRecords", $this->_propDict)) {
           return $this->_propDict["attendanceRecords"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the attendanceRecords
    *
    * @param AttendanceRecord $val The attendanceRecords
    *
    * @return MeetingAttendanceReport
    */
    public function setAttendanceRecords($val)
    {
		$this->_propDict["attendanceRecords"] = $val;
        return $this;
    }
    
}
