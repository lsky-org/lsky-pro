<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageResourceAttributeQuestion File
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
* AccessPackageResourceAttributeQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageResourceAttributeQuestion extends AccessPackageResourceAttributeSource
{

    /**
    * Gets the question
    *
    * @return AccessPackageQuestion The question
    */
    public function getQuestion()
    {
        if (array_key_exists("question", $this->_propDict)) {
            if (is_a($this->_propDict["question"], "\Beta\Microsoft\Graph\Model\AccessPackageQuestion")) {
                return $this->_propDict["question"];
            } else {
                $this->_propDict["question"] = new AccessPackageQuestion($this->_propDict["question"]);
                return $this->_propDict["question"];
            }
        }
        return null;
    }

    /**
    * Sets the question
    *
    * @param AccessPackageQuestion $val The value to assign to the question
    *
    * @return AccessPackageResourceAttributeQuestion The AccessPackageResourceAttributeQuestion
    */
    public function setQuestion($val)
    {
        $this->_propDict["question"] = $val;
         return $this;
    }
}
