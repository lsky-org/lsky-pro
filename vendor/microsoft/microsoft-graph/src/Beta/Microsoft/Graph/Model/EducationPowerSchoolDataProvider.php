<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationPowerSchoolDataProvider File
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
* EducationPowerSchoolDataProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationPowerSchoolDataProvider extends EducationSynchronizationDataProvider
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.educationPowerSchoolDataProvider");
    }

    /**
    * Gets the allowTeachersInMultipleSchools
    * Indicates whether the source has multiple identifiers for a single student or teacher.
    *
    * @return bool The allowTeachersInMultipleSchools
    */
    public function getAllowTeachersInMultipleSchools()
    {
        if (array_key_exists("allowTeachersInMultipleSchools", $this->_propDict)) {
            return $this->_propDict["allowTeachersInMultipleSchools"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowTeachersInMultipleSchools
    * Indicates whether the source has multiple identifiers for a single student or teacher.
    *
    * @param bool $val The value of the allowTeachersInMultipleSchools
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setAllowTeachersInMultipleSchools($val)
    {
        $this->_propDict["allowTeachersInMultipleSchools"] = $val;
        return $this;
    }
    /**
    * Gets the clientId
    * The client ID used to connect to PowerSchool.
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientId
    * The client ID used to connect to PowerSchool.
    *
    * @param string $val The value of the clientId
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    /**
    * Gets the clientSecret
    * The client secret to authenticate the connection to the PowerSchool instance.
    *
    * @return string The clientSecret
    */
    public function getClientSecret()
    {
        if (array_key_exists("clientSecret", $this->_propDict)) {
            return $this->_propDict["clientSecret"];
        } else {
            return null;
        }
    }

    /**
    * Sets the clientSecret
    * The client secret to authenticate the connection to the PowerSchool instance.
    *
    * @param string $val The value of the clientSecret
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setClientSecret($val)
    {
        $this->_propDict["clientSecret"] = $val;
        return $this;
    }
    /**
    * Gets the connectionUrl
    * The connection URL to the PowerSchool instance.
    *
    * @return string The connectionUrl
    */
    public function getConnectionUrl()
    {
        if (array_key_exists("connectionUrl", $this->_propDict)) {
            return $this->_propDict["connectionUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the connectionUrl
    * The connection URL to the PowerSchool instance.
    *
    * @param string $val The value of the connectionUrl
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setConnectionUrl($val)
    {
        $this->_propDict["connectionUrl"] = $val;
        return $this;
    }

    /**
    * Gets the customizations
    * Optional customization to be applied to the synchronization profile.
    *
    * @return EducationSynchronizationCustomizations The customizations
    */
    public function getCustomizations()
    {
        if (array_key_exists("customizations", $this->_propDict)) {
            if (is_a($this->_propDict["customizations"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomizations")) {
                return $this->_propDict["customizations"];
            } else {
                $this->_propDict["customizations"] = new EducationSynchronizationCustomizations($this->_propDict["customizations"]);
                return $this->_propDict["customizations"];
            }
        }
        return null;
    }

    /**
    * Sets the customizations
    * Optional customization to be applied to the synchronization profile.
    *
    * @param EducationSynchronizationCustomizations $val The value to assign to the customizations
    *
    * @return EducationPowerSchoolDataProvider The EducationPowerSchoolDataProvider
    */
    public function setCustomizations($val)
    {
        $this->_propDict["customizations"] = $val;
         return $this;
    }
    /**
    * Gets the schoolsIds
    * The list of schools to sync.
    *
    * @return string The schoolsIds
    */
    public function getSchoolsIds()
    {
        if (array_key_exists("schoolsIds", $this->_propDict)) {
            return $this->_propDict["schoolsIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolsIds
    * The list of schools to sync.
    *
    * @param string $val The value of the schoolsIds
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setSchoolsIds($val)
    {
        $this->_propDict["schoolsIds"] = $val;
        return $this;
    }
    /**
    * Gets the schoolYear
    * The school year to sync.
    *
    * @return string The schoolYear
    */
    public function getSchoolYear()
    {
        if (array_key_exists("schoolYear", $this->_propDict)) {
            return $this->_propDict["schoolYear"];
        } else {
            return null;
        }
    }

    /**
    * Sets the schoolYear
    * The school year to sync.
    *
    * @param string $val The value of the schoolYear
    *
    * @return EducationPowerSchoolDataProvider
    */
    public function setSchoolYear($val)
    {
        $this->_propDict["schoolYear"] = $val;
        return $this;
    }
}
