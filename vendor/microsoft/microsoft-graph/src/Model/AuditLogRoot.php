<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditLogRoot File
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
* AuditLogRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditLogRoot extends Entity
{

     /** 
     * Gets the directoryAudits
    * Read-only. Nullable.
     *
     * @return array The directoryAudits
     */
    public function getDirectoryAudits()
    {
        if (array_key_exists("directoryAudits", $this->_propDict)) {
           return $this->_propDict["directoryAudits"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the directoryAudits
    * Read-only. Nullable.
    *
    * @param DirectoryAudit $val The directoryAudits
    *
    * @return AuditLogRoot
    */
    public function setDirectoryAudits($val)
    {
		$this->_propDict["directoryAudits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioning
     *
     * @return array The provisioning
     */
    public function getProvisioning()
    {
        if (array_key_exists("provisioning", $this->_propDict)) {
           return $this->_propDict["provisioning"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the provisioning
    *
    * @param ProvisioningObjectSummary $val The provisioning
    *
    * @return AuditLogRoot
    */
    public function setProvisioning($val)
    {
		$this->_propDict["provisioning"] = $val;
        return $this;
    }
    

     /** 
     * Gets the restrictedSignIns
     *
     * @return array The restrictedSignIns
     */
    public function getRestrictedSignIns()
    {
        if (array_key_exists("restrictedSignIns", $this->_propDict)) {
           return $this->_propDict["restrictedSignIns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the restrictedSignIns
    *
    * @param RestrictedSignIn $val The restrictedSignIns
    *
    * @return AuditLogRoot
    */
    public function setRestrictedSignIns($val)
    {
		$this->_propDict["restrictedSignIns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the signIns
    * Read-only. Nullable.
     *
     * @return array The signIns
     */
    public function getSignIns()
    {
        if (array_key_exists("signIns", $this->_propDict)) {
           return $this->_propDict["signIns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the signIns
    * Read-only. Nullable.
    *
    * @param SignIn $val The signIns
    *
    * @return AuditLogRoot
    */
    public function setSignIns($val)
    {
		$this->_propDict["signIns"] = $val;
        return $this;
    }
    
}
