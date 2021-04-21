<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftStoreForBusinessAppAssignmentSettings File
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
* MicrosoftStoreForBusinessAppAssignmentSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftStoreForBusinessAppAssignmentSettings extends MobileAppAssignmentSettings
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.microsoftStoreForBusinessAppAssignmentSettings");
    }

    /**
    * Gets the useDeviceContext
    * Whether or not to use device execution context for Microsoft Store for Business mobile app.
    *
    * @return bool The useDeviceContext
    */
    public function getUseDeviceContext()
    {
        if (array_key_exists("useDeviceContext", $this->_propDict)) {
            return $this->_propDict["useDeviceContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useDeviceContext
    * Whether or not to use device execution context for Microsoft Store for Business mobile app.
    *
    * @param bool $val The value of the useDeviceContext
    *
    * @return MicrosoftStoreForBusinessAppAssignmentSettings
    */
    public function setUseDeviceContext($val)
    {
        $this->_propDict["useDeviceContext"] = $val;
        return $this;
    }
}
