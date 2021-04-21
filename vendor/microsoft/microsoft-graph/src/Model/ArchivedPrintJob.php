<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ArchivedPrintJob File
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
* ArchivedPrintJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ArchivedPrintJob extends Entity
{
    /**
    * Gets the acquiredByPrinter
    * True if the job was acquired by a printer; false otherwise. Read-only.
    *
    * @return bool The acquiredByPrinter
    */
    public function getAcquiredByPrinter()
    {
        if (array_key_exists("acquiredByPrinter", $this->_propDict)) {
            return $this->_propDict["acquiredByPrinter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acquiredByPrinter
    * True if the job was acquired by a printer; false otherwise. Read-only.
    *
    * @param bool $val The value of the acquiredByPrinter
    *
    * @return ArchivedPrintJob
    */
    public function setAcquiredByPrinter($val)
    {
        $this->_propDict["acquiredByPrinter"] = $val;
        return $this;
    }

    /**
    * Gets the acquiredDateTime
    * The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
    *
    * @return \DateTime The acquiredDateTime
    */
    public function getAcquiredDateTime()
    {
        if (array_key_exists("acquiredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["acquiredDateTime"], "\DateTime")) {
                return $this->_propDict["acquiredDateTime"];
            } else {
                $this->_propDict["acquiredDateTime"] = new \DateTime($this->_propDict["acquiredDateTime"]);
                return $this->_propDict["acquiredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the acquiredDateTime
    * The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
    *
    * @param \DateTime $val The value to assign to the acquiredDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setAcquiredDateTime($val)
    {
        $this->_propDict["acquiredDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the completionDateTime
    * The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
    *
    * @return \DateTime The completionDateTime
    */
    public function getCompletionDateTime()
    {
        if (array_key_exists("completionDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completionDateTime"], "\DateTime")) {
                return $this->_propDict["completionDateTime"];
            } else {
                $this->_propDict["completionDateTime"] = new \DateTime($this->_propDict["completionDateTime"]);
                return $this->_propDict["completionDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the completionDateTime
    * The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
    *
    * @param \DateTime $val The value to assign to the completionDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCompletionDateTime($val)
    {
        $this->_propDict["completionDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the copiesPrinted
    * The number of copies that were printed. Read-only.
    *
    * @return int The copiesPrinted
    */
    public function getCopiesPrinted()
    {
        if (array_key_exists("copiesPrinted", $this->_propDict)) {
            return $this->_propDict["copiesPrinted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copiesPrinted
    * The number of copies that were printed. Read-only.
    *
    * @param int $val The value of the copiesPrinted
    *
    * @return ArchivedPrintJob
    */
    public function setCopiesPrinted($val)
    {
        $this->_propDict["copiesPrinted"] = $val;
        return $this;
    }

    /**
    * Gets the createdBy
    * The user who created the print job. Read-only.
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }

    /**
    * Sets the createdBy
    * The user who created the print job. Read-only.
    *
    * @param UserIdentity $val The value to assign to the createdBy
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
         return $this;
    }

    /**
    * Gets the createdDateTime
    * The dateTimeOffset when the job was created. Read-only.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    * The dateTimeOffset when the job was created. Read-only.
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * The archived print job's GUID. Read-only.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * The archived print job's GUID. Read-only.
    *
    * @param string $val The value of the id
    *
    * @return ArchivedPrintJob
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the printerId
    * The printer ID that the job was queued for. Read-only.
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
    * The printer ID that the job was queued for. Read-only.
    *
    * @param string $val The value of the printerId
    *
    * @return ArchivedPrintJob
    */
    public function setPrinterId($val)
    {
        $this->_propDict["printerId"] = $val;
        return $this;
    }

    /**
    * Gets the processingState
    * The print job's final processing state. Read-only.
    *
    * @return PrintJobProcessingState The processingState
    */
    public function getProcessingState()
    {
        if (array_key_exists("processingState", $this->_propDict)) {
            if (is_a($this->_propDict["processingState"], "\Microsoft\Graph\Model\PrintJobProcessingState")) {
                return $this->_propDict["processingState"];
            } else {
                $this->_propDict["processingState"] = new PrintJobProcessingState($this->_propDict["processingState"]);
                return $this->_propDict["processingState"];
            }
        }
        return null;
    }

    /**
    * Sets the processingState
    * The print job's final processing state. Read-only.
    *
    * @param PrintJobProcessingState $val The value to assign to the processingState
    *
    * @return ArchivedPrintJob The ArchivedPrintJob
    */
    public function setProcessingState($val)
    {
        $this->_propDict["processingState"] = $val;
         return $this;
    }
}
