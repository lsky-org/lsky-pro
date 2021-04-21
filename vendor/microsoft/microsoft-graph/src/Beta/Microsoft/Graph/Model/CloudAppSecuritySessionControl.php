<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudAppSecuritySessionControl File
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
* CloudAppSecuritySessionControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudAppSecuritySessionControl extends ConditionalAccessSessionControl
{

    /**
    * Gets the cloudAppSecurityType
    * Possible values are: mcasConfigured, monitorOnly, blockDownloads. Learn more about these values here: https://docs.microsoft.com/cloud-app-security/proxy-deployment-aad#step-1-create-an-azure-ad-conditional-access-test-policy-
    *
    * @return CloudAppSecuritySessionControlType The cloudAppSecurityType
    */
    public function getCloudAppSecurityType()
    {
        if (array_key_exists("cloudAppSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["cloudAppSecurityType"], "\Beta\Microsoft\Graph\Model\CloudAppSecuritySessionControlType")) {
                return $this->_propDict["cloudAppSecurityType"];
            } else {
                $this->_propDict["cloudAppSecurityType"] = new CloudAppSecuritySessionControlType($this->_propDict["cloudAppSecurityType"]);
                return $this->_propDict["cloudAppSecurityType"];
            }
        }
        return null;
    }

    /**
    * Sets the cloudAppSecurityType
    * Possible values are: mcasConfigured, monitorOnly, blockDownloads. Learn more about these values here: https://docs.microsoft.com/cloud-app-security/proxy-deployment-aad#step-1-create-an-azure-ad-conditional-access-test-policy-
    *
    * @param CloudAppSecuritySessionControlType $val The value to assign to the cloudAppSecurityType
    *
    * @return CloudAppSecuritySessionControl The CloudAppSecuritySessionControl
    */
    public function setCloudAppSecurityType($val)
    {
        $this->_propDict["cloudAppSecurityType"] = $val;
         return $this;
    }
}
