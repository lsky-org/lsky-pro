<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Quota File
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
* Quota class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Quota extends Entity
{
    /**
    * Gets the deleted
    * Total space consumed by files in the recycle bin, in bytes. Read-only.
    *
    * @return int The deleted
    */
    public function getDeleted()
    {
        if (array_key_exists("deleted", $this->_propDict)) {
            return $this->_propDict["deleted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deleted
    * Total space consumed by files in the recycle bin, in bytes. Read-only.
    *
    * @param int $val The value of the deleted
    *
    * @return Quota
    */
    public function setDeleted($val)
    {
        $this->_propDict["deleted"] = $val;
        return $this;
    }
    /**
    * Gets the remaining
    * Total space remaining before reaching the quota limit, in bytes. Read-only.
    *
    * @return int The remaining
    */
    public function getRemaining()
    {
        if (array_key_exists("remaining", $this->_propDict)) {
            return $this->_propDict["remaining"];
        } else {
            return null;
        }
    }

    /**
    * Sets the remaining
    * Total space remaining before reaching the quota limit, in bytes. Read-only.
    *
    * @param int $val The value of the remaining
    *
    * @return Quota
    */
    public function setRemaining($val)
    {
        $this->_propDict["remaining"] = $val;
        return $this;
    }
    /**
    * Gets the state
    * Enumeration value that indicates the state of the storage space. Read-only.
    *
    * @return string The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            return $this->_propDict["state"];
        } else {
            return null;
        }
    }

    /**
    * Sets the state
    * Enumeration value that indicates the state of the storage space. Read-only.
    *
    * @param string $val The value of the state
    *
    * @return Quota
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the storagePlanInformation
    * Information about the drive's storage quota plans. Only in Personal OneDrive.
    *
    * @return StoragePlanInformation The storagePlanInformation
    */
    public function getStoragePlanInformation()
    {
        if (array_key_exists("storagePlanInformation", $this->_propDict)) {
            if (is_a($this->_propDict["storagePlanInformation"], "\Microsoft\Graph\Model\StoragePlanInformation")) {
                return $this->_propDict["storagePlanInformation"];
            } else {
                $this->_propDict["storagePlanInformation"] = new StoragePlanInformation($this->_propDict["storagePlanInformation"]);
                return $this->_propDict["storagePlanInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the storagePlanInformation
    * Information about the drive's storage quota plans. Only in Personal OneDrive.
    *
    * @param StoragePlanInformation $val The value to assign to the storagePlanInformation
    *
    * @return Quota The Quota
    */
    public function setStoragePlanInformation($val)
    {
        $this->_propDict["storagePlanInformation"] = $val;
         return $this;
    }
    /**
    * Gets the total
    * Total allowed storage space, in bytes. Read-only.
    *
    * @return int The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }

    /**
    * Sets the total
    * Total allowed storage space, in bytes. Read-only.
    *
    * @param int $val The value of the total
    *
    * @return Quota
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = $val;
        return $this;
    }
    /**
    * Gets the used
    * Total space used, in bytes. Read-only.
    *
    * @return int The used
    */
    public function getUsed()
    {
        if (array_key_exists("used", $this->_propDict)) {
            return $this->_propDict["used"];
        } else {
            return null;
        }
    }

    /**
    * Sets the used
    * Total space used, in bytes. Read-only.
    *
    * @param int $val The value of the used
    *
    * @return Quota
    */
    public function setUsed($val)
    {
        $this->_propDict["used"] = $val;
        return $this;
    }
}
