<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintSettings File
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
* PrintSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintSettings extends Entity
{
    /**
    * Gets the documentConversionEnabled
    * Specifies whether document conversion is enabled for the tenant. If document conversion is enabled, Universal Print service will automatically convert documents into a format compatible with the printer (xps to pdf) when needed.
    *
    * @return bool The documentConversionEnabled
    */
    public function getDocumentConversionEnabled()
    {
        if (array_key_exists("documentConversionEnabled", $this->_propDict)) {
            return $this->_propDict["documentConversionEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the documentConversionEnabled
    * Specifies whether document conversion is enabled for the tenant. If document conversion is enabled, Universal Print service will automatically convert documents into a format compatible with the printer (xps to pdf) when needed.
    *
    * @param bool $val The value of the documentConversionEnabled
    *
    * @return PrintSettings
    */
    public function setDocumentConversionEnabled($val)
    {
        $this->_propDict["documentConversionEnabled"] = $val;
        return $this;
    }
}
