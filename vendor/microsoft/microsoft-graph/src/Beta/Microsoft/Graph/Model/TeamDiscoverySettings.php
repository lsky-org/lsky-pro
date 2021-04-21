<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamDiscoverySettings File
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
* TeamDiscoverySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamDiscoverySettings extends Entity
{
    /**
    * Gets the showInTeamsSearchAndSuggestions
    * If set to true, the team is visible via search and suggestions from the Teams client.
    *
    * @return bool The showInTeamsSearchAndSuggestions
    */
    public function getShowInTeamsSearchAndSuggestions()
    {
        if (array_key_exists("showInTeamsSearchAndSuggestions", $this->_propDict)) {
            return $this->_propDict["showInTeamsSearchAndSuggestions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the showInTeamsSearchAndSuggestions
    * If set to true, the team is visible via search and suggestions from the Teams client.
    *
    * @param bool $val The value of the showInTeamsSearchAndSuggestions
    *
    * @return TeamDiscoverySettings
    */
    public function setShowInTeamsSearchAndSuggestions($val)
    {
        $this->_propDict["showInTeamsSearchAndSuggestions"] = $val;
        return $this;
    }
}
