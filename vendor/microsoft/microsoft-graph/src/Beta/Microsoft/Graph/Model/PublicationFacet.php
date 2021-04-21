<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicationFacet File
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
* PublicationFacet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PublicationFacet extends Entity
{
    /**
    * Gets the level
    * The state of publication for this document. Either published or checkout. Read-only.
    *
    * @return string The level
    */
    public function getLevel()
    {
        if (array_key_exists("level", $this->_propDict)) {
            return $this->_propDict["level"];
        } else {
            return null;
        }
    }

    /**
    * Sets the level
    * The state of publication for this document. Either published or checkout. Read-only.
    *
    * @param string $val The value of the level
    *
    * @return PublicationFacet
    */
    public function setLevel($val)
    {
        $this->_propDict["level"] = $val;
        return $this;
    }
    /**
    * Gets the versionId
    * The unique identifier for the version that is visible to the current caller. Read-only.
    *
    * @return string The versionId
    */
    public function getVersionId()
    {
        if (array_key_exists("versionId", $this->_propDict)) {
            return $this->_propDict["versionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the versionId
    * The unique identifier for the version that is visible to the current caller. Read-only.
    *
    * @param string $val The value of the versionId
    *
    * @return PublicationFacet
    */
    public function setVersionId($val)
    {
        $this->_propDict["versionId"] = $val;
        return $this;
    }
}
