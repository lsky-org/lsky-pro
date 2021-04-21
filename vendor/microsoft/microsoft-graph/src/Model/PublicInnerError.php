<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicInnerError File
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
* PublicInnerError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PublicInnerError extends Entity
{
    /**
    * Gets the code
    * The error code.
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
    * The error code.
    *
    * @param string $val The value of the code
    *
    * @return PublicInnerError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the details
    * A collection of error details.
    *
    * @return PublicErrorDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Microsoft\Graph\Model\PublicErrorDetail")) {
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
    * A collection of error details.
    *
    * @param PublicErrorDetail $val The value to assign to the details
    *
    * @return PublicInnerError The PublicInnerError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the message
    * The error message.
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
    * The error message.
    *
    * @param string $val The value of the message
    *
    * @return PublicInnerError
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
    * @return PublicInnerError
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
