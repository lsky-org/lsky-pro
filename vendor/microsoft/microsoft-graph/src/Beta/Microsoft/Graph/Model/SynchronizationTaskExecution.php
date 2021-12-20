<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationTaskExecution File
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
* SynchronizationTaskExecution class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationTaskExecution extends Entity
{
    /**
    * Gets the activityIdentifier
    * Identifier of the job run.
    *
    * @return string The activityIdentifier
    */
    public function getActivityIdentifier()
    {
        if (array_key_exists("activityIdentifier", $this->_propDict)) {
            return $this->_propDict["activityIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityIdentifier
    * Identifier of the job run.
    *
    * @param string $val The value of the activityIdentifier
    *
    * @return SynchronizationTaskExecution
    */
    public function setActivityIdentifier($val)
    {
        $this->_propDict["activityIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the countEntitled
    * Count of processed entries that were assigned for this application.
    *
    * @return int The countEntitled
    */
    public function getCountEntitled()
    {
        if (array_key_exists("countEntitled", $this->_propDict)) {
            return $this->_propDict["countEntitled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEntitled
    * Count of processed entries that were assigned for this application.
    *
    * @param int $val The value of the countEntitled
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEntitled($val)
    {
        $this->_propDict["countEntitled"] = $val;
        return $this;
    }
    /**
    * Gets the countEntitledForProvisioning
    * Count of processed entries that were assigned for provisioning.
    *
    * @return int The countEntitledForProvisioning
    */
    public function getCountEntitledForProvisioning()
    {
        if (array_key_exists("countEntitledForProvisioning", $this->_propDict)) {
            return $this->_propDict["countEntitledForProvisioning"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEntitledForProvisioning
    * Count of processed entries that were assigned for provisioning.
    *
    * @param int $val The value of the countEntitledForProvisioning
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEntitledForProvisioning($val)
    {
        $this->_propDict["countEntitledForProvisioning"] = $val;
        return $this;
    }
    /**
    * Gets the countEscrowed
    * Count of entries that were escrowed (errors).
    *
    * @return int The countEscrowed
    */
    public function getCountEscrowed()
    {
        if (array_key_exists("countEscrowed", $this->_propDict)) {
            return $this->_propDict["countEscrowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEscrowed
    * Count of entries that were escrowed (errors).
    *
    * @param int $val The value of the countEscrowed
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEscrowed($val)
    {
        $this->_propDict["countEscrowed"] = $val;
        return $this;
    }
    /**
    * Gets the countEscrowedRaw
    * Count of entries that were escrowed, including system-generated escrows.
    *
    * @return int The countEscrowedRaw
    */
    public function getCountEscrowedRaw()
    {
        if (array_key_exists("countEscrowedRaw", $this->_propDict)) {
            return $this->_propDict["countEscrowedRaw"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countEscrowedRaw
    * Count of entries that were escrowed, including system-generated escrows.
    *
    * @param int $val The value of the countEscrowedRaw
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountEscrowedRaw($val)
    {
        $this->_propDict["countEscrowedRaw"] = $val;
        return $this;
    }
    /**
    * Gets the countExported
    * Count of exported entries.
    *
    * @return int The countExported
    */
    public function getCountExported()
    {
        if (array_key_exists("countExported", $this->_propDict)) {
            return $this->_propDict["countExported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countExported
    * Count of exported entries.
    *
    * @param int $val The value of the countExported
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountExported($val)
    {
        $this->_propDict["countExported"] = $val;
        return $this;
    }
    /**
    * Gets the countExports
    * Count of entries that were expected to be exported.
    *
    * @return int The countExports
    */
    public function getCountExports()
    {
        if (array_key_exists("countExports", $this->_propDict)) {
            return $this->_propDict["countExports"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countExports
    * Count of entries that were expected to be exported.
    *
    * @param int $val The value of the countExports
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountExports($val)
    {
        $this->_propDict["countExports"] = $val;
        return $this;
    }
    /**
    * Gets the countImported
    * Count of imported entries.
    *
    * @return int The countImported
    */
    public function getCountImported()
    {
        if (array_key_exists("countImported", $this->_propDict)) {
            return $this->_propDict["countImported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImported
    * Count of imported entries.
    *
    * @param int $val The value of the countImported
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImported($val)
    {
        $this->_propDict["countImported"] = $val;
        return $this;
    }
    /**
    * Gets the countImportedDeltas
    * Count of imported delta-changes.
    *
    * @return int The countImportedDeltas
    */
    public function getCountImportedDeltas()
    {
        if (array_key_exists("countImportedDeltas", $this->_propDict)) {
            return $this->_propDict["countImportedDeltas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImportedDeltas
    * Count of imported delta-changes.
    *
    * @param int $val The value of the countImportedDeltas
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImportedDeltas($val)
    {
        $this->_propDict["countImportedDeltas"] = $val;
        return $this;
    }
    /**
    * Gets the countImportedReferenceDeltas
    * Count of imported delta-changes pertaining to reference changes.
    *
    * @return int The countImportedReferenceDeltas
    */
    public function getCountImportedReferenceDeltas()
    {
        if (array_key_exists("countImportedReferenceDeltas", $this->_propDict)) {
            return $this->_propDict["countImportedReferenceDeltas"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countImportedReferenceDeltas
    * Count of imported delta-changes pertaining to reference changes.
    *
    * @param int $val The value of the countImportedReferenceDeltas
    *
    * @return SynchronizationTaskExecution
    */
    public function setCountImportedReferenceDeltas($val)
    {
        $this->_propDict["countImportedReferenceDeltas"] = $val;
        return $this;
    }

    /**
    * Gets the error
    * If an error was encountered, contains a synchronizationError object with details.
    *
    * @return SynchronizationError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "\Beta\Microsoft\Graph\Model\SynchronizationError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new SynchronizationError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    * If an error was encountered, contains a synchronizationError object with details.
    *
    * @param SynchronizationError $val The value to assign to the error
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the state
    * Code summarizing the result of this run. Possible values are: Succeeded, Failed, EntryLevelErrors.
    *
    * @return SynchronizationTaskExecutionResult The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\SynchronizationTaskExecutionResult")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new SynchronizationTaskExecutionResult($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    * Code summarizing the result of this run. Possible values are: Succeeded, Failed, EntryLevelErrors.
    *
    * @param SynchronizationTaskExecutionResult $val The value to assign to the state
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
         return $this;
    }

    /**
    * Gets the timeBegan
    * Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The timeBegan
    */
    public function getTimeBegan()
    {
        if (array_key_exists("timeBegan", $this->_propDict)) {
            if (is_a($this->_propDict["timeBegan"], "\DateTime")) {
                return $this->_propDict["timeBegan"];
            } else {
                $this->_propDict["timeBegan"] = new \DateTime($this->_propDict["timeBegan"]);
                return $this->_propDict["timeBegan"];
            }
        }
        return null;
    }

    /**
    * Sets the timeBegan
    * Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the timeBegan
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setTimeBegan($val)
    {
        $this->_propDict["timeBegan"] = $val;
         return $this;
    }

    /**
    * Gets the timeEnded
    * Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The timeEnded
    */
    public function getTimeEnded()
    {
        if (array_key_exists("timeEnded", $this->_propDict)) {
            if (is_a($this->_propDict["timeEnded"], "\DateTime")) {
                return $this->_propDict["timeEnded"];
            } else {
                $this->_propDict["timeEnded"] = new \DateTime($this->_propDict["timeEnded"]);
                return $this->_propDict["timeEnded"];
            }
        }
        return null;
    }

    /**
    * Sets the timeEnded
    * Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the timeEnded
    *
    * @return SynchronizationTaskExecution The SynchronizationTaskExecution
    */
    public function setTimeEnded($val)
    {
        $this->_propDict["timeEnded"] = $val;
         return $this;
    }
}
