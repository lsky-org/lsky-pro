<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceInfo File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;
/**
* DeviceInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceInfo extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the captureDeviceDriver
    * Name of the capture device driver used by the media endpoint.
    *
    * @return string The captureDeviceDriver
    */
    public function getCaptureDeviceDriver()
    {
        if (array_key_exists("captureDeviceDriver", $this->_propDict)) {
            return $this->_propDict["captureDeviceDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the captureDeviceDriver
    * Name of the capture device driver used by the media endpoint.
    *
    * @param string $val The value of the captureDeviceDriver
    *
    * @return DeviceInfo
    */
    public function setCaptureDeviceDriver($val)
    {
        $this->_propDict["captureDeviceDriver"] = $val;
        return $this;
    }
    /**
    * Gets the captureDeviceName
    * Name of the capture device used by the media endpoint.
    *
    * @return string The captureDeviceName
    */
    public function getCaptureDeviceName()
    {
        if (array_key_exists("captureDeviceName", $this->_propDict)) {
            return $this->_propDict["captureDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the captureDeviceName
    * Name of the capture device used by the media endpoint.
    *
    * @param string $val The value of the captureDeviceName
    *
    * @return DeviceInfo
    */
    public function setCaptureDeviceName($val)
    {
        $this->_propDict["captureDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the captureNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the capture device was not working properly.
    *
    * @return \Microsoft\Graph\Model\Single The captureNotFunctioningEventRatio
    */
    public function getCaptureNotFunctioningEventRatio()
    {
        if (array_key_exists("captureNotFunctioningEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["captureNotFunctioningEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["captureNotFunctioningEventRatio"];
            } else {
                $this->_propDict["captureNotFunctioningEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["captureNotFunctioningEventRatio"]);
                return $this->_propDict["captureNotFunctioningEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the captureNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the capture device was not working properly.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the captureNotFunctioningEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setCaptureNotFunctioningEventRatio($val)
    {
        $this->_propDict["captureNotFunctioningEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the cpuInsufficentEventRatio
    * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
    *
    * @return \Microsoft\Graph\Model\Single The cpuInsufficentEventRatio
    */
    public function getCpuInsufficentEventRatio()
    {
        if (array_key_exists("cpuInsufficentEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["cpuInsufficentEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["cpuInsufficentEventRatio"];
            } else {
                $this->_propDict["cpuInsufficentEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["cpuInsufficentEventRatio"]);
                return $this->_propDict["cpuInsufficentEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the cpuInsufficentEventRatio
    * Fraction of the call that the media endpoint detected the CPU resources available were insufficient and caused poor quality of the audio sent and received.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the cpuInsufficentEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setCpuInsufficentEventRatio($val)
    {
        $this->_propDict["cpuInsufficentEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the deviceClippingEventRatio
    * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
    *
    * @return \Microsoft\Graph\Model\Single The deviceClippingEventRatio
    */
    public function getDeviceClippingEventRatio()
    {
        if (array_key_exists("deviceClippingEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["deviceClippingEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["deviceClippingEventRatio"];
            } else {
                $this->_propDict["deviceClippingEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["deviceClippingEventRatio"]);
                return $this->_propDict["deviceClippingEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceClippingEventRatio
    * Fraction of the call that the media endpoint detected clipping in the captured audio that caused poor quality of the audio being sent.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the deviceClippingEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setDeviceClippingEventRatio($val)
    {
        $this->_propDict["deviceClippingEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the deviceGlitchEventRatio
    * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
    *
    * @return \Microsoft\Graph\Model\Single The deviceGlitchEventRatio
    */
    public function getDeviceGlitchEventRatio()
    {
        if (array_key_exists("deviceGlitchEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["deviceGlitchEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["deviceGlitchEventRatio"];
            } else {
                $this->_propDict["deviceGlitchEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["deviceGlitchEventRatio"]);
                return $this->_propDict["deviceGlitchEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceGlitchEventRatio
    * Fraction of the call that the media endpoint detected glitches or gaps in the audio played or captured that caused poor quality of the audio being sent or received.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the deviceGlitchEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setDeviceGlitchEventRatio($val)
    {
        $this->_propDict["deviceGlitchEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the howlingEventCount
    * Number of times during the call that the media endpoint detected howling or screeching audio.
    *
    * @return int The howlingEventCount
    */
    public function getHowlingEventCount()
    {
        if (array_key_exists("howlingEventCount", $this->_propDict)) {
            return $this->_propDict["howlingEventCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the howlingEventCount
    * Number of times during the call that the media endpoint detected howling or screeching audio.
    *
    * @param int $val The value of the howlingEventCount
    *
    * @return DeviceInfo
    */
    public function setHowlingEventCount($val)
    {
        $this->_propDict["howlingEventCount"] = $val;
        return $this;
    }

    /**
    * Gets the initialSignalLevelRootMeanSquare
    * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
    *
    * @return \Microsoft\Graph\Model\Single The initialSignalLevelRootMeanSquare
    */
    public function getInitialSignalLevelRootMeanSquare()
    {
        if (array_key_exists("initialSignalLevelRootMeanSquare", $this->_propDict)) {
            if (is_a($this->_propDict["initialSignalLevelRootMeanSquare"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["initialSignalLevelRootMeanSquare"];
            } else {
                $this->_propDict["initialSignalLevelRootMeanSquare"] = new \Microsoft\Graph\Model\Single($this->_propDict["initialSignalLevelRootMeanSquare"]);
                return $this->_propDict["initialSignalLevelRootMeanSquare"];
            }
        }
        return null;
    }

    /**
    * Sets the initialSignalLevelRootMeanSquare
    * The root mean square (RMS) of the incoming signal of up to the first 30 seconds of the call.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the initialSignalLevelRootMeanSquare
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setInitialSignalLevelRootMeanSquare($val)
    {
        $this->_propDict["initialSignalLevelRootMeanSquare"] = $val;
         return $this;
    }

    /**
    * Gets the lowSpeechLevelEventRatio
    * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
    *
    * @return \Microsoft\Graph\Model\Single The lowSpeechLevelEventRatio
    */
    public function getLowSpeechLevelEventRatio()
    {
        if (array_key_exists("lowSpeechLevelEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["lowSpeechLevelEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["lowSpeechLevelEventRatio"];
            } else {
                $this->_propDict["lowSpeechLevelEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["lowSpeechLevelEventRatio"]);
                return $this->_propDict["lowSpeechLevelEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the lowSpeechLevelEventRatio
    * Fraction of the call that the media endpoint detected low speech level that caused poor quality of the audio being sent.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the lowSpeechLevelEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setLowSpeechLevelEventRatio($val)
    {
        $this->_propDict["lowSpeechLevelEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the lowSpeechToNoiseEventRatio
    * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
    *
    * @return \Microsoft\Graph\Model\Single The lowSpeechToNoiseEventRatio
    */
    public function getLowSpeechToNoiseEventRatio()
    {
        if (array_key_exists("lowSpeechToNoiseEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["lowSpeechToNoiseEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["lowSpeechToNoiseEventRatio"];
            } else {
                $this->_propDict["lowSpeechToNoiseEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["lowSpeechToNoiseEventRatio"]);
                return $this->_propDict["lowSpeechToNoiseEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the lowSpeechToNoiseEventRatio
    * Fraction of the call that the media endpoint detected low speech to noise level that caused poor quality of the audio being sent.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the lowSpeechToNoiseEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setLowSpeechToNoiseEventRatio($val)
    {
        $this->_propDict["lowSpeechToNoiseEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the micGlitchRate
    * Glitches per 5 minute interval for the media endpoint's microphone.
    *
    * @return \Microsoft\Graph\Model\Single The micGlitchRate
    */
    public function getMicGlitchRate()
    {
        if (array_key_exists("micGlitchRate", $this->_propDict)) {
            if (is_a($this->_propDict["micGlitchRate"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["micGlitchRate"];
            } else {
                $this->_propDict["micGlitchRate"] = new \Microsoft\Graph\Model\Single($this->_propDict["micGlitchRate"]);
                return $this->_propDict["micGlitchRate"];
            }
        }
        return null;
    }

    /**
    * Sets the micGlitchRate
    * Glitches per 5 minute interval for the media endpoint's microphone.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the micGlitchRate
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setMicGlitchRate($val)
    {
        $this->_propDict["micGlitchRate"] = $val;
         return $this;
    }
    /**
    * Gets the receivedNoiseLevel
    * Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @return int The receivedNoiseLevel
    */
    public function getReceivedNoiseLevel()
    {
        if (array_key_exists("receivedNoiseLevel", $this->_propDict)) {
            return $this->_propDict["receivedNoiseLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivedNoiseLevel
    * Average energy level of received audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @param int $val The value of the receivedNoiseLevel
    *
    * @return DeviceInfo
    */
    public function setReceivedNoiseLevel($val)
    {
        $this->_propDict["receivedNoiseLevel"] = $val;
        return $this;
    }
    /**
    * Gets the receivedSignalLevel
    * Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @return int The receivedSignalLevel
    */
    public function getReceivedSignalLevel()
    {
        if (array_key_exists("receivedSignalLevel", $this->_propDict)) {
            return $this->_propDict["receivedSignalLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the receivedSignalLevel
    * Average energy level of received audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @param int $val The value of the receivedSignalLevel
    *
    * @return DeviceInfo
    */
    public function setReceivedSignalLevel($val)
    {
        $this->_propDict["receivedSignalLevel"] = $val;
        return $this;
    }
    /**
    * Gets the renderDeviceDriver
    * Name of the render device driver used by the media endpoint.
    *
    * @return string The renderDeviceDriver
    */
    public function getRenderDeviceDriver()
    {
        if (array_key_exists("renderDeviceDriver", $this->_propDict)) {
            return $this->_propDict["renderDeviceDriver"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderDeviceDriver
    * Name of the render device driver used by the media endpoint.
    *
    * @param string $val The value of the renderDeviceDriver
    *
    * @return DeviceInfo
    */
    public function setRenderDeviceDriver($val)
    {
        $this->_propDict["renderDeviceDriver"] = $val;
        return $this;
    }
    /**
    * Gets the renderDeviceName
    * Name of the render device used by the media endpoint.
    *
    * @return string The renderDeviceName
    */
    public function getRenderDeviceName()
    {
        if (array_key_exists("renderDeviceName", $this->_propDict)) {
            return $this->_propDict["renderDeviceName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the renderDeviceName
    * Name of the render device used by the media endpoint.
    *
    * @param string $val The value of the renderDeviceName
    *
    * @return DeviceInfo
    */
    public function setRenderDeviceName($val)
    {
        $this->_propDict["renderDeviceName"] = $val;
        return $this;
    }

    /**
    * Gets the renderMuteEventRatio
    * Fraction of the call that media endpoint detected device render is muted.
    *
    * @return \Microsoft\Graph\Model\Single The renderMuteEventRatio
    */
    public function getRenderMuteEventRatio()
    {
        if (array_key_exists("renderMuteEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["renderMuteEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["renderMuteEventRatio"];
            } else {
                $this->_propDict["renderMuteEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["renderMuteEventRatio"]);
                return $this->_propDict["renderMuteEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the renderMuteEventRatio
    * Fraction of the call that media endpoint detected device render is muted.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the renderMuteEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setRenderMuteEventRatio($val)
    {
        $this->_propDict["renderMuteEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the renderNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the render device was not working properly.
    *
    * @return \Microsoft\Graph\Model\Single The renderNotFunctioningEventRatio
    */
    public function getRenderNotFunctioningEventRatio()
    {
        if (array_key_exists("renderNotFunctioningEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["renderNotFunctioningEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["renderNotFunctioningEventRatio"];
            } else {
                $this->_propDict["renderNotFunctioningEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["renderNotFunctioningEventRatio"]);
                return $this->_propDict["renderNotFunctioningEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the renderNotFunctioningEventRatio
    * Fraction of the call that the media endpoint detected the render device was not working properly.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the renderNotFunctioningEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setRenderNotFunctioningEventRatio($val)
    {
        $this->_propDict["renderNotFunctioningEventRatio"] = $val;
         return $this;
    }

    /**
    * Gets the renderZeroVolumeEventRatio
    * Fraction of the call that media endpoint detected device render volume is set to 0.
    *
    * @return \Microsoft\Graph\Model\Single The renderZeroVolumeEventRatio
    */
    public function getRenderZeroVolumeEventRatio()
    {
        if (array_key_exists("renderZeroVolumeEventRatio", $this->_propDict)) {
            if (is_a($this->_propDict["renderZeroVolumeEventRatio"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["renderZeroVolumeEventRatio"];
            } else {
                $this->_propDict["renderZeroVolumeEventRatio"] = new \Microsoft\Graph\Model\Single($this->_propDict["renderZeroVolumeEventRatio"]);
                return $this->_propDict["renderZeroVolumeEventRatio"];
            }
        }
        return null;
    }

    /**
    * Sets the renderZeroVolumeEventRatio
    * Fraction of the call that media endpoint detected device render volume is set to 0.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the renderZeroVolumeEventRatio
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setRenderZeroVolumeEventRatio($val)
    {
        $this->_propDict["renderZeroVolumeEventRatio"] = $val;
         return $this;
    }
    /**
    * Gets the sentNoiseLevel
    * Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @return int The sentNoiseLevel
    */
    public function getSentNoiseLevel()
    {
        if (array_key_exists("sentNoiseLevel", $this->_propDict)) {
            return $this->_propDict["sentNoiseLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentNoiseLevel
    * Average energy level of sent audio for audio classified as mono noise or left channel of stereo noise by the media endpoint.
    *
    * @param int $val The value of the sentNoiseLevel
    *
    * @return DeviceInfo
    */
    public function setSentNoiseLevel($val)
    {
        $this->_propDict["sentNoiseLevel"] = $val;
        return $this;
    }
    /**
    * Gets the sentSignalLevel
    * Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @return int The sentSignalLevel
    */
    public function getSentSignalLevel()
    {
        if (array_key_exists("sentSignalLevel", $this->_propDict)) {
            return $this->_propDict["sentSignalLevel"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sentSignalLevel
    * Average energy level of sent audio for audio classified as mono speech, or left channel of stereo speech by the media endpoint.
    *
    * @param int $val The value of the sentSignalLevel
    *
    * @return DeviceInfo
    */
    public function setSentSignalLevel($val)
    {
        $this->_propDict["sentSignalLevel"] = $val;
        return $this;
    }

    /**
    * Gets the speakerGlitchRate
    * Glitches per 5 minute internal for the media endpoint's loudspeaker.
    *
    * @return \Microsoft\Graph\Model\Single The speakerGlitchRate
    */
    public function getSpeakerGlitchRate()
    {
        if (array_key_exists("speakerGlitchRate", $this->_propDict)) {
            if (is_a($this->_propDict["speakerGlitchRate"], "\Microsoft\Graph\Model\Single")) {
                return $this->_propDict["speakerGlitchRate"];
            } else {
                $this->_propDict["speakerGlitchRate"] = new \Microsoft\Graph\Model\Single($this->_propDict["speakerGlitchRate"]);
                return $this->_propDict["speakerGlitchRate"];
            }
        }
        return null;
    }

    /**
    * Sets the speakerGlitchRate
    * Glitches per 5 minute internal for the media endpoint's loudspeaker.
    *
    * @param \Microsoft\Graph\Model\Single $val The value to assign to the speakerGlitchRate
    *
    * @return DeviceInfo The DeviceInfo
    */
    public function setSpeakerGlitchRate($val)
    {
        $this->_propDict["speakerGlitchRate"] = $val;
         return $this;
    }
}
