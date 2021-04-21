<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageSubject File
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
* AccessPackageSubject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageSubject extends Entity
{
    /**
    * Gets the altSecId
    *
    * @return string The altSecId
    */
    public function getAltSecId()
    {
        if (array_key_exists("altSecId", $this->_propDict)) {
            return $this->_propDict["altSecId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the altSecId
    *
    * @param string $val The altSecId
    *
    * @return AccessPackageSubject
    */
    public function setAltSecId($val)
    {
        $this->_propDict["altSecId"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectedOrganizationId
    *
    * @return string The connectedOrganizationId
    */
    public function getConnectedOrganizationId()
    {
        if (array_key_exists("connectedOrganizationId", $this->_propDict)) {
            return $this->_propDict["connectedOrganizationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectedOrganizationId
    *
    * @param string $val The connectedOrganizationId
    *
    * @return AccessPackageSubject
    */
    public function setConnectedOrganizationId($val)
    {
        $this->_propDict["connectedOrganizationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the subject.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name of the subject.
    *
    * @param string $val The displayName
    *
    * @return AccessPackageSubject
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    * The email address of the subject.
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    * The email address of the subject.
    *
    * @param string $val The email
    *
    * @return AccessPackageSubject
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the objectId
    * The object ID of the subject.
    *
    * @return string The objectId
    */
    public function getObjectId()
    {
        if (array_key_exists("objectId", $this->_propDict)) {
            return $this->_propDict["objectId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the objectId
    * The object ID of the subject.
    *
    * @param string $val The objectId
    *
    * @return AccessPackageSubject
    */
    public function setObjectId($val)
    {
        $this->_propDict["objectId"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesSecurityIdentifier
    *
    * @return string The onPremisesSecurityIdentifier
    */
    public function getOnPremisesSecurityIdentifier()
    {
        if (array_key_exists("onPremisesSecurityIdentifier", $this->_propDict)) {
            return $this->_propDict["onPremisesSecurityIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onPremisesSecurityIdentifier
    *
    * @param string $val The onPremisesSecurityIdentifier
    *
    * @return AccessPackageSubject
    */
    public function setOnPremisesSecurityIdentifier($val)
    {
        $this->_propDict["onPremisesSecurityIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalName
    * The principal name, if known, of the subject.
    *
    * @return string The principalName
    */
    public function getPrincipalName()
    {
        if (array_key_exists("principalName", $this->_propDict)) {
            return $this->_propDict["principalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalName
    * The principal name, if known, of the subject.
    *
    * @param string $val The principalName
    *
    * @return AccessPackageSubject
    */
    public function setPrincipalName($val)
    {
        $this->_propDict["principalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * The resource type of the subject.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * The resource type of the subject.
    *
    * @param string $val The type
    *
    * @return AccessPackageSubject
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectedOrganization
    *
    * @return ConnectedOrganization The connectedOrganization
    */
    public function getConnectedOrganization()
    {
        if (array_key_exists("connectedOrganization", $this->_propDict)) {
            if (is_a($this->_propDict["connectedOrganization"], "\Beta\Microsoft\Graph\Model\ConnectedOrganization")) {
                return $this->_propDict["connectedOrganization"];
            } else {
                $this->_propDict["connectedOrganization"] = new ConnectedOrganization($this->_propDict["connectedOrganization"]);
                return $this->_propDict["connectedOrganization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectedOrganization
    *
    * @param ConnectedOrganization $val The connectedOrganization
    *
    * @return AccessPackageSubject
    */
    public function setConnectedOrganization($val)
    {
        $this->_propDict["connectedOrganization"] = $val;
        return $this;
    }
    
}
