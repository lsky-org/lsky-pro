<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVppAppRevokeLicensesActionResult File
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
* IosVppAppRevokeLicensesActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVppAppRevokeLicensesActionResult extends Entity
{

    /**
    * Gets the actionFailureReason
    * The reason for the revoke licenses action failure. Possible values are: none, appleFailure, internalError, expiredVppToken, expiredApplePushNotificationCertificate.
    *
    * @return VppTokenActionFailureReason The actionFailureReason
    */
    public function getActionFailureReason()
    {
        if (array_key_exists("actionFailureReason", $this->_propDict)) {
            if (is_a($this->_propDict["actionFailureReason"], "\Beta\Microsoft\Graph\Model\VppTokenActionFailureReason")) {
                return $this->_propDict["actionFailureReason"];
            } else {
                $this->_propDict["actionFailureReason"] = new VppTokenActionFailureReason($this->_propDict["actionFailureReason"]);
                return $this->_propDict["actionFailureReason"];
            }
        }
        return null;
    }

    /**
    * Sets the actionFailureReason
    * The reason for the revoke licenses action failure. Possible values are: none, appleFailure, internalError, expiredVppToken, expiredApplePushNotificationCertificate.
    *
    * @param VppTokenActionFailureReason $val The value to assign to the actionFailureReason
    *
    * @return IosVppAppRevokeLicensesActionResult The IosVppAppRevokeLicensesActionResult
    */
    public function setActionFailureReason($val)
    {
        $this->_propDict["actionFailureReason"] = $val;
         return $this;
    }
    /**
    * Gets the actionName
    * Action name
    *
    * @return string The actionName
    */
    public function getActionName()
    {
        if (array_key_exists("actionName", $this->_propDict)) {
            return $this->_propDict["actionName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionName
    * Action name
    *
    * @param string $val The value of the actionName
    *
    * @return IosVppAppRevokeLicensesActionResult
    */
    public function setActionName($val)
    {
        $this->_propDict["actionName"] = $val;
        return $this;
    }

    /**
    * Gets the actionState
    * State of the action. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @return ActionState The actionState
    */
    public function getActionState()
    {
        if (array_key_exists("actionState", $this->_propDict)) {
            if (is_a($this->_propDict["actionState"], "\Beta\Microsoft\Graph\Model\ActionState")) {
                return $this->_propDict["actionState"];
            } else {
                $this->_propDict["actionState"] = new ActionState($this->_propDict["actionState"]);
                return $this->_propDict["actionState"];
            }
        }
        return null;
    }

    /**
    * Sets the actionState
    * State of the action. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @param ActionState $val The value to assign to the actionState
    *
    * @return IosVppAppRevokeLicensesActionResult The IosVppAppRevokeLicensesActionResult
    */
    public function setActionState($val)
    {
        $this->_propDict["actionState"] = $val;
         return $this;
    }
    /**
    * Gets the failedLicensesCount
    * A count of the number of licenses for which revoke failed.
    *
    * @return int The failedLicensesCount
    */
    public function getFailedLicensesCount()
    {
        if (array_key_exists("failedLicensesCount", $this->_propDict)) {
            return $this->_propDict["failedLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedLicensesCount
    * A count of the number of licenses for which revoke failed.
    *
    * @param int $val The value of the failedLicensesCount
    *
    * @return IosVppAppRevokeLicensesActionResult
    */
    public function setFailedLicensesCount($val)
    {
        $this->_propDict["failedLicensesCount"] = $val;
        return $this;
    }

    /**
    * Gets the lastUpdatedDateTime
    * Time the action state was last updated
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastUpdatedDateTime
    * Time the action state was last updated
    *
    * @param \DateTime $val The value to assign to the lastUpdatedDateTime
    *
    * @return IosVppAppRevokeLicensesActionResult The IosVppAppRevokeLicensesActionResult
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the managedDeviceId
    * DeviceId associated with the action.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managedDeviceId
    * DeviceId associated with the action.
    *
    * @param string $val The value of the managedDeviceId
    *
    * @return IosVppAppRevokeLicensesActionResult
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    * Time the action was initiated
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * Time the action was initiated
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return IosVppAppRevokeLicensesActionResult The IosVppAppRevokeLicensesActionResult
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the totalLicensesCount
    * A count of the number of licenses for which revoke was attempted.
    *
    * @return int The totalLicensesCount
    */
    public function getTotalLicensesCount()
    {
        if (array_key_exists("totalLicensesCount", $this->_propDict)) {
            return $this->_propDict["totalLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLicensesCount
    * A count of the number of licenses for which revoke was attempted.
    *
    * @param int $val The value of the totalLicensesCount
    *
    * @return IosVppAppRevokeLicensesActionResult
    */
    public function setTotalLicensesCount($val)
    {
        $this->_propDict["totalLicensesCount"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * UserId associated with the action.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    * UserId associated with the action.
    *
    * @param string $val The value of the userId
    *
    * @return IosVppAppRevokeLicensesActionResult
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
}
