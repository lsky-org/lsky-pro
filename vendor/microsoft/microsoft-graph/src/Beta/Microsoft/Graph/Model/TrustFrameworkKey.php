<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrustFrameworkKey File
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
* TrustFrameworkKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrustFrameworkKey extends Entity
{
    /**
    * Gets the d
    * RSA Key - private exponent. Field cannot be read back.
    *
    * @return string The d
    */
    public function getD()
    {
        if (array_key_exists("d", $this->_propDict)) {
            return $this->_propDict["d"];
        } else {
            return null;
        }
    }

    /**
    * Sets the d
    * RSA Key - private exponent. Field cannot be read back.
    *
    * @param string $val The value of the d
    *
    * @return TrustFrameworkKey
    */
    public function setD($val)
    {
        $this->_propDict["d"] = $val;
        return $this;
    }
    /**
    * Gets the dp
    * RSA Key - first exponent. Field cannot be read back.
    *
    * @return string The dp
    */
    public function getDp()
    {
        if (array_key_exists("dp", $this->_propDict)) {
            return $this->_propDict["dp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dp
    * RSA Key - first exponent. Field cannot be read back.
    *
    * @param string $val The value of the dp
    *
    * @return TrustFrameworkKey
    */
    public function setDp($val)
    {
        $this->_propDict["dp"] = $val;
        return $this;
    }
    /**
    * Gets the dq
    * RSA Key - second exponent. Field cannot be read back.
    *
    * @return string The dq
    */
    public function getDq()
    {
        if (array_key_exists("dq", $this->_propDict)) {
            return $this->_propDict["dq"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dq
    * RSA Key - second exponent. Field cannot be read back.
    *
    * @param string $val The value of the dq
    *
    * @return TrustFrameworkKey
    */
    public function setDq($val)
    {
        $this->_propDict["dq"] = $val;
        return $this;
    }
    /**
    * Gets the e
    * RSA Key - public exponent
    *
    * @return string The e
    */
    public function getE()
    {
        if (array_key_exists("e", $this->_propDict)) {
            return $this->_propDict["e"];
        } else {
            return null;
        }
    }

    /**
    * Sets the e
    * RSA Key - public exponent
    *
    * @param string $val The value of the e
    *
    * @return TrustFrameworkKey
    */
    public function setE($val)
    {
        $this->_propDict["e"] = $val;
        return $this;
    }
    /**
    * Gets the exp
    * This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @return int The exp
    */
    public function getExp()
    {
        if (array_key_exists("exp", $this->_propDict)) {
            return $this->_propDict["exp"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exp
    * This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @param int $val The value of the exp
    *
    * @return TrustFrameworkKey
    */
    public function setExp($val)
    {
        $this->_propDict["exp"] = $val;
        return $this;
    }
    /**
    * Gets the k
    * Symmetric Key for oct key type. Field cannot be read back.
    *
    * @return string The k
    */
    public function getK()
    {
        if (array_key_exists("k", $this->_propDict)) {
            return $this->_propDict["k"];
        } else {
            return null;
        }
    }

    /**
    * Sets the k
    * Symmetric Key for oct key type. Field cannot be read back.
    *
    * @param string $val The value of the k
    *
    * @return TrustFrameworkKey
    */
    public function setK($val)
    {
        $this->_propDict["k"] = $val;
        return $this;
    }
    /**
    * Gets the kid
    * The unique identifier for the key.
    *
    * @return string The kid
    */
    public function getKid()
    {
        if (array_key_exists("kid", $this->_propDict)) {
            return $this->_propDict["kid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kid
    * The unique identifier for the key.
    *
    * @param string $val The value of the kid
    *
    * @return TrustFrameworkKey
    */
    public function setKid($val)
    {
        $this->_propDict["kid"] = $val;
        return $this;
    }
    /**
    * Gets the kty
    * The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
    *
    * @return string The kty
    */
    public function getKty()
    {
        if (array_key_exists("kty", $this->_propDict)) {
            return $this->_propDict["kty"];
        } else {
            return null;
        }
    }

    /**
    * Sets the kty
    * The kty (key type) parameter identifies the cryptographic algorithm family used with the key, The valid values are rsa, oct.
    *
    * @param string $val The value of the kty
    *
    * @return TrustFrameworkKey
    */
    public function setKty($val)
    {
        $this->_propDict["kty"] = $val;
        return $this;
    }
    /**
    * Gets the n
    * RSA Key - modulus
    *
    * @return string The n
    */
    public function getN()
    {
        if (array_key_exists("n", $this->_propDict)) {
            return $this->_propDict["n"];
        } else {
            return null;
        }
    }

    /**
    * Sets the n
    * RSA Key - modulus
    *
    * @param string $val The value of the n
    *
    * @return TrustFrameworkKey
    */
    public function setN($val)
    {
        $this->_propDict["n"] = $val;
        return $this;
    }
    /**
    * Gets the nbf
    * This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @return int The nbf
    */
    public function getNbf()
    {
        if (array_key_exists("nbf", $this->_propDict)) {
            return $this->_propDict["nbf"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nbf
    * This value is a NumericDate as defined in RFC 7519 (A JSON numeric value representing the number of seconds from 1970-01-01T00:00:00Z UTC until the specified UTC date/time, ignoring leap seconds.)
    *
    * @param int $val The value of the nbf
    *
    * @return TrustFrameworkKey
    */
    public function setNbf($val)
    {
        $this->_propDict["nbf"] = $val;
        return $this;
    }
    /**
    * Gets the p
    * RSA Key - first prime. Field cannot be read back.
    *
    * @return string The p
    */
    public function getP()
    {
        if (array_key_exists("p", $this->_propDict)) {
            return $this->_propDict["p"];
        } else {
            return null;
        }
    }

    /**
    * Sets the p
    * RSA Key - first prime. Field cannot be read back.
    *
    * @param string $val The value of the p
    *
    * @return TrustFrameworkKey
    */
    public function setP($val)
    {
        $this->_propDict["p"] = $val;
        return $this;
    }
    /**
    * Gets the q
    * RSA Key - second prime. Field cannot be read back.
    *
    * @return string The q
    */
    public function getQ()
    {
        if (array_key_exists("q", $this->_propDict)) {
            return $this->_propDict["q"];
        } else {
            return null;
        }
    }

    /**
    * Sets the q
    * RSA Key - second prime. Field cannot be read back.
    *
    * @param string $val The value of the q
    *
    * @return TrustFrameworkKey
    */
    public function setQ($val)
    {
        $this->_propDict["q"] = $val;
        return $this;
    }
    /**
    * Gets the qi
    * RSA Key - Coefficient. Field cannot be read back.
    *
    * @return string The qi
    */
    public function getQi()
    {
        if (array_key_exists("qi", $this->_propDict)) {
            return $this->_propDict["qi"];
        } else {
            return null;
        }
    }

    /**
    * Sets the qi
    * RSA Key - Coefficient. Field cannot be read back.
    *
    * @param string $val The value of the qi
    *
    * @return TrustFrameworkKey
    */
    public function setQi($val)
    {
        $this->_propDict["qi"] = $val;
        return $this;
    }
    /**
    * Gets the use
    * The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
    *
    * @return string The use
    */
    public function getUse()
    {
        if (array_key_exists("use", $this->_propDict)) {
            return $this->_propDict["use"];
        } else {
            return null;
        }
    }

    /**
    * Sets the use
    * The use (public key use) parameter identifies the intended use of the public key.  The use parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Possible values are: sig (signature), enc (encryption)
    *
    * @param string $val The value of the use
    *
    * @return TrustFrameworkKey
    */
    public function setUse($val)
    {
        $this->_propDict["use"] = $val;
        return $this;
    }
    /**
    * Gets the x5c
    * The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
    *
    * @return string The x5c
    */
    public function getX5c()
    {
        if (array_key_exists("x5c", $this->_propDict)) {
            return $this->_propDict["x5c"];
        } else {
            return null;
        }
    }

    /**
    * Sets the x5c
    * The x5c (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates RFC 5280.
    *
    * @param string $val The value of the x5c
    *
    * @return TrustFrameworkKey
    */
    public function setX5c($val)
    {
        $this->_propDict["x5c"] = $val;
        return $this;
    }
    /**
    * Gets the x5t
    * The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
    *
    * @return string The x5t
    */
    public function getX5t()
    {
        if (array_key_exists("x5t", $this->_propDict)) {
            return $this->_propDict["x5t"];
        } else {
            return null;
        }
    }

    /**
    * Sets the x5t
    * The x5t (X.509 certificate SHA-1 thumbprint) parameter is a base64url-encoded SHA-1 thumbprint (a.k.a. digest) of the DER encoding of an X.509 certificate RFC 5280.
    *
    * @param string $val The value of the x5t
    *
    * @return TrustFrameworkKey
    */
    public function setX5t($val)
    {
        $this->_propDict["x5t"] = $val;
        return $this;
    }
}
