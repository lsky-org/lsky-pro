<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailboxUsageQuotaStatusMailboxCounts File
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
* MailboxUsageQuotaStatusMailboxCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailboxUsageQuotaStatusMailboxCounts extends Entity
{
    /**
    * Gets the indeterminate
    *
    * @return int The indeterminate
    */
    public function getIndeterminate()
    {
        if (array_key_exists("indeterminate", $this->_propDict)) {
            return $this->_propDict["indeterminate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indeterminate
    *
    * @param int $val The indeterminate
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setIndeterminate($val)
    {
        $this->_propDict["indeterminate"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \DateTime The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\DateTime")) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \DateTime($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \DateTime $val The reportDate
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the sendProhibited
    *
    * @return int The sendProhibited
    */
    public function getSendProhibited()
    {
        if (array_key_exists("sendProhibited", $this->_propDict)) {
            return $this->_propDict["sendProhibited"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sendProhibited
    *
    * @param int $val The sendProhibited
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setSendProhibited($val)
    {
        $this->_propDict["sendProhibited"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sendReceiveProhibited
    *
    * @return int The sendReceiveProhibited
    */
    public function getSendReceiveProhibited()
    {
        if (array_key_exists("sendReceiveProhibited", $this->_propDict)) {
            return $this->_propDict["sendReceiveProhibited"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sendReceiveProhibited
    *
    * @param int $val The sendReceiveProhibited
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setSendReceiveProhibited($val)
    {
        $this->_propDict["sendReceiveProhibited"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the underLimit
    *
    * @return int The underLimit
    */
    public function getUnderLimit()
    {
        if (array_key_exists("underLimit", $this->_propDict)) {
            return $this->_propDict["underLimit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the underLimit
    *
    * @param int $val The underLimit
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setUnderLimit($val)
    {
        $this->_propDict["underLimit"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the warningIssued
    *
    * @return int The warningIssued
    */
    public function getWarningIssued()
    {
        if (array_key_exists("warningIssued", $this->_propDict)) {
            return $this->_propDict["warningIssued"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the warningIssued
    *
    * @param int $val The warningIssued
    *
    * @return MailboxUsageQuotaStatusMailboxCounts
    */
    public function setWarningIssued($val)
    {
        $this->_propDict["warningIssued"] = intval($val);
        return $this;
    }
    
}
