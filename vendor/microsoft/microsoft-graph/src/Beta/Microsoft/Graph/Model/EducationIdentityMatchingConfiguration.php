<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationIdentityMatchingConfiguration File
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
* EducationIdentityMatchingConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationIdentityMatchingConfiguration extends EducationIdentitySynchronizationConfiguration
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationIdentityMatchingConfiguration");
    }


    /**
    * Gets the matchingOptions
    * Mapping between the user account and the options to use to uniquely identify the user to update.
    *
    * @return EducationIdentityMatchingOptions The matchingOptions
    */
    public function getMatchingOptions()
    {
        if (array_key_exists("matchingOptions", $this->_propDict)) {
            if (is_a($this->_propDict["matchingOptions"], "\Beta\Microsoft\Graph\Model\EducationIdentityMatchingOptions")) {
                return $this->_propDict["matchingOptions"];
            } else {
                $this->_propDict["matchingOptions"] = new EducationIdentityMatchingOptions($this->_propDict["matchingOptions"]);
                return $this->_propDict["matchingOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the matchingOptions
    * Mapping between the user account and the options to use to uniquely identify the user to update.
    *
    * @param EducationIdentityMatchingOptions $val The value to assign to the matchingOptions
    *
    * @return EducationIdentityMatchingConfiguration The EducationIdentityMatchingConfiguration
    */
    public function setMatchingOptions($val)
    {
        $this->_propDict["matchingOptions"] = $val;
         return $this;
    }
}
