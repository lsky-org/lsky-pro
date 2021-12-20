<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81AppXBundle File
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
* WindowsPhone81AppXBundle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81AppXBundle extends WindowsPhone81AppX
{

     /** 
     * Gets the appXPackageInformationList
    * The list of AppX Package Information.
     *
     * @return array The appXPackageInformationList
     */
    public function getAppXPackageInformationList()
    {
        if (array_key_exists("appXPackageInformationList", $this->_propDict)) {
           return $this->_propDict["appXPackageInformationList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appXPackageInformationList
    * The list of AppX Package Information.
    *
    * @param WindowsPackageInformation $val The appXPackageInformationList
    *
    * @return WindowsPhone81AppXBundle
    */
    public function setAppXPackageInformationList($val)
    {
		$this->_propDict["appXPackageInformationList"] = $val;
        return $this;
    }
    
}
