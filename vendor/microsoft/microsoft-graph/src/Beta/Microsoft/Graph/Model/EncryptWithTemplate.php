<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EncryptWithTemplate File
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
* EncryptWithTemplate class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EncryptWithTemplate extends EncryptContent
{
    /**
    * Gets the availableForEncryption
    *
    * @return bool The availableForEncryption
    */
    public function getAvailableForEncryption()
    {
        if (array_key_exists("availableForEncryption", $this->_propDict)) {
            return $this->_propDict["availableForEncryption"];
        } else {
            return null;
        }
    }

    /**
    * Sets the availableForEncryption
    *
    * @param bool $val The value of the availableForEncryption
    *
    * @return EncryptWithTemplate
    */
    public function setAvailableForEncryption($val)
    {
        $this->_propDict["availableForEncryption"] = $val;
        return $this;
    }
    /**
    * Gets the templateId
    *
    * @return string The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateId
    *
    * @param string $val The value of the templateId
    *
    * @return EncryptWithTemplate
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
}
