<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppLogCollectionDownloadDetails File
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
* AppLogCollectionDownloadDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppLogCollectionDownloadDetails extends Entity
{

    /**
    * Gets the appLogDecryptionAlgorithm
    * DecryptionAlgorithm for Content. Possible values are: aes256.
    *
    * @return AppLogDecryptionAlgorithm The appLogDecryptionAlgorithm
    */
    public function getAppLogDecryptionAlgorithm()
    {
        if (array_key_exists("appLogDecryptionAlgorithm", $this->_propDict)) {
            if (is_a($this->_propDict["appLogDecryptionAlgorithm"], "\Beta\Microsoft\Graph\Model\AppLogDecryptionAlgorithm")) {
                return $this->_propDict["appLogDecryptionAlgorithm"];
            } else {
                $this->_propDict["appLogDecryptionAlgorithm"] = new AppLogDecryptionAlgorithm($this->_propDict["appLogDecryptionAlgorithm"]);
                return $this->_propDict["appLogDecryptionAlgorithm"];
            }
        }
        return null;
    }

    /**
    * Sets the appLogDecryptionAlgorithm
    * DecryptionAlgorithm for Content. Possible values are: aes256.
    *
    * @param AppLogDecryptionAlgorithm $val The value to assign to the appLogDecryptionAlgorithm
    *
    * @return AppLogCollectionDownloadDetails The AppLogCollectionDownloadDetails
    */
    public function setAppLogDecryptionAlgorithm($val)
    {
        $this->_propDict["appLogDecryptionAlgorithm"] = $val;
         return $this;
    }
    /**
    * Gets the decryptionKey
    * DecryptionKey as string
    *
    * @return string The decryptionKey
    */
    public function getDecryptionKey()
    {
        if (array_key_exists("decryptionKey", $this->_propDict)) {
            return $this->_propDict["decryptionKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decryptionKey
    * DecryptionKey as string
    *
    * @param string $val The value of the decryptionKey
    *
    * @return AppLogCollectionDownloadDetails
    */
    public function setDecryptionKey($val)
    {
        $this->_propDict["decryptionKey"] = $val;
        return $this;
    }
    /**
    * Gets the downloadUrl
    * Download SAS Url for completed AppLogUploadRequest
    *
    * @return string The downloadUrl
    */
    public function getDownloadUrl()
    {
        if (array_key_exists("downloadUrl", $this->_propDict)) {
            return $this->_propDict["downloadUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the downloadUrl
    * Download SAS Url for completed AppLogUploadRequest
    *
    * @param string $val The value of the downloadUrl
    *
    * @return AppLogCollectionDownloadDetails
    */
    public function setDownloadUrl($val)
    {
        $this->_propDict["downloadUrl"] = $val;
        return $this;
    }
}
