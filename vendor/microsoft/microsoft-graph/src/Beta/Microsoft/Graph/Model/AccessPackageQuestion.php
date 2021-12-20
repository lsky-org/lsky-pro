<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageQuestion File
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
* AccessPackageQuestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageQuestion extends Entity
{
    /**
    * Gets the id
    * ID of the question.
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
    * ID of the question.
    *
    * @param string $val The value of the id
    *
    * @return AccessPackageQuestion
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the isRequired
    * Whether the requestor is required to supply an answer or not.
    *
    * @return bool The isRequired
    */
    public function getIsRequired()
    {
        if (array_key_exists("isRequired", $this->_propDict)) {
            return $this->_propDict["isRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isRequired
    * Whether the requestor is required to supply an answer or not.
    *
    * @param bool $val The value of the isRequired
    *
    * @return AccessPackageQuestion
    */
    public function setIsRequired($val)
    {
        $this->_propDict["isRequired"] = $val;
        return $this;
    }
    /**
    * Gets the sequence
    * Relative position of this question when displaying a list of questions to the requestor.
    *
    * @return int The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sequence
    * Relative position of this question when displaying a list of questions to the requestor.
    *
    * @param int $val The value of the sequence
    *
    * @return AccessPackageQuestion
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = $val;
        return $this;
    }

    /**
    * Gets the text
    * The text of the question to show to the requestor.
    *
    * @return AccessPackageLocalizedContent The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "\Beta\Microsoft\Graph\Model\AccessPackageLocalizedContent")) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new AccessPackageLocalizedContent($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }

    /**
    * Sets the text
    * The text of the question to show to the requestor.
    *
    * @param AccessPackageLocalizedContent $val The value to assign to the text
    *
    * @return AccessPackageQuestion The AccessPackageQuestion
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
         return $this;
    }
}
