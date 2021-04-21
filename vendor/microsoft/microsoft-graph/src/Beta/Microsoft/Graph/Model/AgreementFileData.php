<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AgreementFileData File
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
* AgreementFileData class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AgreementFileData extends Entity
{

    /**
    * Gets the data
    *
    * @return \GuzzleHttp\Psr7\Stream The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict)) {
            if (is_a($this->_propDict["data"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["data"];
            } else {
                $this->_propDict["data"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["data"]);
                return $this->_propDict["data"];
            }
        }
        return null;
    }

    /**
    * Sets the data
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the data
    *
    * @return AgreementFileData The AgreementFileData
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
         return $this;
    }
}
