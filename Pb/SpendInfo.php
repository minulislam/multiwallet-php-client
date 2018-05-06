<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.SpendInfo</code>
 */
class SpendInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.pb.CoinType coin = 1;</code>
     */
    private $coin = 0;
    /**
     * Generated from protobuf field <code>string address = 2;</code>
     */
    private $address = '';
    /**
     * Generated from protobuf field <code>uint64 amount = 3;</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>.pb.FeeLevel feeLevel = 4;</code>
     */
    private $feeLevel = 0;

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
     * Generated from protobuf field <code>string address = 2;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>string address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 amount = 3;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>uint64 amount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkUint64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.pb.FeeLevel feeLevel = 4;</code>
     * @return int
     */
    public function getFeeLevel()
    {
        return $this->feeLevel;
    }

    /**
     * Generated from protobuf field <code>.pb.FeeLevel feeLevel = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFeeLevel($var)
    {
        GPBUtil::checkEnum($var, \Pb\FeeLevel::class);
        $this->feeLevel = $var;

        return $this;
    }

}

