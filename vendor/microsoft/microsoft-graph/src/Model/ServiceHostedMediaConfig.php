<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceHostedMediaConfig File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ServiceHostedMediaConfig class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceHostedMediaConfig extends MediaConfig
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.serviceHostedMediaConfig");
    }


    /**
    * Gets the preFetchMedia
    * The list of media to pre-fetch.
    *
    * @return MediaInfo The preFetchMedia
    */
    public function getPreFetchMedia()
    {
        if (array_key_exists("preFetchMedia", $this->_propDict)) {
            if (is_a($this->_propDict["preFetchMedia"], "\Microsoft\Graph\Model\MediaInfo")) {
                return $this->_propDict["preFetchMedia"];
            } else {
                $this->_propDict["preFetchMedia"] = new MediaInfo($this->_propDict["preFetchMedia"]);
                return $this->_propDict["preFetchMedia"];
            }
        }
        return null;
    }

    /**
    * Sets the preFetchMedia
    * The list of media to pre-fetch.
    *
    * @param MediaInfo $val The value to assign to the preFetchMedia
    *
    * @return ServiceHostedMediaConfig The ServiceHostedMediaConfig
    */
    public function setPreFetchMedia($val)
    {
        $this->_propDict["preFetchMedia"] = $val;
         return $this;
    }
}
