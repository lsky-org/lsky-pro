<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Contract File
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
* Contract class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Contract extends DirectoryObject
{
    /**
    * Gets the contractType
    * Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
    *
    * @return string The contractType
    */
    public function getContractType()
    {
        if (array_key_exists("contractType", $this->_propDict)) {
            return $this->_propDict["contractType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contractType
    * Type of contract. Possible values are:  SyndicationPartner, BreadthPartner, ResellerPartner. See more in the table below.
    *
    * @param string $val The contractType
    *
    * @return Contract
    */
    public function setContractType($val)
    {
        $this->_propDict["contractType"] = $val;
        return $this;
    }
    
    /**
    * Gets the customerId
    * The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
    *
    * @return string The customerId
    */
    public function getCustomerId()
    {
        if (array_key_exists("customerId", $this->_propDict)) {
            return $this->_propDict["customerId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the customerId
    * The unique identifier for the customer tenant referenced by this partnership. Corresponds to the id property of the customer tenant's organization resource.
    *
    * @param string $val The customerId
    *
    * @return Contract
    */
    public function setCustomerId($val)
    {
        $this->_propDict["customerId"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDomainName
    * A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's default domain name changes.
    *
    * @return string The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultDomainName
    * A copy of the customer tenant's default domain name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's default domain name changes.
    *
    * @param string $val The defaultDomainName
    *
    * @return Contract
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
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
    * A copy of the customer tenant's display name. The copy is made when the partnership with the customer is established. It is not automatically updated if the customer tenant's display name changes.
    *
    * @param string $val The displayName
    *
    * @return Contract
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
}
