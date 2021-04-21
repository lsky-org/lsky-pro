<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Phone File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* Phone class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Phone extends Entity
{
    /**
    * Gets the language
    *
    * @return string The language
    */
    public function getLanguage()
    {
        if (array_key_exists("language", $this->_propDict)) {
            return $this->_propDict["language"];
        } else {
            return null;
        }
    }

    /**
    * Sets the language
    *
    * @param string $val The value of the language
    *
    * @return Phone
    */
    public function setLanguage($val)
    {
        $this->_propDict["language"] = $val;
        return $this;
    }
    /**
    * Gets the number
    * The phone number.
    *
    * @return string The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            return $this->_propDict["number"];
        } else {
            return null;
        }
    }

    /**
    * Sets the number
    * The phone number.
    *
    * @param string $val The value of the number
    *
    * @return Phone
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    /**
    * Gets the region
    *
    * @return string The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }

    /**
    * Sets the region
    *
    * @param string $val The value of the region
    *
    * @return Phone
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * The type of phone number. Possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
    *
    * @return PhoneType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Microsoft\Graph\Model\PhoneType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new PhoneType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * The type of phone number. Possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
    *
    * @param PhoneType $val The value to assign to the type
    *
    * @return Phone The Phone
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
