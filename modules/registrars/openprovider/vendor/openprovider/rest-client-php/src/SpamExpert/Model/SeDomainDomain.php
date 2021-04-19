<?php
/**
 * SeDomainDomain
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\SpamExpert
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Spam Experts
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\SpamExpert\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * SeDomainDomain Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\SpamExpert
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SeDomainDomain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'se_domainDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bundle' => 'bool',
        'domain_name' => 'string',
        'expiration_date' => 'string',
        'id' => 'int',
        'is_active' => 'bool',
        'order_id' => 'int',
        'products' => '\Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainProducts',
        'records' => '\Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainRecords',
        'reseller_id' => 'int',
        'smtp_password' => 'string',
        'user_email' => 'string',
        'user_password' => 'string',
        'with_outgoing_filter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bundle' => 'boolean',
        'domain_name' => null,
        'expiration_date' => null,
        'id' => 'int32',
        'is_active' => 'boolean',
        'order_id' => 'int32',
        'products' => null,
        'records' => null,
        'reseller_id' => 'int32',
        'smtp_password' => null,
        'user_email' => null,
        'user_password' => null,
        'with_outgoing_filter' => 'boolean'
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
        'bundle' => 'bundle',
        'domain_name' => 'domain_name',
        'expiration_date' => 'expiration_date',
        'id' => 'id',
        'is_active' => 'is_active',
        'order_id' => 'order_id',
        'products' => 'products',
        'records' => 'records',
        'reseller_id' => 'reseller_id',
        'smtp_password' => 'smtp_password',
        'user_email' => 'user_email',
        'user_password' => 'user_password',
        'with_outgoing_filter' => 'with_outgoing_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bundle' => 'setBundle',
        'domain_name' => 'setDomainName',
        'expiration_date' => 'setExpirationDate',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'order_id' => 'setOrderId',
        'products' => 'setProducts',
        'records' => 'setRecords',
        'reseller_id' => 'setResellerId',
        'smtp_password' => 'setSmtpPassword',
        'user_email' => 'setUserEmail',
        'user_password' => 'setUserPassword',
        'with_outgoing_filter' => 'setWithOutgoingFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bundle' => 'getBundle',
        'domain_name' => 'getDomainName',
        'expiration_date' => 'getExpirationDate',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'order_id' => 'getOrderId',
        'products' => 'getProducts',
        'records' => 'getRecords',
        'reseller_id' => 'getResellerId',
        'smtp_password' => 'getSmtpPassword',
        'user_email' => 'getUserEmail',
        'user_password' => 'getUserPassword',
        'with_outgoing_filter' => 'getWithOutgoingFilter'
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
        $this->container['bundle'] = isset($data['bundle']) ? $data['bundle'] : null;
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['reseller_id'] = isset($data['reseller_id']) ? $data['reseller_id'] : null;
        $this->container['smtp_password'] = isset($data['smtp_password']) ? $data['smtp_password'] : null;
        $this->container['user_email'] = isset($data['user_email']) ? $data['user_email'] : null;
        $this->container['user_password'] = isset($data['user_password']) ? $data['user_password'] : null;
        $this->container['with_outgoing_filter'] = isset($data['with_outgoing_filter']) ? $data['with_outgoing_filter'] : null;
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
     * Gets bundle
     *
     * @return bool|null
     */
    public function getBundle()
    {
        return $this->container['bundle'];
    }

    /**
     * Sets bundle
     *
     * @param bool|null $bundle bundle
     *
     * @return $this
     */
    public function setBundle($bundle)
    {
        $this->container['bundle'] = $bundle;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string|null $domain_name domain_name
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainProducts|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainProducts|null $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets records
     *
     * @return \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainRecords|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \Openprovider\Api\Rest\Client\SpamExpert\Model\SeDomainRecords|null $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets reseller_id
     *
     * @return int|null
     */
    public function getResellerId()
    {
        return $this->container['reseller_id'];
    }

    /**
     * Sets reseller_id
     *
     * @param int|null $reseller_id reseller_id
     *
     * @return $this
     */
    public function setResellerId($reseller_id)
    {
        $this->container['reseller_id'] = $reseller_id;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string|null
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string|null $smtp_password smtp_password
     *
     * @return $this
     */
    public function setSmtpPassword($smtp_password)
    {
        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email user_email
     *
     * @return $this
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_password
     *
     * @return string|null
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /**
     * Sets user_password
     *
     * @param string|null $user_password user_password
     *
     * @return $this
     */
    public function setUserPassword($user_password)
    {
        $this->container['user_password'] = $user_password;

        return $this;
    }

    /**
     * Gets with_outgoing_filter
     *
     * @return bool|null
     */
    public function getWithOutgoingFilter()
    {
        return $this->container['with_outgoing_filter'];
    }

    /**
     * Sets with_outgoing_filter
     *
     * @param bool|null $with_outgoing_filter with_outgoing_filter
     *
     * @return $this
     */
    public function setWithOutgoingFilter($with_outgoing_filter)
    {
        $this->container['with_outgoing_filter'] = $with_outgoing_filter;

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

