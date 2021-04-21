<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TiIndicator File
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
* TiIndicator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TiIndicator extends Entity
{
    /**
    * Gets the action
    * The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
    *
    * @return TiAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\TiAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new TiAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }
    
    /**
    * Sets the action
    * The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
    *
    * @param TiAction $val The action
    *
    * @return TiIndicator
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the activityGroupNames
    * The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
    *
    * @return string The activityGroupNames
    */
    public function getActivityGroupNames()
    {
        if (array_key_exists("activityGroupNames", $this->_propDict)) {
            return $this->_propDict["activityGroupNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activityGroupNames
    * The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
    *
    * @param string $val The activityGroupNames
    *
    * @return TiIndicator
    */
    public function setActivityGroupNames($val)
    {
        $this->_propDict["activityGroupNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the additionalInformation
    * A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
    *
    * @return string The additionalInformation
    */
    public function getAdditionalInformation()
    {
        if (array_key_exists("additionalInformation", $this->_propDict)) {
            return $this->_propDict["additionalInformation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the additionalInformation
    * A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
    *
    * @param string $val The additionalInformation
    *
    * @return TiIndicator
    */
    public function setAdditionalInformation($val)
    {
        $this->_propDict["additionalInformation"] = $val;
        return $this;
    }
    
    /**
    * Gets the azureTenantId
    * Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
    *
    * @return string The azureTenantId
    */
    public function getAzureTenantId()
    {
        if (array_key_exists("azureTenantId", $this->_propDict)) {
            return $this->_propDict["azureTenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the azureTenantId
    * Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
    *
    * @param string $val The azureTenantId
    *
    * @return TiIndicator
    */
    public function setAzureTenantId($val)
    {
        $this->_propDict["azureTenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the confidence
    * An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
    *
    * @return int The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the confidence
    * An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
    *
    * @param int $val The confidence
    *
    * @return TiIndicator
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the description
    * Brief description (100 characters or less) of the threat represented by the indicator. Required.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Brief description (100 characters or less) of the threat represented by the indicator. Required.
    *
    * @param string $val The description
    *
    * @return TiIndicator
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the diamondModel
    * The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
    *
    * @return DiamondModel The diamondModel
    */
    public function getDiamondModel()
    {
        if (array_key_exists("diamondModel", $this->_propDict)) {
            if (is_a($this->_propDict["diamondModel"], "\Beta\Microsoft\Graph\Model\DiamondModel")) {
                return $this->_propDict["diamondModel"];
            } else {
                $this->_propDict["diamondModel"] = new DiamondModel($this->_propDict["diamondModel"]);
                return $this->_propDict["diamondModel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the diamondModel
    * The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
    *
    * @param DiamondModel $val The diamondModel
    *
    * @return TiIndicator
    */
    public function setDiamondModel($val)
    {
        $this->_propDict["diamondModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainName
    *
    * @return string The domainName
    */
    public function getDomainName()
    {
        if (array_key_exists("domainName", $this->_propDict)) {
            return $this->_propDict["domainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domainName
    *
    * @param string $val The domainName
    *
    * @return TiIndicator
    */
    public function setDomainName($val)
    {
        $this->_propDict["domainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailEncoding
    *
    * @return string The emailEncoding
    */
    public function getEmailEncoding()
    {
        if (array_key_exists("emailEncoding", $this->_propDict)) {
            return $this->_propDict["emailEncoding"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailEncoding
    *
    * @param string $val The emailEncoding
    *
    * @return TiIndicator
    */
    public function setEmailEncoding($val)
    {
        $this->_propDict["emailEncoding"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailLanguage
    *
    * @return string The emailLanguage
    */
    public function getEmailLanguage()
    {
        if (array_key_exists("emailLanguage", $this->_propDict)) {
            return $this->_propDict["emailLanguage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailLanguage
    *
    * @param string $val The emailLanguage
    *
    * @return TiIndicator
    */
    public function setEmailLanguage($val)
    {
        $this->_propDict["emailLanguage"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailRecipient
    *
    * @return string The emailRecipient
    */
    public function getEmailRecipient()
    {
        if (array_key_exists("emailRecipient", $this->_propDict)) {
            return $this->_propDict["emailRecipient"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailRecipient
    *
    * @param string $val The emailRecipient
    *
    * @return TiIndicator
    */
    public function setEmailRecipient($val)
    {
        $this->_propDict["emailRecipient"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSenderAddress
    *
    * @return string The emailSenderAddress
    */
    public function getEmailSenderAddress()
    {
        if (array_key_exists("emailSenderAddress", $this->_propDict)) {
            return $this->_propDict["emailSenderAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailSenderAddress
    *
    * @param string $val The emailSenderAddress
    *
    * @return TiIndicator
    */
    public function setEmailSenderAddress($val)
    {
        $this->_propDict["emailSenderAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSenderName
    *
    * @return string The emailSenderName
    */
    public function getEmailSenderName()
    {
        if (array_key_exists("emailSenderName", $this->_propDict)) {
            return $this->_propDict["emailSenderName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailSenderName
    *
    * @param string $val The emailSenderName
    *
    * @return TiIndicator
    */
    public function setEmailSenderName($val)
    {
        $this->_propDict["emailSenderName"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSourceDomain
    *
    * @return string The emailSourceDomain
    */
    public function getEmailSourceDomain()
    {
        if (array_key_exists("emailSourceDomain", $this->_propDict)) {
            return $this->_propDict["emailSourceDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailSourceDomain
    *
    * @param string $val The emailSourceDomain
    *
    * @return TiIndicator
    */
    public function setEmailSourceDomain($val)
    {
        $this->_propDict["emailSourceDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSourceIpAddress
    *
    * @return string The emailSourceIpAddress
    */
    public function getEmailSourceIpAddress()
    {
        if (array_key_exists("emailSourceIpAddress", $this->_propDict)) {
            return $this->_propDict["emailSourceIpAddress"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailSourceIpAddress
    *
    * @param string $val The emailSourceIpAddress
    *
    * @return TiIndicator
    */
    public function setEmailSourceIpAddress($val)
    {
        $this->_propDict["emailSourceIpAddress"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSubject
    *
    * @return string The emailSubject
    */
    public function getEmailSubject()
    {
        if (array_key_exists("emailSubject", $this->_propDict)) {
            return $this->_propDict["emailSubject"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailSubject
    *
    * @param string $val The emailSubject
    *
    * @return TiIndicator
    */
    public function setEmailSubject($val)
    {
        $this->_propDict["emailSubject"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailXMailer
    *
    * @return string The emailXMailer
    */
    public function getEmailXMailer()
    {
        if (array_key_exists("emailXMailer", $this->_propDict)) {
            return $this->_propDict["emailXMailer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the emailXMailer
    *
    * @param string $val The emailXMailer
    *
    * @return TiIndicator
    */
    public function setEmailXMailer($val)
    {
        $this->_propDict["emailXMailer"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return TiIndicator
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the externalId
    * An identification number that ties the indicator back to the indicator provider’s system (e.g. a foreign key).
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the externalId
    * An identification number that ties the indicator back to the indicator provider’s system (e.g. a foreign key).
    *
    * @param string $val The externalId
    *
    * @return TiIndicator
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileCompileDateTime
    *
    * @return \DateTime The fileCompileDateTime
    */
    public function getFileCompileDateTime()
    {
        if (array_key_exists("fileCompileDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["fileCompileDateTime"], "\DateTime")) {
                return $this->_propDict["fileCompileDateTime"];
            } else {
                $this->_propDict["fileCompileDateTime"] = new \DateTime($this->_propDict["fileCompileDateTime"]);
                return $this->_propDict["fileCompileDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileCompileDateTime
    *
    * @param \DateTime $val The fileCompileDateTime
    *
    * @return TiIndicator
    */
    public function setFileCompileDateTime($val)
    {
        $this->_propDict["fileCompileDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileCreatedDateTime
    *
    * @return \DateTime The fileCreatedDateTime
    */
    public function getFileCreatedDateTime()
    {
        if (array_key_exists("fileCreatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["fileCreatedDateTime"], "\DateTime")) {
                return $this->_propDict["fileCreatedDateTime"];
            } else {
                $this->_propDict["fileCreatedDateTime"] = new \DateTime($this->_propDict["fileCreatedDateTime"]);
                return $this->_propDict["fileCreatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileCreatedDateTime
    *
    * @param \DateTime $val The fileCreatedDateTime
    *
    * @return TiIndicator
    */
    public function setFileCreatedDateTime($val)
    {
        $this->_propDict["fileCreatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileHashType
    *
    * @return FileHashType The fileHashType
    */
    public function getFileHashType()
    {
        if (array_key_exists("fileHashType", $this->_propDict)) {
            if (is_a($this->_propDict["fileHashType"], "\Beta\Microsoft\Graph\Model\FileHashType")) {
                return $this->_propDict["fileHashType"];
            } else {
                $this->_propDict["fileHashType"] = new FileHashType($this->_propDict["fileHashType"]);
                return $this->_propDict["fileHashType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileHashType
    *
    * @param FileHashType $val The fileHashType
    *
    * @return TiIndicator
    */
    public function setFileHashType($val)
    {
        $this->_propDict["fileHashType"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileHashValue
    *
    * @return string The fileHashValue
    */
    public function getFileHashValue()
    {
        if (array_key_exists("fileHashValue", $this->_propDict)) {
            return $this->_propDict["fileHashValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileHashValue
    *
    * @param string $val The fileHashValue
    *
    * @return TiIndicator
    */
    public function setFileHashValue($val)
    {
        $this->_propDict["fileHashValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileMutexName
    *
    * @return string The fileMutexName
    */
    public function getFileMutexName()
    {
        if (array_key_exists("fileMutexName", $this->_propDict)) {
            return $this->_propDict["fileMutexName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileMutexName
    *
    * @param string $val The fileMutexName
    *
    * @return TiIndicator
    */
    public function setFileMutexName($val)
    {
        $this->_propDict["fileMutexName"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileName
    *
    * @return string The fileName
    */
    public function getFileName()
    {
        if (array_key_exists("fileName", $this->_propDict)) {
            return $this->_propDict["fileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileName
    *
    * @param string $val The fileName
    *
    * @return TiIndicator
    */
    public function setFileName($val)
    {
        $this->_propDict["fileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the filePacker
    *
    * @return string The filePacker
    */
    public function getFilePacker()
    {
        if (array_key_exists("filePacker", $this->_propDict)) {
            return $this->_propDict["filePacker"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filePacker
    *
    * @param string $val The filePacker
    *
    * @return TiIndicator
    */
    public function setFilePacker($val)
    {
        $this->_propDict["filePacker"] = $val;
        return $this;
    }
    
    /**
    * Gets the filePath
    *
    * @return string The filePath
    */
    public function getFilePath()
    {
        if (array_key_exists("filePath", $this->_propDict)) {
            return $this->_propDict["filePath"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the filePath
    *
    * @param string $val The filePath
    *
    * @return TiIndicator
    */
    public function setFilePath($val)
    {
        $this->_propDict["filePath"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileSize
    *
    * @return int The fileSize
    */
    public function getFileSize()
    {
        if (array_key_exists("fileSize", $this->_propDict)) {
            return $this->_propDict["fileSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileSize
    *
    * @param int $val The fileSize
    *
    * @return TiIndicator
    */
    public function setFileSize($val)
    {
        $this->_propDict["fileSize"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileType
    *
    * @return string The fileType
    */
    public function getFileType()
    {
        if (array_key_exists("fileType", $this->_propDict)) {
            return $this->_propDict["fileType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileType
    *
    * @param string $val The fileType
    *
    * @return TiIndicator
    */
    public function setFileType($val)
    {
        $this->_propDict["fileType"] = $val;
        return $this;
    }
    
    /**
    * Gets the ingestedDateTime
    * Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The ingestedDateTime
    */
    public function getIngestedDateTime()
    {
        if (array_key_exists("ingestedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["ingestedDateTime"], "\DateTime")) {
                return $this->_propDict["ingestedDateTime"];
            } else {
                $this->_propDict["ingestedDateTime"] = new \DateTime($this->_propDict["ingestedDateTime"]);
                return $this->_propDict["ingestedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the ingestedDateTime
    * Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The ingestedDateTime
    *
    * @return TiIndicator
    */
    public function setIngestedDateTime($val)
    {
        $this->_propDict["ingestedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    * Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    * Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
    *
    * @param bool $val The isActive
    *
    * @return TiIndicator
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the killChain
    * A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
    *
    * @return string The killChain
    */
    public function getKillChain()
    {
        if (array_key_exists("killChain", $this->_propDict)) {
            return $this->_propDict["killChain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the killChain
    * A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
    *
    * @param string $val The killChain
    *
    * @return TiIndicator
    */
    public function setKillChain($val)
    {
        $this->_propDict["killChain"] = $val;
        return $this;
    }
    
    /**
    * Gets the knownFalsePositives
    * Scenarios in which the indicator may cause false positives. This should be human-readable text.
    *
    * @return string The knownFalsePositives
    */
    public function getKnownFalsePositives()
    {
        if (array_key_exists("knownFalsePositives", $this->_propDict)) {
            return $this->_propDict["knownFalsePositives"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the knownFalsePositives
    * Scenarios in which the indicator may cause false positives. This should be human-readable text.
    *
    * @param string $val The knownFalsePositives
    *
    * @return TiIndicator
    */
    public function setKnownFalsePositives($val)
    {
        $this->_propDict["knownFalsePositives"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportedDateTime
    * The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportedDateTime
    * The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return TiIndicator
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the malwareFamilyNames
    * The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible which can be found via the Windows Defender Security Intelligence threat encyclopedia.
    *
    * @return string The malwareFamilyNames
    */
    public function getMalwareFamilyNames()
    {
        if (array_key_exists("malwareFamilyNames", $this->_propDict)) {
            return $this->_propDict["malwareFamilyNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the malwareFamilyNames
    * The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible which can be found via the Windows Defender Security Intelligence threat encyclopedia.
    *
    * @param string $val The malwareFamilyNames
    *
    * @return TiIndicator
    */
    public function setMalwareFamilyNames($val)
    {
        $this->_propDict["malwareFamilyNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkCidrBlock
    *
    * @return string The networkCidrBlock
    */
    public function getNetworkCidrBlock()
    {
        if (array_key_exists("networkCidrBlock", $this->_propDict)) {
            return $this->_propDict["networkCidrBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkCidrBlock
    *
    * @param string $val The networkCidrBlock
    *
    * @return TiIndicator
    */
    public function setNetworkCidrBlock($val)
    {
        $this->_propDict["networkCidrBlock"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkDestinationAsn
    *
    * @return int The networkDestinationAsn
    */
    public function getNetworkDestinationAsn()
    {
        if (array_key_exists("networkDestinationAsn", $this->_propDict)) {
            return $this->_propDict["networkDestinationAsn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDestinationAsn
    *
    * @param int $val The networkDestinationAsn
    *
    * @return TiIndicator
    */
    public function setNetworkDestinationAsn($val)
    {
        $this->_propDict["networkDestinationAsn"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkDestinationCidrBlock
    *
    * @return string The networkDestinationCidrBlock
    */
    public function getNetworkDestinationCidrBlock()
    {
        if (array_key_exists("networkDestinationCidrBlock", $this->_propDict)) {
            return $this->_propDict["networkDestinationCidrBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDestinationCidrBlock
    *
    * @param string $val The networkDestinationCidrBlock
    *
    * @return TiIndicator
    */
    public function setNetworkDestinationCidrBlock($val)
    {
        $this->_propDict["networkDestinationCidrBlock"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkDestinationIPv4
    *
    * @return string The networkDestinationIPv4
    */
    public function getNetworkDestinationIPv4()
    {
        if (array_key_exists("networkDestinationIPv4", $this->_propDict)) {
            return $this->_propDict["networkDestinationIPv4"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDestinationIPv4
    *
    * @param string $val The networkDestinationIPv4
    *
    * @return TiIndicator
    */
    public function setNetworkDestinationIPv4($val)
    {
        $this->_propDict["networkDestinationIPv4"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkDestinationIPv6
    *
    * @return string The networkDestinationIPv6
    */
    public function getNetworkDestinationIPv6()
    {
        if (array_key_exists("networkDestinationIPv6", $this->_propDict)) {
            return $this->_propDict["networkDestinationIPv6"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDestinationIPv6
    *
    * @param string $val The networkDestinationIPv6
    *
    * @return TiIndicator
    */
    public function setNetworkDestinationIPv6($val)
    {
        $this->_propDict["networkDestinationIPv6"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkDestinationPort
    *
    * @return int The networkDestinationPort
    */
    public function getNetworkDestinationPort()
    {
        if (array_key_exists("networkDestinationPort", $this->_propDict)) {
            return $this->_propDict["networkDestinationPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkDestinationPort
    *
    * @param int $val The networkDestinationPort
    *
    * @return TiIndicator
    */
    public function setNetworkDestinationPort($val)
    {
        $this->_propDict["networkDestinationPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkIPv4
    *
    * @return string The networkIPv4
    */
    public function getNetworkIPv4()
    {
        if (array_key_exists("networkIPv4", $this->_propDict)) {
            return $this->_propDict["networkIPv4"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkIPv4
    *
    * @param string $val The networkIPv4
    *
    * @return TiIndicator
    */
    public function setNetworkIPv4($val)
    {
        $this->_propDict["networkIPv4"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkIPv6
    *
    * @return string The networkIPv6
    */
    public function getNetworkIPv6()
    {
        if (array_key_exists("networkIPv6", $this->_propDict)) {
            return $this->_propDict["networkIPv6"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkIPv6
    *
    * @param string $val The networkIPv6
    *
    * @return TiIndicator
    */
    public function setNetworkIPv6($val)
    {
        $this->_propDict["networkIPv6"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkPort
    *
    * @return int The networkPort
    */
    public function getNetworkPort()
    {
        if (array_key_exists("networkPort", $this->_propDict)) {
            return $this->_propDict["networkPort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkPort
    *
    * @param int $val The networkPort
    *
    * @return TiIndicator
    */
    public function setNetworkPort($val)
    {
        $this->_propDict["networkPort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkProtocol
    *
    * @return int The networkProtocol
    */
    public function getNetworkProtocol()
    {
        if (array_key_exists("networkProtocol", $this->_propDict)) {
            return $this->_propDict["networkProtocol"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkProtocol
    *
    * @param int $val The networkProtocol
    *
    * @return TiIndicator
    */
    public function setNetworkProtocol($val)
    {
        $this->_propDict["networkProtocol"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkSourceAsn
    *
    * @return int The networkSourceAsn
    */
    public function getNetworkSourceAsn()
    {
        if (array_key_exists("networkSourceAsn", $this->_propDict)) {
            return $this->_propDict["networkSourceAsn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkSourceAsn
    *
    * @param int $val The networkSourceAsn
    *
    * @return TiIndicator
    */
    public function setNetworkSourceAsn($val)
    {
        $this->_propDict["networkSourceAsn"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkSourceCidrBlock
    *
    * @return string The networkSourceCidrBlock
    */
    public function getNetworkSourceCidrBlock()
    {
        if (array_key_exists("networkSourceCidrBlock", $this->_propDict)) {
            return $this->_propDict["networkSourceCidrBlock"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkSourceCidrBlock
    *
    * @param string $val The networkSourceCidrBlock
    *
    * @return TiIndicator
    */
    public function setNetworkSourceCidrBlock($val)
    {
        $this->_propDict["networkSourceCidrBlock"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkSourceIPv4
    *
    * @return string The networkSourceIPv4
    */
    public function getNetworkSourceIPv4()
    {
        if (array_key_exists("networkSourceIPv4", $this->_propDict)) {
            return $this->_propDict["networkSourceIPv4"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkSourceIPv4
    *
    * @param string $val The networkSourceIPv4
    *
    * @return TiIndicator
    */
    public function setNetworkSourceIPv4($val)
    {
        $this->_propDict["networkSourceIPv4"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkSourceIPv6
    *
    * @return string The networkSourceIPv6
    */
    public function getNetworkSourceIPv6()
    {
        if (array_key_exists("networkSourceIPv6", $this->_propDict)) {
            return $this->_propDict["networkSourceIPv6"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkSourceIPv6
    *
    * @param string $val The networkSourceIPv6
    *
    * @return TiIndicator
    */
    public function setNetworkSourceIPv6($val)
    {
        $this->_propDict["networkSourceIPv6"] = $val;
        return $this;
    }
    
    /**
    * Gets the networkSourcePort
    *
    * @return int The networkSourcePort
    */
    public function getNetworkSourcePort()
    {
        if (array_key_exists("networkSourcePort", $this->_propDict)) {
            return $this->_propDict["networkSourcePort"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkSourcePort
    *
    * @param int $val The networkSourcePort
    *
    * @return TiIndicator
    */
    public function setNetworkSourcePort($val)
    {
        $this->_propDict["networkSourcePort"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the passiveOnly
    * Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools will not notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they will simply log that a match occurred but will not perform the action. Default value is false.
    *
    * @return bool The passiveOnly
    */
    public function getPassiveOnly()
    {
        if (array_key_exists("passiveOnly", $this->_propDict)) {
            return $this->_propDict["passiveOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the passiveOnly
    * Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools will not notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they will simply log that a match occurred but will not perform the action. Default value is false.
    *
    * @param bool $val The passiveOnly
    *
    * @return TiIndicator
    */
    public function setPassiveOnly($val)
    {
        $this->_propDict["passiveOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the severity
    * An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero is not severe at all. Default value is 3.
    *
    * @return int The severity
    */
    public function getSeverity()
    {
        if (array_key_exists("severity", $this->_propDict)) {
            return $this->_propDict["severity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the severity
    * An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero is not severe at all. Default value is 3.
    *
    * @param int $val The severity
    *
    * @return TiIndicator
    */
    public function setSeverity($val)
    {
        $this->_propDict["severity"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tags
    * A JSON array of strings that stores arbitrary tags/keywords.
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    * A JSON array of strings that stores arbitrary tags/keywords.
    *
    * @param string $val The tags
    *
    * @return TiIndicator
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetProduct
    * A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
    *
    * @return string The targetProduct
    */
    public function getTargetProduct()
    {
        if (array_key_exists("targetProduct", $this->_propDict)) {
            return $this->_propDict["targetProduct"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetProduct
    * A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
    *
    * @param string $val The targetProduct
    *
    * @return TiIndicator
    */
    public function setTargetProduct($val)
    {
        $this->_propDict["targetProduct"] = $val;
        return $this;
    }
    
    /**
    * Gets the threatType
    * Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
    *
    * @return string The threatType
    */
    public function getThreatType()
    {
        if (array_key_exists("threatType", $this->_propDict)) {
            return $this->_propDict["threatType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the threatType
    * Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
    *
    * @param string $val The threatType
    *
    * @return TiIndicator
    */
    public function setThreatType($val)
    {
        $this->_propDict["threatType"] = $val;
        return $this;
    }
    
    /**
    * Gets the tlpLevel
    * Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
    *
    * @return TlpLevel The tlpLevel
    */
    public function getTlpLevel()
    {
        if (array_key_exists("tlpLevel", $this->_propDict)) {
            if (is_a($this->_propDict["tlpLevel"], "\Beta\Microsoft\Graph\Model\TlpLevel")) {
                return $this->_propDict["tlpLevel"];
            } else {
                $this->_propDict["tlpLevel"] = new TlpLevel($this->_propDict["tlpLevel"]);
                return $this->_propDict["tlpLevel"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tlpLevel
    * Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
    *
    * @param TlpLevel $val The tlpLevel
    *
    * @return TiIndicator
    */
    public function setTlpLevel($val)
    {
        $this->_propDict["tlpLevel"] = $val;
        return $this;
    }
    
    /**
    * Gets the url
    *
    * @return string The url
    */
    public function getUrl()
    {
        if (array_key_exists("url", $this->_propDict)) {
            return $this->_propDict["url"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the url
    *
    * @param string $val The url
    *
    * @return TiIndicator
    */
    public function setUrl($val)
    {
        $this->_propDict["url"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAgent
    *
    * @return string The userAgent
    */
    public function getUserAgent()
    {
        if (array_key_exists("userAgent", $this->_propDict)) {
            return $this->_propDict["userAgent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userAgent
    *
    * @param string $val The userAgent
    *
    * @return TiIndicator
    */
    public function setUserAgent($val)
    {
        $this->_propDict["userAgent"] = $val;
        return $this;
    }
    
}
