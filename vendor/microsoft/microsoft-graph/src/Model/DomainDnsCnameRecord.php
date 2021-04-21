<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsCnameRecord File
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
* DomainDnsCnameRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainDnsCnameRecord extends DomainDnsRecord
{
    /**
    * Gets the canonicalName
    * The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
    *
    * @return string The canonicalName
    */
    public function getCanonicalName()
    {
        if (array_key_exists("canonicalName", $this->_propDict)) {
            return $this->_propDict["canonicalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canonicalName
    * The canonical name of the CNAME record. Used to configure the CNAME record at the DNS host.
    *
    * @param string $val The canonicalName
    *
    * @return DomainDnsCnameRecord
    */
    public function setCanonicalName($val)
    {
        $this->_propDict["canonicalName"] = $val;
        return $this;
    }
    
}
