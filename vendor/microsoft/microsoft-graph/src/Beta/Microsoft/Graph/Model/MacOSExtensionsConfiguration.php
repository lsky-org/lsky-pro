<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSExtensionsConfiguration File
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
* MacOSExtensionsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSExtensionsConfiguration extends DeviceConfiguration
{
    /**
    * Gets the kernelExtensionAllowedTeamIdentifiers
    * All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
    *
    * @return string The kernelExtensionAllowedTeamIdentifiers
    */
    public function getKernelExtensionAllowedTeamIdentifiers()
    {
        if (array_key_exists("kernelExtensionAllowedTeamIdentifiers", $this->_propDict)) {
            return $this->_propDict["kernelExtensionAllowedTeamIdentifiers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kernelExtensionAllowedTeamIdentifiers
    * All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
    *
    * @param string $val The kernelExtensionAllowedTeamIdentifiers
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionAllowedTeamIdentifiers($val)
    {
        $this->_propDict["kernelExtensionAllowedTeamIdentifiers"] = $val;
        return $this;
    }
    
    /**
    * Gets the kernelExtensionOverridesAllowed
    * If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
    *
    * @return bool The kernelExtensionOverridesAllowed
    */
    public function getKernelExtensionOverridesAllowed()
    {
        if (array_key_exists("kernelExtensionOverridesAllowed", $this->_propDict)) {
            return $this->_propDict["kernelExtensionOverridesAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kernelExtensionOverridesAllowed
    * If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
    *
    * @param bool $val The kernelExtensionOverridesAllowed
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionOverridesAllowed($val)
    {
        $this->_propDict["kernelExtensionOverridesAllowed"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the kernelExtensionsAllowed
    * A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     *
     * @return array The kernelExtensionsAllowed
     */
    public function getKernelExtensionsAllowed()
    {
        if (array_key_exists("kernelExtensionsAllowed", $this->_propDict)) {
           return $this->_propDict["kernelExtensionsAllowed"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the kernelExtensionsAllowed
    * A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
    *
    * @param MacOSKernelExtension $val The kernelExtensionsAllowed
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionsAllowed($val)
    {
		$this->_propDict["kernelExtensionsAllowed"] = $val;
        return $this;
    }
    

     /** 
     * Gets the systemExtensionsAllowed
    * Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
     *
     * @return array The systemExtensionsAllowed
     */
    public function getSystemExtensionsAllowed()
    {
        if (array_key_exists("systemExtensionsAllowed", $this->_propDict)) {
           return $this->_propDict["systemExtensionsAllowed"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the systemExtensionsAllowed
    * Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSSystemExtension $val The systemExtensionsAllowed
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setSystemExtensionsAllowed($val)
    {
		$this->_propDict["systemExtensionsAllowed"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemExtensionsAllowedTeamIdentifiers
    * Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
    *
    * @return string The systemExtensionsAllowedTeamIdentifiers
    */
    public function getSystemExtensionsAllowedTeamIdentifiers()
    {
        if (array_key_exists("systemExtensionsAllowedTeamIdentifiers", $this->_propDict)) {
            return $this->_propDict["systemExtensionsAllowedTeamIdentifiers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemExtensionsAllowedTeamIdentifiers
    * Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
    *
    * @param string $val The systemExtensionsAllowedTeamIdentifiers
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setSystemExtensionsAllowedTeamIdentifiers($val)
    {
        $this->_propDict["systemExtensionsAllowedTeamIdentifiers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the systemExtensionsAllowedTypes
    * Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
     *
     * @return array The systemExtensionsAllowedTypes
     */
    public function getSystemExtensionsAllowedTypes()
    {
        if (array_key_exists("systemExtensionsAllowedTypes", $this->_propDict)) {
           return $this->_propDict["systemExtensionsAllowedTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the systemExtensionsAllowedTypes
    * Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSSystemExtensionTypeMapping $val The systemExtensionsAllowedTypes
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setSystemExtensionsAllowedTypes($val)
    {
		$this->_propDict["systemExtensionsAllowedTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the systemExtensionsBlockOverride
    * Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
    *
    * @return bool The systemExtensionsBlockOverride
    */
    public function getSystemExtensionsBlockOverride()
    {
        if (array_key_exists("systemExtensionsBlockOverride", $this->_propDict)) {
            return $this->_propDict["systemExtensionsBlockOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the systemExtensionsBlockOverride
    * Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
    *
    * @param bool $val The systemExtensionsBlockOverride
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setSystemExtensionsBlockOverride($val)
    {
        $this->_propDict["systemExtensionsBlockOverride"] = boolval($val);
        return $this;
    }
    
}
