<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

/**
 * Predefined schemas for storing findings.
 *
 * Protobuf enum <code>Google\Privacy\Dlp\V2\OutputStorageConfig\OutputSchema</code>
 */
class OutputStorageConfig_OutputSchema
{
    /**
     * Generated from protobuf enum <code>OUTPUT_SCHEMA_UNSPECIFIED = 0;</code>
     */
    const OUTPUT_SCHEMA_UNSPECIFIED = 0;
    /**
     * Basic schema including only `info_type`, `quote`, `certainty`, and
     * `timestamp`.
     *
     * Generated from protobuf enum <code>BASIC_COLUMNS = 1;</code>
     */
    const BASIC_COLUMNS = 1;
    /**
     * Schema tailored to findings from scanning Google Cloud Storage.
     *
     * Generated from protobuf enum <code>GCS_COLUMNS = 2;</code>
     */
    const GCS_COLUMNS = 2;
    /**
     * Schema tailored to findings from scanning Google Datastore.
     *
     * Generated from protobuf enum <code>DATASTORE_COLUMNS = 3;</code>
     */
    const DATASTORE_COLUMNS = 3;
    /**
     * Schema tailored to findings from scanning Google BigQuery.
     *
     * Generated from protobuf enum <code>BIG_QUERY_COLUMNS = 4;</code>
     */
    const BIG_QUERY_COLUMNS = 4;
    /**
     * Schema containing all columns.
     *
     * Generated from protobuf enum <code>ALL_COLUMNS = 5;</code>
     */
    const ALL_COLUMNS = 5;
}
