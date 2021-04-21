<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RankedEmailAddress File
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
* RankedEmailAddress class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RankedEmailAddress extends Entity
{
    /**
    * Gets the address
    * The email address.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    * The email address.
    *
    * @param string $val The value of the address
    *
    * @return RankedEmailAddress
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the rank
    * The rank of the email address. A rank is used as a sort key, in relation to the other returned results. A higher rank value corresponds to a more relevant result. Relevance is determined by communication, collaboration, and business relationship signals.
    *
    * @return float The rank
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
    * The rank of the email address. A rank is used as a sort key, in relation to the other returned results. A higher rank value corresponds to a more relevant result. Relevance is determined by communication, collaboration, and business relationship signals.
    *
    * @param float $val The value of the rank
    *
    * @return RankedEmailAddress
    */
    public function setRank($val)
    {
        $this->_propDict["rank"] = $val;
        return $this;
    }
}
