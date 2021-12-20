<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Filter File
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
* Filter class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Filter extends Entity
{

    /**
    * Gets the categoryFilterGroups
    * *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @return FilterGroup The categoryFilterGroups
    */
    public function getCategoryFilterGroups()
    {
        if (array_key_exists("categoryFilterGroups", $this->_propDict)) {
            if (is_a($this->_propDict["categoryFilterGroups"], "\Beta\Microsoft\Graph\Model\FilterGroup")) {
                return $this->_propDict["categoryFilterGroups"];
            } else {
                $this->_propDict["categoryFilterGroups"] = new FilterGroup($this->_propDict["categoryFilterGroups"]);
                return $this->_propDict["categoryFilterGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the categoryFilterGroups
    * *Experimental* Filter group set used to decide whether given object belongs and should be processed as part of this object mapping. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @param FilterGroup $val The value to assign to the categoryFilterGroups
    *
    * @return Filter The Filter
    */
    public function setCategoryFilterGroups($val)
    {
        $this->_propDict["categoryFilterGroups"] = $val;
         return $this;
    }

    /**
    * Gets the groups
    * Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is not satisfied any longer, such object will get de-provisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @return FilterGroup The groups
    */
    public function getGroups()
    {
        if (array_key_exists("groups", $this->_propDict)) {
            if (is_a($this->_propDict["groups"], "\Beta\Microsoft\Graph\Model\FilterGroup")) {
                return $this->_propDict["groups"];
            } else {
                $this->_propDict["groups"] = new FilterGroup($this->_propDict["groups"]);
                return $this->_propDict["groups"];
            }
        }
        return null;
    }

    /**
    * Sets the groups
    * Filter group set used to decide whether given object is in scope for provisioning. This is the filter which should be used in most cases. If an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is not satisfied any longer, such object will get de-provisioned'. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @param FilterGroup $val The value to assign to the groups
    *
    * @return Filter The Filter
    */
    public function setGroups($val)
    {
        $this->_propDict["groups"] = $val;
         return $this;
    }

    /**
    * Gets the inputFilterGroups
    * *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get de-provisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @return FilterGroup The inputFilterGroups
    */
    public function getInputFilterGroups()
    {
        if (array_key_exists("inputFilterGroups", $this->_propDict)) {
            if (is_a($this->_propDict["inputFilterGroups"], "\Beta\Microsoft\Graph\Model\FilterGroup")) {
                return $this->_propDict["inputFilterGroups"];
            } else {
                $this->_propDict["inputFilterGroups"] = new FilterGroup($this->_propDict["inputFilterGroups"]);
                return $this->_propDict["inputFilterGroups"];
            }
        }
        return null;
    }

    /**
    * Sets the inputFilterGroups
    * *Experimental* Filter group set used to filter out objects at the early stage of reading them from the directory. If an object doesn't satisfy this filter it will not be processed further. Important to understand is that if an object used to satisfy this filter at a given moment, and then the object or the filter was changed so that filter is no longer satisfied, such object will NOT get de-provisioned. An object is considered in scope if ANY of the groups in the collection is evaluated to true.
    *
    * @param FilterGroup $val The value to assign to the inputFilterGroups
    *
    * @return Filter The Filter
    */
    public function setInputFilterGroups($val)
    {
        $this->_propDict["inputFilterGroups"] = $val;
         return $this;
    }
}
