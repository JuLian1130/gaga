<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/net.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.TransportData</code>
 */
class TransportData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string action = 1;</code>
     */
    private $action = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Any body = 2;</code>
     */
    private $body = null;
    /**
     * transfrom TransportDataHeaderKey to string.
     * key = "_" + TransportDataHeaderKey
     * ex: "_1", "_9"
     * 
     * Q: why donot use TransportDataHeaderKey directly?
     * A: javascript(json) doesnot support int key in object.
     * Q: why donnot use string(TransportDataHeaderKey)?
     * A: php treat a string with a int pattern as an int, so the probuf cannot mergeFromJsonString.
     *
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     */
    private $header;
    /**
     * uniqid for blockRequest
     * the default php config doesnot support bcmath required by int64
     *
     * Generated from protobuf field <code>int64 packageId = 4;</code>
     */
    private $packageId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *     @type \Google\Protobuf\Any $body
     *     @type array|\Google\Protobuf\Internal\MapField $header
     *           transfrom TransportDataHeaderKey to string.
     *           key = "_" + TransportDataHeaderKey
     *           ex: "_1", "_9"
     *           
     *           Q: why donot use TransportDataHeaderKey directly?
     *           A: javascript(json) doesnot support int key in object.
     *           Q: why donnot use string(TransportDataHeaderKey)?
     *           A: php treat a string with a int pattern as an int, so the probuf cannot mergeFromJsonString.
     *     @type int|string $packageId
     *           uniqid for blockRequest
     *           the default php config doesnot support bcmath required by int64
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Net::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string action = 1;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>string action = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any body = 2;</code>
     * @return \Google\Protobuf\Any
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any body = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->body = $var;

        return $this;
    }

    /**
     * transfrom TransportDataHeaderKey to string.
     * key = "_" + TransportDataHeaderKey
     * ex: "_1", "_9"
     * 
     * Q: why donot use TransportDataHeaderKey directly?
     * A: javascript(json) doesnot support int key in object.
     * Q: why donnot use string(TransportDataHeaderKey)?
     * A: php treat a string with a int pattern as an int, so the probuf cannot mergeFromJsonString.
     *
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * transfrom TransportDataHeaderKey to string.
     * key = "_" + TransportDataHeaderKey
     * ex: "_1", "_9"
     * 
     * Q: why donot use TransportDataHeaderKey directly?
     * A: javascript(json) doesnot support int key in object.
     * Q: why donnot use string(TransportDataHeaderKey)?
     * A: php treat a string with a int pattern as an int, so the probuf cannot mergeFromJsonString.
     *
     * Generated from protobuf field <code>map<string, string> header = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->header = $arr;

        return $this;
    }

    /**
     * uniqid for blockRequest
     * the default php config doesnot support bcmath required by int64
     *
     * Generated from protobuf field <code>int64 packageId = 4;</code>
     * @return int|string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * uniqid for blockRequest
     * the default php config doesnot support bcmath required by int64
     *
     * Generated from protobuf field <code>int64 packageId = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPackageId($var)
    {
        GPBUtil::checkInt64($var);
        $this->packageId = $var;

        return $this;
    }

}

