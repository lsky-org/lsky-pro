<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsOverview File
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
* UserExperienceAnalyticsOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsOverview extends Entity
{

     /** 
     * Gets the insights
    * The user experience analytics insights.
     *
     * @return array The insights
     */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
           return $this->_propDict["insights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the insights
    * The user experience analytics insights.
    *
    * @param UserExperienceAnalyticsInsight $val The insights
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setInsights($val)
    {
		$this->_propDict["insights"] = $val;
        return $this;
    }
    
}
