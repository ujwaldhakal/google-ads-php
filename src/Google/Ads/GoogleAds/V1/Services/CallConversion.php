<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A call conversion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.CallConversion</code>
 */
class CallConversion extends \Google\Protobuf\Internal\Message
{
    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     */
    private $caller_id = null;
    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     */
    private $call_start_date_time = null;
    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     */
    private $conversion_action = null;
    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     */
    private $conversion_date_time = null;
    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 5;</code>
     */
    private $conversion_value = null;
    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 6;</code>
     */
    private $currency_code = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $caller_id
     *           The caller id from which this call was placed. Caller id is expected to be
     *           in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *     @type \Google\Protobuf\StringValue $call_start_date_time
     *           The date time at which the call occurred. The timezone must be specified.
     *           The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     *           e.g. "2019-01-01 12:32:45-08:00".
     *     @type \Google\Protobuf\StringValue $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *           Note: Although this resource name consists of a customer id and a
     *           conversion action id, validation will ignore the customer id and use the
     *           conversion action id as the sole identifier of the conversion action.
     *     @type \Google\Protobuf\StringValue $conversion_date_time
     *           The date time at which the conversion occurred. Must be after the call
     *           time. The timezone must be specified. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *     @type \Google\Protobuf\DoubleValue $conversion_value
     *           The value of the conversion for the advertiser.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Currency associated with the conversion value. This is the ISO 4217
     *           3-character currency code. For example: USD, EUR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallerId()
    {
        return $this->caller_id;
    }

    /**
     * Returns the unboxed value from <code>getCallerId()</code>

     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @return string|null
     */
    public function getCallerIdValue()
    {
        $wrapper = $this->getCallerId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallerId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->caller_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign. e.g. "+16502531234".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallerIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCallerId($wrappedVar);
    }

    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallStartDateTime()
    {
        return $this->call_start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCallStartDateTime()</code>

     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @return string|null
     */
    public function getCallStartDateTimeValue()
    {
        $wrapper = $this->getCallStartDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallStartDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCallStartDateTime($wrappedVar);
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getConversionAction()
    {
        return $this->conversion_action;
    }

    /**
     * Returns the unboxed value from <code>getConversionAction()</code>

     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return string|null
     */
    public function getConversionActionValue()
    {
        $wrapper = $this->getConversionAction();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionActionValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setConversionAction($wrappedVar);
    }

    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getConversionDateTime()
    {
        return $this->conversion_date_time;
    }

    /**
     * Returns the unboxed value from <code>getConversionDateTime()</code>

     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @return string|null
     */
    public function getConversionDateTimeValue()
    {
        $wrapper = $this->getConversionDateTime();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionDateTimeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setConversionDateTime($wrappedVar);
    }

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 5;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getConversionValue()
    {
        return $this->conversion_value;
    }

    /**
     * Returns the unboxed value from <code>getConversionValue()</code>

     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 5;</code>
     * @return float|null
     */
    public function getConversionValueValue()
    {
        $wrapper = $this->getConversionValue();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 5;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setConversionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->conversion_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 5;</code>
     * @param float|null $var
     * @return $this
     */
    public function setConversionValueValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setConversionValue($wrappedVar);
    }

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 6;</code>
     * @return string|null
     */
    public function getCurrencyCodeValue()
    {
        $wrapper = $this->getCurrencyCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCurrencyCode($wrappedVar);
    }

}

