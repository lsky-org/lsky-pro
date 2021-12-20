<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobApp File
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
* Win32LobApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobApp extends MobileLobApp
{
    /**
    * Gets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @return WindowsArchitecture The applicableArchitectures
    */
    public function getApplicableArchitectures()
    {
        if (array_key_exists("applicableArchitectures", $this->_propDict)) {
            if (is_a($this->_propDict["applicableArchitectures"], "\Microsoft\Graph\Model\WindowsArchitecture")) {
                return $this->_propDict["applicableArchitectures"];
            } else {
                $this->_propDict["applicableArchitectures"] = new WindowsArchitecture($this->_propDict["applicableArchitectures"]);
                return $this->_propDict["applicableArchitectures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicableArchitectures
    * The Windows architecture(s) for which this app can run on. Possible values are: none, x86, x64, arm, neutral, arm64.
    *
    * @param WindowsArchitecture $val The applicableArchitectures
    *
    * @return Win32LobApp
    */
    public function setApplicableArchitectures($val)
    {
        $this->_propDict["applicableArchitectures"] = $val;
        return $this;
    }
    
    /**
    * Gets the installCommandLine
    * The command line to install this app
    *
    * @return string The installCommandLine
    */
    public function getInstallCommandLine()
    {
        if (array_key_exists("installCommandLine", $this->_propDict)) {
            return $this->_propDict["installCommandLine"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the installCommandLine
    * The command line to install this app
    *
    * @param string $val The installCommandLine
    *
    * @return Win32LobApp
    */
    public function setInstallCommandLine($val)
    {
        $this->_propDict["installCommandLine"] = $val;
        return $this;
    }
    
    /**
    * Gets the installExperience
    * The install experience for this app.
    *
    * @return Win32LobAppInstallExperience The installExperience
    */
    public function getInstallExperience()
    {
        if (array_key_exists("installExperience", $this->_propDict)) {
            if (is_a($this->_propDict["installExperience"], "\Microsoft\Graph\Model\Win32LobAppInstallExperience")) {
                return $this->_propDict["installExperience"];
            } else {
                $this->_propDict["installExperience"] = new Win32LobAppInstallExperience($this->_propDict["installExperience"]);
                return $this->_propDict["installExperience"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installExperience
    * The install experience for this app.
    *
    * @param Win32LobAppInstallExperience $val The installExperience
    *
    * @return Win32LobApp
    */
    public function setInstallExperience($val)
    {
        $this->_propDict["installExperience"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimumCpuSpeedInMHz
    * The value for the minimum CPU speed which is required to install this app.
    *
    * @return int The minimumCpuSpeedInMHz
    */
    public function getMinimumCpuSpeedInMHz()
    {
        if (array_key_exists("minimumCpuSpeedInMHz", $this->_propDict)) {
            return $this->_propDict["minimumCpuSpeedInMHz"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumCpuSpeedInMHz
    * The value for the minimum CPU speed which is required to install this app.
    *
    * @param int $val The minimumCpuSpeedInMHz
    *
    * @return Win32LobApp
    */
    public function setMinimumCpuSpeedInMHz($val)
    {
        $this->_propDict["minimumCpuSpeedInMHz"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumFreeDiskSpaceInMB
    * The value for the minimum free disk space which is required to install this app.
    *
    * @return int The minimumFreeDiskSpaceInMB
    */
    public function getMinimumFreeDiskSpaceInMB()
    {
        if (array_key_exists("minimumFreeDiskSpaceInMB", $this->_propDict)) {
            return $this->_propDict["minimumFreeDiskSpaceInMB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumFreeDiskSpaceInMB
    * The value for the minimum free disk space which is required to install this app.
    *
    * @param int $val The minimumFreeDiskSpaceInMB
    *
    * @return Win32LobApp
    */
    public function setMinimumFreeDiskSpaceInMB($val)
    {
        $this->_propDict["minimumFreeDiskSpaceInMB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumMemoryInMB
    * The value for the minimum physical memory which is required to install this app.
    *
    * @return int The minimumMemoryInMB
    */
    public function getMinimumMemoryInMB()
    {
        if (array_key_exists("minimumMemoryInMB", $this->_propDict)) {
            return $this->_propDict["minimumMemoryInMB"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumMemoryInMB
    * The value for the minimum physical memory which is required to install this app.
    *
    * @param int $val The minimumMemoryInMB
    *
    * @return Win32LobApp
    */
    public function setMinimumMemoryInMB($val)
    {
        $this->_propDict["minimumMemoryInMB"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumNumberOfProcessors
    * The value for the minimum number of processors which is required to install this app.
    *
    * @return int The minimumNumberOfProcessors
    */
    public function getMinimumNumberOfProcessors()
    {
        if (array_key_exists("minimumNumberOfProcessors", $this->_propDict)) {
            return $this->_propDict["minimumNumberOfProcessors"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumNumberOfProcessors
    * The value for the minimum number of processors which is required to install this app.
    *
    * @param int $val The minimumNumberOfProcessors
    *
    * @return Win32LobApp
    */
    public function setMinimumNumberOfProcessors($val)
    {
        $this->_propDict["minimumNumberOfProcessors"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the minimumSupportedWindowsRelease
    * The value for the minimum supported windows release.
    *
    * @return string The minimumSupportedWindowsRelease
    */
    public function getMinimumSupportedWindowsRelease()
    {
        if (array_key_exists("minimumSupportedWindowsRelease", $this->_propDict)) {
            return $this->_propDict["minimumSupportedWindowsRelease"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minimumSupportedWindowsRelease
    * The value for the minimum supported windows release.
    *
    * @param string $val The minimumSupportedWindowsRelease
    *
    * @return Win32LobApp
    */
    public function setMinimumSupportedWindowsRelease($val)
    {
        $this->_propDict["minimumSupportedWindowsRelease"] = $val;
        return $this;
    }
    
    /**
    * Gets the msiInformation
    * The MSI details if this Win32 app is an MSI app.
    *
    * @return Win32LobAppMsiInformation The msiInformation
    */
    public function getMsiInformation()
    {
        if (array_key_exists("msiInformation", $this->_propDict)) {
            if (is_a($this->_propDict["msiInformation"], "\Microsoft\Graph\Model\Win32LobAppMsiInformation")) {
                return $this->_propDict["msiInformation"];
            } else {
                $this->_propDict["msiInformation"] = new Win32LobAppMsiInformation($this->_propDict["msiInformation"]);
                return $this->_propDict["msiInformation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the msiInformation
    * The MSI details if this Win32 app is an MSI app.
    *
    * @param Win32LobAppMsiInformation $val The msiInformation
    *
    * @return Win32LobApp
    */
    public function setMsiInformation($val)
    {
        $this->_propDict["msiInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the returnCodes
    * The return codes for post installation behavior.
     *
     * @return array The returnCodes
     */
    public function getReturnCodes()
    {
        if (array_key_exists("returnCodes", $this->_propDict)) {
           return $this->_propDict["returnCodes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the returnCodes
    * The return codes for post installation behavior.
    *
    * @param Win32LobAppReturnCode $val The returnCodes
    *
    * @return Win32LobApp
    */
    public function setReturnCodes($val)
    {
		$this->_propDict["returnCodes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rules
    * The detection and requirement rules for this app.
     *
     * @return array The rules
     */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
           return $this->_propDict["rules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rules
    * The detection and requirement rules for this app.
    *
    * @param Win32LobAppRule $val The rules
    *
    * @return Win32LobApp
    */
    public function setRules($val)
    {
		$this->_propDict["rules"] = $val;
        return $this;
    }
    
    /**
    * Gets the setupFilePath
    * The relative path of the setup file in the encrypted Win32LobApp package.
    *
    * @return string The setupFilePath
    */
    public function getSetupFilePath()
    {
        if (array_key_exists("setupFilePath", $this->_propDict)) {
            return $this->_propDict["setupFilePath"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the setupFilePath
    * The relative path of the setup file in the encrypted Win32LobApp package.
    *
    * @param string $val The setupFilePath
    *
    * @return Win32LobApp
    */
    public function setSetupFilePath($val)
    {
        $this->_propDict["setupFilePath"] = $val;
        return $this;
    }
    
    /**
    * Gets the uninstallCommandLine
    * The command line to uninstall this app
    *
    * @return string The uninstallCommandLine
    */
    public function getUninstallCommandLine()
    {
        if (array_key_exists("uninstallCommandLine", $this->_propDict)) {
            return $this->_propDict["uninstallCommandLine"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uninstallCommandLine
    * The command line to uninstall this app
    *
    * @param string $val The uninstallCommandLine
    *
    * @return Win32LobApp
    */
    public function setUninstallCommandLine($val)
    {
        $this->_propDict["uninstallCommandLine"] = $val;
        return $this;
    }
    
}
