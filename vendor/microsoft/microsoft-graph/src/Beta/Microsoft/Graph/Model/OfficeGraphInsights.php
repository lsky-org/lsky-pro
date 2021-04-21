<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeGraphInsights File
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
* OfficeGraphInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeGraphInsights extends Entity
{

     /** 
     * Gets the shared
    * Access this property from the derived type itemInsights.
     *
     * @return array The shared
     */
    public function getShared()
    {
        if (array_key_exists("shared", $this->_propDict)) {
           return $this->_propDict["shared"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shared
    * Access this property from the derived type itemInsights.
    *
    * @param SharedInsight $val The shared
    *
    * @return OfficeGraphInsights
    */
    public function setShared($val)
    {
		$this->_propDict["shared"] = $val;
        return $this;
    }
    

     /** 
     * Gets the trending
    * Access this property from the derived type itemInsights.
     *
     * @return array The trending
     */
    public function getTrending()
    {
        if (array_key_exists("trending", $this->_propDict)) {
           return $this->_propDict["trending"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the trending
    * Access this property from the derived type itemInsights.
    *
    * @param Trending $val The trending
    *
    * @return OfficeGraphInsights
    */
    public function setTrending($val)
    {
		$this->_propDict["trending"] = $val;
        return $this;
    }
    

     /** 
     * Gets the used
    * Access this property from the derived type itemInsights.
     *
     * @return array The used
     */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
           return $this->_propDict["used"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the used
    * Access this property from the derived type itemInsights.
    *
    * @param UsedInsight $val The used
    *
    * @return OfficeGraphInsights
    */
    public function setUsed($val)
    {
		$this->_propDict["used"] = $val;
        return $this;
    }
    
}
