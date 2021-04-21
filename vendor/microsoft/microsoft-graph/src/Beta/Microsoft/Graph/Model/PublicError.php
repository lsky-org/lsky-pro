<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicError File
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
* PublicError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PublicError extends Entity
{
    /**
    * Gets the code
    * Represents the error code.
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
    * Represents the error code.
    *
    * @param string $val The value of the code
    *
    * @return PublicError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the details
    * Details of the error.
    *
    * @return PublicErrorDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\PublicErrorDetail")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PublicErrorDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    * Details of the error.
    *
    * @param PublicErrorDetail $val The value to assign to the details
    *
    * @return PublicError The PublicError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }

    /**
    * Gets the innerError
    * Details of the inner error.
    *
    * @return PublicInnerError The innerError
    */
    public function getInnerError()
    {
        if (array_key_exists("innerError", $this->_propDict)) {
            if (is_a($this->_propDict["innerError"], "\Beta\Microsoft\Graph\Model\PublicInnerError")) {
                return $this->_propDict["innerError"];
            } else {
                $this->_propDict["innerError"] = new PublicInnerError($this->_propDict["innerError"]);
                return $this->_propDict["innerError"];
            }
        }
        return null;
    }

    /**
    * Sets the innerError
    * Details of the inner error.
    *
    * @param PublicInnerError $val The value to assign to the innerError
    *
    * @return PublicError The PublicError
    */
    public function setInnerError($val)
    {
        $this->_propDict["innerError"] = $val;
         return $this;
    }
    /**
    * Gets the message
    * A non-localized message for the developer.
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
    * A non-localized message for the developer.
    *
    * @param string $val The value of the message
    *
    * @return PublicError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the target
    * The target of the error.
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
    * The target of the error.
    *
    * @param string $val The value of the target
    *
    * @return PublicError
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
