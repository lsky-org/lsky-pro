<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Photo File
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
* Photo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Photo extends Entity
{
    /**
    * Gets the cameraMake
    * Camera manufacturer. Read-only.
    *
    * @return string The cameraMake
    */
    public function getCameraMake()
    {
        if (array_key_exists("cameraMake", $this->_propDict)) {
            return $this->_propDict["cameraMake"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraMake
    * Camera manufacturer. Read-only.
    *
    * @param string $val The value of the cameraMake
    *
    * @return Photo
    */
    public function setCameraMake($val)
    {
        $this->_propDict["cameraMake"] = $val;
        return $this;
    }
    /**
    * Gets the cameraModel
    * Camera model. Read-only.
    *
    * @return string The cameraModel
    */
    public function getCameraModel()
    {
        if (array_key_exists("cameraModel", $this->_propDict)) {
            return $this->_propDict["cameraModel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cameraModel
    * Camera model. Read-only.
    *
    * @param string $val The value of the cameraModel
    *
    * @return Photo
    */
    public function setCameraModel($val)
    {
        $this->_propDict["cameraModel"] = $val;
        return $this;
    }
    /**
    * Gets the exposureDenominator
    * The denominator for the exposure time fraction from the camera. Read-only.
    *
    * @return float The exposureDenominator
    */
    public function getExposureDenominator()
    {
        if (array_key_exists("exposureDenominator", $this->_propDict)) {
            return $this->_propDict["exposureDenominator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exposureDenominator
    * The denominator for the exposure time fraction from the camera. Read-only.
    *
    * @param float $val The value of the exposureDenominator
    *
    * @return Photo
    */
    public function setExposureDenominator($val)
    {
        $this->_propDict["exposureDenominator"] = $val;
        return $this;
    }
    /**
    * Gets the exposureNumerator
    * The numerator for the exposure time fraction from the camera. Read-only.
    *
    * @return float The exposureNumerator
    */
    public function getExposureNumerator()
    {
        if (array_key_exists("exposureNumerator", $this->_propDict)) {
            return $this->_propDict["exposureNumerator"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exposureNumerator
    * The numerator for the exposure time fraction from the camera. Read-only.
    *
    * @param float $val The value of the exposureNumerator
    *
    * @return Photo
    */
    public function setExposureNumerator($val)
    {
        $this->_propDict["exposureNumerator"] = $val;
        return $this;
    }
    /**
    * Gets the fNumber
    * The F-stop value from the camera. Read-only.
    *
    * @return float The fNumber
    */
    public function getFNumber()
    {
        if (array_key_exists("fNumber", $this->_propDict)) {
            return $this->_propDict["fNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fNumber
    * The F-stop value from the camera. Read-only.
    *
    * @param float $val The value of the fNumber
    *
    * @return Photo
    */
    public function setFNumber($val)
    {
        $this->_propDict["fNumber"] = $val;
        return $this;
    }
    /**
    * Gets the focalLength
    * The focal length from the camera. Read-only.
    *
    * @return float The focalLength
    */
    public function getFocalLength()
    {
        if (array_key_exists("focalLength", $this->_propDict)) {
            return $this->_propDict["focalLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the focalLength
    * The focal length from the camera. Read-only.
    *
    * @param float $val The value of the focalLength
    *
    * @return Photo
    */
    public function setFocalLength($val)
    {
        $this->_propDict["focalLength"] = $val;
        return $this;
    }
    /**
    * Gets the iso
    * The ISO value from the camera. Read-only.
    *
    * @return int The iso
    */
    public function getIso()
    {
        if (array_key_exists("iso", $this->_propDict)) {
            return $this->_propDict["iso"];
        } else {
            return null;
        }
    }

    /**
    * Sets the iso
    * The ISO value from the camera. Read-only.
    *
    * @param int $val The value of the iso
    *
    * @return Photo
    */
    public function setIso($val)
    {
        $this->_propDict["iso"] = $val;
        return $this;
    }
    /**
    * Gets the orientation
    * The orientation value from the camera. Writable on OneDrive Personal.
    *
    * @return int The orientation
    */
    public function getOrientation()
    {
        if (array_key_exists("orientation", $this->_propDict)) {
            return $this->_propDict["orientation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the orientation
    * The orientation value from the camera. Writable on OneDrive Personal.
    *
    * @param int $val The value of the orientation
    *
    * @return Photo
    */
    public function setOrientation($val)
    {
        $this->_propDict["orientation"] = $val;
        return $this;
    }

    /**
    * Gets the takenDateTime
    * The date and time the photo was taken in UTC time. Read-only.
    *
    * @return \DateTime The takenDateTime
    */
    public function getTakenDateTime()
    {
        if (array_key_exists("takenDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["takenDateTime"], "\DateTime")) {
                return $this->_propDict["takenDateTime"];
            } else {
                $this->_propDict["takenDateTime"] = new \DateTime($this->_propDict["takenDateTime"]);
                return $this->_propDict["takenDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the takenDateTime
    * The date and time the photo was taken in UTC time. Read-only.
    *
    * @param \DateTime $val The value to assign to the takenDateTime
    *
    * @return Photo The Photo
    */
    public function setTakenDateTime($val)
    {
        $this->_propDict["takenDateTime"] = $val;
         return $this;
    }
}
