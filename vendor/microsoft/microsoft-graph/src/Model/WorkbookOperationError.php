<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookOperationError File
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
* WorkbookOperationError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookOperationError extends Entity
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
    * @return WorkbookOperationError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the innerError
    *
    * @return WorkbookOperationError The innerError
    */
    public function getInnerError()
    {
        if (array_key_exists("innerError", $this->_propDict)) {
            if (is_a($this->_propDict["innerError"], "\Microsoft\Graph\Model\WorkbookOperationError")) {
                return $this->_propDict["innerError"];
            } else {
                $this->_propDict["innerError"] = new WorkbookOperationError($this->_propDict["innerError"]);
                return $this->_propDict["innerError"];
            }
        }
        return null;
    }

    /**
    * Sets the innerError
    *
    * @param WorkbookOperationError $val The value to assign to the innerError
    *
    * @return WorkbookOperationError The WorkbookOperationError
    */
    public function setInnerError($val)
    {
        $this->_propDict["innerError"] = $val;
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
    * @return WorkbookOperationError
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
