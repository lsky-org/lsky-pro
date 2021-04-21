<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HardwareInformation File
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
* HardwareInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HardwareInformation extends Entity
{
    /**
    * Gets the batteryChargeCycles
    * The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
    *
    * @return int The batteryChargeCycles
    */
    public function getBatteryChargeCycles()
    {
        if (array_key_exists("batteryChargeCycles", $this->_propDict)) {
            return $this->_propDict["batteryChargeCycles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryChargeCycles
    * The number of charge cycles the device’s current battery has gone through. Valid values 0 to 2147483647
    *
    * @param int $val The value of the batteryChargeCycles
    *
    * @return HardwareInformation
    */
    public function setBatteryChargeCycles($val)
    {
        $this->_propDict["batteryChargeCycles"] = $val;
        return $this;
    }
    /**
    * Gets the batteryHealthPercentage
    * The device’s current battery’s health percentage. Valid values 0 to 100
    *
    * @return int The batteryHealthPercentage
    */
    public function getBatteryHealthPercentage()
    {
        if (array_key_exists("batteryHealthPercentage", $this->_propDict)) {
            return $this->_propDict["batteryHealthPercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batteryHealthPercentage
    * The device’s current battery’s health percentage. Valid values 0 to 100
    *
    * @param int $val The value of the batteryHealthPercentage
    *
    * @return HardwareInformation
    */
    public function setBatteryHealthPercentage($val)
    {
        $this->_propDict["batteryHealthPercentage"] = $val;
        return $this;
    }
    /**
    * Gets the batterySerialNumber
    * The serial number of the device’s current battery
    *
    * @return string The batterySerialNumber
    */
    public function getBatterySerialNumber()
    {
        if (array_key_exists("batterySerialNumber", $this->_propDict)) {
            return $this->_propDict["batterySerialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the batterySerialNumber
    * The serial number of the device’s current battery
    *
    * @param string $val The value of the batterySerialNumber
    *
    * @return HardwareInformation
    */
    public function setBatterySerialNumber($val)
    {
        $this->_propDict["batterySerialNumber"] = $val;
        return $this;
    }
    /**
    * Gets the cellularTechnology
    * Cellular technology of the device
    *
    * @return string The cellularTechnology
    */
    public function getCellularTechnology()
    {
        if (array_key_exists("cellularTechnology", $this->_propDict)) {
            return $this->_propDict["cellularTechnology"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cellularTechnology
    * Cellular technology of the device
    *
    * @param string $val The value of the cellularTechnology
    *
    * @return HardwareInformation
    */
    public function setCellularTechnology($val)
    {
        $this->_propDict["cellularTechnology"] = $val;
        return $this;
    }
    /**
    * Gets the deviceFullQualifiedDomainName
    * Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
    *
    * @return string The deviceFullQualifiedDomainName
    */
    public function getDeviceFullQualifiedDomainName()
    {
        if (array_key_exists("deviceFullQualifiedDomainName", $this->_propDict)) {
            return $this->_propDict["deviceFullQualifiedDomainName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceFullQualifiedDomainName
    * Returns the fully qualified domain name of the device (if any). If the device is not domain-joined, it returns an empty string.
    *
    * @param string $val The value of the deviceFullQualifiedDomainName
    *
    * @return HardwareInformation
    */
    public function setDeviceFullQualifiedDomainName($val)
    {
        $this->_propDict["deviceFullQualifiedDomainName"] = $val;
        return $this;
    }

    /**
    * Gets the deviceGuardLocalSystemAuthorityCredentialGuardState
    * Local System Authority (LSA) credential guard status. . Possible values are: running, rebootRequired, notLicensed, notConfigured, virtualizationBasedSecurityNotRunning.
    *
    * @return DeviceGuardLocalSystemAuthorityCredentialGuardState The deviceGuardLocalSystemAuthorityCredentialGuardState
    */
    public function getDeviceGuardLocalSystemAuthorityCredentialGuardState()
    {
        if (array_key_exists("deviceGuardLocalSystemAuthorityCredentialGuardState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"], "\Beta\Microsoft\Graph\Model\DeviceGuardLocalSystemAuthorityCredentialGuardState")) {
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"];
            } else {
                $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"] = new DeviceGuardLocalSystemAuthorityCredentialGuardState($this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"]);
                return $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceGuardLocalSystemAuthorityCredentialGuardState
    * Local System Authority (LSA) credential guard status. . Possible values are: running, rebootRequired, notLicensed, notConfigured, virtualizationBasedSecurityNotRunning.
    *
    * @param DeviceGuardLocalSystemAuthorityCredentialGuardState $val The value to assign to the deviceGuardLocalSystemAuthorityCredentialGuardState
    *
    * @return HardwareInformation The HardwareInformation
    */
    public function setDeviceGuardLocalSystemAuthorityCredentialGuardState($val)
    {
        $this->_propDict["deviceGuardLocalSystemAuthorityCredentialGuardState"] = $val;
         return $this;
    }

    /**
    * Gets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState
    * Virtualization-based security hardware requirement status. Possible values are: meetHardwareRequirements, secureBootRequired, dmaProtectionRequired, hyperVNotSupportedForGuestVM, hyperVNotAvailable.
    *
    * @return DeviceGuardVirtualizationBasedSecurityHardwareRequirementState The deviceGuardVirtualizationBasedSecurityHardwareRequirementState
    */
    public function getDeviceGuardVirtualizationBasedSecurityHardwareRequirementState()
    {
        if (array_key_exists("deviceGuardVirtualizationBasedSecurityHardwareRequirementState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"], "\Beta\Microsoft\Graph\Model\DeviceGuardVirtualizationBasedSecurityHardwareRequirementState")) {
                return $this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"];
            } else {
                $this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"] = new DeviceGuardVirtualizationBasedSecurityHardwareRequirementState($this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"]);
                return $this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceGuardVirtualizationBasedSecurityHardwareRequirementState
    * Virtualization-based security hardware requirement status. Possible values are: meetHardwareRequirements, secureBootRequired, dmaProtectionRequired, hyperVNotSupportedForGuestVM, hyperVNotAvailable.
    *
    * @param DeviceGuardVirtualizationBasedSecurityHardwareRequirementState $val The value to assign to the deviceGuardVirtualizationBasedSecurityHardwareRequirementState
    *
    * @return HardwareInformation The HardwareInformation
    */
    public function setDeviceGuardVirtualizationBasedSecurityHardwareRequirementState($val)
    {
        $this->_propDict["deviceGuardVirtualizationBasedSecurityHardwareRequirementState"] = $val;
         return $this;
    }

    /**
    * Gets the deviceGuardVirtualizationBasedSecurityState
    * Virtualization-based security status. . Possible values are: running, rebootRequired, require64BitArchitecture, notLicensed, notConfigured, doesNotMeetHardwareRequirements, other.
    *
    * @return DeviceGuardVirtualizationBasedSecurityState The deviceGuardVirtualizationBasedSecurityState
    */
    public function getDeviceGuardVirtualizationBasedSecurityState()
    {
        if (array_key_exists("deviceGuardVirtualizationBasedSecurityState", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGuardVirtualizationBasedSecurityState"], "\Beta\Microsoft\Graph\Model\DeviceGuardVirtualizationBasedSecurityState")) {
                return $this->_propDict["deviceGuardVirtualizationBasedSecurityState"];
            } else {
                $this->_propDict["deviceGuardVirtualizationBasedSecurityState"] = new DeviceGuardVirtualizationBasedSecurityState($this->_propDict["deviceGuardVirtualizationBasedSecurityState"]);
                return $this->_propDict["deviceGuardVirtualizationBasedSecurityState"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceGuardVirtualizationBasedSecurityState
    * Virtualization-based security status. . Possible values are: running, rebootRequired, require64BitArchitecture, notLicensed, notConfigured, doesNotMeetHardwareRequirements, other.
    *
    * @param DeviceGuardVirtualizationBasedSecurityState $val The value to assign to the deviceGuardVirtualizationBasedSecurityState
    *
    * @return HardwareInformation The HardwareInformation
    */
    public function setDeviceGuardVirtualizationBasedSecurityState($val)
    {
        $this->_propDict["deviceGuardVirtualizationBasedSecurityState"] = $val;
         return $this;
    }
    /**
    * Gets the freeStorageSpace
    * Free storage space of the device.
    *
    * @return int The freeStorageSpace
    */
    public function getFreeStorageSpace()
    {
        if (array_key_exists("freeStorageSpace", $this->_propDict)) {
            return $this->_propDict["freeStorageSpace"];
        } else {
            return null;
        }
    }

    /**
    * Sets the freeStorageSpace
    * Free storage space of the device.
    *
    * @param int $val The value of the freeStorageSpace
    *
    * @return HardwareInformation
    */
    public function setFreeStorageSpace($val)
    {
        $this->_propDict["freeStorageSpace"] = $val;
        return $this;
    }
    /**
    * Gets the imei
    * IMEI
    *
    * @return string The imei
    */
    public function getImei()
    {
        if (array_key_exists("imei", $this->_propDict)) {
            return $this->_propDict["imei"];
        } else {
            return null;
        }
    }

    /**
    * Sets the imei
    * IMEI
    *
    * @param string $val The value of the imei
    *
    * @return HardwareInformation
    */
    public function setImei($val)
    {
        $this->_propDict["imei"] = $val;
        return $this;
    }
    /**
    * Gets the ipAddressV4
    * IPAddressV4
    *
    * @return string The ipAddressV4
    */
    public function getIpAddressV4()
    {
        if (array_key_exists("ipAddressV4", $this->_propDict)) {
            return $this->_propDict["ipAddressV4"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipAddressV4
    * IPAddressV4
    *
    * @param string $val The value of the ipAddressV4
    *
    * @return HardwareInformation
    */
    public function setIpAddressV4($val)
    {
        $this->_propDict["ipAddressV4"] = $val;
        return $this;
    }
    /**
    * Gets the isEncrypted
    * Encryption status of the device
    *
    * @return bool The isEncrypted
    */
    public function getIsEncrypted()
    {
        if (array_key_exists("isEncrypted", $this->_propDict)) {
            return $this->_propDict["isEncrypted"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEncrypted
    * Encryption status of the device
    *
    * @param bool $val The value of the isEncrypted
    *
    * @return HardwareInformation
    */
    public function setIsEncrypted($val)
    {
        $this->_propDict["isEncrypted"] = $val;
        return $this;
    }
    /**
    * Gets the isSharedDevice
    * Shared iPad
    *
    * @return bool The isSharedDevice
    */
    public function getIsSharedDevice()
    {
        if (array_key_exists("isSharedDevice", $this->_propDict)) {
            return $this->_propDict["isSharedDevice"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSharedDevice
    * Shared iPad
    *
    * @param bool $val The value of the isSharedDevice
    *
    * @return HardwareInformation
    */
    public function setIsSharedDevice($val)
    {
        $this->_propDict["isSharedDevice"] = $val;
        return $this;
    }
    /**
    * Gets the isSupervised
    * Supervised mode of the device
    *
    * @return bool The isSupervised
    */
    public function getIsSupervised()
    {
        if (array_key_exists("isSupervised", $this->_propDict)) {
            return $this->_propDict["isSupervised"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSupervised
    * Supervised mode of the device
    *
    * @param bool $val The value of the isSupervised
    *
    * @return HardwareInformation
    */
    public function setIsSupervised($val)
    {
        $this->_propDict["isSupervised"] = $val;
        return $this;
    }
    /**
    * Gets the manufacturer
    * Manufacturer of the device
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the manufacturer
    * Manufacturer of the device
    *
    * @param string $val The value of the manufacturer
    *
    * @return HardwareInformation
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    /**
    * Gets the meid
    * MEID
    *
    * @return string The meid
    */
    public function getMeid()
    {
        if (array_key_exists("meid", $this->_propDict)) {
            return $this->_propDict["meid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the meid
    * MEID
    *
    * @param string $val The value of the meid
    *
    * @return HardwareInformation
    */
    public function setMeid($val)
    {
        $this->_propDict["meid"] = $val;
        return $this;
    }
    /**
    * Gets the model
    * Model of the device
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }

    /**
    * Sets the model
    * Model of the device
    *
    * @param string $val The value of the model
    *
    * @return HardwareInformation
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemEdition
    * String that specifies the OS edition.
    *
    * @return string The operatingSystemEdition
    */
    public function getOperatingSystemEdition()
    {
        if (array_key_exists("operatingSystemEdition", $this->_propDict)) {
            return $this->_propDict["operatingSystemEdition"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemEdition
    * String that specifies the OS edition.
    *
    * @param string $val The value of the operatingSystemEdition
    *
    * @return HardwareInformation
    */
    public function setOperatingSystemEdition($val)
    {
        $this->_propDict["operatingSystemEdition"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemLanguage
    * Operating system language of the device
    *
    * @return string The operatingSystemLanguage
    */
    public function getOperatingSystemLanguage()
    {
        if (array_key_exists("operatingSystemLanguage", $this->_propDict)) {
            return $this->_propDict["operatingSystemLanguage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemLanguage
    * Operating system language of the device
    *
    * @param string $val The value of the operatingSystemLanguage
    *
    * @return HardwareInformation
    */
    public function setOperatingSystemLanguage($val)
    {
        $this->_propDict["operatingSystemLanguage"] = $val;
        return $this;
    }
    /**
    * Gets the operatingSystemProductType
    * Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
    *
    * @return int The operatingSystemProductType
    */
    public function getOperatingSystemProductType()
    {
        if (array_key_exists("operatingSystemProductType", $this->_propDict)) {
            return $this->_propDict["operatingSystemProductType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatingSystemProductType
    * Int that specifies the Windows Operating System ProductType. More details here https://go.microsoft.com/fwlink/?linkid=2126950. Valid values 0 to 2147483647
    *
    * @param int $val The value of the operatingSystemProductType
    *
    * @return HardwareInformation
    */
    public function setOperatingSystemProductType($val)
    {
        $this->_propDict["operatingSystemProductType"] = $val;
        return $this;
    }
    /**
    * Gets the osBuildNumber
    * Operating System Build Number on Android device
    *
    * @return string The osBuildNumber
    */
    public function getOsBuildNumber()
    {
        if (array_key_exists("osBuildNumber", $this->_propDict)) {
            return $this->_propDict["osBuildNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osBuildNumber
    * Operating System Build Number on Android device
    *
    * @param string $val The value of the osBuildNumber
    *
    * @return HardwareInformation
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }
    /**
    * Gets the phoneNumber
    * Phone number of the device
    *
    * @return string The phoneNumber
    */
    public function getPhoneNumber()
    {
        if (array_key_exists("phoneNumber", $this->_propDict)) {
            return $this->_propDict["phoneNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the phoneNumber
    * Phone number of the device
    *
    * @param string $val The value of the phoneNumber
    *
    * @return HardwareInformation
    */
    public function setPhoneNumber($val)
    {
        $this->_propDict["phoneNumber"] = $val;
        return $this;
    }
    /**
    * Gets the serialNumber
    * Serial number.
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serialNumber
    * Serial number.
    *
    * @param string $val The value of the serialNumber
    *
    * @return HardwareInformation
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }

    /**
    * Gets the sharedDeviceCachedUsers
    * All users on the shared Apple device
    *
    * @return SharedAppleDeviceUser The sharedDeviceCachedUsers
    */
    public function getSharedDeviceCachedUsers()
    {
        if (array_key_exists("sharedDeviceCachedUsers", $this->_propDict)) {
            if (is_a($this->_propDict["sharedDeviceCachedUsers"], "\Beta\Microsoft\Graph\Model\SharedAppleDeviceUser")) {
                return $this->_propDict["sharedDeviceCachedUsers"];
            } else {
                $this->_propDict["sharedDeviceCachedUsers"] = new SharedAppleDeviceUser($this->_propDict["sharedDeviceCachedUsers"]);
                return $this->_propDict["sharedDeviceCachedUsers"];
            }
        }
        return null;
    }

    /**
    * Sets the sharedDeviceCachedUsers
    * All users on the shared Apple device
    *
    * @param SharedAppleDeviceUser $val The value to assign to the sharedDeviceCachedUsers
    *
    * @return HardwareInformation The HardwareInformation
    */
    public function setSharedDeviceCachedUsers($val)
    {
        $this->_propDict["sharedDeviceCachedUsers"] = $val;
         return $this;
    }
    /**
    * Gets the subnetAddress
    * SubnetAddress
    *
    * @return string The subnetAddress
    */
    public function getSubnetAddress()
    {
        if (array_key_exists("subnetAddress", $this->_propDict)) {
            return $this->_propDict["subnetAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subnetAddress
    * SubnetAddress
    *
    * @param string $val The value of the subnetAddress
    *
    * @return HardwareInformation
    */
    public function setSubnetAddress($val)
    {
        $this->_propDict["subnetAddress"] = $val;
        return $this;
    }
    /**
    * Gets the subscriberCarrier
    * Subscriber carrier of the device
    *
    * @return string The subscriberCarrier
    */
    public function getSubscriberCarrier()
    {
        if (array_key_exists("subscriberCarrier", $this->_propDict)) {
            return $this->_propDict["subscriberCarrier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subscriberCarrier
    * Subscriber carrier of the device
    *
    * @param string $val The value of the subscriberCarrier
    *
    * @return HardwareInformation
    */
    public function setSubscriberCarrier($val)
    {
        $this->_propDict["subscriberCarrier"] = $val;
        return $this;
    }
    /**
    * Gets the totalStorageSpace
    * Total storage space of the device.
    *
    * @return int The totalStorageSpace
    */
    public function getTotalStorageSpace()
    {
        if (array_key_exists("totalStorageSpace", $this->_propDict)) {
            return $this->_propDict["totalStorageSpace"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalStorageSpace
    * Total storage space of the device.
    *
    * @param int $val The value of the totalStorageSpace
    *
    * @return HardwareInformation
    */
    public function setTotalStorageSpace($val)
    {
        $this->_propDict["totalStorageSpace"] = $val;
        return $this;
    }
    /**
    * Gets the tpmSpecificationVersion
    * String that specifies the specification version.
    *
    * @return string The tpmSpecificationVersion
    */
    public function getTpmSpecificationVersion()
    {
        if (array_key_exists("tpmSpecificationVersion", $this->_propDict)) {
            return $this->_propDict["tpmSpecificationVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tpmSpecificationVersion
    * String that specifies the specification version.
    *
    * @param string $val The value of the tpmSpecificationVersion
    *
    * @return HardwareInformation
    */
    public function setTpmSpecificationVersion($val)
    {
        $this->_propDict["tpmSpecificationVersion"] = $val;
        return $this;
    }
    /**
    * Gets the wifiMac
    * WiFi MAC address of the device
    *
    * @return string The wifiMac
    */
    public function getWifiMac()
    {
        if (array_key_exists("wifiMac", $this->_propDict)) {
            return $this->_propDict["wifiMac"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wifiMac
    * WiFi MAC address of the device
    *
    * @param string $val The value of the wifiMac
    *
    * @return HardwareInformation
    */
    public function setWifiMac($val)
    {
        $this->_propDict["wifiMac"] = $val;
        return $this;
    }
}
