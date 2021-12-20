<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsOfUseContainer File
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
* TermsOfUseContainer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TermsOfUseContainer extends Entity
{

     /** 
     * Gets the agreementAcceptances
     *
     * @return array The agreementAcceptances
     */
    public function getAgreementAcceptances()
    {
        if (array_key_exists("agreementAcceptances", $this->_propDict)) {
           return $this->_propDict["agreementAcceptances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agreementAcceptances
    *
    * @param AgreementAcceptance $val The agreementAcceptances
    *
    * @return TermsOfUseContainer
    */
    public function setAgreementAcceptances($val)
    {
		$this->_propDict["agreementAcceptances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the agreements
     *
     * @return array The agreements
     */
    public function getAgreements()
    {
        if (array_key_exists("agreements", $this->_propDict)) {
           return $this->_propDict["agreements"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the agreements
    *
    * @param Agreement $val The agreements
    *
    * @return TermsOfUseContainer
    */
    public function setAgreements($val)
    {
		$this->_propDict["agreements"] = $val;
        return $this;
    }
    
}
