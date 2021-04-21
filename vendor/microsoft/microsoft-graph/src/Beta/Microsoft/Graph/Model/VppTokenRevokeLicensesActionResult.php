<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VppTokenRevokeLicensesActionResult File
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
* VppTokenRevokeLicensesActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VppTokenRevokeLicensesActionResult extends VppTokenActionResult
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
    * @return VppTokenRevokeLicensesActionResult The VppTokenRevokeLicensesActionResult
    */
    public function setActionFailureReason($val)
    {
        $this->_propDict["actionFailureReason"] = $val;
         return $this;
    }
    /**
    * Gets the failedLicensesCount
    * A count of the number of licenses that failed to revoke.
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
    * A count of the number of licenses that failed to revoke.
    *
    * @param int $val The value of the failedLicensesCount
    *
    * @return VppTokenRevokeLicensesActionResult
    */
    public function setFailedLicensesCount($val)
    {
        $this->_propDict["failedLicensesCount"] = $val;
        return $this;
    }
    /**
    * Gets the totalLicensesCount
    * A count of the number of licenses that were attempted to revoke.
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
    * A count of the number of licenses that were attempted to revoke.
    *
    * @param int $val The value of the totalLicensesCount
    *
    * @return VppTokenRevokeLicensesActionResult
    */
    public function setTotalLicensesCount($val)
    {
        $this->_propDict["totalLicensesCount"] = $val;
        return $this;
    }
}
