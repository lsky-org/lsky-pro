<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivacyProfile File
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
* PrivacyProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivacyProfile extends Entity
{
    /**
    * Gets the contactEmail
    * A valid smtp email address for the privacy statement contact. Not required.
    *
    * @return string The contactEmail
    */
    public function getContactEmail()
    {
        if (array_key_exists("contactEmail", $this->_propDict)) {
            return $this->_propDict["contactEmail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contactEmail
    * A valid smtp email address for the privacy statement contact. Not required.
    *
    * @param string $val The value of the contactEmail
    *
    * @return PrivacyProfile
    */
    public function setContactEmail($val)
    {
        $this->_propDict["contactEmail"] = $val;
        return $this;
    }
    /**
    * Gets the statementUrl
    * A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required.
    *
    * @return string The statementUrl
    */
    public function getStatementUrl()
    {
        if (array_key_exists("statementUrl", $this->_propDict)) {
            return $this->_propDict["statementUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the statementUrl
    * A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required.
    *
    * @param string $val The value of the statementUrl
    *
    * @return PrivacyProfile
    */
    public function setStatementUrl($val)
    {
        $this->_propDict["statementUrl"] = $val;
        return $this;
    }
}
