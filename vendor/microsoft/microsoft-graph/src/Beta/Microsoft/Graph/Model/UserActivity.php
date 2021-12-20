<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserActivity File
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
* UserActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserActivity extends Entity
{
    /**
    * Gets the activationUrl
    * Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
    *
    * @return string The activationUrl
    */
    public function getActivationUrl()
    {
        if (array_key_exists("activationUrl", $this->_propDict)) {
            return $this->_propDict["activationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activationUrl
    * Required. URL used to launch the activity in the best native experience represented by the appId. Might launch a web-based app if no native app exists.
    *
    * @param string $val The activationUrl
    *
    * @return UserActivity
    */
    public function setActivationUrl($val)
    {
        $this->_propDict["activationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the activitySourceHost
    * Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
    *
    * @return string The activitySourceHost
    */
    public function getActivitySourceHost()
    {
        if (array_key_exists("activitySourceHost", $this->_propDict)) {
            return $this->_propDict["activitySourceHost"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activitySourceHost
    * Required. URL for the domain representing the cross-platform identity mapping for the app. Mapping is stored either as a JSON file hosted on the domain or configurable via Windows Dev Center. The JSON file is named cross-platform-app-identifiers and is hosted at root of your HTTPS domain, either at the top level domain or include a sub domain. For example: https://contoso.com or https://myapp.contoso.com but NOT https://myapp.contoso.com/somepath. You must have a unique file and domain (or sub domain) per cross-platform app identity. For example, a separate file and domain is needed for Word vs. PowerPoint.
    *
    * @param string $val The activitySourceHost
    *
    * @return UserActivity
    */
    public function setActivitySourceHost($val)
    {
        $this->_propDict["activitySourceHost"] = $val;
        return $this;
    }
    
    /**
    * Gets the appActivityId
    * Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
    *
    * @return string The appActivityId
    */
    public function getAppActivityId()
    {
        if (array_key_exists("appActivityId", $this->_propDict)) {
            return $this->_propDict["appActivityId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appActivityId
    * Required. The unique activity ID in the context of the app - supplied by caller and immutable thereafter.
    *
    * @param string $val The appActivityId
    *
    * @return UserActivity
    */
    public function setAppActivityId($val)
    {
        $this->_propDict["appActivityId"] = $val;
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
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
    * Optional. Short text description of the app used to generate the activity for use in cases when the app is not installed on the user’s local device.
    *
    * @param string $val The appDisplayName
    *
    * @return UserActivity
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentInfo
    * Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
    *
    * @return string The contentInfo
    */
    public function getContentInfo()
    {
        if (array_key_exists("contentInfo", $this->_propDict)) {
            return $this->_propDict["contentInfo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentInfo
    * Optional. A custom piece of data - JSON-LD extensible description of content according to schema.org syntax.
    *
    * @param string $val The contentInfo
    *
    * @return UserActivity
    */
    public function setContentInfo($val)
    {
        $this->_propDict["contentInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the contentUrl
    * Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentUrl
    * Optional. Used in the event the content can be rendered outside of a native or web-based app experience (for example, a pointer to an item in an RSS feed).
    *
    * @param string $val The contentUrl
    *
    * @return UserActivity
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Set by the server. DateTime in UTC when the object was created on the server.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Set by the server. DateTime in UTC when the object was created on the server.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserActivity
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Set by the server. DateTime in UTC when the object expired on the server.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * Set by the server. DateTime in UTC when the object expired on the server.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return UserActivity
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fallbackUrl
    * Optional. URL used to launch the activity in a web-based app, if available.
    *
    * @return string The fallbackUrl
    */
    public function getFallbackUrl()
    {
        if (array_key_exists("fallbackUrl", $this->_propDict)) {
            return $this->_propDict["fallbackUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fallbackUrl
    * Optional. URL used to launch the activity in a web-based app, if available.
    *
    * @param string $val The fallbackUrl
    *
    * @return UserActivity
    */
    public function setFallbackUrl($val)
    {
        $this->_propDict["fallbackUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Set by the server. DateTime in UTC when the object was modified on the server.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Set by the server. DateTime in UTC when the object was modified on the server.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return UserActivity
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    *
    * @return Status The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\Status")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new Status($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Set by the server. A status code used to identify valid objects. Values: active, updated, deleted, ignored.
    *
    * @param Status $val The status
    *
    * @return UserActivity
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the userTimezone
    * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
    *
    * @return string The userTimezone
    */
    public function getUserTimezone()
    {
        if (array_key_exists("userTimezone", $this->_propDict)) {
            return $this->_propDict["userTimezone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userTimezone
    * Optional. The timezone in which the user's device used to generate the activity was located at activity creation time; values supplied as Olson IDs in order to support cross-platform representation.
    *
    * @param string $val The userTimezone
    *
    * @return UserActivity
    */
    public function setUserTimezone($val)
    {
        $this->_propDict["userTimezone"] = $val;
        return $this;
    }
    
    /**
    * Gets the visualElements
    * Required. The object containing information to render the activity in the UX.
    *
    * @return VisualInfo The visualElements
    */
    public function getVisualElements()
    {
        if (array_key_exists("visualElements", $this->_propDict)) {
            if (is_a($this->_propDict["visualElements"], "\Beta\Microsoft\Graph\Model\VisualInfo")) {
                return $this->_propDict["visualElements"];
            } else {
                $this->_propDict["visualElements"] = new VisualInfo($this->_propDict["visualElements"]);
                return $this->_propDict["visualElements"];
            }
        }
        return null;
    }
    
    /**
    * Sets the visualElements
    * Required. The object containing information to render the activity in the UX.
    *
    * @param VisualInfo $val The visualElements
    *
    * @return UserActivity
    */
    public function setVisualElements($val)
    {
        $this->_propDict["visualElements"] = $val;
        return $this;
    }
    

     /** 
     * Gets the historyItems
    * Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
     *
     * @return array The historyItems
     */
    public function getHistoryItems()
    {
        if (array_key_exists("historyItems", $this->_propDict)) {
           return $this->_propDict["historyItems"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the historyItems
    * Optional. NavigationProperty/Containment; navigation property to the activity's historyItems.
    *
    * @param ActivityHistoryItem $val The historyItems
    *
    * @return UserActivity
    */
    public function setHistoryItems($val)
    {
		$this->_propDict["historyItems"] = $val;
        return $this;
    }
    
}
