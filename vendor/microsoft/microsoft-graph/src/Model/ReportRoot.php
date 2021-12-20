<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReportRoot File
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
* ReportRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReportRoot extends Entity
{

     /** 
     * Gets the dailyPrintUsageByPrinter
     *
     * @return array The dailyPrintUsageByPrinter
     */
    public function getDailyPrintUsageByPrinter()
    {
        if (array_key_exists("dailyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dailyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter $val The dailyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByPrinter($val)
    {
		$this->_propDict["dailyPrintUsageByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dailyPrintUsageByUser
     *
     * @return array The dailyPrintUsageByUser
     */
    public function getDailyPrintUsageByUser()
    {
        if (array_key_exists("dailyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["dailyPrintUsageByUser"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dailyPrintUsageByUser
    *
    * @param PrintUsageByUser $val The dailyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setDailyPrintUsageByUser($val)
    {
		$this->_propDict["dailyPrintUsageByUser"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageByPrinter
     *
     * @return array The monthlyPrintUsageByPrinter
     */
    public function getMonthlyPrintUsageByPrinter()
    {
        if (array_key_exists("monthlyPrintUsageByPrinter", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByPrinter"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the monthlyPrintUsageByPrinter
    *
    * @param PrintUsageByPrinter $val The monthlyPrintUsageByPrinter
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByPrinter($val)
    {
		$this->_propDict["monthlyPrintUsageByPrinter"] = $val;
        return $this;
    }
    

     /** 
     * Gets the monthlyPrintUsageByUser
     *
     * @return array The monthlyPrintUsageByUser
     */
    public function getMonthlyPrintUsageByUser()
    {
        if (array_key_exists("monthlyPrintUsageByUser", $this->_propDict)) {
           return $this->_propDict["monthlyPrintUsageByUser"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the monthlyPrintUsageByUser
    *
    * @param PrintUsageByUser $val The monthlyPrintUsageByUser
    *
    * @return ReportRoot
    */
    public function setMonthlyPrintUsageByUser($val)
    {
		$this->_propDict["monthlyPrintUsageByUser"] = $val;
        return $this;
    }
    
}
