<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRequirement File
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
* Win32LobAppRequirement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRequirement extends Entity
{
    /**
    * Gets the detectionValue
    * The detection value
    *
    * @return string The detectionValue
    */
    public function getDetectionValue()
    {
        if (array_key_exists("detectionValue", $this->_propDict)) {
            return $this->_propDict["detectionValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the detectionValue
    * The detection value
    *
    * @param string $val The value of the detectionValue
    *
    * @return Win32LobAppRequirement
    */
    public function setDetectionValue($val)
    {
        $this->_propDict["detectionValue"] = $val;
        return $this;
    }

    /**
    * Gets the operator
    * The operator for detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @return Win32LobAppDetectionOperator The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\Win32LobAppDetectionOperator")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new Win32LobAppDetectionOperator($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator for detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    *
    * @param Win32LobAppDetectionOperator $val The value to assign to the operator
    *
    * @return Win32LobAppRequirement The Win32LobAppRequirement
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
}
