<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EncryptionReportPolicyDetails File
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
* EncryptionReportPolicyDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EncryptionReportPolicyDetails extends Entity
{
    /**
    * Gets the policyId
    * Policy Id for Encryption Report
    *
    * @return string The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    * Policy Id for Encryption Report
    *
    * @param string $val The value of the policyId
    *
    * @return EncryptionReportPolicyDetails
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }
    /**
    * Gets the policyName
    * Policy Name for Encryption Report
    *
    * @return string The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    * Policy Name for Encryption Report
    *
    * @param string $val The value of the policyName
    *
    * @return EncryptionReportPolicyDetails
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }
}
