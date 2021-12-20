<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExcludedApps File
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
* ExcludedApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExcludedApps extends Entity
{
    /**
    * Gets the access
    * The value for if MS Office Access should be excluded or not.
    *
    * @return bool The access
    */
    public function getAccess()
    {
        if (array_key_exists("access", $this->_propDict)) {
            return $this->_propDict["access"];
        } else {
            return null;
        }
    }

    /**
    * Sets the access
    * The value for if MS Office Access should be excluded or not.
    *
    * @param bool $val The value of the access
    *
    * @return ExcludedApps
    */
    public function setAccess($val)
    {
        $this->_propDict["access"] = $val;
        return $this;
    }
    /**
    * Gets the bing
    * The value for if Microsoft Search as default should be excluded or not.
    *
    * @return bool The bing
    */
    public function getBing()
    {
        if (array_key_exists("bing", $this->_propDict)) {
            return $this->_propDict["bing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bing
    * The value for if Microsoft Search as default should be excluded or not.
    *
    * @param bool $val The value of the bing
    *
    * @return ExcludedApps
    */
    public function setBing($val)
    {
        $this->_propDict["bing"] = $val;
        return $this;
    }
    /**
    * Gets the excel
    * The value for if MS Office Excel should be excluded or not.
    *
    * @return bool The excel
    */
    public function getExcel()
    {
        if (array_key_exists("excel", $this->_propDict)) {
            return $this->_propDict["excel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excel
    * The value for if MS Office Excel should be excluded or not.
    *
    * @param bool $val The value of the excel
    *
    * @return ExcludedApps
    */
    public function setExcel($val)
    {
        $this->_propDict["excel"] = $val;
        return $this;
    }
    /**
    * Gets the groove
    * The value for if MS Office OneDrive for Business - Groove should be excluded or not.
    *
    * @return bool The groove
    */
    public function getGroove()
    {
        if (array_key_exists("groove", $this->_propDict)) {
            return $this->_propDict["groove"];
        } else {
            return null;
        }
    }

    /**
    * Sets the groove
    * The value for if MS Office OneDrive for Business - Groove should be excluded or not.
    *
    * @param bool $val The value of the groove
    *
    * @return ExcludedApps
    */
    public function setGroove($val)
    {
        $this->_propDict["groove"] = $val;
        return $this;
    }
    /**
    * Gets the infoPath
    * The value for if MS Office InfoPath should be excluded or not.
    *
    * @return bool The infoPath
    */
    public function getInfoPath()
    {
        if (array_key_exists("infoPath", $this->_propDict)) {
            return $this->_propDict["infoPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the infoPath
    * The value for if MS Office InfoPath should be excluded or not.
    *
    * @param bool $val The value of the infoPath
    *
    * @return ExcludedApps
    */
    public function setInfoPath($val)
    {
        $this->_propDict["infoPath"] = $val;
        return $this;
    }
    /**
    * Gets the lync
    * The value for if MS Office Skype for Business - Lync should be excluded or not.
    *
    * @return bool The lync
    */
    public function getLync()
    {
        if (array_key_exists("lync", $this->_propDict)) {
            return $this->_propDict["lync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lync
    * The value for if MS Office Skype for Business - Lync should be excluded or not.
    *
    * @param bool $val The value of the lync
    *
    * @return ExcludedApps
    */
    public function setLync($val)
    {
        $this->_propDict["lync"] = $val;
        return $this;
    }
    /**
    * Gets the oneDrive
    * The value for if MS Office OneDrive should be excluded or not.
    *
    * @return bool The oneDrive
    */
    public function getOneDrive()
    {
        if (array_key_exists("oneDrive", $this->_propDict)) {
            return $this->_propDict["oneDrive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oneDrive
    * The value for if MS Office OneDrive should be excluded or not.
    *
    * @param bool $val The value of the oneDrive
    *
    * @return ExcludedApps
    */
    public function setOneDrive($val)
    {
        $this->_propDict["oneDrive"] = $val;
        return $this;
    }
    /**
    * Gets the oneNote
    * The value for if MS Office OneNote should be excluded or not.
    *
    * @return bool The oneNote
    */
    public function getOneNote()
    {
        if (array_key_exists("oneNote", $this->_propDict)) {
            return $this->_propDict["oneNote"];
        } else {
            return null;
        }
    }

    /**
    * Sets the oneNote
    * The value for if MS Office OneNote should be excluded or not.
    *
    * @param bool $val The value of the oneNote
    *
    * @return ExcludedApps
    */
    public function setOneNote($val)
    {
        $this->_propDict["oneNote"] = $val;
        return $this;
    }
    /**
    * Gets the outlook
    * The value for if MS Office Outlook should be excluded or not.
    *
    * @return bool The outlook
    */
    public function getOutlook()
    {
        if (array_key_exists("outlook", $this->_propDict)) {
            return $this->_propDict["outlook"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outlook
    * The value for if MS Office Outlook should be excluded or not.
    *
    * @param bool $val The value of the outlook
    *
    * @return ExcludedApps
    */
    public function setOutlook($val)
    {
        $this->_propDict["outlook"] = $val;
        return $this;
    }
    /**
    * Gets the powerPoint
    * The value for if MS Office PowerPoint should be excluded or not.
    *
    * @return bool The powerPoint
    */
    public function getPowerPoint()
    {
        if (array_key_exists("powerPoint", $this->_propDict)) {
            return $this->_propDict["powerPoint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the powerPoint
    * The value for if MS Office PowerPoint should be excluded or not.
    *
    * @param bool $val The value of the powerPoint
    *
    * @return ExcludedApps
    */
    public function setPowerPoint($val)
    {
        $this->_propDict["powerPoint"] = $val;
        return $this;
    }
    /**
    * Gets the publisher
    * The value for if MS Office Publisher should be excluded or not.
    *
    * @return bool The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publisher
    * The value for if MS Office Publisher should be excluded or not.
    *
    * @param bool $val The value of the publisher
    *
    * @return ExcludedApps
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    /**
    * Gets the sharePointDesigner
    * The value for if MS Office SharePointDesigner should be excluded or not.
    *
    * @return bool The sharePointDesigner
    */
    public function getSharePointDesigner()
    {
        if (array_key_exists("sharePointDesigner", $this->_propDict)) {
            return $this->_propDict["sharePointDesigner"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharePointDesigner
    * The value for if MS Office SharePointDesigner should be excluded or not.
    *
    * @param bool $val The value of the sharePointDesigner
    *
    * @return ExcludedApps
    */
    public function setSharePointDesigner($val)
    {
        $this->_propDict["sharePointDesigner"] = $val;
        return $this;
    }
    /**
    * Gets the teams
    * The value for if MS Office Teams should be excluded or not.
    *
    * @return bool The teams
    */
    public function getTeams()
    {
        if (array_key_exists("teams", $this->_propDict)) {
            return $this->_propDict["teams"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teams
    * The value for if MS Office Teams should be excluded or not.
    *
    * @param bool $val The value of the teams
    *
    * @return ExcludedApps
    */
    public function setTeams($val)
    {
        $this->_propDict["teams"] = $val;
        return $this;
    }
    /**
    * Gets the visio
    * The value for if MS Office Visio should be excluded or not.
    *
    * @return bool The visio
    */
    public function getVisio()
    {
        if (array_key_exists("visio", $this->_propDict)) {
            return $this->_propDict["visio"];
        } else {
            return null;
        }
    }

    /**
    * Sets the visio
    * The value for if MS Office Visio should be excluded or not.
    *
    * @param bool $val The value of the visio
    *
    * @return ExcludedApps
    */
    public function setVisio($val)
    {
        $this->_propDict["visio"] = $val;
        return $this;
    }
    /**
    * Gets the word
    * The value for if MS Office Word should be excluded or not.
    *
    * @return bool The word
    */
    public function getWord()
    {
        if (array_key_exists("word", $this->_propDict)) {
            return $this->_propDict["word"];
        } else {
            return null;
        }
    }

    /**
    * Sets the word
    * The value for if MS Office Word should be excluded or not.
    *
    * @param bool $val The value of the word
    *
    * @return ExcludedApps
    */
    public function setWord($val)
    {
        $this->_propDict["word"] = $val;
        return $this;
    }
}
