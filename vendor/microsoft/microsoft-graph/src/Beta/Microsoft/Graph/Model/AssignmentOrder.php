<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentOrder File
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
* AssignmentOrder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentOrder extends Entity
{
    /**
    * Gets the order
    * A list of identityUserFlowAttribute IDs provided to determine the order in which attributes should be collected within a user flow.
    *
    * @return string The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    * A list of identityUserFlowAttribute IDs provided to determine the order in which attributes should be collected within a user flow.
    *
    * @param string $val The value of the order
    *
    * @return AssignmentOrder
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }
}
