<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpeditedWindowsQualityUpdateSettings File
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
* ExpeditedWindowsQualityUpdateSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpeditedWindowsQualityUpdateSettings extends Entity
{
    /**
    * Gets the daysUntilForcedReboot
    * The number of days after installation that forced reboot will happen.
    *
    * @return int The daysUntilForcedReboot
    */
    public function getDaysUntilForcedReboot()
    {
        if (array_key_exists("daysUntilForcedReboot", $this->_propDict)) {
            return $this->_propDict["daysUntilForcedReboot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the daysUntilForcedReboot
    * The number of days after installation that forced reboot will happen.
    *
    * @param int $val The value of the daysUntilForcedReboot
    *
    * @return ExpeditedWindowsQualityUpdateSettings
    */
    public function setDaysUntilForcedReboot($val)
    {
        $this->_propDict["daysUntilForcedReboot"] = $val;
        return $this;
    }
    /**
    * Gets the qualityUpdateRelease
    * The release date to identify a quality update.
    *
    * @return string The qualityUpdateRelease
    */
    public function getQualityUpdateRelease()
    {
        if (array_key_exists("qualityUpdateRelease", $this->_propDict)) {
            return $this->_propDict["qualityUpdateRelease"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qualityUpdateRelease
    * The release date to identify a quality update.
    *
    * @param string $val The value of the qualityUpdateRelease
    *
    * @return ExpeditedWindowsQualityUpdateSettings
    */
    public function setQualityUpdateRelease($val)
    {
        $this->_propDict["qualityUpdateRelease"] = $val;
        return $this;
    }
}
