<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.Balances</code>
 */
class Balances extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 confirmed = 1;</code>
     */
    private $confirmed = 0;
    /**
     * Generated from protobuf field <code>uint64 unconfirmed = 2;</code>
     */
    private $unconfirmed = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 confirmed = 1;</code>
     * @return int|string
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Generated from protobuf field <code>uint64 confirmed = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConfirmed($var)
    {
        GPBUtil::checkUint64($var);
        $this->confirmed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 unconfirmed = 2;</code>
     * @return int|string
     */
    public function getUnconfirmed()
    {
        return $this->unconfirmed;
    }

    /**
     * Generated from protobuf field <code>uint64 unconfirmed = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUnconfirmed($var)
    {
        GPBUtil::checkUint64($var);
        $this->unconfirmed = $var;

        return $this;
    }

}

