<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplicationServicePrincipal File
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
* ApplicationServicePrincipal class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplicationServicePrincipal extends Entity
{

    /**
    * Gets the application
    *
    * @return Application The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "\Beta\Microsoft\Graph\Model\Application")) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new Application($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }

    /**
    * Sets the application
    *
    * @param Application $val The value to assign to the application
    *
    * @return ApplicationServicePrincipal The ApplicationServicePrincipal
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
         return $this;
    }

    /**
    * Gets the servicePrincipal
    *
    * @return ServicePrincipal The servicePrincipal
    */
    public function getServicePrincipal()
    {
        if (array_key_exists("servicePrincipal", $this->_propDict)) {
            if (is_a($this->_propDict["servicePrincipal"], "\Beta\Microsoft\Graph\Model\ServicePrincipal")) {
                return $this->_propDict["servicePrincipal"];
            } else {
                $this->_propDict["servicePrincipal"] = new ServicePrincipal($this->_propDict["servicePrincipal"]);
                return $this->_propDict["servicePrincipal"];
            }
        }
        return null;
    }

    /**
    * Sets the servicePrincipal
    *
    * @param ServicePrincipal $val The value to assign to the servicePrincipal
    *
    * @return ApplicationServicePrincipal The ApplicationServicePrincipal
    */
    public function setServicePrincipal($val)
    {
        $this->_propDict["servicePrincipal"] = $val;
         return $this;
    }
}
