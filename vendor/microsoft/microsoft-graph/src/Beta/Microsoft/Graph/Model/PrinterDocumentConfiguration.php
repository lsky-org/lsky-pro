<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterDocumentConfiguration File
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
* PrinterDocumentConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterDocumentConfiguration extends Entity
{
    /**
    * Gets the collate
    *
    * @return bool The collate
    */
    public function getCollate()
    {
        if (array_key_exists("collate", $this->_propDict)) {
            return $this->_propDict["collate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the collate
    *
    * @param bool $val The value of the collate
    *
    * @return PrinterDocumentConfiguration
    */
    public function setCollate($val)
    {
        $this->_propDict["collate"] = $val;
        return $this;
    }

    /**
    * Gets the colorMode
    *
    * @return PrintColorMode The colorMode
    */
    public function getColorMode()
    {
        if (array_key_exists("colorMode", $this->_propDict)) {
            if (is_a($this->_propDict["colorMode"], "\Beta\Microsoft\Graph\Model\PrintColorMode")) {
                return $this->_propDict["colorMode"];
            } else {
                $this->_propDict["colorMode"] = new PrintColorMode($this->_propDict["colorMode"]);
                return $this->_propDict["colorMode"];
            }
        }
        return null;
    }

    /**
    * Sets the colorMode
    *
    * @param PrintColorMode $val The value to assign to the colorMode
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setColorMode($val)
    {
        $this->_propDict["colorMode"] = $val;
         return $this;
    }
    /**
    * Gets the copies
    *
    * @return int The copies
    */
    public function getCopies()
    {
        if (array_key_exists("copies", $this->_propDict)) {
            return $this->_propDict["copies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copies
    *
    * @param int $val The value of the copies
    *
    * @return PrinterDocumentConfiguration
    */
    public function setCopies($val)
    {
        $this->_propDict["copies"] = $val;
        return $this;
    }
    /**
    * Gets the dpi
    *
    * @return int The dpi
    */
    public function getDpi()
    {
        if (array_key_exists("dpi", $this->_propDict)) {
            return $this->_propDict["dpi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dpi
    *
    * @param int $val The value of the dpi
    *
    * @return PrinterDocumentConfiguration
    */
    public function setDpi($val)
    {
        $this->_propDict["dpi"] = $val;
        return $this;
    }

    /**
    * Gets the duplexMode
    *
    * @return PrintDuplexMode The duplexMode
    */
    public function getDuplexMode()
    {
        if (array_key_exists("duplexMode", $this->_propDict)) {
            if (is_a($this->_propDict["duplexMode"], "\Beta\Microsoft\Graph\Model\PrintDuplexMode")) {
                return $this->_propDict["duplexMode"];
            } else {
                $this->_propDict["duplexMode"] = new PrintDuplexMode($this->_propDict["duplexMode"]);
                return $this->_propDict["duplexMode"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexMode
    *
    * @param PrintDuplexMode $val The value to assign to the duplexMode
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setDuplexMode($val)
    {
        $this->_propDict["duplexMode"] = $val;
         return $this;
    }

    /**
    * Gets the feedDirection
    *
    * @return PrinterFeedDirection The feedDirection
    */
    public function getFeedDirection()
    {
        if (array_key_exists("feedDirection", $this->_propDict)) {
            if (is_a($this->_propDict["feedDirection"], "\Beta\Microsoft\Graph\Model\PrinterFeedDirection")) {
                return $this->_propDict["feedDirection"];
            } else {
                $this->_propDict["feedDirection"] = new PrinterFeedDirection($this->_propDict["feedDirection"]);
                return $this->_propDict["feedDirection"];
            }
        }
        return null;
    }

    /**
    * Sets the feedDirection
    *
    * @param PrinterFeedDirection $val The value to assign to the feedDirection
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setFeedDirection($val)
    {
        $this->_propDict["feedDirection"] = $val;
         return $this;
    }

    /**
    * Gets the feedOrientation
    *
    * @return PrinterFeedOrientation The feedOrientation
    */
    public function getFeedOrientation()
    {
        if (array_key_exists("feedOrientation", $this->_propDict)) {
            if (is_a($this->_propDict["feedOrientation"], "\Beta\Microsoft\Graph\Model\PrinterFeedOrientation")) {
                return $this->_propDict["feedOrientation"];
            } else {
                $this->_propDict["feedOrientation"] = new PrinterFeedOrientation($this->_propDict["feedOrientation"]);
                return $this->_propDict["feedOrientation"];
            }
        }
        return null;
    }

    /**
    * Sets the feedOrientation
    *
    * @param PrinterFeedOrientation $val The value to assign to the feedOrientation
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setFeedOrientation($val)
    {
        $this->_propDict["feedOrientation"] = $val;
         return $this;
    }

    /**
    * Gets the finishings
    *
    * @return PrintFinishing The finishings
    */
    public function getFinishings()
    {
        if (array_key_exists("finishings", $this->_propDict)) {
            if (is_a($this->_propDict["finishings"], "\Beta\Microsoft\Graph\Model\PrintFinishing")) {
                return $this->_propDict["finishings"];
            } else {
                $this->_propDict["finishings"] = new PrintFinishing($this->_propDict["finishings"]);
                return $this->_propDict["finishings"];
            }
        }
        return null;
    }

    /**
    * Sets the finishings
    *
    * @param PrintFinishing $val The value to assign to the finishings
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setFinishings($val)
    {
        $this->_propDict["finishings"] = $val;
         return $this;
    }
    /**
    * Gets the fitPdfToPage
    *
    * @return bool The fitPdfToPage
    */
    public function getFitPdfToPage()
    {
        if (array_key_exists("fitPdfToPage", $this->_propDict)) {
            return $this->_propDict["fitPdfToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fitPdfToPage
    *
    * @param bool $val The value of the fitPdfToPage
    *
    * @return PrinterDocumentConfiguration
    */
    public function setFitPdfToPage($val)
    {
        $this->_propDict["fitPdfToPage"] = $val;
        return $this;
    }
    /**
    * Gets the inputBin
    *
    * @return string The inputBin
    */
    public function getInputBin()
    {
        if (array_key_exists("inputBin", $this->_propDict)) {
            return $this->_propDict["inputBin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inputBin
    *
    * @param string $val The value of the inputBin
    *
    * @return PrinterDocumentConfiguration
    */
    public function setInputBin($val)
    {
        $this->_propDict["inputBin"] = $val;
        return $this;
    }

    /**
    * Gets the margin
    *
    * @return PrintMargin The margin
    */
    public function getMargin()
    {
        if (array_key_exists("margin", $this->_propDict)) {
            if (is_a($this->_propDict["margin"], "\Beta\Microsoft\Graph\Model\PrintMargin")) {
                return $this->_propDict["margin"];
            } else {
                $this->_propDict["margin"] = new PrintMargin($this->_propDict["margin"]);
                return $this->_propDict["margin"];
            }
        }
        return null;
    }

    /**
    * Sets the margin
    *
    * @param PrintMargin $val The value to assign to the margin
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setMargin($val)
    {
        $this->_propDict["margin"] = $val;
         return $this;
    }
    /**
    * Gets the mediaSize
    *
    * @return string The mediaSize
    */
    public function getMediaSize()
    {
        if (array_key_exists("mediaSize", $this->_propDict)) {
            return $this->_propDict["mediaSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSize
    *
    * @param string $val The value of the mediaSize
    *
    * @return PrinterDocumentConfiguration
    */
    public function setMediaSize($val)
    {
        $this->_propDict["mediaSize"] = $val;
        return $this;
    }
    /**
    * Gets the mediaType
    *
    * @return string The mediaType
    */
    public function getMediaType()
    {
        if (array_key_exists("mediaType", $this->_propDict)) {
            return $this->_propDict["mediaType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaType
    *
    * @param string $val The value of the mediaType
    *
    * @return PrinterDocumentConfiguration
    */
    public function setMediaType($val)
    {
        $this->_propDict["mediaType"] = $val;
        return $this;
    }

    /**
    * Gets the multipageLayout
    *
    * @return PrintMultipageLayout The multipageLayout
    */
    public function getMultipageLayout()
    {
        if (array_key_exists("multipageLayout", $this->_propDict)) {
            if (is_a($this->_propDict["multipageLayout"], "\Beta\Microsoft\Graph\Model\PrintMultipageLayout")) {
                return $this->_propDict["multipageLayout"];
            } else {
                $this->_propDict["multipageLayout"] = new PrintMultipageLayout($this->_propDict["multipageLayout"]);
                return $this->_propDict["multipageLayout"];
            }
        }
        return null;
    }

    /**
    * Sets the multipageLayout
    *
    * @param PrintMultipageLayout $val The value to assign to the multipageLayout
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setMultipageLayout($val)
    {
        $this->_propDict["multipageLayout"] = $val;
         return $this;
    }

    /**
    * Gets the orientation
    *
    * @return PrintOrientation The orientation
    */
    public function getOrientation()
    {
        if (array_key_exists("orientation", $this->_propDict)) {
            if (is_a($this->_propDict["orientation"], "\Beta\Microsoft\Graph\Model\PrintOrientation")) {
                return $this->_propDict["orientation"];
            } else {
                $this->_propDict["orientation"] = new PrintOrientation($this->_propDict["orientation"]);
                return $this->_propDict["orientation"];
            }
        }
        return null;
    }

    /**
    * Sets the orientation
    *
    * @param PrintOrientation $val The value to assign to the orientation
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setOrientation($val)
    {
        $this->_propDict["orientation"] = $val;
         return $this;
    }
    /**
    * Gets the outputBin
    *
    * @return string The outputBin
    */
    public function getOutputBin()
    {
        if (array_key_exists("outputBin", $this->_propDict)) {
            return $this->_propDict["outputBin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputBin
    *
    * @param string $val The value of the outputBin
    *
    * @return PrinterDocumentConfiguration
    */
    public function setOutputBin($val)
    {
        $this->_propDict["outputBin"] = $val;
        return $this;
    }

    /**
    * Gets the pageRanges
    *
    * @return IntegerRange The pageRanges
    */
    public function getPageRanges()
    {
        if (array_key_exists("pageRanges", $this->_propDict)) {
            if (is_a($this->_propDict["pageRanges"], "\Beta\Microsoft\Graph\Model\IntegerRange")) {
                return $this->_propDict["pageRanges"];
            } else {
                $this->_propDict["pageRanges"] = new IntegerRange($this->_propDict["pageRanges"]);
                return $this->_propDict["pageRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the pageRanges
    *
    * @param IntegerRange $val The value to assign to the pageRanges
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setPageRanges($val)
    {
        $this->_propDict["pageRanges"] = $val;
         return $this;
    }
    /**
    * Gets the pagesPerSheet
    *
    * @return int The pagesPerSheet
    */
    public function getPagesPerSheet()
    {
        if (array_key_exists("pagesPerSheet", $this->_propDict)) {
            return $this->_propDict["pagesPerSheet"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pagesPerSheet
    *
    * @param int $val The value of the pagesPerSheet
    *
    * @return PrinterDocumentConfiguration
    */
    public function setPagesPerSheet($val)
    {
        $this->_propDict["pagesPerSheet"] = $val;
        return $this;
    }

    /**
    * Gets the quality
    *
    * @return PrintQuality The quality
    */
    public function getQuality()
    {
        if (array_key_exists("quality", $this->_propDict)) {
            if (is_a($this->_propDict["quality"], "\Beta\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["quality"];
            } else {
                $this->_propDict["quality"] = new PrintQuality($this->_propDict["quality"]);
                return $this->_propDict["quality"];
            }
        }
        return null;
    }

    /**
    * Sets the quality
    *
    * @param PrintQuality $val The value to assign to the quality
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setQuality($val)
    {
        $this->_propDict["quality"] = $val;
         return $this;
    }

    /**
    * Gets the scaling
    *
    * @return PrintScaling The scaling
    */
    public function getScaling()
    {
        if (array_key_exists("scaling", $this->_propDict)) {
            if (is_a($this->_propDict["scaling"], "\Beta\Microsoft\Graph\Model\PrintScaling")) {
                return $this->_propDict["scaling"];
            } else {
                $this->_propDict["scaling"] = new PrintScaling($this->_propDict["scaling"]);
                return $this->_propDict["scaling"];
            }
        }
        return null;
    }

    /**
    * Sets the scaling
    *
    * @param PrintScaling $val The value to assign to the scaling
    *
    * @return PrinterDocumentConfiguration The PrinterDocumentConfiguration
    */
    public function setScaling($val)
    {
        $this->_propDict["scaling"] = $val;
         return $this;
    }
}
