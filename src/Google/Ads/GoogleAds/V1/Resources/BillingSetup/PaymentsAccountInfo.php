<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/billing_setup.proto

namespace Google\Ads\GoogleAds\V1\Resources\BillingSetup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container of Payments account information for this billing.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.BillingSetup.PaymentsAccountInfo</code>
 */
class PaymentsAccountInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 1;</code>
     */
    private $payments_account_id = null;
    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 2;</code>
     */
    private $payments_account_name = null;
    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 3;</code>
     */
    private $payments_profile_id = null;
    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 4;</code>
     */
    private $payments_profile_name = null;
    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 5;</code>
     */
    private $secondary_payments_profile_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $payments_account_id
     *           A 16 digit id used to identify the Payments account associated with the
     *           billing setup.
     *           This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *     @type \Google\Protobuf\StringValue $payments_account_name
     *           The name of the Payments account associated with the billing setup.
     *           This enables the user to specify a meaningful name for a Payments account
     *           to aid in reconciling monthly invoices.
     *           This name will be printed in the monthly invoices.
     *     @type \Google\Protobuf\StringValue $payments_profile_id
     *           A 12 digit id used to identify the Payments profile associated with the
     *           billing setup.
     *           This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *     @type \Google\Protobuf\StringValue $payments_profile_name
     *           The name of the Payments profile associated with the billing setup.
     *     @type \Google\Protobuf\StringValue $secondary_payments_profile_id
     *           A secondary payments profile id present in uncommon situations, e.g.
     *           when a sequential liability agreement has been arranged.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\BillingSetup::initOnce();
        parent::__construct($data);
    }

    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsAccountId()
    {
        return $this->payments_account_id;
    }

    /**
     * Returns the unboxed value from <code>getPaymentsAccountId()</code>

     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 1;</code>
     * @return string|null
     */
    public function getPaymentsAccountIdValue()
    {
        $wrapper = $this->getPaymentsAccountId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsAccountId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_account_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A 16 digit id used to identify the Payments account associated with the
     * billing setup.
     * This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPaymentsAccountIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPaymentsAccountId($wrappedVar);
    }

    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsAccountName()
    {
        return $this->payments_account_name;
    }

    /**
     * Returns the unboxed value from <code>getPaymentsAccountName()</code>

     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 2;</code>
     * @return string|null
     */
    public function getPaymentsAccountNameValue()
    {
        $wrapper = $this->getPaymentsAccountName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsAccountName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_account_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the Payments account associated with the billing setup.
     * This enables the user to specify a meaningful name for a Payments account
     * to aid in reconciling monthly invoices.
     * This name will be printed in the monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_account_name = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPaymentsAccountNameValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPaymentsAccountName($wrappedVar);
    }

    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsProfileId()
    {
        return $this->payments_profile_id;
    }

    /**
     * Returns the unboxed value from <code>getPaymentsProfileId()</code>

     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 3;</code>
     * @return string|null
     */
    public function getPaymentsProfileIdValue()
    {
        $wrapper = $this->getPaymentsProfileId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsProfileId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_profile_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A 12 digit id used to identify the Payments profile associated with the
     * billing setup.
     * This must be passed in as a string with dashes, e.g. "1234-5678-9012".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_id = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPaymentsProfileIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPaymentsProfileId($wrappedVar);
    }

    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPaymentsProfileName()
    {
        return $this->payments_profile_name;
    }

    /**
     * Returns the unboxed value from <code>getPaymentsProfileName()</code>

     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 4;</code>
     * @return string|null
     */
    public function getPaymentsProfileNameValue()
    {
        $wrapper = $this->getPaymentsProfileName();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPaymentsProfileName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->payments_profile_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the Payments profile associated with the billing setup.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue payments_profile_name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPaymentsProfileNameValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setPaymentsProfileName($wrappedVar);
    }

    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSecondaryPaymentsProfileId()
    {
        return $this->secondary_payments_profile_id;
    }

    /**
     * Returns the unboxed value from <code>getSecondaryPaymentsProfileId()</code>

     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 5;</code>
     * @return string|null
     */
    public function getSecondaryPaymentsProfileIdValue()
    {
        $wrapper = $this->getSecondaryPaymentsProfileId();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSecondaryPaymentsProfileId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->secondary_payments_profile_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A secondary payments profile id present in uncommon situations, e.g.
     * when a sequential liability agreement has been arranged.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue secondary_payments_profile_id = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSecondaryPaymentsProfileIdValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setSecondaryPaymentsProfileId($wrappedVar);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PaymentsAccountInfo::class, \Google\Ads\GoogleAds\V1\Resources\BillingSetup_PaymentsAccountInfo::class);

