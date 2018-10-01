<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.UpdateCryptoKey][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateCryptoKeyRequest</code>
 */
class UpdateCryptoKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] with updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 1;</code>
     */
    private $crypto_key = null;
    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Kms\V1\CryptoKey $crypto_key
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] with updated values.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required list of fields to be updated in this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] with updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 1;</code>
     * @return \Google\Cloud\Kms\V1\CryptoKey
     */
    public function getCryptoKey()
    {
        return $this->crypto_key;
    }

    /**
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] with updated values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey crypto_key = 1;</code>
     * @param \Google\Cloud\Kms\V1\CryptoKey $var
     * @return $this
     */
    public function setCryptoKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKey::class);
        $this->crypto_key = $var;

        return $this;
    }

    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required list of fields to be updated in this request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
