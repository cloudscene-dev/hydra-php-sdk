<?php
/**
 * Introspection
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
 * Introspection Class Doc Comment
 *
 * @category Class
 * @description https://tools.ietf.org/html/rfc7662
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Introspection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Introspection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'aud' => 'string[]',
        'client_id' => 'string',
        'exp' => 'int',
        'ext' => 'map[string,object]',
        'iat' => 'int',
        'iss' => 'string',
        'nbf' => 'int',
        'obfuscated_subject' => 'string',
        'scope' => 'string',
        'sub' => 'string',
        'token_type' => 'string',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'active' => null,
        'aud' => null,
        'client_id' => null,
        'exp' => 'int64',
        'ext' => null,
        'iat' => 'int64',
        'iss' => null,
        'nbf' => 'int64',
        'obfuscated_subject' => null,
        'scope' => null,
        'sub' => null,
        'token_type' => null,
        'username' => null
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
        'active' => 'active',
        'aud' => 'aud',
        'client_id' => 'client_id',
        'exp' => 'exp',
        'ext' => 'ext',
        'iat' => 'iat',
        'iss' => 'iss',
        'nbf' => 'nbf',
        'obfuscated_subject' => 'obfuscated_subject',
        'scope' => 'scope',
        'sub' => 'sub',
        'token_type' => 'token_type',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'aud' => 'setAud',
        'client_id' => 'setClientId',
        'exp' => 'setExp',
        'ext' => 'setExt',
        'iat' => 'setIat',
        'iss' => 'setIss',
        'nbf' => 'setNbf',
        'obfuscated_subject' => 'setObfuscatedSubject',
        'scope' => 'setScope',
        'sub' => 'setSub',
        'token_type' => 'setTokenType',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'aud' => 'getAud',
        'client_id' => 'getClientId',
        'exp' => 'getExp',
        'ext' => 'getExt',
        'iat' => 'getIat',
        'iss' => 'getIss',
        'nbf' => 'getNbf',
        'obfuscated_subject' => 'getObfuscatedSubject',
        'scope' => 'getScope',
        'sub' => 'getSub',
        'token_type' => 'getTokenType',
        'username' => 'getUsername'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['iat'] = isset($data['iat']) ? $data['iat'] : null;
        $this->container['iss'] = isset($data['iss']) ? $data['iss'] : null;
        $this->container['nbf'] = isset($data['nbf']) ? $data['nbf'] : null;
        $this->container['obfuscated_subject'] = isset($data['obfuscated_subject']) ? $data['obfuscated_subject'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active Active is a boolean indicator of whether or not the presented token is currently active.  The specifics of a token's \"active\" state will vary depending on the implementation of the authorization server and the information it keeps about its tokens, but a \"true\" value return for the \"active\" property will generally indicate that a given token has been issued by this authorization server, has not been revoked by the resource owner, and is within its given time window of validity (e.g., after its issuance time and before its expiration time).
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets aud
     *
     * @return string[]|null
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     *
     * @param string[]|null $aud Audience contains a list of the token's intended audiences.
     *
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id ClientID is aclient identifier for the OAuth 2.0 client that requested this token.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets exp
     *
     * @return int|null
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     *
     * @param int|null $exp Expires at is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token will expire.
     *
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return map[string,object]|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param map[string,object]|null $ext Extra is arbitrary data set by the session.
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets iat
     *
     * @return int|null
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     *
     * @param int|null $iat Issued at is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token was originally issued.
     *
     * @return $this
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets iss
     *
     * @return string|null
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     *
     * @param string|null $iss IssuerURL is a string representing the issuer of this token
     *
     * @return $this
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

        return $this;
    }

    /**
     * Gets nbf
     *
     * @return int|null
     */
    public function getNbf()
    {
        return $this->container['nbf'];
    }

    /**
     * Sets nbf
     *
     * @param int|null $nbf NotBefore is an integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token is not to be used before.
     *
     * @return $this
     */
    public function setNbf($nbf)
    {
        $this->container['nbf'] = $nbf;

        return $this;
    }

    /**
     * Gets obfuscated_subject
     *
     * @return string|null
     */
    public function getObfuscatedSubject()
    {
        return $this->container['obfuscated_subject'];
    }

    /**
     * Sets obfuscated_subject
     *
     * @param string|null $obfuscated_subject ObfuscatedSubject is set when the subject identifier algorithm was set to \"pairwise\" during authorization. It is the `sub` value of the ID Token that was issued.
     *
     * @return $this
     */
    public function setObfuscatedSubject($obfuscated_subject)
    {
        $this->container['obfuscated_subject'] = $obfuscated_subject;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope Scope is a JSON string containing a space-separated list of scopes associated with this token.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sub
     *
     * @return string|null
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     *
     * @param string|null $sub Subject of the token, as defined in JWT [RFC7519]. Usually a machine-readable identifier of the resource owner who authorized this token.
     *
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type TokenType is the introspected token's type, for example `access_token` or `refresh_token`.
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username Username is a human-readable identifier for the resource owner who authorized this token.
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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


