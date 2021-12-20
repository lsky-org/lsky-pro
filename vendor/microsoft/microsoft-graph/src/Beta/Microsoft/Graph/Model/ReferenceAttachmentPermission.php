<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ReferenceAttachmentPermission File
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
* ReferenceAttachmentPermission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ReferenceAttachmentPermission extends Enum
{
    /**
    * The Enum ReferenceAttachmentPermission
    */
    const OTHER = "other";
    const VIEW = "view";
    const EDIT = "edit";
    const ANONYMOUS_VIEW = "anonymousView";
    const ANONYMOUS_EDIT = "anonymousEdit";
    const ORGANIZATION_VIEW = "organizationView";
    const ORGANIZATION_EDIT = "organizationEdit";
}