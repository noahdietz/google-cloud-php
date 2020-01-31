<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/resources.proto

namespace Google\Cloud\SecretManager\V1beta1\Replication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A replication policy that replicates the [Secret][google.cloud.secrets.v1beta1.Secret] payload without any
 * restrictions.
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.Replication.Automatic</code>
 */
class Automatic extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Automatic::class, \Google\Cloud\SecretManager\V1beta1\Replication_Automatic::class);
