<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Printer File
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
* Printer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Printer extends PrinterBase
{
    /**
    * Gets the acceptingJobs
    *
    * @return bool The acceptingJobs
    */
    public function getAcceptingJobs()
    {
        if (array_key_exists("acceptingJobs", $this->_propDict)) {
            return $this->_propDict["acceptingJobs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the acceptingJobs
    *
    * @param bool $val The acceptingJobs
    *
    * @return Printer
    */
    public function setAcceptingJobs($val)
    {
        $this->_propDict["acceptingJobs"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hasPhysicalDevice
    * True if the printer has a physical device for printing. Read-only.
    *
    * @return bool The hasPhysicalDevice
    */
    public function getHasPhysicalDevice()
    {
        if (array_key_exists("hasPhysicalDevice", $this->_propDict)) {
            return $this->_propDict["hasPhysicalDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasPhysicalDevice
    * True if the printer has a physical device for printing. Read-only.
    *
    * @param bool $val The hasPhysicalDevice
    *
    * @return Printer
    */
    public function setHasPhysicalDevice($val)
    {
        $this->_propDict["hasPhysicalDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isShared
    * True if the printer is shared; false otherwise. Read-only.
    *
    * @return bool The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isShared
    * True if the printer is shared; false otherwise. Read-only.
    *
    * @param bool $val The isShared
    *
    * @return Printer
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastSeenDateTime
    * The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
    *
    * @return \DateTime The lastSeenDateTime
    */
    public function getLastSeenDateTime()
    {
        if (array_key_exists("lastSeenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSeenDateTime"], "\DateTime")) {
                return $this->_propDict["lastSeenDateTime"];
            } else {
                $this->_propDict["lastSeenDateTime"] = new \DateTime($this->_propDict["lastSeenDateTime"]);
                return $this->_propDict["lastSeenDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSeenDateTime
    * The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only.
    *
    * @param \DateTime $val The lastSeenDateTime
    *
    * @return Printer
    */
    public function setLastSeenDateTime($val)
    {
        $this->_propDict["lastSeenDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the registeredDateTime
    * The DateTimeOffset when the printer was registered. Read-only.
    *
    * @return \DateTime The registeredDateTime
    */
    public function getRegisteredDateTime()
    {
        if (array_key_exists("registeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["registeredDateTime"], "\DateTime")) {
                return $this->_propDict["registeredDateTime"];
            } else {
                $this->_propDict["registeredDateTime"] = new \DateTime($this->_propDict["registeredDateTime"]);
                return $this->_propDict["registeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the registeredDateTime
    * The DateTimeOffset when the printer was registered. Read-only.
    *
    * @param \DateTime $val The registeredDateTime
    *
    * @return Printer
    */
    public function setRegisteredDateTime($val)
    {
        $this->_propDict["registeredDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the connectors
    * The connectors that are associated with the printer.
     *
     * @return array The connectors
     */
    public function getConnectors()
    {
        if (array_key_exists("connectors", $this->_propDict)) {
           return $this->_propDict["connectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the connectors
    * The connectors that are associated with the printer.
    *
    * @param PrintConnector $val The connectors
    *
    * @return Printer
    */
    public function setConnectors($val)
    {
		$this->_propDict["connectors"] = $val;
        return $this;
    }
    
    /**
    * Gets the share
    *
    * @return PrinterShare The share
    */
    public function getShare()
    {
        if (array_key_exists("share", $this->_propDict)) {
            if (is_a($this->_propDict["share"], "\Beta\Microsoft\Graph\Model\PrinterShare")) {
                return $this->_propDict["share"];
            } else {
                $this->_propDict["share"] = new PrinterShare($this->_propDict["share"]);
                return $this->_propDict["share"];
            }
        }
        return null;
    }
    
    /**
    * Sets the share
    *
    * @param PrinterShare $val The share
    *
    * @return Printer
    */
    public function setShare($val)
    {
        $this->_propDict["share"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shares
    * The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
     *
     * @return array The shares
     */
    public function getShares()
    {
        if (array_key_exists("shares", $this->_propDict)) {
           return $this->_propDict["shares"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shares
    * The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable.
    *
    * @param PrinterShare $val The shares
    *
    * @return Printer
    */
    public function setShares($val)
    {
		$this->_propDict["shares"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskTriggers
    * A list of task triggers that are associated with the printer.
     *
     * @return array The taskTriggers
     */
    public function getTaskTriggers()
    {
        if (array_key_exists("taskTriggers", $this->_propDict)) {
           return $this->_propDict["taskTriggers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taskTriggers
    * A list of task triggers that are associated with the printer.
    *
    * @param PrintTaskTrigger $val The taskTriggers
    *
    * @return Printer
    */
    public function setTaskTriggers($val)
    {
		$this->_propDict["taskTriggers"] = $val;
        return $this;
    }
    
}
