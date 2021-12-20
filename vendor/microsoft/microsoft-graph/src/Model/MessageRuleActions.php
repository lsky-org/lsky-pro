<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRuleActions File
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
* MessageRuleActions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageRuleActions extends Entity
{
    /**
    * Gets the assignCategories
    * A list of categories to be assigned to a message.
    *
    * @return string The assignCategories
    */
    public function getAssignCategories()
    {
        if (array_key_exists("assignCategories", $this->_propDict)) {
            return $this->_propDict["assignCategories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignCategories
    * A list of categories to be assigned to a message.
    *
    * @param string $val The value of the assignCategories
    *
    * @return MessageRuleActions
    */
    public function setAssignCategories($val)
    {
        $this->_propDict["assignCategories"] = $val;
        return $this;
    }
    /**
    * Gets the copyToFolder
    * The ID of a folder that a message is to be copied to.
    *
    * @return string The copyToFolder
    */
    public function getCopyToFolder()
    {
        if (array_key_exists("copyToFolder", $this->_propDict)) {
            return $this->_propDict["copyToFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copyToFolder
    * The ID of a folder that a message is to be copied to.
    *
    * @param string $val The value of the copyToFolder
    *
    * @return MessageRuleActions
    */
    public function setCopyToFolder($val)
    {
        $this->_propDict["copyToFolder"] = $val;
        return $this;
    }
    /**
    * Gets the delete
    * Indicates whether a message should be moved to the Deleted Items folder.
    *
    * @return bool The delete
    */
    public function getDelete()
    {
        if (array_key_exists("delete", $this->_propDict)) {
            return $this->_propDict["delete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delete
    * Indicates whether a message should be moved to the Deleted Items folder.
    *
    * @param bool $val The value of the delete
    *
    * @return MessageRuleActions
    */
    public function setDelete($val)
    {
        $this->_propDict["delete"] = $val;
        return $this;
    }

    /**
    * Gets the forwardAsAttachmentTo
    * The email addresses of the recipients to which a message should be forwarded as an attachment.
    *
    * @return Recipient The forwardAsAttachmentTo
    */
    public function getForwardAsAttachmentTo()
    {
        if (array_key_exists("forwardAsAttachmentTo", $this->_propDict)) {
            if (is_a($this->_propDict["forwardAsAttachmentTo"], "\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["forwardAsAttachmentTo"];
            } else {
                $this->_propDict["forwardAsAttachmentTo"] = new Recipient($this->_propDict["forwardAsAttachmentTo"]);
                return $this->_propDict["forwardAsAttachmentTo"];
            }
        }
        return null;
    }

    /**
    * Sets the forwardAsAttachmentTo
    * The email addresses of the recipients to which a message should be forwarded as an attachment.
    *
    * @param Recipient $val The value to assign to the forwardAsAttachmentTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setForwardAsAttachmentTo($val)
    {
        $this->_propDict["forwardAsAttachmentTo"] = $val;
         return $this;
    }

    /**
    * Gets the forwardTo
    * The email addresses of the recipients to which a message should be forwarded.
    *
    * @return Recipient The forwardTo
    */
    public function getForwardTo()
    {
        if (array_key_exists("forwardTo", $this->_propDict)) {
            if (is_a($this->_propDict["forwardTo"], "\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["forwardTo"];
            } else {
                $this->_propDict["forwardTo"] = new Recipient($this->_propDict["forwardTo"]);
                return $this->_propDict["forwardTo"];
            }
        }
        return null;
    }

    /**
    * Sets the forwardTo
    * The email addresses of the recipients to which a message should be forwarded.
    *
    * @param Recipient $val The value to assign to the forwardTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setForwardTo($val)
    {
        $this->_propDict["forwardTo"] = $val;
         return $this;
    }
    /**
    * Gets the markAsRead
    * Indicates whether a message should be marked as read.
    *
    * @return bool The markAsRead
    */
    public function getMarkAsRead()
    {
        if (array_key_exists("markAsRead", $this->_propDict)) {
            return $this->_propDict["markAsRead"];
        } else {
            return null;
        }
    }

    /**
    * Sets the markAsRead
    * Indicates whether a message should be marked as read.
    *
    * @param bool $val The value of the markAsRead
    *
    * @return MessageRuleActions
    */
    public function setMarkAsRead($val)
    {
        $this->_propDict["markAsRead"] = $val;
        return $this;
    }

    /**
    * Gets the markImportance
    * Sets the importance of the message, which can be: low, normal, high.
    *
    * @return Importance The markImportance
    */
    public function getMarkImportance()
    {
        if (array_key_exists("markImportance", $this->_propDict)) {
            if (is_a($this->_propDict["markImportance"], "\Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["markImportance"];
            } else {
                $this->_propDict["markImportance"] = new Importance($this->_propDict["markImportance"]);
                return $this->_propDict["markImportance"];
            }
        }
        return null;
    }

    /**
    * Sets the markImportance
    * Sets the importance of the message, which can be: low, normal, high.
    *
    * @param Importance $val The value to assign to the markImportance
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setMarkImportance($val)
    {
        $this->_propDict["markImportance"] = $val;
         return $this;
    }
    /**
    * Gets the moveToFolder
    * The ID of the folder that a message will be moved to.
    *
    * @return string The moveToFolder
    */
    public function getMoveToFolder()
    {
        if (array_key_exists("moveToFolder", $this->_propDict)) {
            return $this->_propDict["moveToFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the moveToFolder
    * The ID of the folder that a message will be moved to.
    *
    * @param string $val The value of the moveToFolder
    *
    * @return MessageRuleActions
    */
    public function setMoveToFolder($val)
    {
        $this->_propDict["moveToFolder"] = $val;
        return $this;
    }
    /**
    * Gets the permanentDelete
    * Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
    *
    * @return bool The permanentDelete
    */
    public function getPermanentDelete()
    {
        if (array_key_exists("permanentDelete", $this->_propDict)) {
            return $this->_propDict["permanentDelete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permanentDelete
    * Indicates whether a message should be permanently deleted and not saved to the Deleted Items folder.
    *
    * @param bool $val The value of the permanentDelete
    *
    * @return MessageRuleActions
    */
    public function setPermanentDelete($val)
    {
        $this->_propDict["permanentDelete"] = $val;
        return $this;
    }

    /**
    * Gets the redirectTo
    * The email address to which a message should be redirected.
    *
    * @return Recipient The redirectTo
    */
    public function getRedirectTo()
    {
        if (array_key_exists("redirectTo", $this->_propDict)) {
            if (is_a($this->_propDict["redirectTo"], "\Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["redirectTo"];
            } else {
                $this->_propDict["redirectTo"] = new Recipient($this->_propDict["redirectTo"]);
                return $this->_propDict["redirectTo"];
            }
        }
        return null;
    }

    /**
    * Sets the redirectTo
    * The email address to which a message should be redirected.
    *
    * @param Recipient $val The value to assign to the redirectTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setRedirectTo($val)
    {
        $this->_propDict["redirectTo"] = $val;
         return $this;
    }
    /**
    * Gets the stopProcessingRules
    * Indicates whether subsequent rules should be evaluated.
    *
    * @return bool The stopProcessingRules
    */
    public function getStopProcessingRules()
    {
        if (array_key_exists("stopProcessingRules", $this->_propDict)) {
            return $this->_propDict["stopProcessingRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stopProcessingRules
    * Indicates whether subsequent rules should be evaluated.
    *
    * @param bool $val The value of the stopProcessingRules
    *
    * @return MessageRuleActions
    */
    public function setStopProcessingRules($val)
    {
        $this->_propDict["stopProcessingRules"] = $val;
        return $this;
    }
}
