<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppContent File
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
* MobileAppContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppContent extends Entity
{

     /** 
     * Gets the containedApps
    * The collection of contained apps in a MobileLobApp acting as a package.
     *
     * @return array The containedApps
     */
    public function getContainedApps()
    {
        if (array_key_exists("containedApps", $this->_propDict)) {
           return $this->_propDict["containedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the containedApps
    * The collection of contained apps in a MobileLobApp acting as a package.
    *
    * @param MobileContainedApp $val The containedApps
    *
    * @return MobileAppContent
    */
    public function setContainedApps($val)
    {
		$this->_propDict["containedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the files
    * The list of files for this app content version.
     *
     * @return array The files
     */
    public function getFiles()
    {
        if (array_key_exists("files", $this->_propDict)) {
           return $this->_propDict["files"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the files
    * The list of files for this app content version.
    *
    * @param MobileAppContentFile $val The files
    *
    * @return MobileAppContent
    */
    public function setFiles($val)
    {
		$this->_propDict["files"] = $val;
        return $this;
    }
    
}
