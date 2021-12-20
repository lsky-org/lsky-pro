<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AirPrintDestination File
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
* AirPrintDestination class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AirPrintDestination extends Entity
{
    /**
    * Gets the forceTls
    * If true AirPrint connections are secured by Transport Layer Security (TLS). Default is false. Available in iOS 11.0 and later.
    *
    * @return bool The forceTls
    */
    public function getForceTls()
    {
        if (array_key_exists("forceTls", $this->_propDict)) {
            return $this->_propDict["forceTls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the forceTls
    * If true AirPrint connections are secured by Transport Layer Security (TLS). Default is false. Available in iOS 11.0 and later.
    *
    * @param bool $val The value of the forceTls
    *
    * @return AirPrintDestination
    */
    public function setForceTls($val)
    {
        $this->_propDict["forceTls"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddress
    * The IP Address of the AirPrint destination.
    *
    * @return string The ipAddress
    */
    public function getIpAddress()
    {
        if (array_key_exists("ipAddress", $this->_propDict)) {
            return $this->_propDict["ipAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddress
    * The IP Address of the AirPrint destination.
    *
    * @param string $val The value of the ipAddress
    *
    * @return AirPrintDestination
    */
    public function setIpAddress($val)
    {
        $this->_propDict["ipAddress"] = $val;
        return $this;
    }
    /**
    * Gets the port
    * The listening port of the AirPrint destination. If this key is not specified AirPrint will use the default port. Available in iOS 11.0 and later.
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    * The listening port of the AirPrint destination. If this key is not specified AirPrint will use the default port. Available in iOS 11.0 and later.
    *
    * @param int $val The value of the port
    *
    * @return AirPrintDestination
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }
    /**
    * Gets the resourcePath
    * The Resource Path associated with the printer. This corresponds to the rp parameter of the _ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
    *
    * @return string The resourcePath
    */
    public function getResourcePath()
    {
        if (array_key_exists("resourcePath", $this->_propDict)) {
            return $this->_propDict["resourcePath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resourcePath
    * The Resource Path associated with the printer. This corresponds to the rp parameter of the _ipps.tcp Bonjour record. For example: printers/Canon_MG5300_series, printers/Xerox_Phaser_7600, ipp/print, Epson_IPP_Printer.
    *
    * @param string $val The value of the resourcePath
    *
    * @return AirPrintDestination
    */
    public function setResourcePath($val)
    {
        $this->_propDict["resourcePath"] = $val;
        return $this;
    }
}
