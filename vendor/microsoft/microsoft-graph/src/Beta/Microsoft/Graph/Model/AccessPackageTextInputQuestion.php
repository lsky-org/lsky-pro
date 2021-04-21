<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageTextInputQuestion File
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
* AccessPackageTextInputQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageTextInputQuestion extends AccessPackageQuestion
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.accessPackageTextInputQuestion");
    }

    /**
    * Gets the isSingleLineQuestion
    * Indicates whether the answer will be in single or multiple line format.
    *
    * @return bool The isSingleLineQuestion
    */
    public function getIsSingleLineQuestion()
    {
        if (array_key_exists("isSingleLineQuestion", $this->_propDict)) {
            return $this->_propDict["isSingleLineQuestion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSingleLineQuestion
    * Indicates whether the answer will be in single or multiple line format.
    *
    * @param bool $val The value of the isSingleLineQuestion
    *
    * @return AccessPackageTextInputQuestion
    */
    public function setIsSingleLineQuestion($val)
    {
        $this->_propDict["isSingleLineQuestion"] = $val;
        return $this;
    }
}
