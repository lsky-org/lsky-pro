<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Security extends Entity
{

     /** 
     * Gets the alerts
    * Read-only. Nullable.
     *
     * @return array The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the alerts
    * Read-only. Nullable.
    *
    * @param Alert $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
		$this->_propDict["alerts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the secureScoreControlProfiles
     *
     * @return array The secureScoreControlProfiles
     */
    public function getSecureScoreControlProfiles()
    {
        if (array_key_exists("secureScoreControlProfiles", $this->_propDict)) {
           return $this->_propDict["secureScoreControlProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the secureScoreControlProfiles
    *
    * @param SecureScoreControlProfile $val The secureScoreControlProfiles
    *
    * @return Security
    */
    public function setSecureScoreControlProfiles($val)
    {
		$this->_propDict["secureScoreControlProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the secureScores
     *
     * @return array The secureScores
     */
    public function getSecureScores()
    {
        if (array_key_exists("secureScores", $this->_propDict)) {
           return $this->_propDict["secureScores"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the secureScores
    *
    * @param SecureScore $val The secureScores
    *
    * @return Security
    */
    public function setSecureScores($val)
    {
		$this->_propDict["secureScores"] = $val;
        return $this;
    }
    
}
