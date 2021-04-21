<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UriClickSecurityState File
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
* UriClickSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UriClickSecurityState extends Entity
{
    /**
    * Gets the clickAction
    *
    * @return string The clickAction
    */
    public function getClickAction()
    {
        if (array_key_exists("clickAction", $this->_propDict)) {
            return $this->_propDict["clickAction"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clickAction
    *
    * @param string $val The value of the clickAction
    *
    * @return UriClickSecurityState
    */
    public function setClickAction($val)
    {
        $this->_propDict["clickAction"] = $val;
        return $this;
    }

    /**
    * Gets the clickDateTime
    *
    * @return \DateTime The clickDateTime
    */
    public function getClickDateTime()
    {
        if (array_key_exists("clickDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["clickDateTime"], "\DateTime")) {
                return $this->_propDict["clickDateTime"];
            } else {
                $this->_propDict["clickDateTime"] = new \DateTime($this->_propDict["clickDateTime"]);
                return $this->_propDict["clickDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the clickDateTime
    *
    * @param \DateTime $val The value to assign to the clickDateTime
    *
    * @return UriClickSecurityState The UriClickSecurityState
    */
    public function setClickDateTime($val)
    {
        $this->_propDict["clickDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return UriClickSecurityState
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the sourceId
    *
    * @return string The sourceId
    */
    public function getSourceId()
    {
        if (array_key_exists("sourceId", $this->_propDict)) {
            return $this->_propDict["sourceId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceId
    *
    * @param string $val The value of the sourceId
    *
    * @return UriClickSecurityState
    */
    public function setSourceId($val)
    {
        $this->_propDict["sourceId"] = $val;
        return $this;
    }
    /**
    * Gets the uriDomain
    *
    * @return string The uriDomain
    */
    public function getUriDomain()
    {
        if (array_key_exists("uriDomain", $this->_propDict)) {
            return $this->_propDict["uriDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uriDomain
    *
    * @param string $val The value of the uriDomain
    *
    * @return UriClickSecurityState
    */
    public function setUriDomain($val)
    {
        $this->_propDict["uriDomain"] = $val;
        return $this;
    }
    /**
    * Gets the verdict
    *
    * @return string The verdict
    */
    public function getVerdict()
    {
        if (array_key_exists("verdict", $this->_propDict)) {
            return $this->_propDict["verdict"];
        } else {
            return null;
        }
    }

    /**
    * Sets the verdict
    *
    * @param string $val The value of the verdict
    *
    * @return UriClickSecurityState
    */
    public function setVerdict($val)
    {
        $this->_propDict["verdict"] = $val;
        return $this;
    }
}
