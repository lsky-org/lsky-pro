<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SensitivityPolicySettings File
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
* SensitivityPolicySettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SensitivityPolicySettings extends Entity
{
    /**
    * Gets the applicableTo
    *
    * @return SensitivityLabelTarget The applicableTo
    */
    public function getApplicableTo()
    {
        if (array_key_exists("applicableTo", $this->_propDict)) {
            if (is_a($this->_propDict["applicableTo"], "\Beta\Microsoft\Graph\Model\SensitivityLabelTarget")) {
                return $this->_propDict["applicableTo"];
            } else {
                $this->_propDict["applicableTo"] = new SensitivityLabelTarget($this->_propDict["applicableTo"]);
                return $this->_propDict["applicableTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableTo
    *
    * @param SensitivityLabelTarget $val The applicableTo
    *
    * @return SensitivityPolicySettings
    */
    public function setApplicableTo($val)
    {
        $this->_propDict["applicableTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the downgradeSensitivityRequiresJustification
    *
    * @return bool The downgradeSensitivityRequiresJustification
    */
    public function getDowngradeSensitivityRequiresJustification()
    {
        if (array_key_exists("downgradeSensitivityRequiresJustification", $this->_propDict)) {
            return $this->_propDict["downgradeSensitivityRequiresJustification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the downgradeSensitivityRequiresJustification
    *
    * @param bool $val The downgradeSensitivityRequiresJustification
    *
    * @return SensitivityPolicySettings
    */
    public function setDowngradeSensitivityRequiresJustification($val)
    {
        $this->_propDict["downgradeSensitivityRequiresJustification"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the helpWebUrl
    *
    * @return string The helpWebUrl
    */
    public function getHelpWebUrl()
    {
        if (array_key_exists("helpWebUrl", $this->_propDict)) {
            return $this->_propDict["helpWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the helpWebUrl
    *
    * @param string $val The helpWebUrl
    *
    * @return SensitivityPolicySettings
    */
    public function setHelpWebUrl($val)
    {
        $this->_propDict["helpWebUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the isMandatory
    *
    * @return bool The isMandatory
    */
    public function getIsMandatory()
    {
        if (array_key_exists("isMandatory", $this->_propDict)) {
            return $this->_propDict["isMandatory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMandatory
    *
    * @param bool $val The isMandatory
    *
    * @return SensitivityPolicySettings
    */
    public function setIsMandatory($val)
    {
        $this->_propDict["isMandatory"] = boolval($val);
        return $this;
    }
    
}
