<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallRoute File
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
* CallRoute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallRoute extends Entity
{

    /**
    * Gets the final
    * The identity that was resolved to in the call.
    *
    * @return IdentitySet The final
    */
    public function getFinal()
    {
        if (array_key_exists("final", $this->_propDict)) {
            if (is_a($this->_propDict["final"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["final"];
            } else {
                $this->_propDict["final"] = new IdentitySet($this->_propDict["final"]);
                return $this->_propDict["final"];
            }
        }
        return null;
    }

    /**
    * Sets the final
    * The identity that was resolved to in the call.
    *
    * @param IdentitySet $val The value to assign to the final
    *
    * @return CallRoute The CallRoute
    */
    public function setFinal($val)
    {
        $this->_propDict["final"] = $val;
         return $this;
    }

    /**
    * Gets the original
    * The identity that was originally used in the call.
    *
    * @return IdentitySet The original
    */
    public function getOriginal()
    {
        if (array_key_exists("original", $this->_propDict)) {
            if (is_a($this->_propDict["original"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["original"];
            } else {
                $this->_propDict["original"] = new IdentitySet($this->_propDict["original"]);
                return $this->_propDict["original"];
            }
        }
        return null;
    }

    /**
    * Sets the original
    * The identity that was originally used in the call.
    *
    * @param IdentitySet $val The value to assign to the original
    *
    * @return CallRoute The CallRoute
    */
    public function setOriginal($val)
    {
        $this->_propDict["original"] = $val;
         return $this;
    }

    /**
    * Gets the routingType
    * Possible values are: forwarded, lookup, selfFork.
    *
    * @return RoutingType The routingType
    */
    public function getRoutingType()
    {
        if (array_key_exists("routingType", $this->_propDict)) {
            if (is_a($this->_propDict["routingType"], "\Beta\Microsoft\Graph\Model\RoutingType")) {
                return $this->_propDict["routingType"];
            } else {
                $this->_propDict["routingType"] = new RoutingType($this->_propDict["routingType"]);
                return $this->_propDict["routingType"];
            }
        }
        return null;
    }

    /**
    * Sets the routingType
    * Possible values are: forwarded, lookup, selfFork.
    *
    * @param RoutingType $val The value to assign to the routingType
    *
    * @return CallRoute The CallRoute
    */
    public function setRoutingType($val)
    {
        $this->_propDict["routingType"] = $val;
         return $this;
    }
}
