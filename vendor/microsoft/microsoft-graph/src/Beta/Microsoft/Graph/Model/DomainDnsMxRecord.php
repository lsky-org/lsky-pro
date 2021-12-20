<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsMxRecord File
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
* DomainDnsMxRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DomainDnsMxRecord extends DomainDnsRecord
{
    /**
    * Gets the mailExchange
    * Value used when configuring the answer/destination/value of the MX record at the DNS host.
    *
    * @return string The mailExchange
    */
    public function getMailExchange()
    {
        if (array_key_exists("mailExchange", $this->_propDict)) {
            return $this->_propDict["mailExchange"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailExchange
    * Value used when configuring the answer/destination/value of the MX record at the DNS host.
    *
    * @param string $val The mailExchange
    *
    * @return DomainDnsMxRecord
    */
    public function setMailExchange($val)
    {
        $this->_propDict["mailExchange"] = $val;
        return $this;
    }
    
    /**
    * Gets the preference
    * Value used when configuring the Preference/Priority property of the MX record at the DNS host.
    *
    * @return int The preference
    */
    public function getPreference()
    {
        if (array_key_exists("preference", $this->_propDict)) {
            return $this->_propDict["preference"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preference
    * Value used when configuring the Preference/Priority property of the MX record at the DNS host.
    *
    * @param int $val The preference
    *
    * @return DomainDnsMxRecord
    */
    public function setPreference($val)
    {
        $this->_propDict["preference"] = intval($val);
        return $this;
    }
    
}
