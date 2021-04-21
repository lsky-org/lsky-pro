<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClassificationInnerError File
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
* ClassificationInnerError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClassificationInnerError extends Entity
{
    /**
    * Gets the activityId
    *
    * @return string The activityId
    */
    public function getActivityId()
    {
        if (array_key_exists("activityId", $this->_propDict)) {
            return $this->_propDict["activityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activityId
    *
    * @param string $val The value of the activityId
    *
    * @return ClassificationInnerError
    */
    public function setActivityId($val)
    {
        $this->_propDict["activityId"] = $val;
        return $this;
    }
    /**
    * Gets the clientRequestId
    *
    * @return string The clientRequestId
    */
    public function getClientRequestId()
    {
        if (array_key_exists("clientRequestId", $this->_propDict)) {
            return $this->_propDict["clientRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientRequestId
    *
    * @param string $val The value of the clientRequestId
    *
    * @return ClassificationInnerError
    */
    public function setClientRequestId($val)
    {
        $this->_propDict["clientRequestId"] = $val;
        return $this;
    }
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
    * @return ClassificationInnerError
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }

    /**
    * Gets the errorDateTime
    *
    * @return \DateTime The errorDateTime
    */
    public function getErrorDateTime()
    {
        if (array_key_exists("errorDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["errorDateTime"], "\DateTime")) {
                return $this->_propDict["errorDateTime"];
            } else {
                $this->_propDict["errorDateTime"] = new \DateTime($this->_propDict["errorDateTime"]);
                return $this->_propDict["errorDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the errorDateTime
    *
    * @param \DateTime $val The value to assign to the errorDateTime
    *
    * @return ClassificationInnerError The ClassificationInnerError
    */
    public function setErrorDateTime($val)
    {
        $this->_propDict["errorDateTime"] = $val;
         return $this;
    }
}
