<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gateway/gw_socket_write.proto

namespace Zaly\Proto\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gateway.GwSocketWriteResponse</code>
 */
class GwSocketWriteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 length = 1;</code>
     */
    private $length = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $length
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gateway\GwSocketWrite::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 length = 1;</code>
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Generated from protobuf field <code>int32 length = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->length = $var;

        return $this;
    }

}

