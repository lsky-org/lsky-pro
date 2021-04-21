<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamClassSettings File
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
* TeamClassSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamClassSettings extends Entity
{
    /**
    * Gets the notifyGuardiansAboutAssignments
    * If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally.
    *
    * @return bool The notifyGuardiansAboutAssignments
    */
    public function getNotifyGuardiansAboutAssignments()
    {
        if (array_key_exists("notifyGuardiansAboutAssignments", $this->_propDict)) {
            return $this->_propDict["notifyGuardiansAboutAssignments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notifyGuardiansAboutAssignments
    * If set to true, enables sending of weekly assignments digest emails to parents/guardians, provided the tenant admin has enabled the setting globally.
    *
    * @param bool $val The value of the notifyGuardiansAboutAssignments
    *
    * @return TeamClassSettings
    */
    public function setNotifyGuardiansAboutAssignments($val)
    {
        $this->_propDict["notifyGuardiansAboutAssignments"] = $val;
        return $this;
    }
}
