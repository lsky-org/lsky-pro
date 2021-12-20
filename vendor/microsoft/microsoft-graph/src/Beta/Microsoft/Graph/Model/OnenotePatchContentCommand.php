<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenotePatchContentCommand File
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
* OnenotePatchContentCommand class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenotePatchContentCommand extends Entity
{

    /**
    * Gets the action
    * The action to perform on the target element. Possible values are: replace, append, delete, insert, or prepend.
    *
    * @return OnenotePatchActionType The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\OnenotePatchActionType")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new OnenotePatchActionType($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    * The action to perform on the target element. Possible values are: replace, append, delete, insert, or prepend.
    *
    * @param OnenotePatchActionType $val The value to assign to the action
    *
    * @return OnenotePatchContentCommand The OnenotePatchContentCommand
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
    /**
    * Gets the content
    * A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    * A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
    *
    * @param string $val The value of the content
    *
    * @return OnenotePatchContentCommand
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the position
    * The location to add the supplied content, relative to the target element. Possible values are: after (default) or before.
    *
    * @return OnenotePatchInsertPosition The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            if (is_a($this->_propDict["position"], "\Beta\Microsoft\Graph\Model\OnenotePatchInsertPosition")) {
                return $this->_propDict["position"];
            } else {
                $this->_propDict["position"] = new OnenotePatchInsertPosition($this->_propDict["position"]);
                return $this->_propDict["position"];
            }
        }
        return null;
    }

    /**
    * Sets the position
    * The location to add the supplied content, relative to the target element. Possible values are: after (default) or before.
    *
    * @param OnenotePatchInsertPosition $val The value to assign to the position
    *
    * @return OnenotePatchContentCommand The OnenotePatchContentCommand
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
         return $this;
    }
    /**
    * Gets the target
    * The element to update. Must be the #&amp;lt;data-id&amp;gt; or the generated {id} of the element, or the body or title keyword.
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    * The element to update. Must be the #&amp;lt;data-id&amp;gt; or the generated {id} of the element, or the body or title keyword.
    *
    * @param string $val The value of the target
    *
    * @return OnenotePatchContentCommand
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
