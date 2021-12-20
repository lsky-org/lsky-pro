<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppSupersedence File
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
* MobileAppSupersedence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppSupersedence extends MobileAppRelationship
{
    /**
    * Gets the supersededAppCount
    * The total number of apps directly or indirectly superseded by the child app.
    *
    * @return int The supersededAppCount
    */
    public function getSupersededAppCount()
    {
        if (array_key_exists("supersededAppCount", $this->_propDict)) {
            return $this->_propDict["supersededAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supersededAppCount
    * The total number of apps directly or indirectly superseded by the child app.
    *
    * @param int $val The supersededAppCount
    *
    * @return MobileAppSupersedence
    */
    public function setSupersededAppCount($val)
    {
        $this->_propDict["supersededAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the supersedenceType
    * The supersedence relationship type between the parent and child apps. Possible values are: update, replace.
    *
    * @return MobileAppSupersedenceType The supersedenceType
    */
    public function getSupersedenceType()
    {
        if (array_key_exists("supersedenceType", $this->_propDict)) {
            if (is_a($this->_propDict["supersedenceType"], "\Beta\Microsoft\Graph\Model\MobileAppSupersedenceType")) {
                return $this->_propDict["supersedenceType"];
            } else {
                $this->_propDict["supersedenceType"] = new MobileAppSupersedenceType($this->_propDict["supersedenceType"]);
                return $this->_propDict["supersedenceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the supersedenceType
    * The supersedence relationship type between the parent and child apps. Possible values are: update, replace.
    *
    * @param MobileAppSupersedenceType $val The supersedenceType
    *
    * @return MobileAppSupersedence
    */
    public function setSupersedenceType($val)
    {
        $this->_propDict["supersedenceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the supersedingAppCount
    * The total number of apps directly or indirectly superseding the parent app.
    *
    * @return int The supersedingAppCount
    */
    public function getSupersedingAppCount()
    {
        if (array_key_exists("supersedingAppCount", $this->_propDict)) {
            return $this->_propDict["supersedingAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the supersedingAppCount
    * The total number of apps directly or indirectly superseding the parent app.
    *
    * @param int $val The supersedingAppCount
    *
    * @return MobileAppSupersedence
    */
    public function setSupersedingAppCount($val)
    {
        $this->_propDict["supersedingAppCount"] = intval($val);
        return $this;
    }
    
}
