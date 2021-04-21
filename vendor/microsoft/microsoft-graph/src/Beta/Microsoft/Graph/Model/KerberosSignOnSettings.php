<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KerberosSignOnSettings File
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
* KerberosSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KerberosSignOnSettings extends Entity
{
    /**
    * Gets the kerberosServicePrincipalName
    * The Internal Application SPN of the application server. This SPN needs to be in the list of services to which the connector can present delegated credentials.
    *
    * @return string The kerberosServicePrincipalName
    */
    public function getKerberosServicePrincipalName()
    {
        if (array_key_exists("kerberosServicePrincipalName", $this->_propDict)) {
            return $this->_propDict["kerberosServicePrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kerberosServicePrincipalName
    * The Internal Application SPN of the application server. This SPN needs to be in the list of services to which the connector can present delegated credentials.
    *
    * @param string $val The value of the kerberosServicePrincipalName
    *
    * @return KerberosSignOnSettings
    */
    public function setKerberosServicePrincipalName($val)
    {
        $this->_propDict["kerberosServicePrincipalName"] = $val;
        return $this;
    }

    /**
    * Gets the kerberosSignOnMappingAttributeType
    * The Delegated Login Identity for the connector to use on behalf of your users. For more information, see Working with different on-premises and cloud identities . Possible values are: userPrincipalName, onPremisesUserPrincipalName, userPrincipalUsername, onPremisesUserPrincipalUsername, onPremisesSAMAccountName.
    *
    * @return KerberosSignOnMappingAttributeType The kerberosSignOnMappingAttributeType
    */
    public function getKerberosSignOnMappingAttributeType()
    {
        if (array_key_exists("kerberosSignOnMappingAttributeType", $this->_propDict)) {
            if (is_a($this->_propDict["kerberosSignOnMappingAttributeType"], "\Beta\Microsoft\Graph\Model\KerberosSignOnMappingAttributeType")) {
                return $this->_propDict["kerberosSignOnMappingAttributeType"];
            } else {
                $this->_propDict["kerberosSignOnMappingAttributeType"] = new KerberosSignOnMappingAttributeType($this->_propDict["kerberosSignOnMappingAttributeType"]);
                return $this->_propDict["kerberosSignOnMappingAttributeType"];
            }
        }
        return null;
    }

    /**
    * Sets the kerberosSignOnMappingAttributeType
    * The Delegated Login Identity for the connector to use on behalf of your users. For more information, see Working with different on-premises and cloud identities . Possible values are: userPrincipalName, onPremisesUserPrincipalName, userPrincipalUsername, onPremisesUserPrincipalUsername, onPremisesSAMAccountName.
    *
    * @param KerberosSignOnMappingAttributeType $val The value to assign to the kerberosSignOnMappingAttributeType
    *
    * @return KerberosSignOnSettings The KerberosSignOnSettings
    */
    public function setKerberosSignOnMappingAttributeType($val)
    {
        $this->_propDict["kerberosSignOnMappingAttributeType"] = $val;
         return $this;
    }
}
