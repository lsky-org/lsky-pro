<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SwapShiftsChangeRequest File
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
* SwapShiftsChangeRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SwapShiftsChangeRequest extends OfferShiftRequest
{
    /**
    * Gets the recipientShiftId
    * Shift ID for the recipient user with whom the request is to swap.
    *
    * @return string The recipientShiftId
    */
    public function getRecipientShiftId()
    {
        if (array_key_exists("recipientShiftId", $this->_propDict)) {
            return $this->_propDict["recipientShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the recipientShiftId
    * Shift ID for the recipient user with whom the request is to swap.
    *
    * @param string $val The recipientShiftId
    *
    * @return SwapShiftsChangeRequest
    */
    public function setRecipientShiftId($val)
    {
        $this->_propDict["recipientShiftId"] = $val;
        return $this;
    }
    
}
