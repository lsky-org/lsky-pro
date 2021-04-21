<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheetProtection File
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
* WorkbookWorksheetProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookWorksheetProtection extends Entity
{
    /**
    * Gets the options
    * Sheet protection options. Read-only.
    *
    * @return WorkbookWorksheetProtectionOptions The options
    */
    public function getOptions()
    {
        if (array_key_exists("options", $this->_propDict)) {
            if (is_a($this->_propDict["options"], "\Beta\Microsoft\Graph\Model\WorkbookWorksheetProtectionOptions")) {
                return $this->_propDict["options"];
            } else {
                $this->_propDict["options"] = new WorkbookWorksheetProtectionOptions($this->_propDict["options"]);
                return $this->_propDict["options"];
            }
        }
        return null;
    }
    
    /**
    * Sets the options
    * Sheet protection options. Read-only.
    *
    * @param WorkbookWorksheetProtectionOptions $val The options
    *
    * @return WorkbookWorksheetProtection
    */
    public function setOptions($val)
    {
        $this->_propDict["options"] = $val;
        return $this;
    }
    
    /**
    * Gets the protected
    * Indicates if the worksheet is protected.  Read-only.
    *
    * @return bool The protected
    */
    public function getProtected()
    {
        if (array_key_exists("protected", $this->_propDict)) {
            return $this->_propDict["protected"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the protected
    * Indicates if the worksheet is protected.  Read-only.
    *
    * @param bool $val The protected
    *
    * @return WorkbookWorksheetProtection
    */
    public function setProtected($val)
    {
        $this->_propDict["protected"] = boolval($val);
        return $this;
    }
    
}
