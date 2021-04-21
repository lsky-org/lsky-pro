<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EncryptWithUserDefinedRights File
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
* EncryptWithUserDefinedRights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EncryptWithUserDefinedRights extends EncryptContent
{
    /**
    * Gets the allowAdHocPermissions
    *
    * @return bool The allowAdHocPermissions
    */
    public function getAllowAdHocPermissions()
    {
        if (array_key_exists("allowAdHocPermissions", $this->_propDict)) {
            return $this->_propDict["allowAdHocPermissions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAdHocPermissions
    *
    * @param bool $val The value of the allowAdHocPermissions
    *
    * @return EncryptWithUserDefinedRights
    */
    public function setAllowAdHocPermissions($val)
    {
        $this->_propDict["allowAdHocPermissions"] = $val;
        return $this;
    }
    /**
    * Gets the allowMailForwarding
    *
    * @return bool The allowMailForwarding
    */
    public function getAllowMailForwarding()
    {
        if (array_key_exists("allowMailForwarding", $this->_propDict)) {
            return $this->_propDict["allowMailForwarding"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMailForwarding
    *
    * @param bool $val The value of the allowMailForwarding
    *
    * @return EncryptWithUserDefinedRights
    */
    public function setAllowMailForwarding($val)
    {
        $this->_propDict["allowMailForwarding"] = $val;
        return $this;
    }
    /**
    * Gets the decryptionRightsManagementTemplateId
    *
    * @return string The decryptionRightsManagementTemplateId
    */
    public function getDecryptionRightsManagementTemplateId()
    {
        if (array_key_exists("decryptionRightsManagementTemplateId", $this->_propDict)) {
            return $this->_propDict["decryptionRightsManagementTemplateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decryptionRightsManagementTemplateId
    *
    * @param string $val The value of the decryptionRightsManagementTemplateId
    *
    * @return EncryptWithUserDefinedRights
    */
    public function setDecryptionRightsManagementTemplateId($val)
    {
        $this->_propDict["decryptionRightsManagementTemplateId"] = $val;
        return $this;
    }
}
