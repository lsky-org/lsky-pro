<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterUsageSummary File
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
* PrinterUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterUsageSummary extends Entity
{
    /**
    * Gets the completedJobCount
    *
    * @return int The completedJobCount
    */
    public function getCompletedJobCount()
    {
        if (array_key_exists("completedJobCount", $this->_propDict)) {
            return $this->_propDict["completedJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedJobCount
    *
    * @param int $val The value of the completedJobCount
    *
    * @return PrinterUsageSummary
    */
    public function setCompletedJobCount($val)
    {
        $this->_propDict["completedJobCount"] = $val;
        return $this;
    }
    /**
    * Gets the incompleteJobCount
    *
    * @return int The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The value of the incompleteJobCount
    *
    * @return PrinterUsageSummary
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = $val;
        return $this;
    }
    /**
    * Gets the printerDisplayName
    *
    * @return string The printerDisplayName
    */
    public function getPrinterDisplayName()
    {
        if (array_key_exists("printerDisplayName", $this->_propDict)) {
            return $this->_propDict["printerDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerDisplayName
    *
    * @param string $val The value of the printerDisplayName
    *
    * @return PrinterUsageSummary
    */
    public function setPrinterDisplayName($val)
    {
        $this->_propDict["printerDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the printerId
    *
    * @return string The printerId
    */
    public function getPrinterId()
    {
        if (array_key_exists("printerId", $this->_propDict)) {
            return $this->_propDict["printerId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerId
    *
    * @param string $val The value of the printerId
    *
    * @return PrinterUsageSummary
    */
    public function setPrinterId($val)
    {
        $this->_propDict["printerId"] = $val;
        return $this;
    }
    /**
    * Gets the printerManufacturer
    *
    * @return string The printerManufacturer
    */
    public function getPrinterManufacturer()
    {
        if (array_key_exists("printerManufacturer", $this->_propDict)) {
            return $this->_propDict["printerManufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerManufacturer
    *
    * @param string $val The value of the printerManufacturer
    *
    * @return PrinterUsageSummary
    */
    public function setPrinterManufacturer($val)
    {
        $this->_propDict["printerManufacturer"] = $val;
        return $this;
    }
    /**
    * Gets the printerModel
    *
    * @return string The printerModel
    */
    public function getPrinterModel()
    {
        if (array_key_exists("printerModel", $this->_propDict)) {
            return $this->_propDict["printerModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the printerModel
    *
    * @param string $val The value of the printerModel
    *
    * @return PrinterUsageSummary
    */
    public function setPrinterModel($val)
    {
        $this->_propDict["printerModel"] = $val;
        return $this;
    }

    /**
    * Gets the printer
    *
    * @return DirectoryObject The printer
    */
    public function getPrinter()
    {
        if (array_key_exists("printer", $this->_propDict)) {
            if (is_a($this->_propDict["printer"], "\Beta\Microsoft\Graph\Model\DirectoryObject")) {
                return $this->_propDict["printer"];
            } else {
                $this->_propDict["printer"] = new DirectoryObject($this->_propDict["printer"]);
                return $this->_propDict["printer"];
            }
        }
        return null;
    }

    /**
    * Sets the printer
    *
    * @param DirectoryObject $val The value to assign to the printer
    *
    * @return PrinterUsageSummary The PrinterUsageSummary
    */
    public function setPrinter($val)
    {
        $this->_propDict["printer"] = $val;
         return $this;
    }
}
