<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsRegressionSummary File
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
* UserExperienceAnalyticsRegressionSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsRegressionSummary extends Entity
{

     /** 
     * Gets the manufacturerRegression
    * The metric values for the user experience analytics Manufacturer regression.
     *
     * @return array The manufacturerRegression
     */
    public function getManufacturerRegression()
    {
        if (array_key_exists("manufacturerRegression", $this->_propDict)) {
           return $this->_propDict["manufacturerRegression"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the manufacturerRegression
    * The metric values for the user experience analytics Manufacturer regression.
    *
    * @param UserExperienceAnalyticsMetric $val The manufacturerRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setManufacturerRegression($val)
    {
		$this->_propDict["manufacturerRegression"] = $val;
        return $this;
    }
    

     /** 
     * Gets the modelRegression
    * The metric values for the user experience analytics model regression.
     *
     * @return array The modelRegression
     */
    public function getModelRegression()
    {
        if (array_key_exists("modelRegression", $this->_propDict)) {
           return $this->_propDict["modelRegression"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the modelRegression
    * The metric values for the user experience analytics model regression.
    *
    * @param UserExperienceAnalyticsMetric $val The modelRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setModelRegression($val)
    {
		$this->_propDict["modelRegression"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operatingSystemRegression
    * The metric values for the user experience analytics operating system regression.
     *
     * @return array The operatingSystemRegression
     */
    public function getOperatingSystemRegression()
    {
        if (array_key_exists("operatingSystemRegression", $this->_propDict)) {
           return $this->_propDict["operatingSystemRegression"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operatingSystemRegression
    * The metric values for the user experience analytics operating system regression.
    *
    * @param UserExperienceAnalyticsMetric $val The operatingSystemRegression
    *
    * @return UserExperienceAnalyticsRegressionSummary
    */
    public function setOperatingSystemRegression($val)
    {
		$this->_propDict["operatingSystemRegression"] = $val;
        return $this;
    }
    
}
