<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppConsentRequest File
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
* AppConsentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppConsentRequest extends Entity
{
    /**
    * Gets the appDisplayName
    * The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby.
    *
    * @param string $val The appDisplayName
    *
    * @return AppConsentRequest
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * The identifier of the application. Required. Supports $filter (eq only) and $orderby.
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
    * The identifier of the application. Required. Supports $filter (eq only) and $orderby.
    *
    * @param string $val The appId
    *
    * @return AppConsentRequest
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the pendingScopes
    * A list of pending scopes waiting for approval. This is empty if the consentType is Static. Required.
     *
     * @return array The pendingScopes
     */
    public function getPendingScopes()
    {
        if (array_key_exists("pendingScopes", $this->_propDict)) {
           return $this->_propDict["pendingScopes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the pendingScopes
    * A list of pending scopes waiting for approval. This is empty if the consentType is Static. Required.
    *
    * @param AppConsentRequestScope $val The pendingScopes
    *
    * @return AppConsentRequest
    */
    public function setPendingScopes($val)
    {
		$this->_propDict["pendingScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userConsentRequests
    * A list of pending user consent requests.
     *
     * @return array The userConsentRequests
     */
    public function getUserConsentRequests()
    {
        if (array_key_exists("userConsentRequests", $this->_propDict)) {
           return $this->_propDict["userConsentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userConsentRequests
    * A list of pending user consent requests.
    *
    * @param UserConsentRequest $val The userConsentRequests
    *
    * @return AppConsentRequest
    */
    public function setUserConsentRequests($val)
    {
		$this->_propDict["userConsentRequests"] = $val;
        return $this;
    }
    
}
