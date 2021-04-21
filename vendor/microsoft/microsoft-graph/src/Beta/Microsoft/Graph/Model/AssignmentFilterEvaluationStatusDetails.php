<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterEvaluationStatusDetails File
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
* AssignmentFilterEvaluationStatusDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterEvaluationStatusDetails extends Entity
{
    /**
    * Gets the payloadId
    * PayloadId on which filter has been applied.
    *
    * @return string The payloadId
    */
    public function getPayloadId()
    {
        if (array_key_exists("payloadId", $this->_propDict)) {
            return $this->_propDict["payloadId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the payloadId
    * PayloadId on which filter has been applied.
    *
    * @param string $val The payloadId
    *
    * @return AssignmentFilterEvaluationStatusDetails
    */
    public function setPayloadId($val)
    {
        $this->_propDict["payloadId"] = $val;
        return $this;
    }
    
}
