<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UploadSession File
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
* UploadSession class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UploadSession extends Entity
{

    /**
    * Gets the expirationDateTime
    * The date and time in UTC that the upload session will expire. The complete file must be uploaded before this expiration time is reached.
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
    * The date and time in UTC that the upload session will expire. The complete file must be uploaded before this expiration time is reached.
    *
    * @param \DateTime $val The value to assign to the expirationDateTime
    *
    * @return UploadSession The UploadSession
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the nextExpectedRanges
    * When uploading files to document libraries, this is a collection of byte ranges that the server is missing for the file. These ranges are zero-indexed and of the format, '{start}-{end}' (e.g. '0-26' to indicate the first 27 bytes of the file). When uploading files as Outlook attachments, instead of a collection of ranges, this property always indicates a single value '{start}', the location in the file where the next upload should begin.
    *
    * @return string The nextExpectedRanges
    */
    public function getNextExpectedRanges()
    {
        if (array_key_exists("nextExpectedRanges", $this->_propDict)) {
            return $this->_propDict["nextExpectedRanges"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nextExpectedRanges
    * When uploading files to document libraries, this is a collection of byte ranges that the server is missing for the file. These ranges are zero-indexed and of the format, '{start}-{end}' (e.g. '0-26' to indicate the first 27 bytes of the file). When uploading files as Outlook attachments, instead of a collection of ranges, this property always indicates a single value '{start}', the location in the file where the next upload should begin.
    *
    * @param string $val The value of the nextExpectedRanges
    *
    * @return UploadSession
    */
    public function setNextExpectedRanges($val)
    {
        $this->_propDict["nextExpectedRanges"] = $val;
        return $this;
    }
    /**
    * Gets the uploadUrl
    * The URL endpoint that accepts PUT requests for byte ranges of the file.
    *
    * @return string The uploadUrl
    */
    public function getUploadUrl()
    {
        if (array_key_exists("uploadUrl", $this->_propDict)) {
            return $this->_propDict["uploadUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uploadUrl
    * The URL endpoint that accepts PUT requests for byte ranges of the file.
    *
    * @param string $val The value of the uploadUrl
    *
    * @return UploadSession
    */
    public function setUploadUrl($val)
    {
        $this->_propDict["uploadUrl"] = $val;
        return $this;
    }
}
