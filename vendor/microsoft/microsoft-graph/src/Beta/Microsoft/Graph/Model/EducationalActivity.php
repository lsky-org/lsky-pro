<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationalActivity File
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
* EducationalActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationalActivity extends ItemFacet
{
    /**
    * Gets the completionMonthYear
    * The month and year the user graduated or completed the activity.
    *
    * @return \DateTime The completionMonthYear
    */
    public function getCompletionMonthYear()
    {
        if (array_key_exists("completionMonthYear", $this->_propDict)) {
            if (is_a($this->_propDict["completionMonthYear"], "\DateTime")) {
                return $this->_propDict["completionMonthYear"];
            } else {
                $this->_propDict["completionMonthYear"] = new \DateTime($this->_propDict["completionMonthYear"]);
                return $this->_propDict["completionMonthYear"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completionMonthYear
    * The month and year the user graduated or completed the activity.
    *
    * @param \DateTime $val The completionMonthYear
    *
    * @return EducationalActivity
    */
    public function setCompletionMonthYear($val)
    {
        $this->_propDict["completionMonthYear"] = $val;
        return $this;
    }
    
    /**
    * Gets the endMonthYear
    * The month and year the user completed the educational activity referenced.
    *
    * @return \DateTime The endMonthYear
    */
    public function getEndMonthYear()
    {
        if (array_key_exists("endMonthYear", $this->_propDict)) {
            if (is_a($this->_propDict["endMonthYear"], "\DateTime")) {
                return $this->_propDict["endMonthYear"];
            } else {
                $this->_propDict["endMonthYear"] = new \DateTime($this->_propDict["endMonthYear"]);
                return $this->_propDict["endMonthYear"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endMonthYear
    * The month and year the user completed the educational activity referenced.
    *
    * @param \DateTime $val The endMonthYear
    *
    * @return EducationalActivity
    */
    public function setEndMonthYear($val)
    {
        $this->_propDict["endMonthYear"] = $val;
        return $this;
    }
    
    /**
    * Gets the institution
    * Contains details of the institution studied at.
    *
    * @return InstitutionData The institution
    */
    public function getInstitution()
    {
        if (array_key_exists("institution", $this->_propDict)) {
            if (is_a($this->_propDict["institution"], "\Beta\Microsoft\Graph\Model\InstitutionData")) {
                return $this->_propDict["institution"];
            } else {
                $this->_propDict["institution"] = new InstitutionData($this->_propDict["institution"]);
                return $this->_propDict["institution"];
            }
        }
        return null;
    }
    
    /**
    * Sets the institution
    * Contains details of the institution studied at.
    *
    * @param InstitutionData $val The institution
    *
    * @return EducationalActivity
    */
    public function setInstitution($val)
    {
        $this->_propDict["institution"] = $val;
        return $this;
    }
    
    /**
    * Gets the program
    * Contains extended information about the program or course.
    *
    * @return EducationalActivityDetail The program
    */
    public function getProgram()
    {
        if (array_key_exists("program", $this->_propDict)) {
            if (is_a($this->_propDict["program"], "\Beta\Microsoft\Graph\Model\EducationalActivityDetail")) {
                return $this->_propDict["program"];
            } else {
                $this->_propDict["program"] = new EducationalActivityDetail($this->_propDict["program"]);
                return $this->_propDict["program"];
            }
        }
        return null;
    }
    
    /**
    * Sets the program
    * Contains extended information about the program or course.
    *
    * @param EducationalActivityDetail $val The program
    *
    * @return EducationalActivity
    */
    public function setProgram($val)
    {
        $this->_propDict["program"] = $val;
        return $this;
    }
    
    /**
    * Gets the startMonthYear
    * The month and year the user commenced the activity referenced.
    *
    * @return \DateTime The startMonthYear
    */
    public function getStartMonthYear()
    {
        if (array_key_exists("startMonthYear", $this->_propDict)) {
            if (is_a($this->_propDict["startMonthYear"], "\DateTime")) {
                return $this->_propDict["startMonthYear"];
            } else {
                $this->_propDict["startMonthYear"] = new \DateTime($this->_propDict["startMonthYear"]);
                return $this->_propDict["startMonthYear"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMonthYear
    * The month and year the user commenced the activity referenced.
    *
    * @param \DateTime $val The startMonthYear
    *
    * @return EducationalActivity
    */
    public function setStartMonthYear($val)
    {
        $this->_propDict["startMonthYear"] = $val;
        return $this;
    }
    
}
