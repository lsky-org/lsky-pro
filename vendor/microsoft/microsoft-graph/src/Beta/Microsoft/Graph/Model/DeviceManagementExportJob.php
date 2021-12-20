<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExportJob File
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
* DeviceManagementExportJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExportJob extends Entity
{
    /**
    * Gets the expirationDateTime
    * Time that the exported report expires
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * Time that the exported report expires
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return DeviceManagementExportJob
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the filter
    * Filters applied on the report
    *
    * @return string The filter
    */
    public function getFilter()
    {
        if (array_key_exists("filter", $this->_propDict)) {
            return $this->_propDict["filter"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filter
    * Filters applied on the report
    *
    * @param string $val The filter
    *
    * @return DeviceManagementExportJob
    */
    public function setFilter($val)
    {
        $this->_propDict["filter"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Format of the exported report. Possible values are: csv, pdf.
    *
    * @return DeviceManagementReportFileFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\DeviceManagementReportFileFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new DeviceManagementReportFileFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Format of the exported report. Possible values are: csv, pdf.
    *
    * @param DeviceManagementReportFileFormat $val The format
    *
    * @return DeviceManagementExportJob
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the localizationType
    * Configures how the requested export job is localized. Possible values are: localizedValuesAsAdditionalColumn, replaceLocalizableValues.
    *
    * @return DeviceManagementExportJobLocalizationType The localizationType
    */
    public function getLocalizationType()
    {
        if (array_key_exists("localizationType", $this->_propDict)) {
            if (is_a($this->_propDict["localizationType"], "\Beta\Microsoft\Graph\Model\DeviceManagementExportJobLocalizationType")) {
                return $this->_propDict["localizationType"];
            } else {
                $this->_propDict["localizationType"] = new DeviceManagementExportJobLocalizationType($this->_propDict["localizationType"]);
                return $this->_propDict["localizationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localizationType
    * Configures how the requested export job is localized. Possible values are: localizedValuesAsAdditionalColumn, replaceLocalizableValues.
    *
    * @param DeviceManagementExportJobLocalizationType $val The localizationType
    *
    * @return DeviceManagementExportJob
    */
    public function setLocalizationType($val)
    {
        $this->_propDict["localizationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportName
    * Name of the report
    *
    * @return string The reportName
    */
    public function getReportName()
    {
        if (array_key_exists("reportName", $this->_propDict)) {
            return $this->_propDict["reportName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportName
    * Name of the report
    *
    * @param string $val The reportName
    *
    * @return DeviceManagementExportJob
    */
    public function setReportName($val)
    {
        $this->_propDict["reportName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestDateTime
    * Time that the exported report was requested
    *
    * @return \DateTime The requestDateTime
    */
    public function getRequestDateTime()
    {
        if (array_key_exists("requestDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestDateTime"], "\DateTime")) {
                return $this->_propDict["requestDateTime"];
            } else {
                $this->_propDict["requestDateTime"] = new \DateTime($this->_propDict["requestDateTime"]);
                return $this->_propDict["requestDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestDateTime
    * Time that the exported report was requested
    *
    * @param \DateTime $val The requestDateTime
    *
    * @return DeviceManagementExportJob
    */
    public function setRequestDateTime($val)
    {
        $this->_propDict["requestDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the select
    * Columns selected from the report
    *
    * @return string The select
    */
    public function getSelect()
    {
        if (array_key_exists("select", $this->_propDict)) {
            return $this->_propDict["select"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the select
    * Columns selected from the report
    *
    * @param string $val The select
    *
    * @return DeviceManagementExportJob
    */
    public function setSelect($val)
    {
        $this->_propDict["select"] = $val;
        return $this;
    }
    
    /**
    * Gets the snapshotId
    * A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
    *
    * @return string The snapshotId
    */
    public function getSnapshotId()
    {
        if (array_key_exists("snapshotId", $this->_propDict)) {
            return $this->_propDict["snapshotId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the snapshotId
    * A snapshot is an identifiable subset of the dataset represented by the ReportName. A sessionId or CachedReportConfiguration id can be used here. If a sessionId is specified, Filter, Select, and OrderBy are applied to the data represented by the sessionId. Filter, Select, and OrderBy cannot be specified together with a CachedReportConfiguration id.
    *
    * @param string $val The snapshotId
    *
    * @return DeviceManagementExportJob
    */
    public function setSnapshotId($val)
    {
        $this->_propDict["snapshotId"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Status of the export job. Possible values are: unknown, notStarted, inProgress, completed, failed.
    *
    * @return DeviceManagementReportStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DeviceManagementReportStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DeviceManagementReportStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Status of the export job. Possible values are: unknown, notStarted, inProgress, completed, failed.
    *
    * @param DeviceManagementReportStatus $val The status
    *
    * @return DeviceManagementExportJob
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    * Temporary location of the exported report
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    * Temporary location of the exported report
    *
    * @param string $val The url
    *
    * @return DeviceManagementExportJob
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
}
