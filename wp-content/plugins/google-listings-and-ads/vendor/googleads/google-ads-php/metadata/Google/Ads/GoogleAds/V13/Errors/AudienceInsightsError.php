<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/audience_insights_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class AudienceInsightsError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v13/errors/audience_insights_error.protogoogle.ads.googleads.v13.errors"�
AudienceInsightsErrorEnum"r
AudienceInsightsError
UNSPECIFIED 
UNKNOWN;
7DIMENSION_INCOMPATIBLE_WITH_TOPIC_AUDIENCE_COMBINATIONSB�
#com.google.ads.googleads.v13.errorsBAudienceInsightsErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

