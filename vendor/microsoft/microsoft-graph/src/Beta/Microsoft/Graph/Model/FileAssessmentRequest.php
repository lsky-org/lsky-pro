<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FileAssessmentRequest File
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
* FileAssessmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FileAssessmentRequest extends ThreatAssessmentRequest
{
    /**
    * Gets the contentData
    * Base64 encoded file content. The file content cannot fetch back because it isn't stored.
    *
    * @return string The contentData
    */
    public function getContentData()
    {
        if (array_key_exists("contentData", $this->_propDict)) {
            return $this->_propDict["contentData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentData
    * Base64 encoded file content. The file content cannot fetch back because it isn't stored.
    *
    * @param string $val The contentData
    *
    * @return FileAssessmentRequest
    */
    public function setContentData($val)
    {
        $this->_propDict["contentData"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    * The file name.
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
    * The file name.
    *
    * @param string $val The fileName
    *
    * @return FileAssessmentRequest
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
}
