<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExternalDomainFederation File
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
* ExternalDomainFederation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExternalDomainFederation extends IdentitySource
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.externalDomainFederation");
    }

    /**
    * Gets the displayName
    * The name of the identity source, typically also the domain name. Read only.
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
    * The name of the identity source, typically also the domain name. Read only.
    *
    * @param string $val The value of the displayName
    *
    * @return ExternalDomainFederation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the domainName
    * The domain name. Read only.
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domainName
    * The domain name. Read only.
    *
    * @param string $val The value of the domainName
    *
    * @return ExternalDomainFederation
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    /**
    * Gets the issuerUri
    * The issuerURI of the incoming federation. Read only.
    *
    * @return string The issuerUri
    */
    public function getIssuerUri()
    {
        if (array_key_exists("issuerUri", $this->_propDict)) {
            return $this->_propDict["issuerUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerUri
    * The issuerURI of the incoming federation. Read only.
    *
    * @param string $val The value of the issuerUri
    *
    * @return ExternalDomainFederation
    */
    public function setIssuerUri($val)
    {
        $this->_propDict["issuerUri"] = $val;
        return $this;
    }
}
