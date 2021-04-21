<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Synchronization File
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
* Synchronization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Synchronization extends Entity
{

     /** 
     * Gets the secrets
     *
     * @return array The secrets
     */
    public function getSecrets()
    {
        if (array_key_exists("secrets", $this->_propDict)) {
           return $this->_propDict["secrets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the secrets
    *
    * @param SynchronizationSecretKeyStringValuePair $val The secrets
    *
    * @return Synchronization
    */
    public function setSecrets($val)
    {
		$this->_propDict["secrets"] = $val;
        return $this;
    }
    

     /** 
     * Gets the jobs
     *
     * @return array The jobs
     */
    public function getJobs()
    {
        if (array_key_exists("jobs", $this->_propDict)) {
           return $this->_propDict["jobs"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the jobs
    *
    * @param SynchronizationJob $val The jobs
    *
    * @return Synchronization
    */
    public function setJobs($val)
    {
		$this->_propDict["jobs"] = $val;
        return $this;
    }
    

     /** 
     * Gets the templates
     *
     * @return array The templates
     */
    public function getTemplates()
    {
        if (array_key_exists("templates", $this->_propDict)) {
           return $this->_propDict["templates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the templates
    *
    * @param SynchronizationTemplate $val The templates
    *
    * @return Synchronization
    */
    public function setTemplates($val)
    {
		$this->_propDict["templates"] = $val;
        return $this;
    }
    
}
