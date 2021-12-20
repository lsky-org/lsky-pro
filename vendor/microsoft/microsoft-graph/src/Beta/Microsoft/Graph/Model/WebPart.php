<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebPart File
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
* WebPart class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebPart extends Entity
{

    /**
    * Gets the data
    * The required properties for the webPart (varies by webPart)
    *
    * @return SitePageData The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            if (is_a($this->_propDict["data"], "\Beta\Microsoft\Graph\Model\SitePageData")) {
                return $this->_propDict["data"];
            } else {
                $this->_propDict["data"] = new SitePageData($this->_propDict["data"]);
                return $this->_propDict["data"];
            }
        }
        return null;
    }

    /**
    * Sets the data
    * The required properties for the webPart (varies by webPart)
    *
    * @param SitePageData $val The value to assign to the data
    *
    * @return WebPart The WebPart
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * A unique identifier specifying the webPart type. Read-only.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * A unique identifier specifying the webPart type. Read-only.
    *
    * @param string $val The value of the type
    *
    * @return WebPart
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
