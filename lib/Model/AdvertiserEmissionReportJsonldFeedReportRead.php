<?php
/**
 * AdvertiserEmissionReportJsonldFeedReportRead
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
 * AdvertiserEmissionReportJsonldFeedReportRead Class Doc Comment
 *
 * @category Class
 * @description An AdvertiserEmissionReport is generated during an emission. It indicates to you the number of ads and pictures that have been processed during a publication and gives you a detailed report.
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserEmissionReportJsonldFeedReportRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdvertiserEmissionReport.jsonld-feed_report.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'advertiserEmission' => '\Ubiflow\Model\AdvertiserEmissionJsonldFeedReportRead',
        'id' => 'string',
        'startedAt' => '\DateTime',
        'endedAt' => '\DateTime',
        'adsResults' => '\Ubiflow\Model\FeedReportResultsJsonldFeedReportRead',
        'picturesResults' => '\Ubiflow\Model\FeedReportResultsJsonldFeedReportRead'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'type' => null,
        'advertiserEmission' => null,
        'id' => null,
        'startedAt' => 'date-time',
        'endedAt' => 'date-time',
        'adsResults' => null,
        'picturesResults' => null
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
        'id' => '@id',
        'type' => '@type',
        'advertiserEmission' => 'advertiserEmission',
        'id' => 'id',
        'startedAt' => 'startedAt',
        'endedAt' => 'endedAt',
        'adsResults' => 'adsResults',
        'picturesResults' => 'picturesResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'advertiserEmission' => 'setAdvertiserEmission',
        'id' => 'setId',
        'startedAt' => 'setStartedAt',
        'endedAt' => 'setEndedAt',
        'adsResults' => 'setAdsResults',
        'picturesResults' => 'setPicturesResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'advertiserEmission' => 'getAdvertiserEmission',
        'id' => 'getId',
        'startedAt' => 'getStartedAt',
        'endedAt' => 'getEndedAt',
        'adsResults' => 'getAdsResults',
        'picturesResults' => 'getPicturesResults'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['advertiserEmission'] = isset($data['advertiserEmission']) ? $data['advertiserEmission'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['endedAt'] = isset($data['endedAt']) ? $data['endedAt'] : null;
        $this->container['adsResults'] = isset($data['adsResults']) ? $data['adsResults'] : null;
        $this->container['picturesResults'] = isset($data['picturesResults']) ? $data['picturesResults'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets advertiserEmission
     *
     * @return \Ubiflow\Model\AdvertiserEmissionJsonldFeedReportRead
     */
    public function getAdvertiserEmission()
    {
        return $this->container['advertiserEmission'];
    }

    /**
     * Sets advertiserEmission
     *
     * @param \Ubiflow\Model\AdvertiserEmissionJsonldFeedReportRead $advertiserEmission advertiserEmission
     *
     * @return $this
     */
    public function setAdvertiserEmission($advertiserEmission)
    {
        $this->container['advertiserEmission'] = $advertiserEmission;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the feed report, in the Ubiflow IS.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets startedAt
     *
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     *
     * @param \DateTime $startedAt startedAt
     *
     * @return $this
     */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;

        return $this;
    }

    /**
     * Gets endedAt
     *
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->container['endedAt'];
    }

    /**
     * Sets endedAt
     *
     * @param \DateTime $endedAt endedAt
     *
     * @return $this
     */
    public function setEndedAt($endedAt)
    {
        $this->container['endedAt'] = $endedAt;

        return $this;
    }

    /**
     * Gets adsResults
     *
     * @return \Ubiflow\Model\FeedReportResultsJsonldFeedReportRead
     */
    public function getAdsResults()
    {
        return $this->container['adsResults'];
    }

    /**
     * Sets adsResults
     *
     * @param \Ubiflow\Model\FeedReportResultsJsonldFeedReportRead $adsResults adsResults
     *
     * @return $this
     */
    public function setAdsResults($adsResults)
    {
        $this->container['adsResults'] = $adsResults;

        return $this;
    }

    /**
     * Gets picturesResults
     *
     * @return \Ubiflow\Model\FeedReportResultsJsonldFeedReportRead
     */
    public function getPicturesResults()
    {
        return $this->container['picturesResults'];
    }

    /**
     * Sets picturesResults
     *
     * @param \Ubiflow\Model\FeedReportResultsJsonldFeedReportRead $picturesResults picturesResults
     *
     * @return $this
     */
    public function setPicturesResults($picturesResults)
    {
        $this->container['picturesResults'] = $picturesResults;

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
