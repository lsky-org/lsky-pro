<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewInstanceDecisionItemServicePrincipalTarget File
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
* AccessReviewInstanceDecisionItemServicePrincipalTarget class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewInstanceDecisionItemServicePrincipalTarget extends AccessReviewInstanceDecisionItemTarget
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.accessReviewInstanceDecisionItemServicePrincipalTarget");
    }

    /**
    * Gets the appId
    * The appId for the service principal entity being reviewed.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * The appId for the service principal entity being reviewed.
    *
    * @param string $val The value of the appId
    *
    * @return AccessReviewInstanceDecisionItemServicePrincipalTarget
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalDisplayName
    * The display name of the service principal whose access is being reviewed.
    *
    * @return string The servicePrincipalDisplayName
    */
    public function getServicePrincipalDisplayName()
    {
        if (array_key_exists("servicePrincipalDisplayName", $this->_propDict)) {
            return $this->_propDict["servicePrincipalDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalDisplayName
    * The display name of the service principal whose access is being reviewed.
    *
    * @param string $val The value of the servicePrincipalDisplayName
    *
    * @return AccessReviewInstanceDecisionItemServicePrincipalTarget
    */
    public function setServicePrincipalDisplayName($val)
    {
        $this->_propDict["servicePrincipalDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the servicePrincipalId
    *
    * @return string The servicePrincipalId
    */
    public function getServicePrincipalId()
    {
        if (array_key_exists("servicePrincipalId", $this->_propDict)) {
            return $this->_propDict["servicePrincipalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servicePrincipalId
    *
    * @param string $val The value of the servicePrincipalId
    *
    * @return AccessReviewInstanceDecisionItemServicePrincipalTarget
    */
    public function setServicePrincipalId($val)
    {
        $this->_propDict["servicePrincipalId"] = $val;
        return $this;
    }
}
