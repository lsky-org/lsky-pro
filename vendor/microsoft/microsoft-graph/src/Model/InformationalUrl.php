<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationalUrl File
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
* InformationalUrl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationalUrl extends Entity
{
    /**
    * Gets the logoUrl
    * CDN URL to the application's logo, Read-only.
    *
    * @return string The logoUrl
    */
    public function getLogoUrl()
    {
        if (array_key_exists("logoUrl", $this->_propDict)) {
            return $this->_propDict["logoUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the logoUrl
    * CDN URL to the application's logo, Read-only.
    *
    * @param string $val The value of the logoUrl
    *
    * @return InformationalUrl
    */
    public function setLogoUrl($val)
    {
        $this->_propDict["logoUrl"] = $val;
        return $this;
    }
    /**
    * Gets the marketingUrl
    * Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
    *
    * @return string The marketingUrl
    */
    public function getMarketingUrl()
    {
        if (array_key_exists("marketingUrl", $this->_propDict)) {
            return $this->_propDict["marketingUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the marketingUrl
    * Link to the application's marketing page. For example, https://www.contoso.com/app/marketing
    *
    * @param string $val The value of the marketingUrl
    *
    * @return InformationalUrl
    */
    public function setMarketingUrl($val)
    {
        $this->_propDict["marketingUrl"] = $val;
        return $this;
    }
    /**
    * Gets the privacyStatementUrl
    * Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
    *
    * @return string The privacyStatementUrl
    */
    public function getPrivacyStatementUrl()
    {
        if (array_key_exists("privacyStatementUrl", $this->_propDict)) {
            return $this->_propDict["privacyStatementUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privacyStatementUrl
    * Link to the application's privacy statement. For example, https://www.contoso.com/app/privacy
    *
    * @param string $val The value of the privacyStatementUrl
    *
    * @return InformationalUrl
    */
    public function setPrivacyStatementUrl($val)
    {
        $this->_propDict["privacyStatementUrl"] = $val;
        return $this;
    }
    /**
    * Gets the supportUrl
    * Link to the application's support page. For example, https://www.contoso.com/app/support
    *
    * @return string The supportUrl
    */
    public function getSupportUrl()
    {
        if (array_key_exists("supportUrl", $this->_propDict)) {
            return $this->_propDict["supportUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportUrl
    * Link to the application's support page. For example, https://www.contoso.com/app/support
    *
    * @param string $val The value of the supportUrl
    *
    * @return InformationalUrl
    */
    public function setSupportUrl($val)
    {
        $this->_propDict["supportUrl"] = $val;
        return $this;
    }
    /**
    * Gets the termsOfServiceUrl
    * Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
    *
    * @return string The termsOfServiceUrl
    */
    public function getTermsOfServiceUrl()
    {
        if (array_key_exists("termsOfServiceUrl", $this->_propDict)) {
            return $this->_propDict["termsOfServiceUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the termsOfServiceUrl
    * Link to the application's terms of service statement. For example, https://www.contoso.com/app/termsofservice
    *
    * @param string $val The value of the termsOfServiceUrl
    *
    * @return InformationalUrl
    */
    public function setTermsOfServiceUrl($val)
    {
        $this->_propDict["termsOfServiceUrl"] = $val;
        return $this;
    }
}
