<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppConsentApprovalRoute File
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
* AppConsentApprovalRoute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppConsentApprovalRoute extends Entity
{

     /** 
     * Gets the appConsentRequests
     *
     * @return array The appConsentRequests
     */
    public function getAppConsentRequests()
    {
        if (array_key_exists("appConsentRequests", $this->_propDict)) {
           return $this->_propDict["appConsentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appConsentRequests
    *
    * @param AppConsentRequest $val The appConsentRequests
    *
    * @return AppConsentApprovalRoute
    */
    public function setAppConsentRequests($val)
    {
		$this->_propDict["appConsentRequests"] = $val;
        return $this;
    }
    
}
