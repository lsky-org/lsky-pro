<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserConsentRequest File
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
* UserConsentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserConsentRequest extends Request
{
    /**
    * Gets the reason
    * The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
    *
    * @return string The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reason
    * The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
    *
    * @param string $val The reason
    *
    * @return UserConsentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
    
    /**
    * Gets the approval
    * Approval decisions associated with a request.
    *
    * @return Approval The approval
    */
    public function getApproval()
    {
        if (array_key_exists("approval", $this->_propDict)) {
            if (is_a($this->_propDict["approval"], "\Microsoft\Graph\Model\Approval")) {
                return $this->_propDict["approval"];
            } else {
                $this->_propDict["approval"] = new Approval($this->_propDict["approval"]);
                return $this->_propDict["approval"];
            }
        }
        return null;
    }
    
    /**
    * Sets the approval
    * Approval decisions associated with a request.
    *
    * @param Approval $val The approval
    *
    * @return UserConsentRequest
    */
    public function setApproval($val)
    {
        $this->_propDict["approval"] = $val;
        return $this;
    }
    
}
