<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClientUserAgent File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* ClientUserAgent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClientUserAgent extends UserAgent
{

    /**
    * Gets the platform
    * Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
    *
    * @return ClientPlatform The platform
    */
    public function getPlatform()
    {
        if (array_key_exists("platform", $this->_propDict)) {
            if (is_a($this->_propDict["platform"], "\Beta\Microsoft\Graph\CallRecords\Model\ClientPlatform")) {
                return $this->_propDict["platform"];
            } else {
                $this->_propDict["platform"] = new ClientPlatform($this->_propDict["platform"]);
                return $this->_propDict["platform"];
            }
        }
        return null;
    }

    /**
    * Sets the platform
    * Identifies the platform used by this endpoint. Possible values are: unknown, windows, macOS, iOS, android, web, ipPhone, roomSystem, surfaceHub, holoLens, unknownFutureValue.
    *
    * @param ClientPlatform $val The value to assign to the platform
    *
    * @return ClientUserAgent The ClientUserAgent
    */
    public function setPlatform($val)
    {
        $this->_propDict["platform"] = $val;
         return $this;
    }

    /**
    * Gets the productFamily
    * Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue.
    *
    * @return ProductFamily The productFamily
    */
    public function getProductFamily()
    {
        if (array_key_exists("productFamily", $this->_propDict)) {
            if (is_a($this->_propDict["productFamily"], "\Beta\Microsoft\Graph\CallRecords\Model\ProductFamily")) {
                return $this->_propDict["productFamily"];
            } else {
                $this->_propDict["productFamily"] = new ProductFamily($this->_propDict["productFamily"]);
                return $this->_propDict["productFamily"];
            }
        }
        return null;
    }

    /**
    * Sets the productFamily
    * Identifies the family of application software used by this endpoint. Possible values are: unknown, teams, skypeForBusiness, lync, unknownFutureValue.
    *
    * @param ProductFamily $val The value to assign to the productFamily
    *
    * @return ClientUserAgent The ClientUserAgent
    */
    public function setProductFamily($val)
    {
        $this->_propDict["productFamily"] = $val;
         return $this;
    }
}
