<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceClassificationOverride File
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
* InferenceClassificationOverride class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InferenceClassificationOverride extends Entity
{
    /**
    * Gets the classifyAs
    * Specifies how incoming messages from a specific sender should always be classified as. Possible values are: focused, other.
    *
    * @return InferenceClassificationType The classifyAs
    */
    public function getClassifyAs()
    {
        if (array_key_exists("classifyAs", $this->_propDict)) {
            if (is_a($this->_propDict["classifyAs"], "\Microsoft\Graph\Model\InferenceClassificationType")) {
                return $this->_propDict["classifyAs"];
            } else {
                $this->_propDict["classifyAs"] = new InferenceClassificationType($this->_propDict["classifyAs"]);
                return $this->_propDict["classifyAs"];
            }
        }
        return null;
    }
    
    /**
    * Sets the classifyAs
    * Specifies how incoming messages from a specific sender should always be classified as. Possible values are: focused, other.
    *
    * @param InferenceClassificationType $val The classifyAs
    *
    * @return InferenceClassificationOverride
    */
    public function setClassifyAs($val)
    {
        $this->_propDict["classifyAs"] = $val;
        return $this;
    }
    
    /**
    * Gets the senderEmailAddress
    * The email address information of the sender for whom the override is created.
    *
    * @return EmailAddress The senderEmailAddress
    */
    public function getSenderEmailAddress()
    {
        if (array_key_exists("senderEmailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["senderEmailAddress"], "\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["senderEmailAddress"];
            } else {
                $this->_propDict["senderEmailAddress"] = new EmailAddress($this->_propDict["senderEmailAddress"]);
                return $this->_propDict["senderEmailAddress"];
            }
        }
        return null;
    }
    
    /**
    * Sets the senderEmailAddress
    * The email address information of the sender for whom the override is created.
    *
    * @param EmailAddress $val The senderEmailAddress
    *
    * @return InferenceClassificationOverride
    */
    public function setSenderEmailAddress($val)
    {
        $this->_propDict["senderEmailAddress"] = $val;
        return $this;
    }
    
}
