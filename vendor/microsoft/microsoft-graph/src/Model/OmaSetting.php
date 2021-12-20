<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OmaSetting File
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
* OmaSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OmaSetting extends Entity
{
    /**
    * Gets the description
    * Description.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description.
    *
    * @param string $val The value of the description
    *
    * @return OmaSetting
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Display Name.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Display Name.
    *
    * @param string $val The value of the displayName
    *
    * @return OmaSetting
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the omaUri
    * OMA.
    *
    * @return string The omaUri
    */
    public function getOmaUri()
    {
        if (array_key_exists("omaUri", $this->_propDict)) {
            return $this->_propDict["omaUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the omaUri
    * OMA.
    *
    * @param string $val The value of the omaUri
    *
    * @return OmaSetting
    */
    public function setOmaUri($val)
    {
        $this->_propDict["omaUri"] = $val;
        return $this;
    }
}
