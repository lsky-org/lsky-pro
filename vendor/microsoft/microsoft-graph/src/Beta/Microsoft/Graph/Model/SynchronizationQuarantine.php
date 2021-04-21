<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationQuarantine File
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
* SynchronizationQuarantine class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationQuarantine extends Entity
{

    /**
    * Gets the currentBegan
    * Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The currentBegan
    */
    public function getCurrentBegan()
    {
        if (array_key_exists("currentBegan", $this->_propDict)) {
            if (is_a($this->_propDict["currentBegan"], "\DateTime")) {
                return $this->_propDict["currentBegan"];
            } else {
                $this->_propDict["currentBegan"] = new \DateTime($this->_propDict["currentBegan"]);
                return $this->_propDict["currentBegan"];
            }
        }
        return null;
    }

    /**
    * Sets the currentBegan
    * Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the currentBegan
    *
    * @return SynchronizationQuarantine The SynchronizationQuarantine
    */
    public function setCurrentBegan($val)
    {
        $this->_propDict["currentBegan"] = $val;
         return $this;
    }

    /**
    * Gets the error
    * Describes the error(s) that occurred when putting the synchronization job into quarantine.
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
    * Describes the error(s) that occurred when putting the synchronization job into quarantine.
    *
    * @param SynchronizationError $val The value to assign to the error
    *
    * @return SynchronizationQuarantine The SynchronizationQuarantine
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }

    /**
    * Gets the nextAttempt
    * Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The nextAttempt
    */
    public function getNextAttempt()
    {
        if (array_key_exists("nextAttempt", $this->_propDict)) {
            if (is_a($this->_propDict["nextAttempt"], "\DateTime")) {
                return $this->_propDict["nextAttempt"];
            } else {
                $this->_propDict["nextAttempt"] = new \DateTime($this->_propDict["nextAttempt"]);
                return $this->_propDict["nextAttempt"];
            }
        }
        return null;
    }

    /**
    * Sets the nextAttempt
    * Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the nextAttempt
    *
    * @return SynchronizationQuarantine The SynchronizationQuarantine
    */
    public function setNextAttempt($val)
    {
        $this->_propDict["nextAttempt"] = $val;
         return $this;
    }

    /**
    * Gets the reason
    * A code that signifies why the quarantine was imposed. Possible values are: EncounteredBaseEscrowThreshold, EncounteredTotalEscrowThreshold, EncounteredEscrowProportionThreshold, EncounteredQuarantineException, QuarantinedOnDemand, TooManyDeletes, Unknown.
    *
    * @return QuarantineReason The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            if (is_a($this->_propDict["reason"], "\Beta\Microsoft\Graph\Model\QuarantineReason")) {
                return $this->_propDict["reason"];
            } else {
                $this->_propDict["reason"] = new QuarantineReason($this->_propDict["reason"]);
                return $this->_propDict["reason"];
            }
        }
        return null;
    }

    /**
    * Sets the reason
    * A code that signifies why the quarantine was imposed. Possible values are: EncounteredBaseEscrowThreshold, EncounteredTotalEscrowThreshold, EncounteredEscrowProportionThreshold, EncounteredQuarantineException, QuarantinedOnDemand, TooManyDeletes, Unknown.
    *
    * @param QuarantineReason $val The value to assign to the reason
    *
    * @return SynchronizationQuarantine The SynchronizationQuarantine
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
         return $this;
    }

    /**
    * Gets the seriesBegan
    * Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The seriesBegan
    */
    public function getSeriesBegan()
    {
        if (array_key_exists("seriesBegan", $this->_propDict)) {
            if (is_a($this->_propDict["seriesBegan"], "\DateTime")) {
                return $this->_propDict["seriesBegan"];
            } else {
                $this->_propDict["seriesBegan"] = new \DateTime($this->_propDict["seriesBegan"]);
                return $this->_propDict["seriesBegan"];
            }
        }
        return null;
    }

    /**
    * Sets the seriesBegan
    * Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The value to assign to the seriesBegan
    *
    * @return SynchronizationQuarantine The SynchronizationQuarantine
    */
    public function setSeriesBegan($val)
    {
        $this->_propDict["seriesBegan"] = $val;
         return $this;
    }
    /**
    * Gets the seriesCount
    * Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
    *
    * @return int The seriesCount
    */
    public function getSeriesCount()
    {
        if (array_key_exists("seriesCount", $this->_propDict)) {
            return $this->_propDict["seriesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the seriesCount
    * Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
    *
    * @param int $val The value of the seriesCount
    *
    * @return SynchronizationQuarantine
    */
    public function setSeriesCount($val)
    {
        $this->_propDict["seriesCount"] = $val;
        return $this;
    }
}
