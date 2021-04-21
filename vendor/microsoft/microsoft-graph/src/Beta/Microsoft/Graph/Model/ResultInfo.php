<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResultInfo File
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
* ResultInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResultInfo extends Entity
{
    /**
    * Gets the code
    * The result code.
    *
    * @return int The code
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
    * The result code.
    *
    * @param int $val The value of the code
    *
    * @return ResultInfo
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the message
    * The message.
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
    * The message.
    *
    * @param string $val The value of the message
    *
    * @return ResultInfo
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the subcode
    * The result sub-code.
    *
    * @return int The subcode
    */
    public function getSubcode()
    {
        if (array_key_exists("subcode", $this->_propDict)) {
            return $this->_propDict["subcode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subcode
    * The result sub-code.
    *
    * @param int $val The value of the subcode
    *
    * @return ResultInfo
    */
    public function setSubcode($val)
    {
        $this->_propDict["subcode"] = $val;
        return $this;
    }
}
