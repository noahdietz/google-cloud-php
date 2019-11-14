<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A BigQuery destination.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.BigQueryDestination</code>
 */
class BigQueryDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The BigQuery dataset in format
     * "projects/projectId/datasets/datasetId", to which the snapshot result
     * should be exported. If this dataset does not exist, the export call returns
     * an error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dataset = '';
    /**
     * Required. The BigQuery table to which the snapshot result should be
     * written. If this table does not exist, a new table with the given name
     * will be created.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $table = '';
    /**
     * If the destination table already exists and this flag is `TRUE`, the
     * table will be overwritten by the contents of assets snapshot. If the flag
     * is not set and the destination table already exists, the export call
     * returns an error.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Required. The BigQuery dataset in format
     *           "projects/projectId/datasets/datasetId", to which the snapshot result
     *           should be exported. If this dataset does not exist, the export call returns
     *           an error.
     *     @type string $table
     *           Required. The BigQuery table to which the snapshot result should be
     *           written. If this table does not exist, a new table with the given name
     *           will be created.
     *     @type bool $force
     *           If the destination table already exists and this flag is `TRUE`, the
     *           table will be overwritten by the contents of assets snapshot. If the flag
     *           is not set and the destination table already exists, the export call
     *           returns an error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The BigQuery dataset in format
     * "projects/projectId/datasets/datasetId", to which the snapshot result
     * should be exported. If this dataset does not exist, the export call returns
     * an error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Required. The BigQuery dataset in format
     * "projects/projectId/datasets/datasetId", to which the snapshot result
     * should be exported. If this dataset does not exist, the export call returns
     * an error.
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Required. The BigQuery table to which the snapshot result should be
     * written. If this table does not exist, a new table with the given name
     * will be created.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The BigQuery table to which the snapshot result should be
     * written. If this table does not exist, a new table with the given name
     * will be created.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * If the destination table already exists and this flag is `TRUE`, the
     * table will be overwritten by the contents of assets snapshot. If the flag
     * is not set and the destination table already exists, the export call
     * returns an error.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If the destination table already exists and this flag is `TRUE`, the
     * table will be overwritten by the contents of assets snapshot. If the flag
     * is not set and the destination table already exists, the export call
     * returns an error.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

