<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidManagedStoreAppAssignmentSettings File
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
* AndroidManagedStoreAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidManagedStoreAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.androidManagedStoreAppAssignmentSettings");
    }

    /**
    * Gets the androidManagedStoreAppTrackIds
    * The track IDs to enable for this app assignment.
    *
    * @return string The androidManagedStoreAppTrackIds
    */
    public function getAndroidManagedStoreAppTrackIds()
    {
        if (array_key_exists("androidManagedStoreAppTrackIds", $this->_propDict)) {
            return $this->_propDict["androidManagedStoreAppTrackIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the androidManagedStoreAppTrackIds
    * The track IDs to enable for this app assignment.
    *
    * @param string $val The value of the androidManagedStoreAppTrackIds
    *
    * @return AndroidManagedStoreAppAssignmentSettings
    */
    public function setAndroidManagedStoreAppTrackIds($val)
    {
        $this->_propDict["androidManagedStoreAppTrackIds"] = $val;
        return $this;
    }
}
