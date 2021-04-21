<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSet File
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
* UserSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSet extends Entity
{
    /**
    * Gets the isBackup
    * For a user in an approval stage, this property indicates whether the user is a backup fallback approver.
    *
    * @return bool The isBackup
    */
    public function getIsBackup()
    {
        if (array_key_exists("isBackup", $this->_propDict)) {
            return $this->_propDict["isBackup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isBackup
    * For a user in an approval stage, this property indicates whether the user is a backup fallback approver.
    *
    * @param bool $val The value of the isBackup
    *
    * @return UserSet
    */
    public function setIsBackup($val)
    {
        $this->_propDict["isBackup"] = $val;
        return $this;
    }
}
