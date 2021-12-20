<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProfileCardProperty File
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
* ProfileCardProperty class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProfileCardProperty extends Entity
{

     /** 
     * Gets the annotations
    * Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
     *
     * @return array The annotations
     */
    public function getAnnotations()
    {
        if (array_key_exists("annotations", $this->_propDict)) {
           return $this->_propDict["annotations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the annotations
    * Allows an administrator to set a custom display label for the directory property and localize it for the users in their tenant.
    *
    * @param ProfileCardAnnotation $val The annotations
    *
    * @return ProfileCardProperty
    */
    public function setAnnotations($val)
    {
		$this->_propDict["annotations"] = $val;
        return $this;
    }
    
    /**
    * Gets the directoryPropertyName
    * Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Azure Active Directory (Azure AD) properties on the Microsoft 365 profile card within their tenant. When present, the Azure AD field referenced in this field will be visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
    *
    * @return string The directoryPropertyName
    */
    public function getDirectoryPropertyName()
    {
        if (array_key_exists("directoryPropertyName", $this->_propDict)) {
            return $this->_propDict["directoryPropertyName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the directoryPropertyName
    * Identifies a profileCardProperty resource in Get, Update, or Delete operations. Allows an administrator to surface hidden Azure Active Directory (Azure AD) properties on the Microsoft 365 profile card within their tenant. When present, the Azure AD field referenced in this field will be visible to all users in your tenant on the contact pane of the profile card. Allowed values for this field are: UserPrincipalName, Fax, StreetAddress, PostalCode, StateOrProvince, Alias, CustomAttribute1,  CustomAttribute2, CustomAttribute3, CustomAttribute4, CustomAttribute5, CustomAttribute6, CustomAttribute7, CustomAttribute8, CustomAttribute9, CustomAttribute10, CustomAttribute11, CustomAttribute12, CustomAttribute13, CustomAttribute14, CustomAttribute15.
    *
    * @param string $val The directoryPropertyName
    *
    * @return ProfileCardProperty
    */
    public function setDirectoryPropertyName($val)
    {
        $this->_propDict["directoryPropertyName"] = $val;
        return $this;
    }
    
}
