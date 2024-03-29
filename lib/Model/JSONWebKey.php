<?php
/**
 * JSONWebKey
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ORY Hydra
 *
 * Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * JSONWebKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JSONWebKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JSONWebKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alg' => 'string',
        'crv' => 'string',
        'd' => 'string',
        'dp' => 'string',
        'dq' => 'string',
        'e' => 'string',
        'k' => 'string',
        'kid' => 'string',
        'kty' => 'string',
        'n' => 'string',
        'p' => 'string',
        'q' => 'string',
        'qi' => 'string',
        'use' => 'string',
        'x' => 'string',
        'x5c' => 'string[]',
        'y' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'alg' => null,
        'crv' => null,
        'd' => null,
        'dp' => null,
        'dq' => null,
        'e' => null,
        'k' => null,
        'kid' => null,
        'kty' => null,
        'n' => null,
        'p' => null,
        'q' => null,
        'qi' => null,
        'use' => null,
        'x' => null,
        'x5c' => null,
        'y' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alg' => 'alg',
        'crv' => 'crv',
        'd' => 'd',
        'dp' => 'dp',
        'dq' => 'dq',
        'e' => 'e',
        'k' => 'k',
        'kid' => 'kid',
        'kty' => 'kty',
        'n' => 'n',
        'p' => 'p',
        'q' => 'q',
        'qi' => 'qi',
        'use' => 'use',
        'x' => 'x',
        'x5c' => 'x5c',
        'y' => 'y'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alg' => 'setAlg',
        'crv' => 'setCrv',
        'd' => 'setD',
        'dp' => 'setDp',
        'dq' => 'setDq',
        'e' => 'setE',
        'k' => 'setK',
        'kid' => 'setKid',
        'kty' => 'setKty',
        'n' => 'setN',
        'p' => 'setP',
        'q' => 'setQ',
        'qi' => 'setQi',
        'use' => 'setUse',
        'x' => 'setX',
        'x5c' => 'setX5c',
        'y' => 'setY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alg' => 'getAlg',
        'crv' => 'getCrv',
        'd' => 'getD',
        'dp' => 'getDp',
        'dq' => 'getDq',
        'e' => 'getE',
        'k' => 'getK',
        'kid' => 'getKid',
        'kty' => 'getKty',
        'n' => 'getN',
        'p' => 'getP',
        'q' => 'getQ',
        'qi' => 'getQi',
        'use' => 'getUse',
        'x' => 'getX',
        'x5c' => 'getX5c',
        'y' => 'getY'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alg'] = isset($data['alg']) ? $data['alg'] : null;
        $this->container['crv'] = isset($data['crv']) ? $data['crv'] : null;
        $this->container['d'] = isset($data['d']) ? $data['d'] : null;
        $this->container['dp'] = isset($data['dp']) ? $data['dp'] : null;
        $this->container['dq'] = isset($data['dq']) ? $data['dq'] : null;
        $this->container['e'] = isset($data['e']) ? $data['e'] : null;
        $this->container['k'] = isset($data['k']) ? $data['k'] : null;
        $this->container['kid'] = isset($data['kid']) ? $data['kid'] : null;
        $this->container['kty'] = isset($data['kty']) ? $data['kty'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : null;
        $this->container['p'] = isset($data['p']) ? $data['p'] : null;
        $this->container['q'] = isset($data['q']) ? $data['q'] : null;
        $this->container['qi'] = isset($data['qi']) ? $data['qi'] : null;
        $this->container['use'] = isset($data['use']) ? $data['use'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['x5c'] = isset($data['x5c']) ? $data['x5c'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['alg'] === null) {
            $invalidProperties[] = "'alg' can't be null";
        }
        if ($this->container['kid'] === null) {
            $invalidProperties[] = "'kid' can't be null";
        }
        if ($this->container['kty'] === null) {
            $invalidProperties[] = "'kty' can't be null";
        }
        if ($this->container['use'] === null) {
            $invalidProperties[] = "'use' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets alg
     *
     * @return string
     */
    public function getAlg()
    {
        return $this->container['alg'];
    }

    /**
     * Sets alg
     *
     * @param string $alg The \"alg\" (algorithm) parameter identifies the algorithm intended for use with the key.  The values used should either be registered in the IANA \"JSON Web Signature and Encryption Algorithms\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.
     *
     * @return $this
     */
    public function setAlg($alg)
    {
        $this->container['alg'] = $alg;

        return $this;
    }

    /**
     * Gets crv
     *
     * @return string|null
     */
    public function getCrv()
    {
        return $this->container['crv'];
    }

    /**
     * Sets crv
     *
     * @param string|null $crv crv
     *
     * @return $this
     */
    public function setCrv($crv)
    {
        $this->container['crv'] = $crv;

        return $this;
    }

    /**
     * Gets d
     *
     * @return string|null
     */
    public function getD()
    {
        return $this->container['d'];
    }

    /**
     * Sets d
     *
     * @param string|null $d d
     *
     * @return $this
     */
    public function setD($d)
    {
        $this->container['d'] = $d;

        return $this;
    }

    /**
     * Gets dp
     *
     * @return string|null
     */
    public function getDp()
    {
        return $this->container['dp'];
    }

    /**
     * Sets dp
     *
     * @param string|null $dp dp
     *
     * @return $this
     */
    public function setDp($dp)
    {
        $this->container['dp'] = $dp;

        return $this;
    }

    /**
     * Gets dq
     *
     * @return string|null
     */
    public function getDq()
    {
        return $this->container['dq'];
    }

    /**
     * Sets dq
     *
     * @param string|null $dq dq
     *
     * @return $this
     */
    public function setDq($dq)
    {
        $this->container['dq'] = $dq;

        return $this;
    }

    /**
     * Gets e
     *
     * @return string|null
     */
    public function getE()
    {
        return $this->container['e'];
    }

    /**
     * Sets e
     *
     * @param string|null $e e
     *
     * @return $this
     */
    public function setE($e)
    {
        $this->container['e'] = $e;

        return $this;
    }

    /**
     * Gets k
     *
     * @return string|null
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     *
     * @param string|null $k k
     *
     * @return $this
     */
    public function setK($k)
    {
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets kid
     *
     * @return string
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     *
     * @param string $kid The \"kid\" (key ID) parameter is used to match a specific key.  This is used, for instance, to choose among a set of keys within a JWK Set during key rollover.  The structure of the \"kid\" value is unspecified.  When \"kid\" values are used within a JWK Set, different keys within the JWK Set SHOULD use distinct \"kid\" values.  (One example in which different keys might use the same \"kid\" value is if they have different \"kty\" (key type) values but are considered to be equivalent alternatives by the application using them.)  The \"kid\" value is a case-sensitive string.
     *
     * @return $this
     */
    public function setKid($kid)
    {
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets kty
     *
     * @return string
     */
    public function getKty()
    {
        return $this->container['kty'];
    }

    /**
     * Sets kty
     *
     * @param string $kty The \"kty\" (key type) parameter identifies the cryptographic algorithm family used with the key, such as \"RSA\" or \"EC\". \"kty\" values should either be registered in the IANA \"JSON Web Key Types\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.  The \"kty\" value is a case-sensitive string.
     *
     * @return $this
     */
    public function setKty($kty)
    {
        $this->container['kty'] = $kty;

        return $this;
    }

    /**
     * Gets n
     *
     * @return string|null
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     *
     * @param string|null $n n
     *
     * @return $this
     */
    public function setN($n)
    {
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets p
     *
     * @return string|null
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param string|null $p p
     *
     * @return $this
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets q
     *
     * @return string|null
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param string|null $q q
     *
     * @return $this
     */
    public function setQ($q)
    {
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets qi
     *
     * @return string|null
     */
    public function getQi()
    {
        return $this->container['qi'];
    }

    /**
     * Sets qi
     *
     * @param string|null $qi qi
     *
     * @return $this
     */
    public function setQi($qi)
    {
        $this->container['qi'] = $qi;

        return $this;
    }

    /**
     * Gets use
     *
     * @return string
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     *
     * @param string $use Use (\"public key use\") identifies the intended use of the public key. The \"use\" parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Values are commonly \"sig\" (signature) or \"enc\" (encryption).
     *
     * @return $this
     */
    public function setUse($use)
    {
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets x
     *
     * @return string|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param string|null $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets x5c
     *
     * @return string[]|null
     */
    public function getX5c()
    {
        return $this->container['x5c'];
    }

    /**
     * Sets x5c
     *
     * @param string[]|null $x5c The \"x5c\" (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates [RFC5280].  The certificate chain is represented as a JSON array of certificate value strings.  Each string in the array is a base64-encoded (Section 4 of [RFC4648] -- not base64url-encoded) DER [ITU.X690.1994] PKIX certificate value. The PKIX certificate containing the key value MUST be the first certificate.
     *
     * @return $this
     */
    public function setX5c($x5c)
    {
        $this->container['x5c'] = $x5c;

        return $this;
    }

    /**
     * Gets y
     *
     * @return string|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param string|null $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


