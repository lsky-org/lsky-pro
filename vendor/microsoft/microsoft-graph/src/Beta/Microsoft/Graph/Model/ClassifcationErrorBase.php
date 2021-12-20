<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassifcationErrorBase File
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
* ClassifcationErrorBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClassifcationErrorBase extends Entity
{
    /**
    * Gets the code
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    *
    * @param string $val The value of the code
    *
    * @return ClassifcationErrorBase
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the innerError
    *
    * @return ClassificationInnerError The innerError
    */
    public function getInnerError()
    {
        if (array_key_exists("innerError", $this->_propDict)) {
            if (is_a($this->_propDict["innerError"], "\Beta\Microsoft\Graph\Model\ClassificationInnerError")) {
                return $this->_propDict["innerError"];
            } else {
                $this->_propDict["innerError"] = new ClassificationInnerError($this->_propDict["innerError"]);
                return $this->_propDict["innerError"];
            }
        }
        return null;
    }

    /**
    * Sets the innerError
    *
    * @param ClassificationInnerError $val The value to assign to the innerError
    *
    * @return ClassifcationErrorBase The ClassifcationErrorBase
    */
    public function setInnerError($val)
    {
        $this->_propDict["innerError"] = $val;
         return $this;
    }
    /**
    * Gets the message
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return ClassifcationErrorBase
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the target
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
    *
    * @param string $val The value of the target
    *
    * @return ClassifcationErrorBase
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
