<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterBase File
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
* PrinterBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterBase extends Entity
{
    /**
    * Gets the capabilities
    * The capabilities of the printer/printerShare.
    *
    * @return PrinterCapabilities The capabilities
    */
    public function getCapabilities()
    {
        if (array_key_exists("capabilities", $this->_propDict)) {
            if (is_a($this->_propDict["capabilities"], "\Microsoft\Graph\Model\PrinterCapabilities")) {
                return $this->_propDict["capabilities"];
            } else {
                $this->_propDict["capabilities"] = new PrinterCapabilities($this->_propDict["capabilities"]);
                return $this->_propDict["capabilities"];
            }
        }
        return null;
    }
    
    /**
    * Sets the capabilities
    * The capabilities of the printer/printerShare.
    *
    * @param PrinterCapabilities $val The capabilities
    *
    * @return PrinterBase
    */
    public function setCapabilities($val)
    {
        $this->_propDict["capabilities"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaults
    * The default print settings of printer/printerShare.
    *
    * @return PrinterDefaults The defaults
    */
    public function getDefaults()
    {
        if (array_key_exists("defaults", $this->_propDict)) {
            if (is_a($this->_propDict["defaults"], "\Microsoft\Graph\Model\PrinterDefaults")) {
                return $this->_propDict["defaults"];
            } else {
                $this->_propDict["defaults"] = new PrinterDefaults($this->_propDict["defaults"]);
                return $this->_propDict["defaults"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaults
    * The default print settings of printer/printerShare.
    *
    * @param PrinterDefaults $val The defaults
    *
    * @return PrinterBase
    */
    public function setDefaults($val)
    {
        $this->_propDict["defaults"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the printer/printerShare.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the printer/printerShare.
    *
    * @param string $val The displayName
    *
    * @return PrinterBase
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAcceptingJobs
    * Whether the printer/printerShare is currently accepting new print jobs.
    *
    * @return bool The isAcceptingJobs
    */
    public function getIsAcceptingJobs()
    {
        if (array_key_exists("isAcceptingJobs", $this->_propDict)) {
            return $this->_propDict["isAcceptingJobs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAcceptingJobs
    * Whether the printer/printerShare is currently accepting new print jobs.
    *
    * @param bool $val The isAcceptingJobs
    *
    * @return PrinterBase
    */
    public function setIsAcceptingJobs($val)
    {
        $this->_propDict["isAcceptingJobs"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the location
    * The physical and/or organizational location of the printer/printerShare.
    *
    * @return PrinterLocation The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Microsoft\Graph\Model\PrinterLocation")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new PrinterLocation($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    * The physical and/or organizational location of the printer/printerShare.
    *
    * @param PrinterLocation $val The location
    *
    * @return PrinterBase
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    * The manufacturer of the printer/printerShare.
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    * The manufacturer of the printer/printerShare.
    *
    * @param string $val The manufacturer
    *
    * @return PrinterBase
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    * The model name of the printer/printerShare.
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    * The model name of the printer/printerShare.
    *
    * @param string $val The model
    *
    * @return PrinterBase
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The processing status of the printer/printerShare, including any errors.
    *
    * @return PrinterStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\PrinterStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new PrinterStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The processing status of the printer/printerShare, including any errors.
    *
    * @param PrinterStatus $val The status
    *
    * @return PrinterBase
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the jobs
    * The list of jobs that are queued for printing by the printer/printerShare.
     *
     * @return array The jobs
     */
    public function getJobs()
    {
        if (array_key_exists("jobs", $this->_propDict)) {
           return $this->_propDict["jobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the jobs
    * The list of jobs that are queued for printing by the printer/printerShare.
    *
    * @param PrintJob $val The jobs
    *
    * @return PrinterBase
    */
    public function setJobs($val)
    {
		$this->_propDict["jobs"] = $val;
        return $this;
    }
    
}
