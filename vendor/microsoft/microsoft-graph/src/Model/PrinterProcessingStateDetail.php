<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterProcessingStateDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* PrinterProcessingStateDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterProcessingStateDetail extends Enum
{
    /**
    * The Enum PrinterProcessingStateDetail
    */
    const PAUSED = "paused";
    const MEDIA_JAM = "mediaJam";
    const MEDIA_NEEDED = "mediaNeeded";
    const MEDIA_LOW = "mediaLow";
    const MEDIA_EMPTY = "mediaEmpty";
    const COVER_OPEN = "coverOpen";
    const INTERLOCK_OPEN = "interlockOpen";
    const OUTPUT_TRAY_MISSING = "outputTrayMissing";
    const OUTPUT_AREA_FULL = "outputAreaFull";
    const MARKER_SUPPLY_LOW = "markerSupplyLow";
    const MARKER_SUPPLY_EMPTY = "markerSupplyEmpty";
    const INPUT_TRAY_MISSING = "inputTrayMissing";
    const OUTPUT_AREA_ALMOST_FULL = "outputAreaAlmostFull";
    const MARKER_WASTE_ALMOST_FULL = "markerWasteAlmostFull";
    const MARKER_WASTE_FULL = "markerWasteFull";
    const FUSER_OVER_TEMP = "fuserOverTemp";
    const FUSER_UNDER_TEMP = "fuserUnderTemp";
    const OTHER = "other";
    const NONE = "none";
    const MOVING_TO_PAUSED = "movingToPaused";
    const SHUTDOWN = "shutdown";
    const CONNECTING_TO_DEVICE = "connectingToDevice";
    const TIMED_OUT = "timedOut";
    const STOPPING = "stopping";
    const STOPPED_PARTIALLY = "stoppedPartially";
    const TONER_LOW = "tonerLow";
    const TONER_EMPTY = "tonerEmpty";
    const SPOOL_AREA_FULL = "spoolAreaFull";
    const DOOR_OPEN = "doorOpen";
    const OPTICAL_PHOTO_CONDUCTOR_NEAR_END_OF_LIFE = "opticalPhotoConductorNearEndOfLife";
    const OPTICAL_PHOTO_CONDUCTOR_LIFE_OVER = "opticalPhotoConductorLifeOver";
    const DEVELOPER_LOW = "developerLow";
    const DEVELOPER_EMPTY = "developerEmpty";
    const INTERPRETER_RESOURCE_UNAVAILABLE = "interpreterResourceUnavailable";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}