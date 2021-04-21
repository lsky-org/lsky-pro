<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInStatus File
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
* SignInStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInStatus extends Entity
{
    /**
    * Gets the additionalDetails
    * Provides additional details on the sign-in activity
    *
    * @return string The additionalDetails
    */
    public function getAdditionalDetails()
    {
        if (array_key_exists("additionalDetails", $this->_propDict)) {
            return $this->_propDict["additionalDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalDetails
    * Provides additional details on the sign-in activity
    *
    * @param string $val The value of the additionalDetails
    *
    * @return SignInStatus
    */
    public function setAdditionalDetails($val)
    {
        $this->_propDict["additionalDetails"] = $val;
        return $this;
    }
    /**
    * Gets the errorCode
    * Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * Provides the 5-6 digit error code that's generated during a sign-in failure. Check out the list of error codes and messages.
    *
    * @param int $val The value of the errorCode
    *
    * @return SignInStatus
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    /**
    * Gets the failureReason
    * Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
    *
    * @return string The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failureReason
    * Provides the error message or the reason for failure for the corresponding sign-in activity. Check out the list of error codes and messages.
    *
    * @param string $val The value of the failureReason
    *
    * @return SignInStatus
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }
}
