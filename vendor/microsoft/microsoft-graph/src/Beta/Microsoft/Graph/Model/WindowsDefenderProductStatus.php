<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDefenderProductStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsDefenderProductStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDefenderProductStatus extends Enum
{
    /**
    * The Enum WindowsDefenderProductStatus
    */
    const NO_STATUS = "noStatus";
    const SERVICE_NOT_RUNNING = "serviceNotRunning";
    const SERVICE_STARTED_WITHOUT_MALWARE_PROTECTION = "serviceStartedWithoutMalwareProtection";
    const PENDING_FULL_SCAN_DUE_TO_THREAT_ACTION = "pendingFullScanDueToThreatAction";
    const PENDING_REBOOT_DUE_TO_THREAT_ACTION = "pendingRebootDueToThreatAction";
    const PENDING_MANUAL_STEPS_DUE_TO_THREAT_ACTION = "pendingManualStepsDueToThreatAction";
    const AV_SIGNATURES_OUT_OF_DATE = "avSignaturesOutOfDate";
    const AS_SIGNATURES_OUT_OF_DATE = "asSignaturesOutOfDate";
    const NO_QUICK_SCAN_HAPPENED_FOR_SPECIFIED_PERIOD = "noQuickScanHappenedForSpecifiedPeriod";
    const NO_FULL_SCAN_HAPPENED_FOR_SPECIFIED_PERIOD = "noFullScanHappenedForSpecifiedPeriod";
    const SYSTEM_INITIATED_SCAN_IN_PROGRESS = "systemInitiatedScanInProgress";
    const SYSTEM_INITIATED_CLEAN_IN_PROGRESS = "systemInitiatedCleanInProgress";
    const SAMPLES_PENDING_SUBMISSION = "samplesPendingSubmission";
    const PRODUCT_RUNNING_IN_EVALUATION_MODE = "productRunningInEvaluationMode";
    const PRODUCT_RUNNING_IN_NON_GENUINE_MODE = "productRunningInNonGenuineMode";
    const PRODUCT_EXPIRED = "productExpired";
    const OFFLINE_SCAN_REQUIRED = "offlineScanRequired";
    const SERVICE_SHUTDOWN_AS_PART_OF_SYSTEM_SHUTDOWN = "serviceShutdownAsPartOfSystemShutdown";
    const THREAT_REMEDIATION_FAILED_CRITICALLY = "threatRemediationFailedCritically";
    const THREAT_REMEDIATION_FAILED_NON_CRITICALLY = "threatRemediationFailedNonCritically";
    const NO_STATUS_FLAGS_SET = "noStatusFlagsSet";
    const PLATFORM_OUT_OF_DATE = "platformOutOfDate";
    const PLATFORM_UPDATE_IN_PROGRESS = "platformUpdateInProgress";
    const PLATFORM_ABOUT_TO_BE_OUTDATED = "platformAboutToBeOutdated";
    const SIGNATURE_OR_PLATFORM_END_OF_LIFE_IS_PAST_OR_IS_IMPENDING = "signatureOrPlatformEndOfLifeIsPastOrIsImpending";
    const WINDOWS_S_MODE_SIGNATURES_IN_USE_ON_NON_WIN10_S_INSTALL = "windowsSModeSignaturesInUseOnNonWin10SInstall";
}