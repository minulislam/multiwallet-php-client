<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.KeySelection</code>
 */
class KeySelection extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.pb.CoinType coin = 1;</code>
     */
    private $coin = 0;
    /**
     * Generated from protobuf field <code>.pb.KeyPurpose purpose = 2;</code>
     */
    private $purpose = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.pb.CoinType coin = 1;</code>
     * @return int
     */
    public function getCoin()
    {
        return $this->coin;
    }

    /**
     * Generated from protobuf field <code>.pb.CoinType coin = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCoin($var)
    {
        GPBUtil::checkEnum($var, \Pb\CoinType::class);
        $this->coin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.pb.KeyPurpose purpose = 2;</code>
     * @return int
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Generated from protobuf field <code>.pb.KeyPurpose purpose = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPurpose($var)
    {
        GPBUtil::checkEnum($var, \Pb\KeyPurpose::class);
        $this->purpose = $var;

        return $this;
    }

}
