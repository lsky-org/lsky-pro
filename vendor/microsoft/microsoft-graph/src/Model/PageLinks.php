<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PageLinks File
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
* PageLinks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PageLinks extends Entity
{

    /**
    * Gets the oneNoteClientUrl
    * Opens the page in the OneNote native client if it's installed.
    *
    * @return ExternalLink The oneNoteClientUrl
    */
    public function getOneNoteClientUrl()
    {
        if (array_key_exists("oneNoteClientUrl", $this->_propDict)) {
            if (is_a($this->_propDict["oneNoteClientUrl"], "\Microsoft\Graph\Model\ExternalLink")) {
                return $this->_propDict["oneNoteClientUrl"];
            } else {
                $this->_propDict["oneNoteClientUrl"] = new ExternalLink($this->_propDict["oneNoteClientUrl"]);
                return $this->_propDict["oneNoteClientUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the oneNoteClientUrl
    * Opens the page in the OneNote native client if it's installed.
    *
    * @param ExternalLink $val The value to assign to the oneNoteClientUrl
    *
    * @return PageLinks The PageLinks
    */
    public function setOneNoteClientUrl($val)
    {
        $this->_propDict["oneNoteClientUrl"] = $val;
         return $this;
    }

    /**
    * Gets the oneNoteWebUrl
    * Opens the page in OneNote on the web.
    *
    * @return ExternalLink The oneNoteWebUrl
    */
    public function getOneNoteWebUrl()
    {
        if (array_key_exists("oneNoteWebUrl", $this->_propDict)) {
            if (is_a($this->_propDict["oneNoteWebUrl"], "\Microsoft\Graph\Model\ExternalLink")) {
                return $this->_propDict["oneNoteWebUrl"];
            } else {
                $this->_propDict["oneNoteWebUrl"] = new ExternalLink($this->_propDict["oneNoteWebUrl"]);
                return $this->_propDict["oneNoteWebUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the oneNoteWebUrl
    * Opens the page in OneNote on the web.
    *
    * @param ExternalLink $val The value to assign to the oneNoteWebUrl
    *
    * @return PageLinks The PageLinks
    */
    public function setOneNoteWebUrl($val)
    {
        $this->_propDict["oneNoteWebUrl"] = $val;
         return $this;
    }
}
