<?php
/**
 * AdAdRead
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
 * AdAdRead Class Doc Comment
 *
 * @category Class
 * @description An ad is the full description of a product that an advertiser want to sell. Any ad is owned by one specific advertiser.
 * @package  Ubiflow
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdAdRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ad-ad.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'advertiser' => '\Ubiflow\Model\AdvertiserAdRead',
        'reference' => 'string',
        'source' => '\Ubiflow\Model\AdSourceAdRead',
        'inputAt' => '\DateTime',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'status' => 'string',
        'transaction' => '\Ubiflow\Model\TransactionAdRead',
        'productType' => '\Ubiflow\Model\ProductTypeAdRead',
        'title' => 'string',
        'description' => 'string',
        'descriptionEnglish' => 'string',
        'data' => '\Ubiflow\Model\AdDataAdRead[]',
        'mediaSupports' => '\Ubiflow\Model\MediaSupportsAdRead',
        'parentAd' => '\Ubiflow\Model\RelatedAdAdRead',
        'childrenAds' => '\Ubiflow\Model\RelatedAdAdRead[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'advertiser' => null,
        'reference' => null,
        'source' => null,
        'inputAt' => 'date-time',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'status' => null,
        'transaction' => null,
        'productType' => null,
        'title' => null,
        'description' => null,
        'descriptionEnglish' => null,
        'data' => null,
        'mediaSupports' => null,
        'parentAd' => null,
        'childrenAds' => null
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
        'id' => 'id',
        'advertiser' => 'advertiser',
        'reference' => 'reference',
        'source' => 'source',
        'inputAt' => 'inputAt',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'status' => 'status',
        'transaction' => 'transaction',
        'productType' => 'productType',
        'title' => 'title',
        'description' => 'description',
        'descriptionEnglish' => 'descriptionEnglish',
        'data' => 'data',
        'mediaSupports' => 'mediaSupports',
        'parentAd' => 'parentAd',
        'childrenAds' => 'childrenAds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'advertiser' => 'setAdvertiser',
        'reference' => 'setReference',
        'source' => 'setSource',
        'inputAt' => 'setInputAt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'status' => 'setStatus',
        'transaction' => 'setTransaction',
        'productType' => 'setProductType',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'descriptionEnglish' => 'setDescriptionEnglish',
        'data' => 'setData',
        'mediaSupports' => 'setMediaSupports',
        'parentAd' => 'setParentAd',
        'childrenAds' => 'setChildrenAds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'advertiser' => 'getAdvertiser',
        'reference' => 'getReference',
        'source' => 'getSource',
        'inputAt' => 'getInputAt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'status' => 'getStatus',
        'transaction' => 'getTransaction',
        'productType' => 'getProductType',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'descriptionEnglish' => 'getDescriptionEnglish',
        'data' => 'getData',
        'mediaSupports' => 'getMediaSupports',
        'parentAd' => 'getParentAd',
        'childrenAds' => 'getChildrenAds'
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

    const STATUS_B = 'B';
    const STATUS_A = 'A';
    const STATUS_V = 'V';
    const STATUS_S = 'S';
    const STATUS_M = 'M';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_B,
            self::STATUS_A,
            self::STATUS_V,
            self::STATUS_S,
            self::STATUS_M,
        ];
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
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['inputAt'] = isset($data['inputAt']) ? $data['inputAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionEnglish'] = isset($data['descriptionEnglish']) ? $data['descriptionEnglish'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['mediaSupports'] = isset($data['mediaSupports']) ? $data['mediaSupports'] : null;
        $this->container['parentAd'] = isset($data['parentAd']) ? $data['parentAd'] : null;
        $this->container['childrenAds'] = isset($data['childrenAds']) ? $data['childrenAds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['advertiser'] === null) {
            $invalidProperties[] = "'advertiser' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transaction'] === null) {
            $invalidProperties[] = "'transaction' can't be null";
        }
        if ($this->container['productType'] === null) {
            $invalidProperties[] = "'productType' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique identifier for an ad, in the Ubiflow IS.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets advertiser
     *
     * @return \Ubiflow\Model\AdvertiserAdRead
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     *
     * @param \Ubiflow\Model\AdvertiserAdRead $advertiser advertiser
     *
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The unique identifier of the ad, from the point of vue of the advertiser owning the ad. This string is unique for a given advertiser.  The reference is an identifier used by all parties : the advertiser, the software editor, web portals. That is why once an ad has been created with a given reference, this reference cannot be modified anymore.  This string should not contain any character forbidden in file systems or urls. The reference originally given when the ad is created may thus be modified by Ubiflow : unsupported characters are replaced by un underscore (\"_\"). But in such cases you can still use the original reference when updating an ad.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Ubiflow\Model\AdSourceAdRead
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Ubiflow\Model\AdSourceAdRead $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets inputAt
     *
     * @return \DateTime
     */
    public function getInputAt()
    {
        return $this->container['inputAt'];
    }

    /**
     * Sets inputAt
     *
     * @param \DateTime $inputAt The date the ad was created by the advertiser (input for the first time) in the software he uses.  Dates use the <a href=\"https://tools.ietf.org/html/rfc3339#section-5.8\">RFC3339</a> format (ex: 2020-12-16T00:00:00+00).
     *
     * @return $this
     */
    public function setInputAt($inputAt)
    {
        $this->container['inputAt'] = $inputAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt The date the ad was created in the Ubiflow IS.  Dates use the <a href=\"https://tools.ietf.org/html/rfc3339#section-5.8\">RFC3339</a> format (ex: 2020-12-16T00:00:00+00).
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt The date the ad was modified for the last time in the Ubiflow IS.  This includes any change on the ad regarding its data or media.  Dates use the <a href=\"https://tools.ietf.org/html/rfc3339#section-5.8\">RFC3339</a> format (ex: 2020-12-16T00:00:00+00).
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the ad.  Available status are :  - \"B\" : The ad has been created, but is not yet activated :       it is currently used by the advertiser,      but it may not be published on web portals as long as it is not activated.  - \"A\" : The ad is active :       it is currently used by the advertiser, and may be published on web portals.       This state is the most commonly used for ads.  - \"V\" : The product of the ad has been sold, but the ad is still active,       because the advertiser wants to communicate on the products he sold.       The ad may be published, but only on web portals who allow such ads.  - \"S\" : The ad has been deleted by the advertiser.       It will be removed from Ubiflow SI over the next few days.  - \"M\" : The ad is a model of ads :       a sort of ad which contains generic data common to many other ads.       It may not be published on web portals.       A model ad may be used by an advertiser who sells products which are very similar,      and differ by only few characteristics.       Example in the real estate universe :      a builder of detached houses sells many houses which are almost all identical.       Example in the vehicles universe :      a car dealer sells cars which are almost all identical (the color or a few options may differ).       In practice, such ads are created by advertisers who don't use any software,      but use data entry directly on Ubiflow's platform :      model ads enable them to gain some precious time.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \Ubiflow\Model\TransactionAdRead
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Ubiflow\Model\TransactionAdRead $transaction transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets productType
     *
     * @return \Ubiflow\Model\ProductTypeAdRead
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param \Ubiflow\Model\ProductTypeAdRead $productType productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the ad (very short description), in the language of the advertiser.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The full description of the ad, in the language of the advertiser.  The description is a text comment describing the product which should be sold thanks to the ad.  This property is required in the \"IMMO\" universe (\"Real estate\").
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets descriptionEnglish
     *
     * @return string
     */
    public function getDescriptionEnglish()
    {
        return $this->container['descriptionEnglish'];
    }

    /**
     * Sets descriptionEnglish
     *
     * @param string $descriptionEnglish The full description in english of the ad.  The description in english is a text comment describing the product which should be sold thanks to the ad.
     *
     * @return $this
     */
    public function setDescriptionEnglish($descriptionEnglish)
    {
        $this->container['descriptionEnglish'] = $descriptionEnglish;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Ubiflow\Model\AdDataAdRead[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Ubiflow\Model\AdDataAdRead[] $data The collection of all data describing the ad.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets mediaSupports
     *
     * @return \Ubiflow\Model\MediaSupportsAdRead
     */
    public function getMediaSupports()
    {
        return $this->container['mediaSupports'];
    }

    /**
     * Sets mediaSupports
     *
     * @param \Ubiflow\Model\MediaSupportsAdRead $mediaSupports mediaSupports
     *
     * @return $this
     */
    public function setMediaSupports($mediaSupports)
    {
        $this->container['mediaSupports'] = $mediaSupports;

        return $this;
    }

    /**
     * Gets parentAd
     *
     * @return \Ubiflow\Model\RelatedAdAdRead
     */
    public function getParentAd()
    {
        return $this->container['parentAd'];
    }

    /**
     * Sets parentAd
     *
     * @param \Ubiflow\Model\RelatedAdAdRead $parentAd parentAd
     *
     * @return $this
     */
    public function setParentAd($parentAd)
    {
        $this->container['parentAd'] = $parentAd;

        return $this;
    }

    /**
     * Gets childrenAds
     *
     * @return \Ubiflow\Model\RelatedAdAdRead[]
     */
    public function getChildrenAds()
    {
        return $this->container['childrenAds'];
    }

    /**
     * Sets childrenAds
     *
     * @param \Ubiflow\Model\RelatedAdAdRead[] $childrenAds The children ads of the current ad.  An ad may have children ads, typically in the real estate universe, for instance for developers who sell new developments formed by groups of houses or apartments.  Children ads cannot be specified when creating or updating an ad : use the \"parent ad\" property instead.
     *
     * @return $this
     */
    public function setChildrenAds($childrenAds)
    {
        $this->container['childrenAds'] = $childrenAds;

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