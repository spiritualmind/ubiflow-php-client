<?php
/**
 * FeedReportResultsFeedReportRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.56
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ubiflow\Model;

use \ArrayAccess;
use \Ubiflow\ObjectSerializer;

/**
 * FeedReportResultsFeedReportRead Class Doc Comment
 *
 * @category Class
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeedReportResultsFeedReportRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeedReportResults-feed_report.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'processed' => 'int',
        'invalid' => 'int',
        'valid' => 'int',
        'identical' => 'int',
        'modified' => 'int',
        'added' => 'int',
        'deleted' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'processed' => null,
        'invalid' => null,
        'valid' => null,
        'identical' => null,
        'modified' => null,
        'added' => null,
        'deleted' => null
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
        'processed' => 'processed',
        'invalid' => 'invalid',
        'valid' => 'valid',
        'identical' => 'identical',
        'modified' => 'modified',
        'added' => 'added',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'processed' => 'setProcessed',
        'invalid' => 'setInvalid',
        'valid' => 'setValid',
        'identical' => 'setIdentical',
        'modified' => 'setModified',
        'added' => 'setAdded',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'processed' => 'getProcessed',
        'invalid' => 'getInvalid',
        'valid' => 'getValid',
        'identical' => 'getIdentical',
        'modified' => 'getModified',
        'added' => 'getAdded',
        'deleted' => 'getDeleted'
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
        $this->container['processed'] = isset($data['processed']) ? $data['processed'] : null;
        $this->container['invalid'] = isset($data['invalid']) ? $data['invalid'] : null;
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['identical'] = isset($data['identical']) ? $data['identical'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['added'] = isset($data['added']) ? $data['added'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
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
     * Gets processed
     *
     * @return int
     */
    public function getProcessed()
    {
        return $this->container['processed'];
    }

    /**
     * Sets processed
     *
     * @param int $processed The number of elements processed during the feed.  It should normally be equal to the sum of the valid, unvalid and deleted elements.
     *
     * @return $this
     */
    public function setProcessed($processed)
    {
        $this->container['processed'] = $processed;

        return $this;
    }

    /**
     * Gets invalid
     *
     * @return int
     */
    public function getInvalid()
    {
        return $this->container['invalid'];
    }

    /**
     * Sets invalid
     *
     * @param int $invalid The number of unvalid elements during the feed.
     *
     * @return $this
     */
    public function setInvalid($invalid)
    {
        $this->container['invalid'] = $invalid;

        return $this;
    }

    /**
     * Gets valid
     *
     * @return int
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param int $valid The number of valid elements during the feed.  It should normally be equal to the sum of the identical, modified and added elements.
     *
     * @return $this
     */
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets identical
     *
     * @return int
     */
    public function getIdentical()
    {
        return $this->container['identical'];
    }

    /**
     * Sets identical
     *
     * @param int $identical The number of elements which are identical, compared to the previous feed.
     *
     * @return $this
     */
    public function setIdentical($identical)
    {
        $this->container['identical'] = $identical;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return int
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param int $modified The number of elements which were modified, compared to the previous feed.
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets added
     *
     * @return int
     */
    public function getAdded()
    {
        return $this->container['added'];
    }

    /**
     * Sets added
     *
     * @param int $added The number of elements which were added, compared to the previous feed.
     *
     * @return $this
     */
    public function setAdded($added)
    {
        $this->container['added'] = $added;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return int
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param int $deleted The number of elements which were deleted, compared to the previous feed.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
