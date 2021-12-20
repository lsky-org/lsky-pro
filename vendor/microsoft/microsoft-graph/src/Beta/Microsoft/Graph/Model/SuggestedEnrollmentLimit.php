<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SuggestedEnrollmentLimit File
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
* SuggestedEnrollmentLimit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SuggestedEnrollmentLimit extends Entity
{
    /**
    * Gets the suggestedDailyLimit
    * The suggested enrollment limit within a day
    *
    * @return int The suggestedDailyLimit
    */
    public function getSuggestedDailyLimit()
    {
        if (array_key_exists("suggestedDailyLimit", $this->_propDict)) {
            return $this->_propDict["suggestedDailyLimit"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestedDailyLimit
    * The suggested enrollment limit within a day
    *
    * @param int $val The value of the suggestedDailyLimit
    *
    * @return SuggestedEnrollmentLimit
    */
    public function setSuggestedDailyLimit($val)
    {
        $this->_propDict["suggestedDailyLimit"] = $val;
        return $this;
    }
}
