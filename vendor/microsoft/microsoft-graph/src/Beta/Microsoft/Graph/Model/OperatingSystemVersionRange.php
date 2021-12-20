<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OperatingSystemVersionRange File
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
* OperatingSystemVersionRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OperatingSystemVersionRange extends Entity
{
    /**
    * Gets the description
    * The description of this range (e.g. Valid 1702 builds)
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * The description of this range (e.g. Valid 1702 builds)
    *
    * @param string $val The value of the description
    *
    * @return OperatingSystemVersionRange
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the highestVersion
    * The highest inclusive version that this range contains.
    *
    * @return string The highestVersion
    */
    public function getHighestVersion()
    {
        if (array_key_exists("highestVersion", $this->_propDict)) {
            return $this->_propDict["highestVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the highestVersion
    * The highest inclusive version that this range contains.
    *
    * @param string $val The value of the highestVersion
    *
    * @return OperatingSystemVersionRange
    */
    public function setHighestVersion($val)
    {
        $this->_propDict["highestVersion"] = $val;
        return $this;
    }
    /**
    * Gets the lowestVersion
    * The lowest inclusive version that this range contains.
    *
    * @return string The lowestVersion
    */
    public function getLowestVersion()
    {
        if (array_key_exists("lowestVersion", $this->_propDict)) {
            return $this->_propDict["lowestVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lowestVersion
    * The lowest inclusive version that this range contains.
    *
    * @param string $val The value of the lowestVersion
    *
    * @return OperatingSystemVersionRange
    */
    public function setLowestVersion($val)
    {
        $this->_propDict["lowestVersion"] = $val;
        return $this;
    }
}
