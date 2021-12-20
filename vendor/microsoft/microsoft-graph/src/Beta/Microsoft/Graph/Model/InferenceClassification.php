<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceClassification File
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
* InferenceClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InferenceClassification extends Entity
{

     /** 
     * Gets the overrides
    * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     *
     * @return array The overrides
     */
    public function getOverrides()
    {
        if (array_key_exists("overrides", $this->_propDict)) {
           return $this->_propDict["overrides"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the overrides
    * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
    *
    * @param InferenceClassificationOverride $val The overrides
    *
    * @return InferenceClassification
    */
    public function setOverrides($val)
    {
		$this->_propDict["overrides"] = $val;
        return $this;
    }
    
}
