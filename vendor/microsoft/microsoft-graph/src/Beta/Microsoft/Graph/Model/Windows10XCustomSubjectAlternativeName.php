<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10XCustomSubjectAlternativeName File
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
* Windows10XCustomSubjectAlternativeName class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10XCustomSubjectAlternativeName extends Entity
{
    /**
    * Gets the name
    * Custom SAN Name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Custom SAN Name
    *
    * @param string $val The value of the name
    *
    * @return Windows10XCustomSubjectAlternativeName
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the sanType
    * Custom SAN Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    *
    * @return SubjectAlternativeNameType The sanType
    */
    public function getSanType()
    {
        if (array_key_exists("sanType", $this->_propDict)) {
            if (is_a($this->_propDict["sanType"], "\Beta\Microsoft\Graph\Model\SubjectAlternativeNameType")) {
                return $this->_propDict["sanType"];
            } else {
                $this->_propDict["sanType"] = new SubjectAlternativeNameType($this->_propDict["sanType"]);
                return $this->_propDict["sanType"];
            }
        }
        return null;
    }

    /**
    * Sets the sanType
    * Custom SAN Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    *
    * @param SubjectAlternativeNameType $val The value to assign to the sanType
    *
    * @return Windows10XCustomSubjectAlternativeName The Windows10XCustomSubjectAlternativeName
    */
    public function setSanType($val)
    {
        $this->_propDict["sanType"] = $val;
         return $this;
    }
}
