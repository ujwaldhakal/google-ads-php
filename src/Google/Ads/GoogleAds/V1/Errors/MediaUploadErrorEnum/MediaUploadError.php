<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/media_upload_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\MediaUploadErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible media uploading errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.MediaUploadErrorEnum.MediaUploadError</code>
 */
class MediaUploadError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The uploaded file is too big.
     *
     * Generated from protobuf enum <code>FILE_TOO_BIG = 2;</code>
     */
    const FILE_TOO_BIG = 2;
    /**
     * Image data is unparseable.
     *
     * Generated from protobuf enum <code>UNPARSEABLE_IMAGE = 3;</code>
     */
    const UNPARSEABLE_IMAGE = 3;
    /**
     * Animated images are not allowed.
     *
     * Generated from protobuf enum <code>ANIMATED_IMAGE_NOT_ALLOWED = 4;</code>
     */
    const ANIMATED_IMAGE_NOT_ALLOWED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FILE_TOO_BIG => 'FILE_TOO_BIG',
        self::UNPARSEABLE_IMAGE => 'UNPARSEABLE_IMAGE',
        self::ANIMATED_IMAGE_NOT_ALLOWED => 'ANIMATED_IMAGE_NOT_ALLOWED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MediaUploadError::class, \Google\Ads\GoogleAds\V1\Errors\MediaUploadErrorEnum_MediaUploadError::class);

