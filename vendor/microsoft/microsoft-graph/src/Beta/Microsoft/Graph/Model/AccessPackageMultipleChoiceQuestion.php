<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageMultipleChoiceQuestion File
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
* AccessPackageMultipleChoiceQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageMultipleChoiceQuestion extends AccessPackageQuestion
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.accessPackageMultipleChoiceQuestion");
    }

    /**
    * Gets the allowsMultipleSelection
    * Indicates whether requestor can select multiple choices as their answer.
    *
    * @return bool The allowsMultipleSelection
    */
    public function getAllowsMultipleSelection()
    {
        if (array_key_exists("allowsMultipleSelection", $this->_propDict)) {
            return $this->_propDict["allowsMultipleSelection"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowsMultipleSelection
    * Indicates whether requestor can select multiple choices as their answer.
    *
    * @param bool $val The value of the allowsMultipleSelection
    *
    * @return AccessPackageMultipleChoiceQuestion
    */
    public function setAllowsMultipleSelection($val)
    {
        $this->_propDict["allowsMultipleSelection"] = $val;
        return $this;
    }

    /**
    * Gets the choices
    * List of answer choices.
    *
    * @return AccessPackageAnswerChoice The choices
    */
    public function getChoices()
    {
        if (array_key_exists("choices", $this->_propDict)) {
            if (is_a($this->_propDict["choices"], "\Beta\Microsoft\Graph\Model\AccessPackageAnswerChoice")) {
                return $this->_propDict["choices"];
            } else {
                $this->_propDict["choices"] = new AccessPackageAnswerChoice($this->_propDict["choices"]);
                return $this->_propDict["choices"];
            }
        }
        return null;
    }

    /**
    * Sets the choices
    * List of answer choices.
    *
    * @param AccessPackageAnswerChoice $val The value to assign to the choices
    *
    * @return AccessPackageMultipleChoiceQuestion The AccessPackageMultipleChoiceQuestion
    */
    public function setChoices($val)
    {
        $this->_propDict["choices"] = $val;
         return $this;
    }
}
