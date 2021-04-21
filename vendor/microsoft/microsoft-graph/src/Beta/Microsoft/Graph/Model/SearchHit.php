<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SearchHit File
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
* SearchHit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SearchHit extends Entity
{
    /**
    * Gets the contentSource
    * The name of the content source which the externalItem is part of .
    *
    * @return string The contentSource
    */
    public function getContentSource()
    {
        if (array_key_exists("contentSource", $this->_propDict)) {
            return $this->_propDict["contentSource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentSource
    * The name of the content source which the externalItem is part of .
    *
    * @param string $val The value of the contentSource
    *
    * @return SearchHit
    */
    public function setContentSource($val)
    {
        $this->_propDict["contentSource"] = $val;
        return $this;
    }
    /**
    * Gets the hitId
    * The internal identifier for the item.
    *
    * @return string The hitId
    */
    public function getHitId()
    {
        if (array_key_exists("hitId", $this->_propDict)) {
            return $this->_propDict["hitId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hitId
    * The internal identifier for the item.
    *
    * @param string $val The value of the hitId
    *
    * @return SearchHit
    */
    public function setHitId($val)
    {
        $this->_propDict["hitId"] = $val;
        return $this;
    }
    /**
    * Gets the rank
    * The rank or the order of the result.
    *
    * @return int The rank
    */
    public function getRank()
    {
        if (array_key_exists("rank", $this->_propDict)) {
            return $this->_propDict["rank"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rank
    * The rank or the order of the result.
    *
    * @param int $val The value of the rank
    *
    * @return SearchHit
    */
    public function setRank($val)
    {
        $this->_propDict["rank"] = $val;
        return $this;
    }
    /**
    * Gets the summary
    * A summary of the result, if a summary is available.
    *
    * @return string The summary
    */
    public function getSummary()
    {
        if (array_key_exists("summary", $this->_propDict)) {
            return $this->_propDict["summary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the summary
    * A summary of the result, if a summary is available.
    *
    * @param string $val The value of the summary
    *
    * @return SearchHit
    */
    public function setSummary($val)
    {
        $this->_propDict["summary"] = $val;
        return $this;
    }
    /**
    * Gets the _id
    *
    * @return string The _id
    */
    public function get_id()
    {
        if (array_key_exists("_id", $this->_propDict)) {
            return $this->_propDict["_id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _id
    *
    * @param string $val The value of the _id
    *
    * @return SearchHit
    */
    public function set_id($val)
    {
        $this->_propDict["_id"] = $val;
        return $this;
    }
    /**
    * Gets the _score
    *
    * @return int The _score
    */
    public function get_score()
    {
        if (array_key_exists("_score", $this->_propDict)) {
            return $this->_propDict["_score"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _score
    *
    * @param int $val The value of the _score
    *
    * @return SearchHit
    */
    public function set_score($val)
    {
        $this->_propDict["_score"] = $val;
        return $this;
    }
    /**
    * Gets the _summary
    *
    * @return string The _summary
    */
    public function get_summary()
    {
        if (array_key_exists("_summary", $this->_propDict)) {
            return $this->_propDict["_summary"];
        } else {
            return null;
        }
    }

    /**
    * Sets the _summary
    *
    * @param string $val The value of the _summary
    *
    * @return SearchHit
    */
    public function set_summary($val)
    {
        $this->_propDict["_summary"] = $val;
        return $this;
    }

    /**
    * Gets the resource
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
    *
    * @param Entity $val The value to assign to the resource
    *
    * @return SearchHit The SearchHit
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
         return $this;
    }

    /**
    * Gets the _source
    *
    * @return Entity The _source
    */
    public function get_source()
    {
        if (array_key_exists("_source", $this->_propDict)) {
            if (is_a($this->_propDict["_source"], "\Beta\Microsoft\Graph\Model\Entity")) {
                return $this->_propDict["_source"];
            } else {
                $this->_propDict["_source"] = new Entity($this->_propDict["_source"]);
                return $this->_propDict["_source"];
            }
        }
        return null;
    }

    /**
    * Sets the _source
    *
    * @param Entity $val The value to assign to the _source
    *
    * @return SearchHit The SearchHit
    */
    public function set_source($val)
    {
        $this->_propDict["_source"] = $val;
         return $this;
    }
}
