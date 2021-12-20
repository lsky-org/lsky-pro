<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenotePagePreview File
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
* OnenotePagePreview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenotePagePreview extends Entity
{

    /**
    * Gets the links
    *
    * @return OnenotePagePreviewLinks The links
    */
    public function getLinks()
    {
        if (array_key_exists("links", $this->_propDict)) {
            if (is_a($this->_propDict["links"], "\Beta\Microsoft\Graph\Model\OnenotePagePreviewLinks")) {
                return $this->_propDict["links"];
            } else {
                $this->_propDict["links"] = new OnenotePagePreviewLinks($this->_propDict["links"]);
                return $this->_propDict["links"];
            }
        }
        return null;
    }

    /**
    * Sets the links
    *
    * @param OnenotePagePreviewLinks $val The value to assign to the links
    *
    * @return OnenotePagePreview The OnenotePagePreview
    */
    public function setLinks($val)
    {
        $this->_propDict["links"] = $val;
         return $this;
    }
    /**
    * Gets the previewText
    *
    * @return string The previewText
    */
    public function getPreviewText()
    {
        if (array_key_exists("previewText", $this->_propDict)) {
            return $this->_propDict["previewText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the previewText
    *
    * @param string $val The value of the previewText
    *
    * @return OnenotePagePreview
    */
    public function setPreviewText($val)
    {
        $this->_propDict["previewText"] = $val;
        return $this;
    }
}
