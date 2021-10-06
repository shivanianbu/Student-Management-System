<?php
/**
 * Report
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * The version of the OpenAPI document: 3.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * Report Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Report implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'href' => 'string',
        'status' => 'string',
        'result' => 'string',
        'sub_result' => 'string',
        'breakdown' => 'map[string,object]',
        'properties' => 'map[string,object]',
        'check_id' => 'string',
        'name' => 'string',
        'documents' => '\Onfido\Model\ReportDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'href' => null,
        'status' => null,
        'result' => null,
        'sub_result' => null,
        'breakdown' => null,
        'properties' => null,
        'check_id' => null,
        'name' => null,
        'documents' => null
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
        'id' => 'id',
        'created_at' => 'created_at',
        'href' => 'href',
        'status' => 'status',
        'result' => 'result',
        'sub_result' => 'sub_result',
        'breakdown' => 'breakdown',
        'properties' => 'properties',
        'check_id' => 'check_id',
        'name' => 'name',
        'documents' => 'documents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'href' => 'setHref',
        'status' => 'setStatus',
        'result' => 'setResult',
        'sub_result' => 'setSubResult',
        'breakdown' => 'setBreakdown',
        'properties' => 'setProperties',
        'check_id' => 'setCheckId',
        'name' => 'setName',
        'documents' => 'setDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'href' => 'getHref',
        'status' => 'getStatus',
        'result' => 'getResult',
        'sub_result' => 'getSubResult',
        'breakdown' => 'getBreakdown',
        'properties' => 'getProperties',
        'check_id' => 'getCheckId',
        'name' => 'getName',
        'documents' => 'getDocuments'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['sub_result'] = isset($data['sub_result']) ? $data['sub_result'] : null;
        $this->container['breakdown'] = isset($data['breakdown']) ? $data['breakdown'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['check_id'] = isset($data['check_id']) ? $data['check_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier for the report. Read-only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time at which the report was first initiated. Read-only.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The API endpoint to retrieve the report. Read-only.
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current state of the report in the checking process. Read-only.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string|null $result The result of the report. Read-only.
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets sub_result
     *
     * @return string|null
     */
    public function getSubResult()
    {
        return $this->container['sub_result'];
    }

    /**
     * Sets sub_result
     *
     * @param string|null $sub_result The sub_result of the report. It gives a more detailed result for document reports only, and will be null otherwise. Read-only.
     *
     * @return $this
     */
    public function setSubResult($sub_result)
    {
        $this->container['sub_result'] = $sub_result;

        return $this;
    }

    /**
     * Gets breakdown
     *
     * @return map[string,object]|null
     */
    public function getBreakdown()
    {
        return $this->container['breakdown'];
    }

    /**
     * Sets breakdown
     *
     * @param map[string,object]|null $breakdown The details of the report. This is specific to each type of report. Read-only.
     *
     * @return $this
     */
    public function setBreakdown($breakdown)
    {
        $this->container['breakdown'] = $breakdown;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return map[string,object]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,object]|null $properties The properties associated with the report, if any. Read-only.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets check_id
     *
     * @return string|null
     */
    public function getCheckId()
    {
        return $this->container['check_id'];
    }

    /**
     * Sets check_id
     *
     * @param string|null $check_id The ID of the check to which the report belongs. Read-only.
     *
     * @return $this
     */
    public function setCheckId($check_id)
    {
        $this->container['check_id'] = $check_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the report type.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Onfido\Model\ReportDocument[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Onfido\Model\ReportDocument[]|null $documents Array of objects with document ids that were used in the Onfido engine. [ONLY USED IN A DOCUMENT CHECK]
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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


