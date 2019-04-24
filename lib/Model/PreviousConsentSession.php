<?php
/**
 * PreviousConsentSession
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
 * PreviousConsentSession Class Doc Comment
 *
 * @category Class
 * @description PreviousConsentSession The response used to return handled consent requests same as HandledLoginRequest, just with consent_request exposed as json
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PreviousConsentSession implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PreviousConsentSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consent_request' => '\OpenAPI\Client\Model\ConsentRequest',
        'grant_access_token_audience' => 'string[]',
        'grant_scope' => 'string[]',
        'remember' => 'bool',
        'remember_for' => 'int',
        'session' => '\OpenAPI\Client\Model\ConsentRequestSessionData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'consent_request' => null,
        'grant_access_token_audience' => null,
        'grant_scope' => null,
        'remember' => null,
        'remember_for' => 'int64',
        'session' => null
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
        'consent_request' => 'consent_request',
        'grant_access_token_audience' => 'grant_access_token_audience',
        'grant_scope' => 'grant_scope',
        'remember' => 'remember',
        'remember_for' => 'remember_for',
        'session' => 'session'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consent_request' => 'setConsentRequest',
        'grant_access_token_audience' => 'setGrantAccessTokenAudience',
        'grant_scope' => 'setGrantScope',
        'remember' => 'setRemember',
        'remember_for' => 'setRememberFor',
        'session' => 'setSession'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consent_request' => 'getConsentRequest',
        'grant_access_token_audience' => 'getGrantAccessTokenAudience',
        'grant_scope' => 'getGrantScope',
        'remember' => 'getRemember',
        'remember_for' => 'getRememberFor',
        'session' => 'getSession'
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
        $this->container['consent_request'] = isset($data['consent_request']) ? $data['consent_request'] : null;
        $this->container['grant_access_token_audience'] = isset($data['grant_access_token_audience']) ? $data['grant_access_token_audience'] : null;
        $this->container['grant_scope'] = isset($data['grant_scope']) ? $data['grant_scope'] : null;
        $this->container['remember'] = isset($data['remember']) ? $data['remember'] : null;
        $this->container['remember_for'] = isset($data['remember_for']) ? $data['remember_for'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets consent_request
     *
     * @return \OpenAPI\Client\Model\ConsentRequest|null
     */
    public function getConsentRequest()
    {
        return $this->container['consent_request'];
    }

    /**
     * Sets consent_request
     *
     * @param \OpenAPI\Client\Model\ConsentRequest|null $consent_request consent_request
     *
     * @return $this
     */
    public function setConsentRequest($consent_request)
    {
        $this->container['consent_request'] = $consent_request;

        return $this;
    }

    /**
     * Gets grant_access_token_audience
     *
     * @return string[]|null
     */
    public function getGrantAccessTokenAudience()
    {
        return $this->container['grant_access_token_audience'];
    }

    /**
     * Sets grant_access_token_audience
     *
     * @param string[]|null $grant_access_token_audience GrantedAudience sets the audience the user authorized the client to use. Should be a subset of `requested_access_token_audience`.
     *
     * @return $this
     */
    public function setGrantAccessTokenAudience($grant_access_token_audience)
    {
        $this->container['grant_access_token_audience'] = $grant_access_token_audience;

        return $this;
    }

    /**
     * Gets grant_scope
     *
     * @return string[]|null
     */
    public function getGrantScope()
    {
        return $this->container['grant_scope'];
    }

    /**
     * Sets grant_scope
     *
     * @param string[]|null $grant_scope GrantScope sets the scope the user authorized the client to use. Should be a subset of `requested_scope`
     *
     * @return $this
     */
    public function setGrantScope($grant_scope)
    {
        $this->container['grant_scope'] = $grant_scope;

        return $this;
    }

    /**
     * Gets remember
     *
     * @return bool|null
     */
    public function getRemember()
    {
        return $this->container['remember'];
    }

    /**
     * Sets remember
     *
     * @param bool|null $remember Remember, if set to true, tells ORY Hydra to remember this consent authorization and reuse it if the same client asks the same user for the same, or a subset of, scope.
     *
     * @return $this
     */
    public function setRemember($remember)
    {
        $this->container['remember'] = $remember;

        return $this;
    }

    /**
     * Gets remember_for
     *
     * @return int|null
     */
    public function getRememberFor()
    {
        return $this->container['remember_for'];
    }

    /**
     * Sets remember_for
     *
     * @param int|null $remember_for RememberFor sets how long the consent authorization should be remembered for in seconds. If set to `0`, the authorization will be remembered indefinitely.
     *
     * @return $this
     */
    public function setRememberFor($remember_for)
    {
        $this->container['remember_for'] = $remember_for;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \OpenAPI\Client\Model\ConsentRequestSessionData|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \OpenAPI\Client\Model\ConsentRequestSessionData|null $session session
     *
     * @return $this
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

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


