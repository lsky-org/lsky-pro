<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookSessionInfo File
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
* WorkbookSessionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookSessionInfo extends Entity
{
    /**
    * Gets the id
    * Id of the workbook session.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Id of the workbook session.
    *
    * @param string $val The value of the id
    *
    * @return WorkbookSessionInfo
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the persistChanges
    * true for persistent session. false for non-persistent session (view mode)
    *
    * @return bool The persistChanges
    */
    public function getPersistChanges()
    {
        if (array_key_exists("persistChanges", $this->_propDict)) {
            return $this->_propDict["persistChanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the persistChanges
    * true for persistent session. false for non-persistent session (view mode)
    *
    * @param bool $val The value of the persistChanges
    *
    * @return WorkbookSessionInfo
    */
    public function setPersistChanges($val)
    {
        $this->_propDict["persistChanges"] = $val;
        return $this;
    }
}
