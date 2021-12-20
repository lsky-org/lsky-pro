<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddToReviewSetOperation File
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
* AddToReviewSetOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddToReviewSetOperation extends CaseOperation
{
    /**
    * Gets the reviewSet
    * The review set to which items matching the source collection query are added to.
    *
    * @return ReviewSet The reviewSet
    */
    public function getReviewSet()
    {
        if (array_key_exists("reviewSet", $this->_propDict)) {
            if (is_a($this->_propDict["reviewSet"], "\Beta\Microsoft\Graph\Ediscovery\Model\ReviewSet")) {
                return $this->_propDict["reviewSet"];
            } else {
                $this->_propDict["reviewSet"] = new ReviewSet($this->_propDict["reviewSet"]);
                return $this->_propDict["reviewSet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reviewSet
    * The review set to which items matching the source collection query are added to.
    *
    * @param ReviewSet $val The reviewSet
    *
    * @return AddToReviewSetOperation
    */
    public function setReviewSet($val)
    {
        $this->_propDict["reviewSet"] = $val;
        return $this;
    }
    
    /**
    * Gets the sourceCollection
    * The sourceCollection that items are being added from.
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
    * The sourceCollection that items are being added from.
    *
    * @param SourceCollection $val The sourceCollection
    *
    * @return AddToReviewSetOperation
    */
    public function setSourceCollection($val)
    {
        $this->_propDict["sourceCollection"] = $val;
        return $this;
    }
    
}
