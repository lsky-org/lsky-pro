<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Mention File
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
* Mention class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Mention extends Entity
{
    /**
    * Gets the application
    * The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
    *
    * @return string The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            return $this->_propDict["application"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the application
    * The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
    *
    * @param string $val The application
    *
    * @return Mention
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientReference
    * A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
    *
    * @return string The clientReference
    */
    public function getClientReference()
    {
        if (array_key_exists("clientReference", $this->_propDict)) {
            return $this->_propDict["clientReference"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientReference
    * A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
    *
    * @param string $val The clientReference
    *
    * @return Mention
    */
    public function setClientReference($val)
    {
        $this->_propDict["clientReference"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The email information of the user who made the mention.
    *
    * @return EmailAddress The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new EmailAddress($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The email information of the user who made the mention.
    *
    * @param EmailAddress $val The createdBy
    *
    * @return Mention
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time that the mention is created on the client.
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
    * The date and time that the mention is created on the client.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Mention
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deepLink
    * A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
    *
    * @return string The deepLink
    */
    public function getDeepLink()
    {
        if (array_key_exists("deepLink", $this->_propDict)) {
            return $this->_propDict["deepLink"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deepLink
    * A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
    *
    * @param string $val The deepLink
    *
    * @return Mention
    */
    public function setDeepLink($val)
    {
        $this->_propDict["deepLink"] = $val;
        return $this;
    }
    
    /**
    * Gets the mentioned
    * The email information of the mentioned person. Required.
    *
    * @return EmailAddress The mentioned
    */
    public function getMentioned()
    {
        if (array_key_exists("mentioned", $this->_propDict)) {
            if (is_a($this->_propDict["mentioned"], "\Beta\Microsoft\Graph\Model\EmailAddress")) {
                return $this->_propDict["mentioned"];
            } else {
                $this->_propDict["mentioned"] = new EmailAddress($this->_propDict["mentioned"]);
                return $this->_propDict["mentioned"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mentioned
    * The email information of the mentioned person. Required.
    *
    * @param EmailAddress $val The mentioned
    *
    * @return Mention
    */
    public function setMentioned($val)
    {
        $this->_propDict["mentioned"] = $val;
        return $this;
    }
    
    /**
    * Gets the mentionText
    * Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
    *
    * @return string The mentionText
    */
    public function getMentionText()
    {
        if (array_key_exists("mentionText", $this->_propDict)) {
            return $this->_propDict["mentionText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mentionText
    * Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
    *
    * @param string $val The mentionText
    *
    * @return Mention
    */
    public function setMentionText($val)
    {
        $this->_propDict["mentionText"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverCreatedDateTime
    * The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
    *
    * @return \DateTime The serverCreatedDateTime
    */
    public function getServerCreatedDateTime()
    {
        if (array_key_exists("serverCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["serverCreatedDateTime"], "\DateTime")) {
                return $this->_propDict["serverCreatedDateTime"];
            } else {
                $this->_propDict["serverCreatedDateTime"] = new \DateTime($this->_propDict["serverCreatedDateTime"]);
                return $this->_propDict["serverCreatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the serverCreatedDateTime
    * The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
    *
    * @param \DateTime $val The serverCreatedDateTime
    *
    * @return Mention
    */
    public function setServerCreatedDateTime($val)
    {
        $this->_propDict["serverCreatedDateTime"] = $val;
        return $this;
    }
    
}
