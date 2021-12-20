<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MailSearchFolder File
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
* MailSearchFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MailSearchFolder extends MailFolder
{
    /**
    * Gets the filterQuery
    * The OData query to filter the messages.
    *
    * @return string The filterQuery
    */
    public function getFilterQuery()
    {
        if (array_key_exists("filterQuery", $this->_propDict)) {
            return $this->_propDict["filterQuery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filterQuery
    * The OData query to filter the messages.
    *
    * @param string $val The filterQuery
    *
    * @return MailSearchFolder
    */
    public function setFilterQuery($val)
    {
        $this->_propDict["filterQuery"] = $val;
        return $this;
    }
    
    /**
    * Gets the includeNestedFolders
    * Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
    *
    * @return bool The includeNestedFolders
    */
    public function getIncludeNestedFolders()
    {
        if (array_key_exists("includeNestedFolders", $this->_propDict)) {
            return $this->_propDict["includeNestedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includeNestedFolders
    * Indicates how the mailbox folder hierarchy should be traversed in the search. true means that a deep search should be done to include child folders in the hierarchy of each folder explicitly specified in sourceFolderIds. false means a shallow search of only each of the folders explicitly specified in sourceFolderIds.
    *
    * @param bool $val The includeNestedFolders
    *
    * @return MailSearchFolder
    */
    public function setIncludeNestedFolders($val)
    {
        $this->_propDict["includeNestedFolders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isSupported
    * Indicates whether a search folder is editable using REST APIs.
    *
    * @return bool The isSupported
    */
    public function getIsSupported()
    {
        if (array_key_exists("isSupported", $this->_propDict)) {
            return $this->_propDict["isSupported"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSupported
    * Indicates whether a search folder is editable using REST APIs.
    *
    * @param bool $val The isSupported
    *
    * @return MailSearchFolder
    */
    public function setIsSupported($val)
    {
        $this->_propDict["isSupported"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sourceFolderIds
    * The mailbox folders that should be mined.
    *
    * @return string The sourceFolderIds
    */
    public function getSourceFolderIds()
    {
        if (array_key_exists("sourceFolderIds", $this->_propDict)) {
            return $this->_propDict["sourceFolderIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sourceFolderIds
    * The mailbox folders that should be mined.
    *
    * @param string $val The sourceFolderIds
    *
    * @return MailSearchFolder
    */
    public function setSourceFolderIds($val)
    {
        $this->_propDict["sourceFolderIds"] = $val;
        return $this;
    }
    
}
