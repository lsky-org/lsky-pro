<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* QuarantineReason File
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
* QuarantineReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class QuarantineReason extends Enum
{
    /**
    * The Enum QuarantineReason
    */
    const ENCOUNTERED_BASE_ESCROW_THRESHOLD = "encounteredBaseEscrowThreshold";
    const ENCOUNTERED_TOTAL_ESCROW_THRESHOLD = "encounteredTotalEscrowThreshold";
    const ENCOUNTERED_ESCROW_PROPORTION_THRESHOLD = "encounteredEscrowProportionThreshold";
    const ENCOUNTERED_QUARANTINE_EXCEPTION = "encounteredQuarantineException";
    const UNKNOWN = "unknown";
    const QUARANTINED_ON_DEMAND = "quarantinedOnDemand";
    const TOO_MANY_DELETES = "tooManyDeletes";
    const INGESTION_INTERRUPTED = "ingestionInterrupted";
}