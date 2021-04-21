<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppTroubleshootingHistoryItem File
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
* MobileAppTroubleshootingHistoryItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppTroubleshootingHistoryItem extends Entity
{

    /**
    * Gets the occurrenceDateTime
    * Time when the history item occurred.
    *
    * @return \DateTime The occurrenceDateTime
    */
    public function getOccurrenceDateTime()
    {
        if (array_key_exists("occurrenceDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["occurrenceDateTime"], "\DateTime")) {
                return $this->_propDict["occurrenceDateTime"];
            } else {
                $this->_propDict["occurrenceDateTime"] = new \DateTime($this->_propDict["occurrenceDateTime"]);
                return $this->_propDict["occurrenceDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the occurrenceDateTime
    * Time when the history item occurred.
    *
    * @param \DateTime $val The value to assign to the occurrenceDateTime
    *
    * @return MobileAppTroubleshootingHistoryItem The MobileAppTroubleshootingHistoryItem
    */
    public function setOccurrenceDateTime($val)
    {
        $this->_propDict["occurrenceDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the troubleshootingErrorDetails
    * Object containing detailed information about the error and its remediation.
    *
    * @return DeviceManagementTroubleshootingErrorDetails The troubleshootingErrorDetails
    */
    public function getTroubleshootingErrorDetails()
    {
        if (array_key_exists("troubleshootingErrorDetails", $this->_propDict)) {
            if (is_a($this->_propDict["troubleshootingErrorDetails"], "\Beta\Microsoft\Graph\Model\DeviceManagementTroubleshootingErrorDetails")) {
                return $this->_propDict["troubleshootingErrorDetails"];
            } else {
                $this->_propDict["troubleshootingErrorDetails"] = new DeviceManagementTroubleshootingErrorDetails($this->_propDict["troubleshootingErrorDetails"]);
                return $this->_propDict["troubleshootingErrorDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the troubleshootingErrorDetails
    * Object containing detailed information about the error and its remediation.
    *
    * @param DeviceManagementTroubleshootingErrorDetails $val The value to assign to the troubleshootingErrorDetails
    *
    * @return MobileAppTroubleshootingHistoryItem The MobileAppTroubleshootingHistoryItem
    */
    public function setTroubleshootingErrorDetails($val)
    {
        $this->_propDict["troubleshootingErrorDetails"] = $val;
         return $this;
    }
}
