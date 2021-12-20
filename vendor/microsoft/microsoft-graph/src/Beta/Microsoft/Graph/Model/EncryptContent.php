<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EncryptContent File
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
* EncryptContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EncryptContent extends LabelActionBase
{

    /**
    * Gets the encryptWith
    *
    * @return EncryptWith The encryptWith
    */
    public function getEncryptWith()
    {
        if (array_key_exists("encryptWith", $this->_propDict)) {
            if (is_a($this->_propDict["encryptWith"], "\Beta\Microsoft\Graph\Model\EncryptWith")) {
                return $this->_propDict["encryptWith"];
            } else {
                $this->_propDict["encryptWith"] = new EncryptWith($this->_propDict["encryptWith"]);
                return $this->_propDict["encryptWith"];
            }
        }
        return null;
    }

    /**
    * Sets the encryptWith
    *
    * @param EncryptWith $val The value to assign to the encryptWith
    *
    * @return EncryptContent The EncryptContent
    */
    public function setEncryptWith($val)
    {
        $this->_propDict["encryptWith"] = $val;
         return $this;
    }
}
