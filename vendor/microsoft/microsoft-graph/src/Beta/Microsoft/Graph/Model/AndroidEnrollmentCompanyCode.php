<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidEnrollmentCompanyCode File
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
* AndroidEnrollmentCompanyCode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidEnrollmentCompanyCode extends Entity
{
    /**
    * Gets the enrollmentToken
    * Enrollment Token used by the User to enroll their device.
    *
    * @return string The enrollmentToken
    */
    public function getEnrollmentToken()
    {
        if (array_key_exists("enrollmentToken", $this->_propDict)) {
            return $this->_propDict["enrollmentToken"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enrollmentToken
    * Enrollment Token used by the User to enroll their device.
    *
    * @param string $val The value of the enrollmentToken
    *
    * @return AndroidEnrollmentCompanyCode
    */
    public function setEnrollmentToken($val)
    {
        $this->_propDict["enrollmentToken"] = $val;
        return $this;
    }
    /**
    * Gets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @return string The qrCodeContent
    */
    public function getQrCodeContent()
    {
        if (array_key_exists("qrCodeContent", $this->_propDict)) {
            return $this->_propDict["qrCodeContent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qrCodeContent
    * String used to generate a QR code for the token.
    *
    * @param string $val The value of the qrCodeContent
    *
    * @return AndroidEnrollmentCompanyCode
    */
    public function setQrCodeContent($val)
    {
        $this->_propDict["qrCodeContent"] = $val;
        return $this;
    }

    /**
    * Gets the qrCodeImage
    * Generated QR code for the token.
    *
    * @return MimeContent The qrCodeImage
    */
    public function getQrCodeImage()
    {
        if (array_key_exists("qrCodeImage", $this->_propDict)) {
            if (is_a($this->_propDict["qrCodeImage"], "\Beta\Microsoft\Graph\Model\MimeContent")) {
                return $this->_propDict["qrCodeImage"];
            } else {
                $this->_propDict["qrCodeImage"] = new MimeContent($this->_propDict["qrCodeImage"]);
                return $this->_propDict["qrCodeImage"];
            }
        }
        return null;
    }

    /**
    * Sets the qrCodeImage
    * Generated QR code for the token.
    *
    * @param MimeContent $val The value to assign to the qrCodeImage
    *
    * @return AndroidEnrollmentCompanyCode The AndroidEnrollmentCompanyCode
    */
    public function setQrCodeImage($val)
    {
        $this->_propDict["qrCodeImage"] = $val;
         return $this;
    }
}
