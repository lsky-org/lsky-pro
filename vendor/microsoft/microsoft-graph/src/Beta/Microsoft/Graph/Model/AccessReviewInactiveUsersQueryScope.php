<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInactiveUsersQueryScope File
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
* AccessReviewInactiveUsersQueryScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInactiveUsersQueryScope extends AccessReviewQueryScope
{

    /**
    * Gets the inactiveDuration
    * Defines the length of the duration period of inactivity. Inactivity is based on the last sign in date of the user.
    *
    * @return Duration The inactiveDuration
    */
    public function getInactiveDuration()
    {
        if (array_key_exists("inactiveDuration", $this->_propDict)) {
            if (is_a($this->_propDict["inactiveDuration"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["inactiveDuration"];
            } else {
                $this->_propDict["inactiveDuration"] = new Duration($this->_propDict["inactiveDuration"]);
                return $this->_propDict["inactiveDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the inactiveDuration
    * Defines the length of the duration period of inactivity. Inactivity is based on the last sign in date of the user.
    *
    * @param Duration $val The value to assign to the inactiveDuration
    *
    * @return AccessReviewInactiveUsersQueryScope The AccessReviewInactiveUsersQueryScope
    */
    public function setInactiveDuration($val)
    {
        $this->_propDict["inactiveDuration"] = $val;
         return $this;
    }
}
