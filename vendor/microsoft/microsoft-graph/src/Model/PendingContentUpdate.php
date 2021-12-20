<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PendingContentUpdate File
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
* PendingContentUpdate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PendingContentUpdate extends Entity
{

    /**
    * Gets the queuedDateTime
    * Date and time the pending binary operation was queued in UTC time. Read-only.
    *
    * @return \DateTime The queuedDateTime
    */
    public function getQueuedDateTime()
    {
        if (array_key_exists("queuedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["queuedDateTime"], "\DateTime")) {
                return $this->_propDict["queuedDateTime"];
            } else {
                $this->_propDict["queuedDateTime"] = new \DateTime($this->_propDict["queuedDateTime"]);
                return $this->_propDict["queuedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the queuedDateTime
    * Date and time the pending binary operation was queued in UTC time. Read-only.
    *
    * @param \DateTime $val The value to assign to the queuedDateTime
    *
    * @return PendingContentUpdate The PendingContentUpdate
    */
    public function setQueuedDateTime($val)
    {
        $this->_propDict["queuedDateTime"] = $val;
         return $this;
    }
}
