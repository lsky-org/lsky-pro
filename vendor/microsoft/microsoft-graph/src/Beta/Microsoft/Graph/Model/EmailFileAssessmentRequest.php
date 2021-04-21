<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailFileAssessmentRequest File
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
* EmailFileAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailFileAssessmentRequest extends ThreatAssessmentRequest
{
    /**
    * Gets the contentData
    * Base64 encoded .eml email file content. The file content cannot fetch back because it isn't stored.
    *
    * @return string The contentData
    */
    public function getContentData()
    {
        if (array_key_exists("contentData", $this->_propDict)) {
            return $this->_propDict["contentData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentData
    * Base64 encoded .eml email file content. The file content cannot fetch back because it isn't stored.
    *
    * @param string $val The contentData
    *
    * @return EmailFileAssessmentRequest
    */
    public function setContentData($val)
    {
        $this->_propDict["contentData"] = $val;
        return $this;
    }
    
    /**
    * Gets the destinationRoutingReason
    * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
    *
    * @return MailDestinationRoutingReason The destinationRoutingReason
    */
    public function getDestinationRoutingReason()
    {
        if (array_key_exists("destinationRoutingReason", $this->_propDict)) {
            if (is_a($this->_propDict["destinationRoutingReason"], "\Beta\Microsoft\Graph\Model\MailDestinationRoutingReason")) {
                return $this->_propDict["destinationRoutingReason"];
            } else {
                $this->_propDict["destinationRoutingReason"] = new MailDestinationRoutingReason($this->_propDict["destinationRoutingReason"]);
                return $this->_propDict["destinationRoutingReason"];
            }
        }
        return null;
    }
    
    /**
    * Sets the destinationRoutingReason
    * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
    *
    * @param MailDestinationRoutingReason $val The destinationRoutingReason
    *
    * @return EmailFileAssessmentRequest
    */
    public function setDestinationRoutingReason($val)
    {
        $this->_propDict["destinationRoutingReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the recipientEmail
    * The mail recipient whose policies are used to assess the mail.
    *
    * @return string The recipientEmail
    */
    public function getRecipientEmail()
    {
        if (array_key_exists("recipientEmail", $this->_propDict)) {
            return $this->_propDict["recipientEmail"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientEmail
    * The mail recipient whose policies are used to assess the mail.
    *
    * @param string $val The recipientEmail
    *
    * @return EmailFileAssessmentRequest
    */
    public function setRecipientEmail($val)
    {
        $this->_propDict["recipientEmail"] = $val;
        return $this;
    }
    
}
