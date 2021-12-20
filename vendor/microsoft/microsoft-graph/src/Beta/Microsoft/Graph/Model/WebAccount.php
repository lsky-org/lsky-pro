<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WebAccount File
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
* WebAccount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WebAccount extends ItemFacet
{
    /**
    * Gets the description
    * Contains the description the user has provided for the account on the service being referenced.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Contains the description the user has provided for the account on the service being referenced.
    *
    * @param string $val The description
    *
    * @return WebAccount
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the service
    * Contains basic detail about the service that is being associated.
    *
    * @return ServiceInformation The service
    */
    public function getService()
    {
        if (array_key_exists("service", $this->_propDict)) {
            if (is_a($this->_propDict["service"], "\Beta\Microsoft\Graph\Model\ServiceInformation")) {
                return $this->_propDict["service"];
            } else {
                $this->_propDict["service"] = new ServiceInformation($this->_propDict["service"]);
                return $this->_propDict["service"];
            }
        }
        return null;
    }
    
    /**
    * Sets the service
    * Contains basic detail about the service that is being associated.
    *
    * @param ServiceInformation $val The service
    *
    * @return WebAccount
    */
    public function setService($val)
    {
        $this->_propDict["service"] = $val;
        return $this;
    }
    
    /**
    * Gets the statusMessage
    * Contains a status message from the cloud service if provided or synchronized.
    *
    * @return string The statusMessage
    */
    public function getStatusMessage()
    {
        if (array_key_exists("statusMessage", $this->_propDict)) {
            return $this->_propDict["statusMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the statusMessage
    * Contains a status message from the cloud service if provided or synchronized.
    *
    * @param string $val The statusMessage
    *
    * @return WebAccount
    */
    public function setStatusMessage($val)
    {
        $this->_propDict["statusMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the thumbnailUrl
    *
    * @return string The thumbnailUrl
    */
    public function getThumbnailUrl()
    {
        if (array_key_exists("thumbnailUrl", $this->_propDict)) {
            return $this->_propDict["thumbnailUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the thumbnailUrl
    *
    * @param string $val The thumbnailUrl
    *
    * @return WebAccount
    */
    public function setThumbnailUrl($val)
    {
        $this->_propDict["thumbnailUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The user name  displayed for the webaccount.
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * The user name  displayed for the webaccount.
    *
    * @param string $val The userId
    *
    * @return WebAccount
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    * Contains a link to the user's profile on the cloud service if one exists.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    * Contains a link to the user's profile on the cloud service if one exists.
    *
    * @param string $val The webUrl
    *
    * @return WebAccount
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}
