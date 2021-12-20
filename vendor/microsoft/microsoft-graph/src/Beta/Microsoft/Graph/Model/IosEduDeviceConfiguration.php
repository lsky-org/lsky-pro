<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosEduDeviceConfiguration File
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
* IosEduDeviceConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosEduDeviceConfiguration extends DeviceConfiguration
{
    /**
    * Gets the deviceCertificateSettings
    * The Trusted Root and PFX certificates for Device
    *
    * @return IosEduCertificateSettings The deviceCertificateSettings
    */
    public function getDeviceCertificateSettings()
    {
        if (array_key_exists("deviceCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCertificateSettings"], "\Beta\Microsoft\Graph\Model\IosEduCertificateSettings")) {
                return $this->_propDict["deviceCertificateSettings"];
            } else {
                $this->_propDict["deviceCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["deviceCertificateSettings"]);
                return $this->_propDict["deviceCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCertificateSettings
    * The Trusted Root and PFX certificates for Device
    *
    * @param IosEduCertificateSettings $val The deviceCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setDeviceCertificateSettings($val)
    {
        $this->_propDict["deviceCertificateSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the studentCertificateSettings
    * The Trusted Root and PFX certificates for Student
    *
    * @return IosEduCertificateSettings The studentCertificateSettings
    */
    public function getStudentCertificateSettings()
    {
        if (array_key_exists("studentCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["studentCertificateSettings"], "\Beta\Microsoft\Graph\Model\IosEduCertificateSettings")) {
                return $this->_propDict["studentCertificateSettings"];
            } else {
                $this->_propDict["studentCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["studentCertificateSettings"]);
                return $this->_propDict["studentCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the studentCertificateSettings
    * The Trusted Root and PFX certificates for Student
    *
    * @param IosEduCertificateSettings $val The studentCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setStudentCertificateSettings($val)
    {
        $this->_propDict["studentCertificateSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the teacherCertificateSettings
    * The Trusted Root and PFX certificates for Teacher
    *
    * @return IosEduCertificateSettings The teacherCertificateSettings
    */
    public function getTeacherCertificateSettings()
    {
        if (array_key_exists("teacherCertificateSettings", $this->_propDict)) {
            if (is_a($this->_propDict["teacherCertificateSettings"], "\Beta\Microsoft\Graph\Model\IosEduCertificateSettings")) {
                return $this->_propDict["teacherCertificateSettings"];
            } else {
                $this->_propDict["teacherCertificateSettings"] = new IosEduCertificateSettings($this->_propDict["teacherCertificateSettings"]);
                return $this->_propDict["teacherCertificateSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the teacherCertificateSettings
    * The Trusted Root and PFX certificates for Teacher
    *
    * @param IosEduCertificateSettings $val The teacherCertificateSettings
    *
    * @return IosEduDeviceConfiguration
    */
    public function setTeacherCertificateSettings($val)
    {
        $this->_propDict["teacherCertificateSettings"] = $val;
        return $this;
    }
    
}
