<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/matching_function.proto

namespace Google\Ads\GoogleAds\V1\Common\Operand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed attribute operand in a matching function.
 * Used to represent a feed attribute in feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.Operand.FeedAttributeOperand</code>
 */
class FeedAttributeOperand extends \Google\Protobuf\Internal\Message
{
    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_id = 1;</code>
     */
    private $feed_id = null;
    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 2;</code>
     */
    private $feed_attribute_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $feed_id
     *           The associated feed. Required.
     *     @type \Google\Protobuf\Int64Value $feed_attribute_id
     *           Id of the referenced feed attribute. Required.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFeedId()
    {
        return $this->feed_id;
    }

    /**
     * Returns the unboxed value from <code>getFeedId()</code>

     * The associated feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_id = 1;</code>
     * @return int|string|null
     */
    public function getFeedIdValue()
    {
        $wrapper = $this->getFeedId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The associated feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_id = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFeedId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->feed_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The associated feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_id = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFeedIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setFeedId($wrappedVar);
    }

    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFeedAttributeId()
    {
        return $this->feed_attribute_id;
    }

    /**
     * Returns the unboxed value from <code>getFeedAttributeId()</code>

     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 2;</code>
     * @return int|string|null
     */
    public function getFeedAttributeIdValue()
    {
        $wrapper = $this->getFeedAttributeId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFeedAttributeId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->feed_attribute_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Id of the referenced feed attribute. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_attribute_id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFeedAttributeIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setFeedAttributeId($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedAttributeOperand::class, \Google\Ads\GoogleAds\V1\Common\Operand_FeedAttributeOperand::class);

