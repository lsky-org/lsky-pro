<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SecurityBaselineStateSummary File
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
* SecurityBaselineStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SecurityBaselineStateSummary extends Entity
{
    /**
    * Gets the conflictCount
    * Number of conflict devices
    *
    * @return int The conflictCount
    */
    public function getConflictCount()
    {
        if (array_key_exists("conflictCount", $this->_propDict)) {
            return $this->_propDict["conflictCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictCount
    * Number of conflict devices
    *
    * @param int $val The conflictCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setConflictCount($val)
    {
        $this->_propDict["conflictCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorCount
    * Number of error devices
    *
    * @return int The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCount
    * Number of error devices
    *
    * @param int $val The errorCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notApplicableCount
    * Number of not applicable devices
    *
    * @return int The notApplicableCount
    */
    public function getNotApplicableCount()
    {
        if (array_key_exists("notApplicableCount", $this->_propDict)) {
            return $this->_propDict["notApplicableCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableCount
    * Number of not applicable devices
    *
    * @param int $val The notApplicableCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the notSecureCount
    * Number of not secure devices
    *
    * @return int The notSecureCount
    */
    public function getNotSecureCount()
    {
        if (array_key_exists("notSecureCount", $this->_propDict)) {
            return $this->_propDict["notSecureCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notSecureCount
    * Number of not secure devices
    *
    * @param int $val The notSecureCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setNotSecureCount($val)
    {
        $this->_propDict["notSecureCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the secureCount
    * Number of secure devices
    *
    * @return int The secureCount
    */
    public function getSecureCount()
    {
        if (array_key_exists("secureCount", $this->_propDict)) {
            return $this->_propDict["secureCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the secureCount
    * Number of secure devices
    *
    * @param int $val The secureCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setSecureCount($val)
    {
        $this->_propDict["secureCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unknownCount
    * Number of unknown devices
    *
    * @return int The unknownCount
    */
    public function getUnknownCount()
    {
        if (array_key_exists("unknownCount", $this->_propDict)) {
            return $this->_propDict["unknownCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unknownCount
    * Number of unknown devices
    *
    * @param int $val The unknownCount
    *
    * @return SecurityBaselineStateSummary
    */
    public function setUnknownCount($val)
    {
        $this->_propDict["unknownCount"] = intval($val);
        return $this;
    }
    
}
