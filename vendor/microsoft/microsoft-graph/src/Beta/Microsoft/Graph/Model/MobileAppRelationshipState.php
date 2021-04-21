<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppRelationshipState File
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
* MobileAppRelationshipState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppRelationshipState extends Entity
{
    /**
    * Gets the deviceId
    * The corresponding device id.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceId
    * The corresponding device id.
    *
    * @param string $val The value of the deviceId
    *
    * @return MobileAppRelationshipState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    /**
    * Gets the errorCode
    * The error code for install or uninstall failures of target app.
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * The error code for install or uninstall failures of target app.
    *
    * @param int $val The value of the errorCode
    *
    * @return MobileAppRelationshipState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }

    /**
    * Gets the installState
    * The install state of the app of target app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    *
    * @return ResultantAppState The installState
    */
    public function getInstallState()
    {
        if (array_key_exists("installState", $this->_propDict)) {
            if (is_a($this->_propDict["installState"], "\Beta\Microsoft\Graph\Model\ResultantAppState")) {
                return $this->_propDict["installState"];
            } else {
                $this->_propDict["installState"] = new ResultantAppState($this->_propDict["installState"]);
                return $this->_propDict["installState"];
            }
        }
        return null;
    }

    /**
    * Sets the installState
    * The install state of the app of target app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    *
    * @param ResultantAppState $val The value to assign to the installState
    *
    * @return MobileAppRelationshipState The MobileAppRelationshipState
    */
    public function setInstallState($val)
    {
        $this->_propDict["installState"] = $val;
         return $this;
    }

    /**
    * Gets the installStateDetail
    * The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
    *
    * @return ResultantAppStateDetail The installStateDetail
    */
    public function getInstallStateDetail()
    {
        if (array_key_exists("installStateDetail", $this->_propDict)) {
            if (is_a($this->_propDict["installStateDetail"], "\Beta\Microsoft\Graph\Model\ResultantAppStateDetail")) {
                return $this->_propDict["installStateDetail"];
            } else {
                $this->_propDict["installStateDetail"] = new ResultantAppStateDetail($this->_propDict["installStateDetail"]);
                return $this->_propDict["installStateDetail"];
            }
        }
        return null;
    }

    /**
    * Sets the installStateDetail
    * The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
    *
    * @param ResultantAppStateDetail $val The value to assign to the installStateDetail
    *
    * @return MobileAppRelationshipState The MobileAppRelationshipState
    */
    public function setInstallStateDetail($val)
    {
        $this->_propDict["installStateDetail"] = $val;
         return $this;
    }
    /**
    * Gets the sourceIds
    * The collection of source mobile app's ids.
    *
    * @return string The sourceIds
    */
    public function getSourceIds()
    {
        if (array_key_exists("sourceIds", $this->_propDict)) {
            return $this->_propDict["sourceIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceIds
    * The collection of source mobile app's ids.
    *
    * @param string $val The value of the sourceIds
    *
    * @return MobileAppRelationshipState
    */
    public function setSourceIds($val)
    {
        $this->_propDict["sourceIds"] = $val;
        return $this;
    }
    /**
    * Gets the targetDisplayName
    * The related target app's display name.
    *
    * @return string The targetDisplayName
    */
    public function getTargetDisplayName()
    {
        if (array_key_exists("targetDisplayName", $this->_propDict)) {
            return $this->_propDict["targetDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetDisplayName
    * The related target app's display name.
    *
    * @param string $val The value of the targetDisplayName
    *
    * @return MobileAppRelationshipState
    */
    public function setTargetDisplayName($val)
    {
        $this->_propDict["targetDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the targetId
    * The related target app's id.
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetId
    * The related target app's id.
    *
    * @param string $val The value of the targetId
    *
    * @return MobileAppRelationshipState
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
        return $this;
    }

    /**
    * Gets the targetLastSyncDateTime
    * The last sync time of the target app.
    *
    * @return \DateTime The targetLastSyncDateTime
    */
    public function getTargetLastSyncDateTime()
    {
        if (array_key_exists("targetLastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["targetLastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["targetLastSyncDateTime"];
            } else {
                $this->_propDict["targetLastSyncDateTime"] = new \DateTime($this->_propDict["targetLastSyncDateTime"]);
                return $this->_propDict["targetLastSyncDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the targetLastSyncDateTime
    * The last sync time of the target app.
    *
    * @param \DateTime $val The value to assign to the targetLastSyncDateTime
    *
    * @return MobileAppRelationshipState The MobileAppRelationshipState
    */
    public function setTargetLastSyncDateTime($val)
    {
        $this->_propDict["targetLastSyncDateTime"] = $val;
         return $this;
    }
}
