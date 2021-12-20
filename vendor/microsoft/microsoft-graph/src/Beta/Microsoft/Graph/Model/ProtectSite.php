<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProtectSite File
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
* ProtectSite class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProtectSite extends LabelActionBase
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.protectSite");
    }


    /**
    * Gets the accessType
    *
    * @return SiteAccessType The accessType
    */
    public function getAccessType()
    {
        if (array_key_exists("accessType", $this->_propDict)) {
            if (is_a($this->_propDict["accessType"], "\Beta\Microsoft\Graph\Model\SiteAccessType")) {
                return $this->_propDict["accessType"];
            } else {
                $this->_propDict["accessType"] = new SiteAccessType($this->_propDict["accessType"]);
                return $this->_propDict["accessType"];
            }
        }
        return null;
    }

    /**
    * Sets the accessType
    *
    * @param SiteAccessType $val The value to assign to the accessType
    *
    * @return ProtectSite The ProtectSite
    */
    public function setAccessType($val)
    {
        $this->_propDict["accessType"] = $val;
         return $this;
    }
    /**
    * Gets the conditionalAccessProtectionLevelId
    *
    * @return string The conditionalAccessProtectionLevelId
    */
    public function getConditionalAccessProtectionLevelId()
    {
        if (array_key_exists("conditionalAccessProtectionLevelId", $this->_propDict)) {
            return $this->_propDict["conditionalAccessProtectionLevelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the conditionalAccessProtectionLevelId
    *
    * @param string $val The value of the conditionalAccessProtectionLevelId
    *
    * @return ProtectSite
    */
    public function setConditionalAccessProtectionLevelId($val)
    {
        $this->_propDict["conditionalAccessProtectionLevelId"] = $val;
        return $this;
    }
}
