<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyUploadedLanguageFile File
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
* GroupPolicyUploadedLanguageFile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyUploadedLanguageFile extends Entity
{

    /**
    * Gets the content
    * The contents of the uploaded ADML file.
    *
    * @return \GuzzleHttp\Psr7\Stream The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }

    /**
    * Sets the content
    * The contents of the uploaded ADML file.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the content
    *
    * @return GroupPolicyUploadedLanguageFile The GroupPolicyUploadedLanguageFile
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
         return $this;
    }
    /**
    * Gets the fileName
    * The file name of the uploaded ADML file.
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fileName
    * The file name of the uploaded ADML file.
    *
    * @param string $val The value of the fileName
    *
    * @return GroupPolicyUploadedLanguageFile
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    /**
    * Gets the id
    * Key of the entity.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Key of the entity.
    *
    * @param string $val The value of the id
    *
    * @return GroupPolicyUploadedLanguageFile
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the languageCode
    * The language code of the uploaded ADML file.
    *
    * @return string The languageCode
    */
    public function getLanguageCode()
    {
        if (array_key_exists("languageCode", $this->_propDict)) {
            return $this->_propDict["languageCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageCode
    * The language code of the uploaded ADML file.
    *
    * @param string $val The value of the languageCode
    *
    * @return GroupPolicyUploadedLanguageFile
    */
    public function setLanguageCode($val)
    {
        $this->_propDict["languageCode"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    * The date and time the entity was last modified.
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
    * The date and time the entity was last modified.
    *
    * @param \DateTime $val The value to assign to the lastModifiedDateTime
    *
    * @return GroupPolicyUploadedLanguageFile The GroupPolicyUploadedLanguageFile
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
         return $this;
    }
}
