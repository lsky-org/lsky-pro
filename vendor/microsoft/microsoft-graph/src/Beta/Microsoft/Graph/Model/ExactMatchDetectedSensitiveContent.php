<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExactMatchDetectedSensitiveContent File
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
* ExactMatchDetectedSensitiveContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExactMatchDetectedSensitiveContent extends DetectedSensitiveContentBase
{

    /**
    * Gets the matches
    *
    * @return ExactMatchSensitiveContentLocation The matches
    */
    public function getMatches()
    {
        if (array_key_exists("matches", $this->_propDict)) {
            if (is_a($this->_propDict["matches"], "\Beta\Microsoft\Graph\Model\ExactMatchSensitiveContentLocation")) {
                return $this->_propDict["matches"];
            } else {
                $this->_propDict["matches"] = new ExactMatchSensitiveContentLocation($this->_propDict["matches"]);
                return $this->_propDict["matches"];
            }
        }
        return null;
    }

    /**
    * Sets the matches
    *
    * @param ExactMatchSensitiveContentLocation $val The value to assign to the matches
    *
    * @return ExactMatchDetectedSensitiveContent The ExactMatchDetectedSensitiveContent
    */
    public function setMatches($val)
    {
        $this->_propDict["matches"] = $val;
         return $this;
    }
}
