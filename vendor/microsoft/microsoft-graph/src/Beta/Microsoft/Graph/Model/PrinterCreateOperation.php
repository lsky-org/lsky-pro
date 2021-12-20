<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterCreateOperation File
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
* PrinterCreateOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterCreateOperation extends PrintOperation
{
    /**
    * Gets the certificate
    * The signed certificate created during the registration process. Read-only.
    *
    * @return string The certificate
    */
    public function getCertificate()
    {
        if (array_key_exists("certificate", $this->_propDict)) {
            return $this->_propDict["certificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the certificate
    * The signed certificate created during the registration process. Read-only.
    *
    * @param string $val The certificate
    *
    * @return PrinterCreateOperation
    */
    public function setCertificate($val)
    {
        $this->_propDict["certificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the printer
    * The created printer entity. Read-only.
    *
    * @return Printer The printer
    */
    public function getPrinter()
    {
        if (array_key_exists("printer", $this->_propDict)) {
            if (is_a($this->_propDict["printer"], "\Beta\Microsoft\Graph\Model\Printer")) {
                return $this->_propDict["printer"];
            } else {
                $this->_propDict["printer"] = new Printer($this->_propDict["printer"]);
                return $this->_propDict["printer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the printer
    * The created printer entity. Read-only.
    *
    * @param Printer $val The printer
    *
    * @return PrinterCreateOperation
    */
    public function setPrinter($val)
    {
        $this->_propDict["printer"] = $val;
        return $this;
    }
    
}
