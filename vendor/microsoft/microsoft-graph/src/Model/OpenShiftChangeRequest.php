<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShiftChangeRequest File
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
* OpenShiftChangeRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenShiftChangeRequest extends ScheduleChangeRequest
{
    /**
    * Gets the openShiftId
    * ID for the open shift.
    *
    * @return string The openShiftId
    */
    public function getOpenShiftId()
    {
        if (array_key_exists("openShiftId", $this->_propDict)) {
            return $this->_propDict["openShiftId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the openShiftId
    * ID for the open shift.
    *
    * @param string $val The openShiftId
    *
    * @return OpenShiftChangeRequest
    */
    public function setOpenShiftId($val)
    {
        $this->_propDict["openShiftId"] = $val;
        return $this;
    }
    
}
