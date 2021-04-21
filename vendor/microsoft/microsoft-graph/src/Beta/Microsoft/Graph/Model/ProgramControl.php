<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProgramControl File
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
* ProgramControl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProgramControl extends Entity
{
    /**
    * Gets the controlId
    * The controlId of the control, in particular the identifier of an access review. Required on create.
    *
    * @return string The controlId
    */
    public function getControlId()
    {
        if (array_key_exists("controlId", $this->_propDict)) {
            return $this->_propDict["controlId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the controlId
    * The controlId of the control, in particular the identifier of an access review. Required on create.
    *
    * @param string $val The controlId
    *
    * @return ProgramControl
    */
    public function setControlId($val)
    {
        $this->_propDict["controlId"] = $val;
        return $this;
    }
    
    /**
    * Gets the controlTypeId
    * The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
    *
    * @return string The controlTypeId
    */
    public function getControlTypeId()
    {
        if (array_key_exists("controlTypeId", $this->_propDict)) {
            return $this->_propDict["controlTypeId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the controlTypeId
    * The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
    *
    * @param string $val The controlTypeId
    *
    * @return ProgramControl
    */
    public function setControlTypeId($val)
    {
        $this->_propDict["controlTypeId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The creation date and time of the program control.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The creation date and time of the program control.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ProgramControl
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the control.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the control.
    *
    * @param string $val The displayName
    *
    * @return ProgramControl
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    * The user who created the program control.
    *
    * @return UserIdentity The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "\Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new UserIdentity($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the owner
    * The user who created the program control.
    *
    * @param UserIdentity $val The owner
    *
    * @return ProgramControl
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the programId
    * The programId of the program this control is a part of. Required on create.
    *
    * @return string The programId
    */
    public function getProgramId()
    {
        if (array_key_exists("programId", $this->_propDict)) {
            return $this->_propDict["programId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the programId
    * The programId of the program this control is a part of. Required on create.
    *
    * @param string $val The programId
    *
    * @return ProgramControl
    */
    public function setProgramId($val)
    {
        $this->_propDict["programId"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * The resource, a group or an app, targeted by this program control's access review.
    *
    * @return ProgramResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\ProgramResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new ProgramResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * The resource, a group or an app, targeted by this program control's access review.
    *
    * @param ProgramResource $val The resource
    *
    * @return ProgramControl
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The life cycle status of the control.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * The life cycle status of the control.
    *
    * @param string $val The status
    *
    * @return ProgramControl
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the program
    * The program this control is part of.
    *
    * @return Program The program
    */
    public function getProgram()
    {
        if (array_key_exists("program", $this->_propDict)) {
            if (is_a($this->_propDict["program"], "\Beta\Microsoft\Graph\Model\Program")) {
                return $this->_propDict["program"];
            } else {
                $this->_propDict["program"] = new Program($this->_propDict["program"]);
                return $this->_propDict["program"];
            }
        }
        return null;
    }
    
    /**
    * Sets the program
    * The program this control is part of.
    *
    * @param Program $val The program
    *
    * @return ProgramControl
    */
    public function setProgram($val)
    {
        $this->_propDict["program"] = $val;
        return $this;
    }
    
}
