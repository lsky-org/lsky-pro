<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalBrandingProperties File
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
* OrganizationalBrandingProperties class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalBrandingProperties extends Entity
{
    /**
    * Gets the backgroundColor
    * Color that will appear in place of the background image in low-bandwidth connections. The primary color of your banner logo or your organization color is recommended to be used here. Specify this in hexadecimal (for example, white is #FFFFFF).
    *
    * @return string The backgroundColor
    */
    public function getBackgroundColor()
    {
        if (array_key_exists("backgroundColor", $this->_propDict)) {
            return $this->_propDict["backgroundColor"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the backgroundColor
    * Color that will appear in place of the background image in low-bandwidth connections. The primary color of your banner logo or your organization color is recommended to be used here. Specify this in hexadecimal (for example, white is #FFFFFF).
    *
    * @param string $val The backgroundColor
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBackgroundColor($val)
    {
        $this->_propDict["backgroundColor"] = $val;
        return $this;
    }
    
    /**
    * Gets the backgroundImage
    * Image that appears as the background of the sign in page. .png or .jpg not larger than 1920x1080 and smaller than 300kb. A smaller image will reduce bandwidth requirements and make page loads more performant.
    *
    * @return \GuzzleHttp\Psr7\Stream The backgroundImage
    */
    public function getBackgroundImage()
    {
        if (array_key_exists("backgroundImage", $this->_propDict)) {
            if (is_a($this->_propDict["backgroundImage"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["backgroundImage"];
            } else {
                $this->_propDict["backgroundImage"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["backgroundImage"]);
                return $this->_propDict["backgroundImage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the backgroundImage
    * Image that appears as the background of the sign in page. .png or .jpg not larger than 1920x1080 and smaller than 300kb. A smaller image will reduce bandwidth requirements and make page loads more performant.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The backgroundImage
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBackgroundImage($val)
    {
        $this->_propDict["backgroundImage"] = $val;
        return $this;
    }
    
    /**
    * Gets the bannerLogo
    * A banner version of your company logo which appears appears on the sign-in page. .png or .jpg no larger than 36x245px. We recommend using a transparent image with no padding around the logo.
    *
    * @return \GuzzleHttp\Psr7\Stream The bannerLogo
    */
    public function getBannerLogo()
    {
        if (array_key_exists("bannerLogo", $this->_propDict)) {
            if (is_a($this->_propDict["bannerLogo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["bannerLogo"];
            } else {
                $this->_propDict["bannerLogo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["bannerLogo"]);
                return $this->_propDict["bannerLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bannerLogo
    * A banner version of your company logo which appears appears on the sign-in page. .png or .jpg no larger than 36x245px. We recommend using a transparent image with no padding around the logo.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The bannerLogo
    *
    * @return OrganizationalBrandingProperties
    */
    public function setBannerLogo($val)
    {
        $this->_propDict["bannerLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInPageText
    * Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
    *
    * @return string The signInPageText
    */
    public function getSignInPageText()
    {
        if (array_key_exists("signInPageText", $this->_propDict)) {
            return $this->_propDict["signInPageText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInPageText
    * Text that appears at the bottom of the sign-in box. You can use this to communicate additional information, such as the phone number to your help desk or a legal statement. This text must be Unicode and not exceed 1024 characters.
    *
    * @param string $val The signInPageText
    *
    * @return OrganizationalBrandingProperties
    */
    public function setSignInPageText($val)
    {
        $this->_propDict["signInPageText"] = $val;
        return $this;
    }
    
    /**
    * Gets the squareLogo
    * Square version of your company logo. This appears in Windows 10 out-of-box (OOBE) experiences and when Windows Autopilot is enabled for deployment. .png or .jpg no larger than 240x240px and no more than 10kb in size. We recommend using a transparent image with no padding around the logo.
    *
    * @return \GuzzleHttp\Psr7\Stream The squareLogo
    */
    public function getSquareLogo()
    {
        if (array_key_exists("squareLogo", $this->_propDict)) {
            if (is_a($this->_propDict["squareLogo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["squareLogo"];
            } else {
                $this->_propDict["squareLogo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["squareLogo"]);
                return $this->_propDict["squareLogo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the squareLogo
    * Square version of your company logo. This appears in Windows 10 out-of-box (OOBE) experiences and when Windows Autopilot is enabled for deployment. .png or .jpg no larger than 240x240px and no more than 10kb in size. We recommend using a transparent image with no padding around the logo.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The squareLogo
    *
    * @return OrganizationalBrandingProperties
    */
    public function setSquareLogo($val)
    {
        $this->_propDict["squareLogo"] = $val;
        return $this;
    }
    
    /**
    * Gets the usernameHintText
    * String that shows as the hint in the username textbox on the sign in screen. This text must be Unicode, without links or code, and can't exceed 64 characters.
    *
    * @return string The usernameHintText
    */
    public function getUsernameHintText()
    {
        if (array_key_exists("usernameHintText", $this->_propDict)) {
            return $this->_propDict["usernameHintText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usernameHintText
    * String that shows as the hint in the username textbox on the sign in screen. This text must be Unicode, without links or code, and can't exceed 64 characters.
    *
    * @param string $val The usernameHintText
    *
    * @return OrganizationalBrandingProperties
    */
    public function setUsernameHintText($val)
    {
        $this->_propDict["usernameHintText"] = $val;
        return $this;
    }
    
}
