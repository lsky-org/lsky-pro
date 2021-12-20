<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterCapabilities File
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
* PrinterCapabilities class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterCapabilities extends Entity
{
    /**
    * Gets the bottomMargins
    * A list of supported bottom margins(in microns) for the printer.
    *
    * @return int The bottomMargins
    */
    public function getBottomMargins()
    {
        if (array_key_exists("bottomMargins", $this->_propDict)) {
            return $this->_propDict["bottomMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bottomMargins
    * A list of supported bottom margins(in microns) for the printer.
    *
    * @param int $val The value of the bottomMargins
    *
    * @return PrinterCapabilities
    */
    public function setBottomMargins($val)
    {
        $this->_propDict["bottomMargins"] = $val;
        return $this;
    }
    /**
    * Gets the collation
    * True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
    *
    * @return bool The collation
    */
    public function getCollation()
    {
        if (array_key_exists("collation", $this->_propDict)) {
            return $this->_propDict["collation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the collation
    * True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
    *
    * @param bool $val The value of the collation
    *
    * @return PrinterCapabilities
    */
    public function setCollation($val)
    {
        $this->_propDict["collation"] = $val;
        return $this;
    }

    /**
    * Gets the colorModes
    * The color modes supported by the printer. Valid values are described in the following table.
    *
    * @return PrintColorMode The colorModes
    */
    public function getColorModes()
    {
        if (array_key_exists("colorModes", $this->_propDict)) {
            if (is_a($this->_propDict["colorModes"], "\Beta\Microsoft\Graph\Model\PrintColorMode")) {
                return $this->_propDict["colorModes"];
            } else {
                $this->_propDict["colorModes"] = new PrintColorMode($this->_propDict["colorModes"]);
                return $this->_propDict["colorModes"];
            }
        }
        return null;
    }

    /**
    * Sets the colorModes
    * The color modes supported by the printer. Valid values are described in the following table.
    *
    * @param PrintColorMode $val The value to assign to the colorModes
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setColorModes($val)
    {
        $this->_propDict["colorModes"] = $val;
         return $this;
    }
    /**
    * Gets the contentTypes
    * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
    *
    * @return string The contentTypes
    */
    public function getContentTypes()
    {
        if (array_key_exists("contentTypes", $this->_propDict)) {
            return $this->_propDict["contentTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentTypes
    * A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
    *
    * @param string $val The value of the contentTypes
    *
    * @return PrinterCapabilities
    */
    public function setContentTypes($val)
    {
        $this->_propDict["contentTypes"] = $val;
        return $this;
    }

    /**
    * Gets the copiesPerJob
    * The range of copies per job supported by the printer.
    *
    * @return IntegerRange The copiesPerJob
    */
    public function getCopiesPerJob()
    {
        if (array_key_exists("copiesPerJob", $this->_propDict)) {
            if (is_a($this->_propDict["copiesPerJob"], "\Beta\Microsoft\Graph\Model\IntegerRange")) {
                return $this->_propDict["copiesPerJob"];
            } else {
                $this->_propDict["copiesPerJob"] = new IntegerRange($this->_propDict["copiesPerJob"]);
                return $this->_propDict["copiesPerJob"];
            }
        }
        return null;
    }

    /**
    * Sets the copiesPerJob
    * The range of copies per job supported by the printer.
    *
    * @param IntegerRange $val The value to assign to the copiesPerJob
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setCopiesPerJob($val)
    {
        $this->_propDict["copiesPerJob"] = $val;
         return $this;
    }
    /**
    * Gets the dpis
    * The list of print resolutions in DPI that are supported by the printer.
    *
    * @return int The dpis
    */
    public function getDpis()
    {
        if (array_key_exists("dpis", $this->_propDict)) {
            return $this->_propDict["dpis"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dpis
    * The list of print resolutions in DPI that are supported by the printer.
    *
    * @param int $val The value of the dpis
    *
    * @return PrinterCapabilities
    */
    public function setDpis($val)
    {
        $this->_propDict["dpis"] = $val;
        return $this;
    }

    /**
    * Gets the duplexModes
    * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
    *
    * @return PrintDuplexMode The duplexModes
    */
    public function getDuplexModes()
    {
        if (array_key_exists("duplexModes", $this->_propDict)) {
            if (is_a($this->_propDict["duplexModes"], "\Beta\Microsoft\Graph\Model\PrintDuplexMode")) {
                return $this->_propDict["duplexModes"];
            } else {
                $this->_propDict["duplexModes"] = new PrintDuplexMode($this->_propDict["duplexModes"]);
                return $this->_propDict["duplexModes"];
            }
        }
        return null;
    }

    /**
    * Sets the duplexModes
    * The list of duplex modes that are supported by the printer. Valid values are described in the following table.
    *
    * @param PrintDuplexMode $val The value to assign to the duplexModes
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setDuplexModes($val)
    {
        $this->_propDict["duplexModes"] = $val;
         return $this;
    }

    /**
    * Gets the feedDirections
    *
    * @return PrinterFeedDirection The feedDirections
    */
    public function getFeedDirections()
    {
        if (array_key_exists("feedDirections", $this->_propDict)) {
            if (is_a($this->_propDict["feedDirections"], "\Beta\Microsoft\Graph\Model\PrinterFeedDirection")) {
                return $this->_propDict["feedDirections"];
            } else {
                $this->_propDict["feedDirections"] = new PrinterFeedDirection($this->_propDict["feedDirections"]);
                return $this->_propDict["feedDirections"];
            }
        }
        return null;
    }

    /**
    * Sets the feedDirections
    *
    * @param PrinterFeedDirection $val The value to assign to the feedDirections
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setFeedDirections($val)
    {
        $this->_propDict["feedDirections"] = $val;
         return $this;
    }

    /**
    * Gets the feedOrientations
    * The list of feed orientations that are supported by the printer.
    *
    * @return PrinterFeedOrientation The feedOrientations
    */
    public function getFeedOrientations()
    {
        if (array_key_exists("feedOrientations", $this->_propDict)) {
            if (is_a($this->_propDict["feedOrientations"], "\Beta\Microsoft\Graph\Model\PrinterFeedOrientation")) {
                return $this->_propDict["feedOrientations"];
            } else {
                $this->_propDict["feedOrientations"] = new PrinterFeedOrientation($this->_propDict["feedOrientations"]);
                return $this->_propDict["feedOrientations"];
            }
        }
        return null;
    }

    /**
    * Sets the feedOrientations
    * The list of feed orientations that are supported by the printer.
    *
    * @param PrinterFeedOrientation $val The value to assign to the feedOrientations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setFeedOrientations($val)
    {
        $this->_propDict["feedOrientations"] = $val;
         return $this;
    }

    /**
    * Gets the finishings
    * Finishing processes the printer supports for a printed document.
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
    * Finishing processes the printer supports for a printed document.
    *
    * @param PrintFinishing $val The value to assign to the finishings
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setFinishings($val)
    {
        $this->_propDict["finishings"] = $val;
         return $this;
    }
    /**
    * Gets the inputBins
    * Supported input bins for the printer.
    *
    * @return string The inputBins
    */
    public function getInputBins()
    {
        if (array_key_exists("inputBins", $this->_propDict)) {
            return $this->_propDict["inputBins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inputBins
    * Supported input bins for the printer.
    *
    * @param string $val The value of the inputBins
    *
    * @return PrinterCapabilities
    */
    public function setInputBins($val)
    {
        $this->_propDict["inputBins"] = $val;
        return $this;
    }
    /**
    * Gets the isColorPrintingSupported
    * True if color printing is supported by the printer; false otherwise. Read-only.
    *
    * @return bool The isColorPrintingSupported
    */
    public function getIsColorPrintingSupported()
    {
        if (array_key_exists("isColorPrintingSupported", $this->_propDict)) {
            return $this->_propDict["isColorPrintingSupported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isColorPrintingSupported
    * True if color printing is supported by the printer; false otherwise. Read-only.
    *
    * @param bool $val The value of the isColorPrintingSupported
    *
    * @return PrinterCapabilities
    */
    public function setIsColorPrintingSupported($val)
    {
        $this->_propDict["isColorPrintingSupported"] = $val;
        return $this;
    }
    /**
    * Gets the isPageRangeSupported
    * True if the printer supports printing by page ranges; false otherwise.
    *
    * @return bool The isPageRangeSupported
    */
    public function getIsPageRangeSupported()
    {
        if (array_key_exists("isPageRangeSupported", $this->_propDict)) {
            return $this->_propDict["isPageRangeSupported"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPageRangeSupported
    * True if the printer supports printing by page ranges; false otherwise.
    *
    * @param bool $val The value of the isPageRangeSupported
    *
    * @return PrinterCapabilities
    */
    public function setIsPageRangeSupported($val)
    {
        $this->_propDict["isPageRangeSupported"] = $val;
        return $this;
    }
    /**
    * Gets the leftMargins
    * A list of supported left margins(in microns) for the printer.
    *
    * @return int The leftMargins
    */
    public function getLeftMargins()
    {
        if (array_key_exists("leftMargins", $this->_propDict)) {
            return $this->_propDict["leftMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the leftMargins
    * A list of supported left margins(in microns) for the printer.
    *
    * @param int $val The value of the leftMargins
    *
    * @return PrinterCapabilities
    */
    public function setLeftMargins($val)
    {
        $this->_propDict["leftMargins"] = $val;
        return $this;
    }
    /**
    * Gets the mediaColors
    * The media (i.e., paper) colors supported by the printer.
    *
    * @return string The mediaColors
    */
    public function getMediaColors()
    {
        if (array_key_exists("mediaColors", $this->_propDict)) {
            return $this->_propDict["mediaColors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaColors
    * The media (i.e., paper) colors supported by the printer.
    *
    * @param string $val The value of the mediaColors
    *
    * @return PrinterCapabilities
    */
    public function setMediaColors($val)
    {
        $this->_propDict["mediaColors"] = $val;
        return $this;
    }
    /**
    * Gets the mediaSizes
    * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes, along with any custom sizes supported by the associated printer.
    *
    * @return string The mediaSizes
    */
    public function getMediaSizes()
    {
        if (array_key_exists("mediaSizes", $this->_propDict)) {
            return $this->_propDict["mediaSizes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaSizes
    * The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes, along with any custom sizes supported by the associated printer.
    *
    * @param string $val The value of the mediaSizes
    *
    * @return PrinterCapabilities
    */
    public function setMediaSizes($val)
    {
        $this->_propDict["mediaSizes"] = $val;
        return $this;
    }
    /**
    * Gets the mediaTypes
    * The media types supported by the printer. Valid values are described in the following table.
    *
    * @return string The mediaTypes
    */
    public function getMediaTypes()
    {
        if (array_key_exists("mediaTypes", $this->_propDict)) {
            return $this->_propDict["mediaTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mediaTypes
    * The media types supported by the printer. Valid values are described in the following table.
    *
    * @param string $val The value of the mediaTypes
    *
    * @return PrinterCapabilities
    */
    public function setMediaTypes($val)
    {
        $this->_propDict["mediaTypes"] = $val;
        return $this;
    }

    /**
    * Gets the multipageLayouts
    * The presentation directions supported by the printer. Supported values are described in the following table.
    *
    * @return PrintMultipageLayout The multipageLayouts
    */
    public function getMultipageLayouts()
    {
        if (array_key_exists("multipageLayouts", $this->_propDict)) {
            if (is_a($this->_propDict["multipageLayouts"], "\Beta\Microsoft\Graph\Model\PrintMultipageLayout")) {
                return $this->_propDict["multipageLayouts"];
            } else {
                $this->_propDict["multipageLayouts"] = new PrintMultipageLayout($this->_propDict["multipageLayouts"]);
                return $this->_propDict["multipageLayouts"];
            }
        }
        return null;
    }

    /**
    * Sets the multipageLayouts
    * The presentation directions supported by the printer. Supported values are described in the following table.
    *
    * @param PrintMultipageLayout $val The value to assign to the multipageLayouts
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setMultipageLayouts($val)
    {
        $this->_propDict["multipageLayouts"] = $val;
         return $this;
    }

    /**
    * Gets the orientations
    * The print orientations supported by the printer. Valid values are described in the following table.
    *
    * @return PrintOrientation The orientations
    */
    public function getOrientations()
    {
        if (array_key_exists("orientations", $this->_propDict)) {
            if (is_a($this->_propDict["orientations"], "\Beta\Microsoft\Graph\Model\PrintOrientation")) {
                return $this->_propDict["orientations"];
            } else {
                $this->_propDict["orientations"] = new PrintOrientation($this->_propDict["orientations"]);
                return $this->_propDict["orientations"];
            }
        }
        return null;
    }

    /**
    * Sets the orientations
    * The print orientations supported by the printer. Valid values are described in the following table.
    *
    * @param PrintOrientation $val The value to assign to the orientations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setOrientations($val)
    {
        $this->_propDict["orientations"] = $val;
         return $this;
    }
    /**
    * Gets the outputBins
    * The printer's supported output bins (trays).
    *
    * @return string The outputBins
    */
    public function getOutputBins()
    {
        if (array_key_exists("outputBins", $this->_propDict)) {
            return $this->_propDict["outputBins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputBins
    * The printer's supported output bins (trays).
    *
    * @param string $val The value of the outputBins
    *
    * @return PrinterCapabilities
    */
    public function setOutputBins($val)
    {
        $this->_propDict["outputBins"] = $val;
        return $this;
    }
    /**
    * Gets the pagesPerSheet
    * Supported number of Input Pages to impose upon a single Impression.
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
    * Supported number of Input Pages to impose upon a single Impression.
    *
    * @param int $val The value of the pagesPerSheet
    *
    * @return PrinterCapabilities
    */
    public function setPagesPerSheet($val)
    {
        $this->_propDict["pagesPerSheet"] = $val;
        return $this;
    }

    /**
    * Gets the qualities
    * The print qualities supported by the printer.
    *
    * @return PrintQuality The qualities
    */
    public function getQualities()
    {
        if (array_key_exists("qualities", $this->_propDict)) {
            if (is_a($this->_propDict["qualities"], "\Beta\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["qualities"];
            } else {
                $this->_propDict["qualities"] = new PrintQuality($this->_propDict["qualities"]);
                return $this->_propDict["qualities"];
            }
        }
        return null;
    }

    /**
    * Sets the qualities
    * The print qualities supported by the printer.
    *
    * @param PrintQuality $val The value to assign to the qualities
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setQualities($val)
    {
        $this->_propDict["qualities"] = $val;
         return $this;
    }
    /**
    * Gets the rightMargins
    * A list of supported right margins(in microns) for the printer.
    *
    * @return int The rightMargins
    */
    public function getRightMargins()
    {
        if (array_key_exists("rightMargins", $this->_propDict)) {
            return $this->_propDict["rightMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the rightMargins
    * A list of supported right margins(in microns) for the printer.
    *
    * @param int $val The value of the rightMargins
    *
    * @return PrinterCapabilities
    */
    public function setRightMargins($val)
    {
        $this->_propDict["rightMargins"] = $val;
        return $this;
    }

    /**
    * Gets the scalings
    * Supported print scalings.
    *
    * @return PrintScaling The scalings
    */
    public function getScalings()
    {
        if (array_key_exists("scalings", $this->_propDict)) {
            if (is_a($this->_propDict["scalings"], "\Beta\Microsoft\Graph\Model\PrintScaling")) {
                return $this->_propDict["scalings"];
            } else {
                $this->_propDict["scalings"] = new PrintScaling($this->_propDict["scalings"]);
                return $this->_propDict["scalings"];
            }
        }
        return null;
    }

    /**
    * Sets the scalings
    * Supported print scalings.
    *
    * @param PrintScaling $val The value to assign to the scalings
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setScalings($val)
    {
        $this->_propDict["scalings"] = $val;
         return $this;
    }

    /**
    * Gets the supportedColorConfigurations
    *
    * @return PrintColorConfiguration The supportedColorConfigurations
    */
    public function getSupportedColorConfigurations()
    {
        if (array_key_exists("supportedColorConfigurations", $this->_propDict)) {
            if (is_a($this->_propDict["supportedColorConfigurations"], "\Beta\Microsoft\Graph\Model\PrintColorConfiguration")) {
                return $this->_propDict["supportedColorConfigurations"];
            } else {
                $this->_propDict["supportedColorConfigurations"] = new PrintColorConfiguration($this->_propDict["supportedColorConfigurations"]);
                return $this->_propDict["supportedColorConfigurations"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedColorConfigurations
    *
    * @param PrintColorConfiguration $val The value to assign to the supportedColorConfigurations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedColorConfigurations($val)
    {
        $this->_propDict["supportedColorConfigurations"] = $val;
         return $this;
    }

    /**
    * Gets the supportedCopiesPerJob
    *
    * @return IntegerRange The supportedCopiesPerJob
    */
    public function getSupportedCopiesPerJob()
    {
        if (array_key_exists("supportedCopiesPerJob", $this->_propDict)) {
            if (is_a($this->_propDict["supportedCopiesPerJob"], "\Beta\Microsoft\Graph\Model\IntegerRange")) {
                return $this->_propDict["supportedCopiesPerJob"];
            } else {
                $this->_propDict["supportedCopiesPerJob"] = new IntegerRange($this->_propDict["supportedCopiesPerJob"]);
                return $this->_propDict["supportedCopiesPerJob"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedCopiesPerJob
    *
    * @param IntegerRange $val The value to assign to the supportedCopiesPerJob
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedCopiesPerJob($val)
    {
        $this->_propDict["supportedCopiesPerJob"] = $val;
         return $this;
    }
    /**
    * Gets the supportedDocumentMimeTypes
    *
    * @return string The supportedDocumentMimeTypes
    */
    public function getSupportedDocumentMimeTypes()
    {
        if (array_key_exists("supportedDocumentMimeTypes", $this->_propDict)) {
            return $this->_propDict["supportedDocumentMimeTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedDocumentMimeTypes
    *
    * @param string $val The value of the supportedDocumentMimeTypes
    *
    * @return PrinterCapabilities
    */
    public function setSupportedDocumentMimeTypes($val)
    {
        $this->_propDict["supportedDocumentMimeTypes"] = $val;
        return $this;
    }

    /**
    * Gets the supportedDuplexConfigurations
    *
    * @return PrintDuplexConfiguration The supportedDuplexConfigurations
    */
    public function getSupportedDuplexConfigurations()
    {
        if (array_key_exists("supportedDuplexConfigurations", $this->_propDict)) {
            if (is_a($this->_propDict["supportedDuplexConfigurations"], "\Beta\Microsoft\Graph\Model\PrintDuplexConfiguration")) {
                return $this->_propDict["supportedDuplexConfigurations"];
            } else {
                $this->_propDict["supportedDuplexConfigurations"] = new PrintDuplexConfiguration($this->_propDict["supportedDuplexConfigurations"]);
                return $this->_propDict["supportedDuplexConfigurations"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedDuplexConfigurations
    *
    * @param PrintDuplexConfiguration $val The value to assign to the supportedDuplexConfigurations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedDuplexConfigurations($val)
    {
        $this->_propDict["supportedDuplexConfigurations"] = $val;
         return $this;
    }

    /**
    * Gets the supportedFinishings
    *
    * @return PrintFinishing The supportedFinishings
    */
    public function getSupportedFinishings()
    {
        if (array_key_exists("supportedFinishings", $this->_propDict)) {
            if (is_a($this->_propDict["supportedFinishings"], "\Beta\Microsoft\Graph\Model\PrintFinishing")) {
                return $this->_propDict["supportedFinishings"];
            } else {
                $this->_propDict["supportedFinishings"] = new PrintFinishing($this->_propDict["supportedFinishings"]);
                return $this->_propDict["supportedFinishings"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedFinishings
    *
    * @param PrintFinishing $val The value to assign to the supportedFinishings
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedFinishings($val)
    {
        $this->_propDict["supportedFinishings"] = $val;
         return $this;
    }
    /**
    * Gets the supportedMediaColors
    *
    * @return string The supportedMediaColors
    */
    public function getSupportedMediaColors()
    {
        if (array_key_exists("supportedMediaColors", $this->_propDict)) {
            return $this->_propDict["supportedMediaColors"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedMediaColors
    *
    * @param string $val The value of the supportedMediaColors
    *
    * @return PrinterCapabilities
    */
    public function setSupportedMediaColors($val)
    {
        $this->_propDict["supportedMediaColors"] = $val;
        return $this;
    }
    /**
    * Gets the supportedMediaSizes
    *
    * @return string The supportedMediaSizes
    */
    public function getSupportedMediaSizes()
    {
        if (array_key_exists("supportedMediaSizes", $this->_propDict)) {
            return $this->_propDict["supportedMediaSizes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedMediaSizes
    *
    * @param string $val The value of the supportedMediaSizes
    *
    * @return PrinterCapabilities
    */
    public function setSupportedMediaSizes($val)
    {
        $this->_propDict["supportedMediaSizes"] = $val;
        return $this;
    }

    /**
    * Gets the supportedMediaTypes
    *
    * @return PrintMediaType The supportedMediaTypes
    */
    public function getSupportedMediaTypes()
    {
        if (array_key_exists("supportedMediaTypes", $this->_propDict)) {
            if (is_a($this->_propDict["supportedMediaTypes"], "\Beta\Microsoft\Graph\Model\PrintMediaType")) {
                return $this->_propDict["supportedMediaTypes"];
            } else {
                $this->_propDict["supportedMediaTypes"] = new PrintMediaType($this->_propDict["supportedMediaTypes"]);
                return $this->_propDict["supportedMediaTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedMediaTypes
    *
    * @param PrintMediaType $val The value to assign to the supportedMediaTypes
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedMediaTypes($val)
    {
        $this->_propDict["supportedMediaTypes"] = $val;
         return $this;
    }

    /**
    * Gets the supportedOrientations
    *
    * @return PrintOrientation The supportedOrientations
    */
    public function getSupportedOrientations()
    {
        if (array_key_exists("supportedOrientations", $this->_propDict)) {
            if (is_a($this->_propDict["supportedOrientations"], "\Beta\Microsoft\Graph\Model\PrintOrientation")) {
                return $this->_propDict["supportedOrientations"];
            } else {
                $this->_propDict["supportedOrientations"] = new PrintOrientation($this->_propDict["supportedOrientations"]);
                return $this->_propDict["supportedOrientations"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedOrientations
    *
    * @param PrintOrientation $val The value to assign to the supportedOrientations
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedOrientations($val)
    {
        $this->_propDict["supportedOrientations"] = $val;
         return $this;
    }
    /**
    * Gets the supportedOutputBins
    *
    * @return string The supportedOutputBins
    */
    public function getSupportedOutputBins()
    {
        if (array_key_exists("supportedOutputBins", $this->_propDict)) {
            return $this->_propDict["supportedOutputBins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedOutputBins
    *
    * @param string $val The value of the supportedOutputBins
    *
    * @return PrinterCapabilities
    */
    public function setSupportedOutputBins($val)
    {
        $this->_propDict["supportedOutputBins"] = $val;
        return $this;
    }

    /**
    * Gets the supportedPagesPerSheet
    *
    * @return IntegerRange The supportedPagesPerSheet
    */
    public function getSupportedPagesPerSheet()
    {
        if (array_key_exists("supportedPagesPerSheet", $this->_propDict)) {
            if (is_a($this->_propDict["supportedPagesPerSheet"], "\Beta\Microsoft\Graph\Model\IntegerRange")) {
                return $this->_propDict["supportedPagesPerSheet"];
            } else {
                $this->_propDict["supportedPagesPerSheet"] = new IntegerRange($this->_propDict["supportedPagesPerSheet"]);
                return $this->_propDict["supportedPagesPerSheet"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedPagesPerSheet
    *
    * @param IntegerRange $val The value to assign to the supportedPagesPerSheet
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedPagesPerSheet($val)
    {
        $this->_propDict["supportedPagesPerSheet"] = $val;
         return $this;
    }

    /**
    * Gets the supportedPresentationDirections
    *
    * @return PrintPresentationDirection The supportedPresentationDirections
    */
    public function getSupportedPresentationDirections()
    {
        if (array_key_exists("supportedPresentationDirections", $this->_propDict)) {
            if (is_a($this->_propDict["supportedPresentationDirections"], "\Beta\Microsoft\Graph\Model\PrintPresentationDirection")) {
                return $this->_propDict["supportedPresentationDirections"];
            } else {
                $this->_propDict["supportedPresentationDirections"] = new PrintPresentationDirection($this->_propDict["supportedPresentationDirections"]);
                return $this->_propDict["supportedPresentationDirections"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedPresentationDirections
    *
    * @param PrintPresentationDirection $val The value to assign to the supportedPresentationDirections
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedPresentationDirections($val)
    {
        $this->_propDict["supportedPresentationDirections"] = $val;
         return $this;
    }

    /**
    * Gets the supportedPrintQualities
    *
    * @return PrintQuality The supportedPrintQualities
    */
    public function getSupportedPrintQualities()
    {
        if (array_key_exists("supportedPrintQualities", $this->_propDict)) {
            if (is_a($this->_propDict["supportedPrintQualities"], "\Beta\Microsoft\Graph\Model\PrintQuality")) {
                return $this->_propDict["supportedPrintQualities"];
            } else {
                $this->_propDict["supportedPrintQualities"] = new PrintQuality($this->_propDict["supportedPrintQualities"]);
                return $this->_propDict["supportedPrintQualities"];
            }
        }
        return null;
    }

    /**
    * Sets the supportedPrintQualities
    *
    * @param PrintQuality $val The value to assign to the supportedPrintQualities
    *
    * @return PrinterCapabilities The PrinterCapabilities
    */
    public function setSupportedPrintQualities($val)
    {
        $this->_propDict["supportedPrintQualities"] = $val;
         return $this;
    }
    /**
    * Gets the supportsFitPdfToPage
    * True if the printer supports scaling PDF pages to match the print media size; false otherwise.
    *
    * @return bool The supportsFitPdfToPage
    */
    public function getSupportsFitPdfToPage()
    {
        if (array_key_exists("supportsFitPdfToPage", $this->_propDict)) {
            return $this->_propDict["supportsFitPdfToPage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportsFitPdfToPage
    * True if the printer supports scaling PDF pages to match the print media size; false otherwise.
    *
    * @param bool $val The value of the supportsFitPdfToPage
    *
    * @return PrinterCapabilities
    */
    public function setSupportsFitPdfToPage($val)
    {
        $this->_propDict["supportsFitPdfToPage"] = $val;
        return $this;
    }
    /**
    * Gets the topMargins
    * A list of supported top margins(in microns) for the printer.
    *
    * @return int The topMargins
    */
    public function getTopMargins()
    {
        if (array_key_exists("topMargins", $this->_propDict)) {
            return $this->_propDict["topMargins"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topMargins
    * A list of supported top margins(in microns) for the printer.
    *
    * @param int $val The value of the topMargins
    *
    * @return PrinterCapabilities
    */
    public function setTopMargins($val)
    {
        $this->_propDict["topMargins"] = $val;
        return $this;
    }
}
