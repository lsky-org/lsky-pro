<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailAppUsageVersionsUserCounts File
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
* EmailAppUsageVersionsUserCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailAppUsageVersionsUserCounts extends Entity
{
    /**
    * Gets the outlook2007
    *
    * @return int The outlook2007
    */
    public function getOutlook2007()
    {
        if (array_key_exists("outlook2007", $this->_propDict)) {
            return $this->_propDict["outlook2007"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlook2007
    *
    * @param int $val The outlook2007
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlook2007($val)
    {
        $this->_propDict["outlook2007"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlook2010
    *
    * @return int The outlook2010
    */
    public function getOutlook2010()
    {
        if (array_key_exists("outlook2010", $this->_propDict)) {
            return $this->_propDict["outlook2010"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlook2010
    *
    * @param int $val The outlook2010
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlook2010($val)
    {
        $this->_propDict["outlook2010"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlook2013
    *
    * @return int The outlook2013
    */
    public function getOutlook2013()
    {
        if (array_key_exists("outlook2013", $this->_propDict)) {
            return $this->_propDict["outlook2013"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlook2013
    *
    * @param int $val The outlook2013
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlook2013($val)
    {
        $this->_propDict["outlook2013"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlook2016
    *
    * @return int The outlook2016
    */
    public function getOutlook2016()
    {
        if (array_key_exists("outlook2016", $this->_propDict)) {
            return $this->_propDict["outlook2016"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlook2016
    *
    * @param int $val The outlook2016
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlook2016($val)
    {
        $this->_propDict["outlook2016"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlook2019
    *
    * @return int The outlook2019
    */
    public function getOutlook2019()
    {
        if (array_key_exists("outlook2019", $this->_propDict)) {
            return $this->_propDict["outlook2019"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlook2019
    *
    * @param int $val The outlook2019
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlook2019($val)
    {
        $this->_propDict["outlook2019"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the outlookM365
    *
    * @return int The outlookM365
    */
    public function getOutlookM365()
    {
        if (array_key_exists("outlookM365", $this->_propDict)) {
            return $this->_propDict["outlookM365"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outlookM365
    *
    * @param int $val The outlookM365
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setOutlookM365($val)
    {
        $this->_propDict["outlookM365"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \DateTime The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\DateTime")) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \DateTime($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \DateTime $val The reportRefreshDate
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the undetermined
    *
    * @return int The undetermined
    */
    public function getUndetermined()
    {
        if (array_key_exists("undetermined", $this->_propDict)) {
            return $this->_propDict["undetermined"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the undetermined
    *
    * @param int $val The undetermined
    *
    * @return EmailAppUsageVersionsUserCounts
    */
    public function setUndetermined($val)
    {
        $this->_propDict["undetermined"] = intval($val);
        return $this;
    }
    
}
