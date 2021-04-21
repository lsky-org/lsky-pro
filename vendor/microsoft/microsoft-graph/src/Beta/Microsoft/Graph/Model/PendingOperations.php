<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PendingOperations File
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
* PendingOperations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PendingOperations extends Entity
{

    /**
    * Gets the pendingContentUpdate
    * A property that indicates that an operation that might update the binary content of a file is pending completion.
    *
    * @return PendingContentUpdate The pendingContentUpdate
    */
    public function getPendingContentUpdate()
    {
        if (array_key_exists("pendingContentUpdate", $this->_propDict)) {
            if (is_a($this->_propDict["pendingContentUpdate"], "\Beta\Microsoft\Graph\Model\PendingContentUpdate")) {
                return $this->_propDict["pendingContentUpdate"];
            } else {
                $this->_propDict["pendingContentUpdate"] = new PendingContentUpdate($this->_propDict["pendingContentUpdate"]);
                return $this->_propDict["pendingContentUpdate"];
            }
        }
        return null;
    }

    /**
    * Sets the pendingContentUpdate
    * A property that indicates that an operation that might update the binary content of a file is pending completion.
    *
    * @param PendingContentUpdate $val The value to assign to the pendingContentUpdate
    *
    * @return PendingOperations The PendingOperations
    */
    public function setPendingContentUpdate($val)
    {
        $this->_propDict["pendingContentUpdate"] = $val;
         return $this;
    }
}
