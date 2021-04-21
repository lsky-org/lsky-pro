<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailAssessmentRequest File
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
* MailAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailAssessmentRequest extends ThreatAssessmentRequest
{
    /**
    * Gets the destinationRoutingReason
    * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
    *
    * @return MailDestinationRoutingReason The destinationRoutingReason
    */
    public function getDestinationRoutingReason()
    {
        if (array_key_exists("destinationRoutingReason", $this->_propDict)) {
            if (is_a($this->_propDict["destinationRoutingReason"], "\Microsoft\Graph\Model\MailDestinationRoutingReason")) {
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
    * @return MailAssessmentRequest
    */
    public function setDestinationRoutingReason($val)
    {
        $this->_propDict["destinationRoutingReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the messageUri
    * The resource URI of the mail message for assessment.
    *
    * @return string The messageUri
    */
    public function getMessageUri()
    {
        if (array_key_exists("messageUri", $this->_propDict)) {
            return $this->_propDict["messageUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the messageUri
    * The resource URI of the mail message for assessment.
    *
    * @param string $val The messageUri
    *
    * @return MailAssessmentRequest
    */
    public function setMessageUri($val)
    {
        $this->_propDict["messageUri"] = $val;
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
    * @return MailAssessmentRequest
    */
    public function setRecipientEmail($val)
    {
        $this->_propDict["recipientEmail"] = $val;
        return $this;
    }
    
}
