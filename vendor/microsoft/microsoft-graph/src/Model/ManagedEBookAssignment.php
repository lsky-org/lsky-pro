<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedEBookAssignment File
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
* ManagedEBookAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedEBookAssignment extends Entity
{
    /**
    * Gets the installIntent
    * The install intent for eBook. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @return InstallIntent The installIntent
    */
    public function getInstallIntent()
    {
        if (array_key_exists("installIntent", $this->_propDict)) {
            if (is_a($this->_propDict["installIntent"], "\Microsoft\Graph\Model\InstallIntent")) {
                return $this->_propDict["installIntent"];
            } else {
                $this->_propDict["installIntent"] = new InstallIntent($this->_propDict["installIntent"]);
                return $this->_propDict["installIntent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installIntent
    * The install intent for eBook. Possible values are: available, required, uninstall, availableWithoutEnrollment.
    *
    * @param InstallIntent $val The installIntent
    *
    * @return ManagedEBookAssignment
    */
    public function setInstallIntent($val)
    {
        $this->_propDict["installIntent"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The assignment target for eBook.
    *
    * @return DeviceAndAppManagementAssignmentTarget The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Microsoft\Graph\Model\DeviceAndAppManagementAssignmentTarget")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new DeviceAndAppManagementAssignmentTarget($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * The assignment target for eBook.
    *
    * @param DeviceAndAppManagementAssignmentTarget $val The target
    *
    * @return ManagedEBookAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
