<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADFeatureUsage File
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
* AzureADFeatureUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADFeatureUsage extends Entity
{
    /**
    * Gets the featureName
    *
    * @return string The featureName
    */
    public function getFeatureName()
    {
        if (array_key_exists("featureName", $this->_propDict)) {
            return $this->_propDict["featureName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureName
    *
    * @param string $val The featureName
    *
    * @return AzureADFeatureUsage
    */
    public function setFeatureName($val)
    {
        $this->_propDict["featureName"] = $val;
        return $this;
    }
    
    /**
    * Gets the snapshotDateTime
    *
    * @return \DateTime The snapshotDateTime
    */
    public function getSnapshotDateTime()
    {
        if (array_key_exists("snapshotDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["snapshotDateTime"], "\DateTime")) {
                return $this->_propDict["snapshotDateTime"];
            } else {
                $this->_propDict["snapshotDateTime"] = new \DateTime($this->_propDict["snapshotDateTime"]);
                return $this->_propDict["snapshotDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the snapshotDateTime
    *
    * @param \DateTime $val The snapshotDateTime
    *
    * @return AzureADFeatureUsage
    */
    public function setSnapshotDateTime($val)
    {
        $this->_propDict["snapshotDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the usage
    *
    * @return int The usage
    */
    public function getUsage()
    {
        if (array_key_exists("usage", $this->_propDict)) {
            return $this->_propDict["usage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usage
    *
    * @param int $val The usage
    *
    * @return AzureADFeatureUsage
    */
    public function setUsage($val)
    {
        $this->_propDict["usage"] = intval($val);
        return $this;
    }
    
}
