<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EstimateStatisticsOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* EstimateStatisticsOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EstimateStatisticsOperation extends CaseOperation
{
    /**
    * Gets the indexedItemCount
    * The estimated count of items for the sourceCollection that matched the content query.
    *
    * @return int The indexedItemCount
    */
    public function getIndexedItemCount()
    {
        if (array_key_exists("indexedItemCount", $this->_propDict)) {
            return $this->_propDict["indexedItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexedItemCount
    * The estimated count of items for the sourceCollection that matched the content query.
    *
    * @param int $val The indexedItemCount
    *
    * @return EstimateStatisticsOperation
    */
    public function setIndexedItemCount($val)
    {
        $this->_propDict["indexedItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the indexedItemsSize
    * The estimated size of items for the sourceCollection that matched the content query.
    *
    * @return int The indexedItemsSize
    */
    public function getIndexedItemsSize()
    {
        if (array_key_exists("indexedItemsSize", $this->_propDict)) {
            return $this->_propDict["indexedItemsSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexedItemsSize
    * The estimated size of items for the sourceCollection that matched the content query.
    *
    * @param int $val The indexedItemsSize
    *
    * @return EstimateStatisticsOperation
    */
    public function setIndexedItemsSize($val)
    {
        $this->_propDict["indexedItemsSize"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mailboxCount
    * The number of mailboxes that had search hits.
    *
    * @return int The mailboxCount
    */
    public function getMailboxCount()
    {
        if (array_key_exists("mailboxCount", $this->_propDict)) {
            return $this->_propDict["mailboxCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mailboxCount
    * The number of mailboxes that had search hits.
    *
    * @param int $val The mailboxCount
    *
    * @return EstimateStatisticsOperation
    */
    public function setMailboxCount($val)
    {
        $this->_propDict["mailboxCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the siteCount
    * The number of mailboxes that had search hits.
    *
    * @return int The siteCount
    */
    public function getSiteCount()
    {
        if (array_key_exists("siteCount", $this->_propDict)) {
            return $this->_propDict["siteCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the siteCount
    * The number of mailboxes that had search hits.
    *
    * @param int $val The siteCount
    *
    * @return EstimateStatisticsOperation
    */
    public function setSiteCount($val)
    {
        $this->_propDict["siteCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unindexedItemCount
    * The estimated count of unindexed items for the collection.
    *
    * @return int The unindexedItemCount
    */
    public function getUnindexedItemCount()
    {
        if (array_key_exists("unindexedItemCount", $this->_propDict)) {
            return $this->_propDict["unindexedItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unindexedItemCount
    * The estimated count of unindexed items for the collection.
    *
    * @param int $val The unindexedItemCount
    *
    * @return EstimateStatisticsOperation
    */
    public function setUnindexedItemCount($val)
    {
        $this->_propDict["unindexedItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the unindexedItemsSize
    * The estimated size of unindexed items for the collection.
    *
    * @return int The unindexedItemsSize
    */
    public function getUnindexedItemsSize()
    {
        if (array_key_exists("unindexedItemsSize", $this->_propDict)) {
            return $this->_propDict["unindexedItemsSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the unindexedItemsSize
    * The estimated size of unindexed items for the collection.
    *
    * @param int $val The unindexedItemsSize
    *
    * @return EstimateStatisticsOperation
    */
    public function setUnindexedItemsSize($val)
    {
        $this->_propDict["unindexedItemsSize"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the sourceCollection
    * eDiscovery collection, commonly known as a search.
    *
    * @return SourceCollection The sourceCollection
    */
    public function getSourceCollection()
    {
        if (array_key_exists("sourceCollection", $this->_propDict)) {
            if (is_a($this->_propDict["sourceCollection"], "\Beta\Microsoft\Graph\Ediscovery\Model\SourceCollection")) {
                return $this->_propDict["sourceCollection"];
            } else {
                $this->_propDict["sourceCollection"] = new SourceCollection($this->_propDict["sourceCollection"]);
                return $this->_propDict["sourceCollection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sourceCollection
    * eDiscovery collection, commonly known as a search.
    *
    * @param SourceCollection $val The sourceCollection
    *
    * @return EstimateStatisticsOperation
    */
    public function setSourceCollection($val)
    {
        $this->_propDict["sourceCollection"] = $val;
        return $this;
    }
    
}
