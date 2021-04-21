<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CertificateDestinationStore File
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
* CertificateDestinationStore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CertificateDestinationStore extends Enum
{
    /**
    * The Enum CertificateDestinationStore
    */
    const COMPUTER_CERT_STORE_ROOT = "computerCertStoreRoot";
    const COMPUTER_CERT_STORE_INTERMEDIATE = "computerCertStoreIntermediate";
    const USER_CERT_STORE_INTERMEDIATE = "userCertStoreIntermediate";
}