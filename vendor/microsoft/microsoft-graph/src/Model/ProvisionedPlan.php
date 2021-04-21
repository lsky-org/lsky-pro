<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisionedPlan File
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
* ProvisionedPlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisionedPlan extends Entity
{
    /**
    * Gets the capabilityStatus
    * For example, 'Enabled'.
    *
    * @return string The capabilityStatus
    */
    public function getCapabilityStatus()
    {
        if (array_key_exists("capabilityStatus", $this->_propDict)) {
            return $this->_propDict["capabilityStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the capabilityStatus
    * For example, 'Enabled'.
    *
    * @param string $val The value of the capabilityStatus
    *
    * @return ProvisionedPlan
    */
    public function setCapabilityStatus($val)
    {
        $this->_propDict["capabilityStatus"] = $val;
        return $this;
    }
    /**
    * Gets the provisioningStatus
    * For example, 'Success'.
    *
    * @return string The provisioningStatus
    */
    public function getProvisioningStatus()
    {
        if (array_key_exists("provisioningStatus", $this->_propDict)) {
            return $this->_propDict["provisioningStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the provisioningStatus
    * For example, 'Success'.
    *
    * @param string $val The value of the provisioningStatus
    *
    * @return ProvisionedPlan
    */
    public function setProvisioningStatus($val)
    {
        $this->_propDict["provisioningStatus"] = $val;
        return $this;
    }
    /**
    * Gets the service
    * The name of the service; for example, 'AccessControlS2S'
    *
    * @return string The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            return $this->_propDict["service"];
        } else {
            return null;
        }
    }

    /**
    * Sets the service
    * The name of the service; for example, 'AccessControlS2S'
    *
    * @param string $val The value of the service
    *
    * @return ProvisionedPlan
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
}
