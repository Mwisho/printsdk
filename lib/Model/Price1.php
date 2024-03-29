<?php
/**
 * Price1
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Print-Gateway-prod
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2019-09-18T08:39:50Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Price1 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Price1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'price_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'urgency_minimum_price' => 'float',
        'urgency' => 'float',
        'urgency_price_percentage' => 'float',
        'base' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'urgency_minimum_price' => null,
        'urgency' => null,
        'urgency_price_percentage' => null,
        'base' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'urgency_minimum_price' => 'urgencyMinimumPrice',
        'urgency' => 'urgency',
        'urgency_price_percentage' => 'urgencyPricePercentage',
        'base' => 'base'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'urgency_minimum_price' => 'setUrgencyMinimumPrice',
        'urgency' => 'setUrgency',
        'urgency_price_percentage' => 'setUrgencyPricePercentage',
        'base' => 'setBase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'urgency_minimum_price' => 'getUrgencyMinimumPrice',
        'urgency' => 'getUrgency',
        'urgency_price_percentage' => 'getUrgencyPricePercentage',
        'base' => 'getBase'
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
        return self::$swaggerModelName;
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
        $this->container['urgency_minimum_price'] = isset($data['urgency_minimum_price']) ? $data['urgency_minimum_price'] : null;
        $this->container['urgency'] = isset($data['urgency']) ? $data['urgency'] : null;
        $this->container['urgency_price_percentage'] = isset($data['urgency_price_percentage']) ? $data['urgency_price_percentage'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['urgency'] === null) {
            $invalidProperties[] = "'urgency' can't be null";
        }
        if ($this->container['base'] === null) {
            $invalidProperties[] = "'base' can't be null";
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
     * Gets urgency_minimum_price
     *
     * @return float
     */
    public function getUrgencyMinimumPrice()
    {
        return $this->container['urgency_minimum_price'];
    }

    /**
     * Sets urgency_minimum_price
     *
     * @param float $urgency_minimum_price urgency_minimum_price
     *
     * @return $this
     */
    public function setUrgencyMinimumPrice($urgency_minimum_price)
    {
        $this->container['urgency_minimum_price'] = $urgency_minimum_price;

        return $this;
    }

    /**
     * Gets urgency
     *
     * @return float
     */
    public function getUrgency()
    {
        return $this->container['urgency'];
    }

    /**
     * Sets urgency
     *
     * @param float $urgency urgency
     *
     * @return $this
     */
    public function setUrgency($urgency)
    {
        $this->container['urgency'] = $urgency;

        return $this;
    }

    /**
     * Gets urgency_price_percentage
     *
     * @return float
     */
    public function getUrgencyPricePercentage()
    {
        return $this->container['urgency_price_percentage'];
    }

    /**
     * Sets urgency_price_percentage
     *
     * @param float $urgency_price_percentage urgency_price_percentage
     *
     * @return $this
     */
    public function setUrgencyPricePercentage($urgency_price_percentage)
    {
        $this->container['urgency_price_percentage'] = $urgency_price_percentage;

        return $this;
    }

    /**
     * Gets base
     *
     * @return float
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param float $base base
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


