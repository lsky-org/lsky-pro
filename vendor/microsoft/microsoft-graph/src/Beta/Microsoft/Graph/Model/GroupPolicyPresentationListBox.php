<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicyPresentationListBox File
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
* GroupPolicyPresentationListBox class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicyPresentationListBox extends GroupPolicyPresentation
{
    /**
    * Gets the explicitValue
    * If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
    *
    * @return bool The explicitValue
    */
    public function getExplicitValue()
    {
        if (array_key_exists("explicitValue", $this->_propDict)) {
            return $this->_propDict["explicitValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the explicitValue
    * If this option is specified true the user must specify the registry subkey value and the registry subkey name. The list box shows two columns, one for the name and one for the data. The default value is false.
    *
    * @param bool $val The explicitValue
    *
    * @return GroupPolicyPresentationListBox
    */
    public function setExplicitValue($val)
    {
        $this->_propDict["explicitValue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the valuePrefix
    * Not yet documented
    *
    * @return string The valuePrefix
    */
    public function getValuePrefix()
    {
        if (array_key_exists("valuePrefix", $this->_propDict)) {
            return $this->_propDict["valuePrefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the valuePrefix
    * Not yet documented
    *
    * @param string $val The valuePrefix
    *
    * @return GroupPolicyPresentationListBox
    */
    public function setValuePrefix($val)
    {
        $this->_propDict["valuePrefix"] = $val;
        return $this;
    }
    
}
