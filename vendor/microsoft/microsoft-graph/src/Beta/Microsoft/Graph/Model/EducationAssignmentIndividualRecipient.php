<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignmentIndividualRecipient File
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
* EducationAssignmentIndividualRecipient class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignmentIndividualRecipient extends EducationAssignmentRecipient
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationAssignmentIndividualRecipient");
    }

    /**
    * Gets the recipients
    * A collection of ids of the recipients.
    *
    * @return string The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
            return $this->_propDict["recipients"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recipients
    * A collection of ids of the recipients.
    *
    * @param string $val The value of the recipients
    *
    * @return EducationAssignmentIndividualRecipient
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
        return $this;
    }
}
