<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementReports File
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
* DeviceManagementReports class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementReports extends Entity
{

     /** 
     * Gets the cachedReportConfigurations
    * Entity representing the configuration of a cached report
     *
     * @return array The cachedReportConfigurations
     */
    public function getCachedReportConfigurations()
    {
        if (array_key_exists("cachedReportConfigurations", $this->_propDict)) {
           return $this->_propDict["cachedReportConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cachedReportConfigurations
    * Entity representing the configuration of a cached report
    *
    * @param DeviceManagementCachedReportConfiguration $val The cachedReportConfigurations
    *
    * @return DeviceManagementReports
    */
    public function setCachedReportConfigurations($val)
    {
		$this->_propDict["cachedReportConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exportJobs
    * Entity representing a job to export a report
     *
     * @return array The exportJobs
     */
    public function getExportJobs()
    {
        if (array_key_exists("exportJobs", $this->_propDict)) {
           return $this->_propDict["exportJobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exportJobs
    * Entity representing a job to export a report
    *
    * @param DeviceManagementExportJob $val The exportJobs
    *
    * @return DeviceManagementReports
    */
    public function setExportJobs($val)
    {
		$this->_propDict["exportJobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the reportSchedules
    * Entity representing a schedule for which reports are delivered
     *
     * @return array The reportSchedules
     */
    public function getReportSchedules()
    {
        if (array_key_exists("reportSchedules", $this->_propDict)) {
           return $this->_propDict["reportSchedules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reportSchedules
    * Entity representing a schedule for which reports are delivered
    *
    * @param DeviceManagementReportSchedule $val The reportSchedules
    *
    * @return DeviceManagementReports
    */
    public function setReportSchedules($val)
    {
		$this->_propDict["reportSchedules"] = $val;
        return $this;
    }
    
}
