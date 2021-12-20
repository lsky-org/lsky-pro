<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosWebContentFilterAutoFilter File
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
* IosWebContentFilterAutoFilter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosWebContentFilterAutoFilter extends IosWebContentFilterBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iosWebContentFilterAutoFilter");
    }

    /**
    * Gets the allowedUrls
    * Additional URLs allowed for access
    *
    * @return string The allowedUrls
    */
    public function getAllowedUrls()
    {
        if (array_key_exists("allowedUrls", $this->_propDict)) {
            return $this->_propDict["allowedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedUrls
    * Additional URLs allowed for access
    *
    * @param string $val The value of the allowedUrls
    *
    * @return IosWebContentFilterAutoFilter
    */
    public function setAllowedUrls($val)
    {
        $this->_propDict["allowedUrls"] = $val;
        return $this;
    }
    /**
    * Gets the blockedUrls
    * Additional URLs blocked for access
    *
    * @return string The blockedUrls
    */
    public function getBlockedUrls()
    {
        if (array_key_exists("blockedUrls", $this->_propDict)) {
            return $this->_propDict["blockedUrls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blockedUrls
    * Additional URLs blocked for access
    *
    * @param string $val The value of the blockedUrls
    *
    * @return IosWebContentFilterAutoFilter
    */
    public function setBlockedUrls($val)
    {
        $this->_propDict["blockedUrls"] = $val;
        return $this;
    }
}
