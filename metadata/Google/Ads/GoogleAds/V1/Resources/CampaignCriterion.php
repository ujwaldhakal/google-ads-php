<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign_criterion.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V1\Resources;

class CampaignCriterion
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V1\Enums\CriterionType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af3140a3a676f6f676c652f6164732f676f6f676c656164732f76312f72" .
            "65736f75726365732f63616d706169676e5f637269746572696f6e2e7072" .
            "6f746f1221676f6f676c652e6164732e676f6f676c656164732e76312e72" .
            "65736f75726365731a32676f6f676c652f6164732f676f6f676c65616473" .
            "2f76312f656e756d732f637269746572696f6e5f747970652e70726f746f" .
            "1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f" .
            "746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f" .
            "746f2291110a1143616d706169676e437269746572696f6e12150a0d7265" .
            "736f757263655f6e616d65180120012809122e0a0863616d706169676e18" .
            "042001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512310a0c637269746572696f6e5f696418052001280b321b2e" .
            "676f6f676c652e70726f746f6275662e496e74363456616c756512310a0c" .
            "6269645f6d6f646966696572180e2001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e466c6f617456616c7565122c0a086e6567617469766518" .
            "072001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c5661" .
            "6c7565124c0a047479706518062001280e323e2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d732e437269746572696f6e54" .
            "797065456e756d2e437269746572696f6e54797065123e0a076b6579776f" .
            "726418082001280b322b2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e636f6d6d6f6e2e4b6579776f7264496e666f480012420a0970" .
            "6c6163656d656e7418092001280b322d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e506c6163656d656e74496e66" .
            "6f480012540a136d6f62696c655f6170705f63617465676f7279180a2001" .
            "280b32352e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e4d6f62696c6541707043617465676f7279496e666f480012" .
            "530a126d6f62696c655f6170706c69636174696f6e180b2001280b32352e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e" .
            "2e4d6f62696c654170706c69636174696f6e496e666f480012400a086c6f" .
            "636174696f6e180c2001280b322c2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e636f6d6d6f6e2e4c6f636174696f6e496e666f4800" .
            "123c0a06646576696365180d2001280b322a2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e446576696365496e666f" .
            "480012450a0b61645f7363686564756c65180f2001280b322e2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e416453" .
            "63686564756c65496e666f480012410a096167655f72616e676518102001" .
            "280b322c2e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e41676552616e6765496e666f4800123c0a0667656e646572" .
            "18112001280b322a2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e47656e646572496e666f480012470a0c696e636f" .
            "6d655f72616e676518122001280b322f2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e636f6d6d6f6e2e496e636f6d6552616e676549" .
            "6e666f4800124d0a0f706172656e74616c5f73746174757318132001280b" .
            "32322e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e506172656e74616c537461747573496e666f480012410a097573" .
            "65725f6c69737418162001280b322c2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e636f6d6d6f6e2e557365724c697374496e666f48" .
            "0012490a0d796f75747562655f766964656f18142001280b32302e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e596f" .
            "7554756265566964656f496e666f4800124d0a0f796f75747562655f6368" .
            "616e6e656c18152001280b32322e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e636f6d6d6f6e2e596f75547562654368616e6e656c49" .
            "6e666f480012420a0970726f78696d69747918172001280b322d2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e5072" .
            "6f78696d697479496e666f4800123a0a05746f70696318182001280b3229" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f" .
            "6e2e546f706963496e666f480012490a0d6c697374696e675f73636f7065" .
            "18192001280b32302e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e4c697374696e6753636f7065496e666f48001240" .
            "0a086c616e6775616765181a2001280b322c2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e4c616e6775616765496e" .
            "666f4800123f0a0869705f626c6f636b181b2001280b322b2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e4970426c" .
            "6f636b496e666f480012490a0d636f6e74656e745f6c6162656c181c2001" .
            "280b32302e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e436f6e74656e744c6162656c496e666f4800123e0a076361" .
            "7272696572181d2001280b322b2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e636f6d6d6f6e2e43617272696572496e666f48001249" .
            "0a0d757365725f696e746572657374181e2001280b32302e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e5573657249" .
            "6e746572657374496e666f4800123e0a0777656270616765181f2001280b" .
            "322b2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d" .
            "6d6f6e2e57656270616765496e666f4800125e0a186f7065726174696e67" .
            "5f73797374656d5f76657273696f6e18202001280b323a2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e4f70657261" .
            "74696e6753797374656d56657273696f6e496e666f480012490a0d6d6f62" .
            "696c655f64657669636518212001280b32302e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e4d6f62696c6544657669" .
            "6365496e666f4800124b0a0e6c6f636174696f6e5f67726f757018222001" .
            "280b32312e676f6f676c652e6164732e676f6f676c656164732e76312e63" .
            "6f6d6d6f6e2e4c6f636174696f6e47726f7570496e666f4800420b0a0963" .
            "7269746572696f6e4283020a25636f6d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76312e7265736f7572636573421643616d706169676e" .
            "437269746572696f6e50726f746f50015a4a676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f" .
            "676f6f676c656164732f76312f7265736f75726365733b7265736f757263" .
            "6573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164" .
            "732e56312e5265736f7572636573ca0221476f6f676c655c4164735c476f" .
            "6f676c654164735c56315c5265736f7572636573ea0225476f6f676c653a" .
            "3a4164733a3a476f6f676c654164733a3a56313a3a5265736f7572636573" .
            "620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

