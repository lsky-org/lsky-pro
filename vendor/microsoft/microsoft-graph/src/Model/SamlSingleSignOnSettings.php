<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SamlSingleSignOnSettings File
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
* SamlSingleSignOnSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SamlSingleSignOnSettings extends Entity
{
    /**
    * Gets the relayState
    * The relative URI the service provider would redirect to after completion of the single sign-on flow.
    *
    * @return string The relayState
    */
    public function getRelayState()
    {
        if (array_key_exists("relayState", $this->_propDict)) {
            return $this->_propDict["relayState"];
        } else {
            return null;
        }
    }

    /**
    * Sets the relayState
    * The relative URI the service provider would redirect to after completion of the single sign-on flow.
    *
    * @param string $val The value of the relayState
    *
    * @return SamlSingleSignOnSettings
    */
    public function setRelayState($val)
    {
        $this->_propDict["relayState"] = $val;
        return $this;
    }
}
