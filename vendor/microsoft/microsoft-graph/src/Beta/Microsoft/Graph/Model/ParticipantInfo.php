<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParticipantInfo File
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
* ParticipantInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParticipantInfo extends Entity
{
    /**
    * Gets the countryCode
    * The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
    *
    * @return string The countryCode
    */
    public function getCountryCode()
    {
        if (array_key_exists("countryCode", $this->_propDict)) {
            return $this->_propDict["countryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the countryCode
    * The ISO 3166-1 Alpha-2 country code of the participant's best estimated physical location at the start of the call. Read-only.
    *
    * @param string $val The value of the countryCode
    *
    * @return ParticipantInfo
    */
    public function setCountryCode($val)
    {
        $this->_propDict["countryCode"] = $val;
        return $this;
    }

    /**
    * Gets the endpointType
    * The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
    *
    * @return EndpointType The endpointType
    */
    public function getEndpointType()
    {
        if (array_key_exists("endpointType", $this->_propDict)) {
            if (is_a($this->_propDict["endpointType"], "\Beta\Microsoft\Graph\Model\EndpointType")) {
                return $this->_propDict["endpointType"];
            } else {
                $this->_propDict["endpointType"] = new EndpointType($this->_propDict["endpointType"]);
                return $this->_propDict["endpointType"];
            }
        }
        return null;
    }

    /**
    * Sets the endpointType
    * The type of endpoint the participant is using. Possible values are: default, skypeForBusiness, or skypeForBusinessVoipPhone. Read-only.
    *
    * @param EndpointType $val The value to assign to the endpointType
    *
    * @return ParticipantInfo The ParticipantInfo
    */
    public function setEndpointType($val)
    {
        $this->_propDict["endpointType"] = $val;
         return $this;
    }

    /**
    * Gets the identity
    * The identitySet associated with this participant. Read-only.
    *
    * @return IdentitySet The identity
    */
    public function getIdentity()
    {
        if (array_key_exists("identity", $this->_propDict)) {
            if (is_a($this->_propDict["identity"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["identity"];
            } else {
                $this->_propDict["identity"] = new IdentitySet($this->_propDict["identity"]);
                return $this->_propDict["identity"];
            }
        }
        return null;
    }

    /**
    * Sets the identity
    * The identitySet associated with this participant. Read-only.
    *
    * @param IdentitySet $val The value to assign to the identity
    *
    * @return ParticipantInfo The ParticipantInfo
    */
    public function setIdentity($val)
    {
        $this->_propDict["identity"] = $val;
         return $this;
    }
    /**
    * Gets the languageId
    * The language culture string. Read-only.
    *
    * @return string The languageId
    */
    public function getLanguageId()
    {
        if (array_key_exists("languageId", $this->_propDict)) {
            return $this->_propDict["languageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the languageId
    * The language culture string. Read-only.
    *
    * @param string $val The value of the languageId
    *
    * @return ParticipantInfo
    */
    public function setLanguageId($val)
    {
        $this->_propDict["languageId"] = $val;
        return $this;
    }
    /**
    * Gets the platformId
    * The client platform ID of the participant. Read-only.
    *
    * @return string The platformId
    */
    public function getPlatformId()
    {
        if (array_key_exists("platformId", $this->_propDict)) {
            return $this->_propDict["platformId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platformId
    * The client platform ID of the participant. Read-only.
    *
    * @param string $val The value of the platformId
    *
    * @return ParticipantInfo
    */
    public function setPlatformId($val)
    {
        $this->_propDict["platformId"] = $val;
        return $this;
    }
    /**
    * Gets the region
    * The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location, unlike countryCode. Read-only.
    *
    * @return string The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }

    /**
    * Sets the region
    * The home region of the participant. This can be a country, a continent, or a larger geographic region. This does not change based on the participant's current physical location, unlike countryCode. Read-only.
    *
    * @param string $val The value of the region
    *
    * @return ParticipantInfo
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }
}
