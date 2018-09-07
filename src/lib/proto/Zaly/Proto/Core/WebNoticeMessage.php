<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/message.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.WebNoticeMessage</code>
 */
class WebNoticeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1;</code>
     */
    private $code = '';
    /**
     * Generated from protobuf field <code>int32 height = 2;</code>
     */
    private $height = 0;
    /**
     * Generated from protobuf field <code>string hrefURL = 3;</code>
     */
    private $hrefURL = '';
    /**
     * Generated from protobuf field <code>string title = 4;</code>
     */
    private $title = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type int $height
     *     @type string $hrefURL
     *     @type string $title
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int32 height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hrefURL = 3;</code>
     * @return string
     */
    public function getHrefURL()
    {
        return $this->hrefURL;
    }

    /**
     * Generated from protobuf field <code>string hrefURL = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHrefURL($var)
    {
        GPBUtil::checkString($var, True);
        $this->hrefURL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}

