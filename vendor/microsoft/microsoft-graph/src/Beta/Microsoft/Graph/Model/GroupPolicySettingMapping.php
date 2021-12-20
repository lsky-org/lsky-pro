<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicySettingMapping File
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
* GroupPolicySettingMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicySettingMapping extends Entity
{
    /**
    * Gets the admxSettingDefinitionId
    * Admx Group Policy Id
    *
    * @return string The admxSettingDefinitionId
    */
    public function getAdmxSettingDefinitionId()
    {
        if (array_key_exists("admxSettingDefinitionId", $this->_propDict)) {
            return $this->_propDict["admxSettingDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the admxSettingDefinitionId
    * Admx Group Policy Id
    *
    * @param string $val The admxSettingDefinitionId
    *
    * @return GroupPolicySettingMapping
    */
    public function setAdmxSettingDefinitionId($val)
    {
        $this->_propDict["admxSettingDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the childIdList
    * List of Child Ids of the group policy setting.
    *
    * @return string The childIdList
    */
    public function getChildIdList()
    {
        if (array_key_exists("childIdList", $this->_propDict)) {
            return $this->_propDict["childIdList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the childIdList
    * List of Child Ids of the group policy setting.
    *
    * @param string $val The childIdList
    *
    * @return GroupPolicySettingMapping
    */
    public function setChildIdList($val)
    {
        $this->_propDict["childIdList"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneSettingDefinitionId
    * The Intune Setting Definition Id
    *
    * @return string The intuneSettingDefinitionId
    */
    public function getIntuneSettingDefinitionId()
    {
        if (array_key_exists("intuneSettingDefinitionId", $this->_propDict)) {
            return $this->_propDict["intuneSettingDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneSettingDefinitionId
    * The Intune Setting Definition Id
    *
    * @param string $val The intuneSettingDefinitionId
    *
    * @return GroupPolicySettingMapping
    */
    public function setIntuneSettingDefinitionId($val)
    {
        $this->_propDict["intuneSettingDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneSettingUriList
    * The list of Intune Setting URIs this group policy setting maps to
    *
    * @return string The intuneSettingUriList
    */
    public function getIntuneSettingUriList()
    {
        if (array_key_exists("intuneSettingUriList", $this->_propDict)) {
            return $this->_propDict["intuneSettingUriList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneSettingUriList
    * The list of Intune Setting URIs this group policy setting maps to
    *
    * @param string $val The intuneSettingUriList
    *
    * @return GroupPolicySettingMapping
    */
    public function setIntuneSettingUriList($val)
    {
        $this->_propDict["intuneSettingUriList"] = $val;
        return $this;
    }
    
    /**
    * Gets the isMdmSupported
    * Indicates if the setting is supported by Intune or not
    *
    * @return bool The isMdmSupported
    */
    public function getIsMdmSupported()
    {
        if (array_key_exists("isMdmSupported", $this->_propDict)) {
            return $this->_propDict["isMdmSupported"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isMdmSupported
    * Indicates if the setting is supported by Intune or not
    *
    * @param bool $val The isMdmSupported
    *
    * @return GroupPolicySettingMapping
    */
    public function setIsMdmSupported($val)
    {
        $this->_propDict["isMdmSupported"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the mdmCspName
    * The CSP name this group policy setting maps to.
    *
    * @return string The mdmCspName
    */
    public function getMdmCspName()
    {
        if (array_key_exists("mdmCspName", $this->_propDict)) {
            return $this->_propDict["mdmCspName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmCspName
    * The CSP name this group policy setting maps to.
    *
    * @param string $val The mdmCspName
    *
    * @return GroupPolicySettingMapping
    */
    public function setMdmCspName($val)
    {
        $this->_propDict["mdmCspName"] = $val;
        return $this;
    }
    
    /**
    * Gets the mdmMinimumOSVersion
    * The minimum OS version this mdm setting supports.
    *
    * @return int The mdmMinimumOSVersion
    */
    public function getMdmMinimumOSVersion()
    {
        if (array_key_exists("mdmMinimumOSVersion", $this->_propDict)) {
            return $this->_propDict["mdmMinimumOSVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmMinimumOSVersion
    * The minimum OS version this mdm setting supports.
    *
    * @param int $val The mdmMinimumOSVersion
    *
    * @return GroupPolicySettingMapping
    */
    public function setMdmMinimumOSVersion($val)
    {
        $this->_propDict["mdmMinimumOSVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mdmSettingUri
    * The MDM CSP URI this group policy setting maps to.
    *
    * @return string The mdmSettingUri
    */
    public function getMdmSettingUri()
    {
        if (array_key_exists("mdmSettingUri", $this->_propDict)) {
            return $this->_propDict["mdmSettingUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mdmSettingUri
    * The MDM CSP URI this group policy setting maps to.
    *
    * @param string $val The mdmSettingUri
    *
    * @return GroupPolicySettingMapping
    */
    public function setMdmSettingUri($val)
    {
        $this->_propDict["mdmSettingUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the mdmSupportedState
    * Indicates if the setting is supported in Mdm or not. Possible values are: unknown, supported, unsupported, deprecated.
    *
    * @return MdmSupportedState The mdmSupportedState
    */
    public function getMdmSupportedState()
    {
        if (array_key_exists("mdmSupportedState", $this->_propDict)) {
            if (is_a($this->_propDict["mdmSupportedState"], "\Beta\Microsoft\Graph\Model\MdmSupportedState")) {
                return $this->_propDict["mdmSupportedState"];
            } else {
                $this->_propDict["mdmSupportedState"] = new MdmSupportedState($this->_propDict["mdmSupportedState"]);
                return $this->_propDict["mdmSupportedState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the mdmSupportedState
    * Indicates if the setting is supported in Mdm or not. Possible values are: unknown, supported, unsupported, deprecated.
    *
    * @param MdmSupportedState $val The mdmSupportedState
    *
    * @return GroupPolicySettingMapping
    */
    public function setMdmSupportedState($val)
    {
        $this->_propDict["mdmSupportedState"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentId
    * Parent Id of the group policy setting.
    *
    * @return string The parentId
    */
    public function getParentId()
    {
        if (array_key_exists("parentId", $this->_propDict)) {
            return $this->_propDict["parentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentId
    * Parent Id of the group policy setting.
    *
    * @param string $val The parentId
    *
    * @return GroupPolicySettingMapping
    */
    public function setParentId($val)
    {
        $this->_propDict["parentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCategory
    * The category the group policy setting is in.
    *
    * @return string The settingCategory
    */
    public function getSettingCategory()
    {
        if (array_key_exists("settingCategory", $this->_propDict)) {
            return $this->_propDict["settingCategory"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCategory
    * The category the group policy setting is in.
    *
    * @param string $val The settingCategory
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingCategory($val)
    {
        $this->_propDict["settingCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingDisplayName
    * The display name of this group policy setting.
    *
    * @return string The settingDisplayName
    */
    public function getSettingDisplayName()
    {
        if (array_key_exists("settingDisplayName", $this->_propDict)) {
            return $this->_propDict["settingDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingDisplayName
    * The display name of this group policy setting.
    *
    * @param string $val The settingDisplayName
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingDisplayName($val)
    {
        $this->_propDict["settingDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingDisplayValue
    * The display value of this group policy setting.
    *
    * @return string The settingDisplayValue
    */
    public function getSettingDisplayValue()
    {
        if (array_key_exists("settingDisplayValue", $this->_propDict)) {
            return $this->_propDict["settingDisplayValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingDisplayValue
    * The display value of this group policy setting.
    *
    * @param string $val The settingDisplayValue
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingDisplayValue($val)
    {
        $this->_propDict["settingDisplayValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingDisplayValueType
    * The display value type of this group policy setting.
    *
    * @return string The settingDisplayValueType
    */
    public function getSettingDisplayValueType()
    {
        if (array_key_exists("settingDisplayValueType", $this->_propDict)) {
            return $this->_propDict["settingDisplayValueType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingDisplayValueType
    * The display value type of this group policy setting.
    *
    * @param string $val The settingDisplayValueType
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingDisplayValueType($val)
    {
        $this->_propDict["settingDisplayValueType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingName
    * The name of this group policy setting.
    *
    * @return string The settingName
    */
    public function getSettingName()
    {
        if (array_key_exists("settingName", $this->_propDict)) {
            return $this->_propDict["settingName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingName
    * The name of this group policy setting.
    *
    * @param string $val The settingName
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingName($val)
    {
        $this->_propDict["settingName"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingScope
    * The scope of the setting. Possible values are: unknown, device, user.
    *
    * @return GroupPolicySettingScope The settingScope
    */
    public function getSettingScope()
    {
        if (array_key_exists("settingScope", $this->_propDict)) {
            if (is_a($this->_propDict["settingScope"], "\Beta\Microsoft\Graph\Model\GroupPolicySettingScope")) {
                return $this->_propDict["settingScope"];
            } else {
                $this->_propDict["settingScope"] = new GroupPolicySettingScope($this->_propDict["settingScope"]);
                return $this->_propDict["settingScope"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settingScope
    * The scope of the setting. Possible values are: unknown, device, user.
    *
    * @param GroupPolicySettingScope $val The settingScope
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingScope($val)
    {
        $this->_propDict["settingScope"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingType
    * The setting type (security or admx) of the Group Policy. Possible values are: unknown, policy, account, securityOptions, userRightsAssignment, auditSetting, windowsFirewallSettings.
    *
    * @return GroupPolicySettingType The settingType
    */
    public function getSettingType()
    {
        if (array_key_exists("settingType", $this->_propDict)) {
            if (is_a($this->_propDict["settingType"], "\Beta\Microsoft\Graph\Model\GroupPolicySettingType")) {
                return $this->_propDict["settingType"];
            } else {
                $this->_propDict["settingType"] = new GroupPolicySettingType($this->_propDict["settingType"]);
                return $this->_propDict["settingType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settingType
    * The setting type (security or admx) of the Group Policy. Possible values are: unknown, policy, account, securityOptions, userRightsAssignment, auditSetting, windowsFirewallSettings.
    *
    * @param GroupPolicySettingType $val The settingType
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingType($val)
    {
        $this->_propDict["settingType"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingValue
    * The value of this group policy setting.
    *
    * @return string The settingValue
    */
    public function getSettingValue()
    {
        if (array_key_exists("settingValue", $this->_propDict)) {
            return $this->_propDict["settingValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingValue
    * The value of this group policy setting.
    *
    * @param string $val The settingValue
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingValue($val)
    {
        $this->_propDict["settingValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingValueDisplayUnits
    * The display units of this group policy setting value
    *
    * @return string The settingValueDisplayUnits
    */
    public function getSettingValueDisplayUnits()
    {
        if (array_key_exists("settingValueDisplayUnits", $this->_propDict)) {
            return $this->_propDict["settingValueDisplayUnits"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingValueDisplayUnits
    * The display units of this group policy setting value
    *
    * @param string $val The settingValueDisplayUnits
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingValueDisplayUnits($val)
    {
        $this->_propDict["settingValueDisplayUnits"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingValueType
    * The value type of this group policy setting.
    *
    * @return string The settingValueType
    */
    public function getSettingValueType()
    {
        if (array_key_exists("settingValueType", $this->_propDict)) {
            return $this->_propDict["settingValueType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingValueType
    * The value type of this group policy setting.
    *
    * @param string $val The settingValueType
    *
    * @return GroupPolicySettingMapping
    */
    public function setSettingValueType($val)
    {
        $this->_propDict["settingValueType"] = $val;
        return $this;
    }
    
}
