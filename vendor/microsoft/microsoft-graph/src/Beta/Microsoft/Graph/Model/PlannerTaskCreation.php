<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskCreation File
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
* PlannerTaskCreation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTaskCreation extends Entity
{

    /**
    * Gets the teamsPublicationInfo
    * Information about the publication process that created this task. null value indicates that the task was not created by a publication process.
    *
    * @return PlannerTeamsPublicationInfo The teamsPublicationInfo
    */
    public function getTeamsPublicationInfo()
    {
        if (array_key_exists("teamsPublicationInfo", $this->_propDict)) {
            if (is_a($this->_propDict["teamsPublicationInfo"], "\Beta\Microsoft\Graph\Model\PlannerTeamsPublicationInfo")) {
                return $this->_propDict["teamsPublicationInfo"];
            } else {
                $this->_propDict["teamsPublicationInfo"] = new PlannerTeamsPublicationInfo($this->_propDict["teamsPublicationInfo"]);
                return $this->_propDict["teamsPublicationInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the teamsPublicationInfo
    * Information about the publication process that created this task. null value indicates that the task was not created by a publication process.
    *
    * @param PlannerTeamsPublicationInfo $val The value to assign to the teamsPublicationInfo
    *
    * @return PlannerTaskCreation The PlannerTaskCreation
    */
    public function setTeamsPublicationInfo($val)
    {
        $this->_propDict["teamsPublicationInfo"] = $val;
         return $this;
    }
}
