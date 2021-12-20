<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobSubject File
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
* SynchronizationJobSubject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobSubject extends Entity
{
    /**
    * Gets the objectId
    * The identifier of an object to which a synchronizationJob  is to be applied.
    *
    * @return string The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectId
    * The identifier of an object to which a synchronizationJob  is to be applied.
    *
    * @param string $val The value of the objectId
    *
    * @return SynchronizationJobSubject
    */
    public function setObjectId($val)
    {
        $this->_propDict["objectId"] = $val;
        return $this;
    }
    /**
    * Gets the objectTypeName
    * The type of the object to which a synchronizationJob  is to be applied.
    *
    * @return string The objectTypeName
    */
    public function getObjectTypeName()
    {
        if (array_key_exists("objectTypeName", $this->_propDict)) {
            return $this->_propDict["objectTypeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectTypeName
    * The type of the object to which a synchronizationJob  is to be applied.
    *
    * @param string $val The value of the objectTypeName
    *
    * @return SynchronizationJobSubject
    */
    public function setObjectTypeName($val)
    {
        $this->_propDict["objectTypeName"] = $val;
        return $this;
    }
}
