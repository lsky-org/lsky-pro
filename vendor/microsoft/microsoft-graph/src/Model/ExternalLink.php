<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalLink File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ExternalLink class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalLink extends Entity
{
    /**
    * Gets the href
    * The url of the link.
    *
    * @return string The href
    */
    public function getHref()
    {
        if (array_key_exists("href", $this->_propDict)) {
            return $this->_propDict["href"];
        } else {
            return null;
        }
    }

    /**
    * Sets the href
    * The url of the link.
    *
    * @param string $val The value of the href
    *
    * @return ExternalLink
    */
    public function setHref($val)
    {
        $this->_propDict["href"] = $val;
        return $this;
    }
}
