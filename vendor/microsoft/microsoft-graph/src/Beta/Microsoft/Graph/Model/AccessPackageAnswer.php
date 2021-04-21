<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAnswer File
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
* AccessPackageAnswer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAnswer extends Entity
{

    /**
    * Gets the answeredQuestion
    * The question the answer is for. Required and Read-only.
    *
    * @return AccessPackageQuestion The answeredQuestion
    */
    public function getAnsweredQuestion()
    {
        if (array_key_exists("answeredQuestion", $this->_propDict)) {
            if (is_a($this->_propDict["answeredQuestion"], "\Beta\Microsoft\Graph\Model\AccessPackageQuestion")) {
                return $this->_propDict["answeredQuestion"];
            } else {
                $this->_propDict["answeredQuestion"] = new AccessPackageQuestion($this->_propDict["answeredQuestion"]);
                return $this->_propDict["answeredQuestion"];
            }
        }
        return null;
    }

    /**
    * Sets the answeredQuestion
    * The question the answer is for. Required and Read-only.
    *
    * @param AccessPackageQuestion $val The value to assign to the answeredQuestion
    *
    * @return AccessPackageAnswer The AccessPackageAnswer
    */
    public function setAnsweredQuestion($val)
    {
        $this->_propDict["answeredQuestion"] = $val;
         return $this;
    }
    /**
    * Gets the displayValue
    * The display value of the answer. Required.
    *
    * @return string The displayValue
    */
    public function getDisplayValue()
    {
        if (array_key_exists("displayValue", $this->_propDict)) {
            return $this->_propDict["displayValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayValue
    * The display value of the answer. Required.
    *
    * @param string $val The value of the displayValue
    *
    * @return AccessPackageAnswer
    */
    public function setDisplayValue($val)
    {
        $this->_propDict["displayValue"] = $val;
        return $this;
    }
}
