<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/domain_category.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A category generated automatically by crawling a domain. If a campaign uses
 * the DynamicSearchAdsSetting, then domain categories will be generated for
 * the domain. The categories can be targeted using WebpageConditionInfo.
 * See: https://support.google.com/google-ads/answer/2471185
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.DomainCategory</code>
 */
class DomainCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     */
    private $campaign = null;
    /**
     * Recommended category for the website domain. e.g. if you have a website
     * about electronics, the categories could be "cameras", "televisions", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue category = 3;</code>
     */
    private $category = null;
    /**
     * The language code specifying the language of the website. e.g. "en" for
     * English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     */
    private $language_code = null;
    /**
     * The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain = 5;</code>
     */
    private $domain = null;
    /**
     * Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue coverage_fraction = 6;</code>
     */
    private $coverage_fraction = null;
    /**
     * The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value category_rank = 7;</code>
     */
    private $category_rank = null;
    /**
     * Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_children = 8;</code>
     */
    private $has_children = null;
    /**
     * The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 9;</code>
     */
    private $recommended_cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the domain category.
     *           Domain category resource names have the form:
     *           `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *     @type \Google\Protobuf\StringValue $campaign
     *           The campaign this category is recommended for.
     *     @type \Google\Protobuf\StringValue $category
     *           Recommended category for the website domain. e.g. if you have a website
     *           about electronics, the categories could be "cameras", "televisions", etc.
     *     @type \Google\Protobuf\StringValue $language_code
     *           The language code specifying the language of the website. e.g. "en" for
     *           English. The language can be specified in the DynamicSearchAdsSetting
     *           required for dynamic search ads. This is the language of the pages from
     *           your website that you want Google Ads to find, create ads for,
     *           and match searches with.
     *     @type \Google\Protobuf\StringValue $domain
     *           The domain for the website. The domain can be specified in the
     *           DynamicSearchAdsSetting required for dynamic search ads.
     *     @type \Google\Protobuf\DoubleValue $coverage_fraction
     *           Fraction of pages on your site that this category matches.
     *     @type \Google\Protobuf\Int64Value $category_rank
     *           The position of this category in the set of categories. Lower numbers
     *           indicate a better match for the domain. null indicates not recommended.
     *     @type \Google\Protobuf\BoolValue $has_children
     *           Indicates whether this category has sub-categories.
     *     @type \Google\Protobuf\Int64Value $recommended_cpc_bid_micros
     *           The recommended cost per click for the category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\DomainCategory::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @return string|null
     */
    public function getCampaignValue()
    {
        $wrapper = $this->getCampaign();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCampaign($wrappedVar);
    }

    /**
     * Recommended category for the website domain. e.g. if you have a website
     * about electronics, the categories could be "cameras", "televisions", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue category = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Returns the unboxed value from <code>getCategory()</code>

     * Recommended category for the website domain. e.g. if you have a website
     * about electronics, the categories could be "cameras", "televisions", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue category = 3;</code>
     * @return string|null
     */
    public function getCategoryValue()
    {
        $wrapper = $this->getCategory();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Recommended category for the website domain. e.g. if you have a website
     * about electronics, the categories could be "cameras", "televisions", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue category = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Recommended category for the website domain. e.g. if you have a website
     * about electronics, the categories could be "cameras", "televisions", etc.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue category = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCategoryValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setCategory($wrappedVar);
    }

    /**
     * The language code specifying the language of the website. e.g. "en" for
     * English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * The language code specifying the language of the website. e.g. "en" for
     * English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @return string|null
     */
    public function getLanguageCodeValue()
    {
        $wrapper = $this->getLanguageCode();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The language code specifying the language of the website. e.g. "en" for
     * English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language code specifying the language of the website. e.g. "en" for
     * English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setLanguageCode($wrappedVar);
    }

    /**
     * The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Returns the unboxed value from <code>getDomain()</code>

     * The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain = 5;</code>
     * @return string|null
     */
    public function getDomainValue()
    {
        $wrapper = $this->getDomain();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->domain = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDomainValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setDomain($wrappedVar);
    }

    /**
     * Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue coverage_fraction = 6;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getCoverageFraction()
    {
        return $this->coverage_fraction;
    }

    /**
     * Returns the unboxed value from <code>getCoverageFraction()</code>

     * Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue coverage_fraction = 6;</code>
     * @return float|null
     */
    public function getCoverageFractionValue()
    {
        $wrapper = $this->getCoverageFraction();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue coverage_fraction = 6;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setCoverageFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->coverage_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue coverage_fraction = 6;</code>
     * @param float|null $var
     * @return $this
     */
    public function setCoverageFractionValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\DoubleValue(['value' => $var]);
        return $this->setCoverageFraction($wrappedVar);
    }

    /**
     * The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value category_rank = 7;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCategoryRank()
    {
        return $this->category_rank;
    }

    /**
     * Returns the unboxed value from <code>getCategoryRank()</code>

     * The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value category_rank = 7;</code>
     * @return int|string|null
     */
    public function getCategoryRankValue()
    {
        $wrapper = $this->getCategoryRank();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value category_rank = 7;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCategoryRank($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->category_rank = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value category_rank = 7;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCategoryRankValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCategoryRank($wrappedVar);
    }

    /**
     * Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_children = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHasChildren()
    {
        return $this->has_children;
    }

    /**
     * Returns the unboxed value from <code>getHasChildren()</code>

     * Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_children = 8;</code>
     * @return bool|null
     */
    public function getHasChildrenValue()
    {
        $wrapper = $this->getHasChildren();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_children = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHasChildren($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->has_children = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_children = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHasChildrenValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setHasChildren($wrappedVar);
    }

    /**
     * The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 9;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedCpcBidMicros()
    {
        return $this->recommended_cpc_bid_micros;
    }

    /**
     * Returns the unboxed value from <code>getRecommendedCpcBidMicros()</code>

     * The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 9;</code>
     * @return int|string|null
     */
    public function getRecommendedCpcBidMicrosValue()
    {
        $wrapper = $this->getRecommendedCpcBidMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 9;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedCpcBidMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_cpc_bid_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_cpc_bid_micros = 9;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setRecommendedCpcBidMicrosValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setRecommendedCpcBidMicros($wrappedVar);
    }

}

