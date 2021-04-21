<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SourceCollection File
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
* SourceCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SourceCollection extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the contentQuery
    * The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery.  You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date&amp;gt;=06/01/2016 AND Date&amp;lt;=07/01/2016
    *
    * @return string The contentQuery
    */
    public function getContentQuery()
    {
        if (array_key_exists("contentQuery", $this->_propDict)) {
            return $this->_propDict["contentQuery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the contentQuery
    * The query string in KQL (Keyword Query Language) query. For details, see Keyword queries and search conditions for Content Search and eDiscovery.  You can refine searches by using fields paired with values; for example, subject:'Quarterly Financials' AND Date&amp;gt;=06/01/2016 AND Date&amp;lt;=07/01/2016
    *
    * @param string $val The contentQuery
    *
    * @return SourceCollection
    */
    public function setContentQuery($val)
    {
        $this->_propDict["contentQuery"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * The user who created the sourceCollection.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * The user who created the sourceCollection.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The createdBy
    *
    * @return SourceCollection
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the sourceCollection was created.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The date and time the sourceCollection was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return SourceCollection
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataSourceScopes
    *
    * @return DataSourceScopes The dataSourceScopes
    */
    public function getDataSourceScopes()
    {
        if (array_key_exists("dataSourceScopes", $this->_propDict)) {
            if (is_a($this->_propDict["dataSourceScopes"], "\Beta\Microsoft\Graph\Ediscovery\Model\DataSourceScopes")) {
                return $this->_propDict["dataSourceScopes"];
            } else {
                $this->_propDict["dataSourceScopes"] = new DataSourceScopes($this->_propDict["dataSourceScopes"]);
                return $this->_propDict["dataSourceScopes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataSourceScopes
    *
    * @param DataSourceScopes $val The dataSourceScopes
    *
    * @return SourceCollection
    */
    public function setDataSourceScopes($val)
    {
        $this->_propDict["dataSourceScopes"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of the sourceCollection
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of the sourceCollection
    *
    * @param string $val The description
    *
    * @return SourceCollection
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the sourceCollection
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name of the sourceCollection
    *
    * @param string $val The displayName
    *
    * @return SourceCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * The last user who modified the sourceCollection.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    * The last user who modified the sourceCollection.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The lastModifiedBy
    *
    * @return SourceCollection
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * The last date and time the sourceCollection was modified.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * The last date and time the sourceCollection was modified.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return SourceCollection
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the additionalSources
    * Adds an additional source to the sourceCollection.
     *
     * @return array The additionalSources
     */
    public function getAdditionalSources()
    {
        if (array_key_exists("additionalSources", $this->_propDict)) {
           return $this->_propDict["additionalSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the additionalSources
    * Adds an additional source to the sourceCollection.
    *
    * @param DataSource $val The additionalSources
    *
    * @return SourceCollection
    */
    public function setAdditionalSources($val)
    {
		$this->_propDict["additionalSources"] = $val;
        return $this;
    }
    
    /**
    * Gets the addToReviewSetOperation
    * Adds the results of the sourceCollection to the specified reviewSet.
    *
    * @return AddToReviewSetOperation The addToReviewSetOperation
    */
    public function getAddToReviewSetOperation()
    {
        if (array_key_exists("addToReviewSetOperation", $this->_propDict)) {
            if (is_a($this->_propDict["addToReviewSetOperation"], "\Beta\Microsoft\Graph\Ediscovery\Model\AddToReviewSetOperation")) {
                return $this->_propDict["addToReviewSetOperation"];
            } else {
                $this->_propDict["addToReviewSetOperation"] = new AddToReviewSetOperation($this->_propDict["addToReviewSetOperation"]);
                return $this->_propDict["addToReviewSetOperation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the addToReviewSetOperation
    * Adds the results of the sourceCollection to the specified reviewSet.
    *
    * @param AddToReviewSetOperation $val The addToReviewSetOperation
    *
    * @return SourceCollection
    */
    public function setAddToReviewSetOperation($val)
    {
        $this->_propDict["addToReviewSetOperation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the custodianSources
    * Custodian sources that are included in the sourceCollection.
     *
     * @return array The custodianSources
     */
    public function getCustodianSources()
    {
        if (array_key_exists("custodianSources", $this->_propDict)) {
           return $this->_propDict["custodianSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the custodianSources
    * Custodian sources that are included in the sourceCollection.
    *
    * @param DataSource $val The custodianSources
    *
    * @return SourceCollection
    */
    public function setCustodianSources($val)
    {
		$this->_propDict["custodianSources"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastEstimateStatisticsOperation
    * The last estimate operation associated with the sourceCollection.
    *
    * @return EstimateStatisticsOperation The lastEstimateStatisticsOperation
    */
    public function getLastEstimateStatisticsOperation()
    {
        if (array_key_exists("lastEstimateStatisticsOperation", $this->_propDict)) {
            if (is_a($this->_propDict["lastEstimateStatisticsOperation"], "\Beta\Microsoft\Graph\Ediscovery\Model\EstimateStatisticsOperation")) {
                return $this->_propDict["lastEstimateStatisticsOperation"];
            } else {
                $this->_propDict["lastEstimateStatisticsOperation"] = new EstimateStatisticsOperation($this->_propDict["lastEstimateStatisticsOperation"]);
                return $this->_propDict["lastEstimateStatisticsOperation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastEstimateStatisticsOperation
    * The last estimate operation associated with the sourceCollection.
    *
    * @param EstimateStatisticsOperation $val The lastEstimateStatisticsOperation
    *
    * @return SourceCollection
    */
    public function setLastEstimateStatisticsOperation($val)
    {
        $this->_propDict["lastEstimateStatisticsOperation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the noncustodialSources
     *
     * @return array The noncustodialSources
     */
    public function getNoncustodialSources()
    {
        if (array_key_exists("noncustodialSources", $this->_propDict)) {
           return $this->_propDict["noncustodialSources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the noncustodialSources
    *
    * @param DataSource $val The noncustodialSources
    *
    * @return SourceCollection
    */
    public function setNoncustodialSources($val)
    {
		$this->_propDict["noncustodialSources"] = $val;
        return $this;
    }
    
}
