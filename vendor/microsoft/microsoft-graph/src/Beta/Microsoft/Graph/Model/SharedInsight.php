<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedInsight File
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
* SharedInsight class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedInsight extends Entity
{
    /**
    * Gets the lastShared
    * Details about the shared item. Read only.
    *
    * @return SharingDetail The lastShared
    */
    public function getLastShared()
    {
        if (array_key_exists("lastShared", $this->_propDict)) {
            if (is_a($this->_propDict["lastShared"], "\Beta\Microsoft\Graph\Model\SharingDetail")) {
                return $this->_propDict["lastShared"];
            } else {
                $this->_propDict["lastShared"] = new SharingDetail($this->_propDict["lastShared"]);
                return $this->_propDict["lastShared"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastShared
    * Details about the shared item. Read only.
    *
    * @param SharingDetail $val The lastShared
    *
    * @return SharedInsight
    */
    public function setLastShared($val)
    {
        $this->_propDict["lastShared"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceReference
    * Reference properties of the shared document, such as the url and type of the document. Read-only
    *
    * @return ResourceReference The resourceReference
    */
    public function getResourceReference()
    {
        if (array_key_exists("resourceReference", $this->_propDict)) {
            if (is_a($this->_propDict["resourceReference"], "\Beta\Microsoft\Graph\Model\ResourceReference")) {
                return $this->_propDict["resourceReference"];
            } else {
                $this->_propDict["resourceReference"] = new ResourceReference($this->_propDict["resourceReference"]);
                return $this->_propDict["resourceReference"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resourceReference
    * Reference properties of the shared document, such as the url and type of the document. Read-only
    *
    * @param ResourceReference $val The resourceReference
    *
    * @return SharedInsight
    */
    public function setResourceReference($val)
    {
        $this->_propDict["resourceReference"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceVisualization
    * Properties that you can use to visualize the document in your experience. Read-only
    *
    * @return ResourceVisualization The resourceVisualization
    */
    public function getResourceVisualization()
    {
        if (array_key_exists("resourceVisualization", $this->_propDict)) {
            if (is_a($this->_propDict["resourceVisualization"], "\Beta\Microsoft\Graph\Model\ResourceVisualization")) {
                return $this->_propDict["resourceVisualization"];
            } else {
                $this->_propDict["resourceVisualization"] = new ResourceVisualization($this->_propDict["resourceVisualization"]);
                return $this->_propDict["resourceVisualization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resourceVisualization
    * Properties that you can use to visualize the document in your experience. Read-only
    *
    * @param ResourceVisualization $val The resourceVisualization
    *
    * @return SharedInsight
    */
    public function setResourceVisualization($val)
    {
        $this->_propDict["resourceVisualization"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sharingHistory
     *
     * @return array The sharingHistory
     */
    public function getSharingHistory()
    {
        if (array_key_exists("sharingHistory", $this->_propDict)) {
           return $this->_propDict["sharingHistory"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sharingHistory
    *
    * @param SharingDetail $val The sharingHistory
    *
    * @return SharedInsight
    */
    public function setSharingHistory($val)
    {
		$this->_propDict["sharingHistory"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSharedMethod
    *
    * @return Entity The lastSharedMethod
    */
    public function getLastSharedMethod()
    {
        if (array_key_exists("lastSharedMethod", $this->_propDict)) {
            if (is_a($this->_propDict["lastSharedMethod"], "\Beta\Microsoft\Graph\Model\Entity")) {
                return $this->_propDict["lastSharedMethod"];
            } else {
                $this->_propDict["lastSharedMethod"] = new Entity($this->_propDict["lastSharedMethod"]);
                return $this->_propDict["lastSharedMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSharedMethod
    *
    * @param Entity $val The lastSharedMethod
    *
    * @return SharedInsight
    */
    public function setLastSharedMethod($val)
    {
        $this->_propDict["lastSharedMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
    *
    * @return Entity The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\Entity")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new Entity($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * Used for navigating to the item that was shared. For file attachments, the type is fileAttachment. For linked attachments, the type is driveItem.
    *
    * @param Entity $val The resource
    *
    * @return SharedInsight
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
}
