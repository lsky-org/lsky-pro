<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SiteSource File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

/**
* SiteSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SiteSource extends DataSource
{
    /**
    * Gets the site
    * The SharePoint site associated with the siteSource.
    *
    * @return \Beta\Microsoft\Graph\Model\Site The site
    */
    public function getSite()
    {
        if (array_key_exists("site", $this->_propDict)) {
            if (is_a($this->_propDict["site"], "\Beta\Microsoft\Graph\Model\Site")) {
                return $this->_propDict["site"];
            } else {
                $this->_propDict["site"] = new \Beta\Microsoft\Graph\Model\Site($this->_propDict["site"]);
                return $this->_propDict["site"];
            }
        }
        return null;
    }
    
    /**
    * Sets the site
    * The SharePoint site associated with the siteSource.
    *
    * @param \Beta\Microsoft\Graph\Model\Site $val The site
    *
    * @return SiteSource
    */
    public function setSite($val)
    {
        $this->_propDict["site"] = $val;
        return $this;
    }
    
}
