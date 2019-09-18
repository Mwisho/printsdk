<?php
/**
 * OrderRequestModelItems
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
 * OrderRequestModelItems Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRequestModelItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRequestModel_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sender_address' => '\Swagger\Client\Model\SenderAddress',
        'print_coupon' => 'string',
        'customer_reference' => 'string',
        'delivery_promise' => 'bool',
        'options' => 'object',
        'file_url' => 'string',
        'sku' => 'string',
        'shipments' => '\Swagger\Client\Model\OrderRequestModelShipments[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sender_address' => null,
        'print_coupon' => null,
        'customer_reference' => null,
        'delivery_promise' => null,
        'options' => null,
        'file_url' => null,
        'sku' => null,
        'shipments' => null
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
        'sender_address' => 'senderAddress',
        'print_coupon' => 'printCoupon',
        'customer_reference' => 'customerReference',
        'delivery_promise' => 'deliveryPromise',
        'options' => 'options',
        'file_url' => 'fileUrl',
        'sku' => 'sku',
        'shipments' => 'shipments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender_address' => 'setSenderAddress',
        'print_coupon' => 'setPrintCoupon',
        'customer_reference' => 'setCustomerReference',
        'delivery_promise' => 'setDeliveryPromise',
        'options' => 'setOptions',
        'file_url' => 'setFileUrl',
        'sku' => 'setSku',
        'shipments' => 'setShipments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender_address' => 'getSenderAddress',
        'print_coupon' => 'getPrintCoupon',
        'customer_reference' => 'getCustomerReference',
        'delivery_promise' => 'getDeliveryPromise',
        'options' => 'getOptions',
        'file_url' => 'getFileUrl',
        'sku' => 'getSku',
        'shipments' => 'getShipments'
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
        $this->container['sender_address'] = isset($data['sender_address']) ? $data['sender_address'] : null;
        $this->container['print_coupon'] = isset($data['print_coupon']) ? $data['print_coupon'] : null;
        $this->container['customer_reference'] = isset($data['customer_reference']) ? $data['customer_reference'] : null;
        $this->container['delivery_promise'] = isset($data['delivery_promise']) ? $data['delivery_promise'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['file_url'] = isset($data['file_url']) ? $data['file_url'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['shipments'] = isset($data['shipments']) ? $data['shipments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if (!is_null($this->container['file_url']) && !preg_match("/^(http|https):\/\//", $this->container['file_url'])) {
            $invalidProperties[] = "invalid value for 'file_url', must be conform to the pattern /^(http|https):\/\//.";
        }

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['shipments'] === null) {
            $invalidProperties[] = "'shipments' can't be null";
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
     * Gets sender_address
     *
     * @return \Swagger\Client\Model\SenderAddress
     */
    public function getSenderAddress()
    {
        return $this->container['sender_address'];
    }

    /**
     * Sets sender_address
     *
     * @param \Swagger\Client\Model\SenderAddress $sender_address sender_address
     *
     * @return $this
     */
    public function setSenderAddress($sender_address)
    {
        $this->container['sender_address'] = $sender_address;

        return $this;
    }

    /**
     * Gets print_coupon
     *
     * @return string
     */
    public function getPrintCoupon()
    {
        return $this->container['print_coupon'];
    }

    /**
     * Sets print_coupon
     *
     * @param string $print_coupon Optional coupon code for discounts
     *
     * @return $this
     */
    public function setPrintCoupon($print_coupon)
    {
        $this->container['print_coupon'] = $print_coupon;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string $customer_reference Personal reference of order item
     *
     * @return $this
     */
    public function setCustomerReference($customer_reference)
    {
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets delivery_promise
     *
     * @return bool
     */
    public function getDeliveryPromise()
    {
        return $this->container['delivery_promise'];
    }

    /**
     * Sets delivery_promise
     *
     * @param bool $delivery_promise Whether delivery promise is selected Defaults to false
     *
     * @return $this
     */
    public function setDeliveryPromise($delivery_promise)
    {
        $this->container['delivery_promise'] = $delivery_promise;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object $options Order item options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string $file_url Optional file URL of pdf to be printed Order will still be placed if this url wasn't available
     *
     * @return $this
     */
    public function setFileUrl($file_url)
    {

        if (!is_null($file_url) && (!preg_match("/^(http|https):\/\//", $file_url))) {
            throw new \InvalidArgumentException("invalid value for $file_url when calling OrderRequestModelItems., must conform to the pattern /^(http|https):\/\//.");
        }

        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Uniquely identifying sku of ordered product
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \Swagger\Client\Model\OrderRequestModelShipments[]
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \Swagger\Client\Model\OrderRequestModelShipments[] $shipments Where the order item needs to be shipped Multiple addresses possible with different amounts of copies Each shipment has optional carrier method and delivery date which will be checked against the chosen options.urgency
     *
     * @return $this
     */
    public function setShipments($shipments)
    {
        $this->container['shipments'] = $shipments;

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

