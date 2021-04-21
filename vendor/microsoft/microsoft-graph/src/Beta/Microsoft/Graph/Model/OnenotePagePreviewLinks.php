<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenotePagePreviewLinks File
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
* OnenotePagePreviewLinks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OnenotePagePreviewLinks extends Entity
{

    /**
    * Gets the previewImageUrl
    *
    * @return ExternalLink The previewImageUrl
    */
    public function getPreviewImageUrl()
    {
        if (array_key_exists("previewImageUrl", $this->_propDict)) {
            if (is_a($this->_propDict["previewImageUrl"], "\Beta\Microsoft\Graph\Model\ExternalLink")) {
                return $this->_propDict["previewImageUrl"];
            } else {
                $this->_propDict["previewImageUrl"] = new ExternalLink($this->_propDict["previewImageUrl"]);
                return $this->_propDict["previewImageUrl"];
            }
        }
        return null;
    }

    /**
    * Sets the previewImageUrl
    *
    * @param ExternalLink $val The value to assign to the previewImageUrl
    *
    * @return OnenotePagePreviewLinks The OnenotePagePreviewLinks
    */
    public function setPreviewImageUrl($val)
    {
        $this->_propDict["previewImageUrl"] = $val;
         return $this;
    }
}
