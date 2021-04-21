<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenTypeExtension File
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
* OpenTypeExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenTypeExtension extends Extension
{
    /**
    * Gets the extensionName
    * A unique text identifier for an open type data extension. Required.
    *
    * @return string The extensionName
    */
    public function getExtensionName()
    {
        if (array_key_exists("extensionName", $this->_propDict)) {
            return $this->_propDict["extensionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the extensionName
    * A unique text identifier for an open type data extension. Required.
    *
    * @param string $val The extensionName
    *
    * @return OpenTypeExtension
    */
    public function setExtensionName($val)
    {
        $this->_propDict["extensionName"] = $val;
        return $this;
    }
    
}
