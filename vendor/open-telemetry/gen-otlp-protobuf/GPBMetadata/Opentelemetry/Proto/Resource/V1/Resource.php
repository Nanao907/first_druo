<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/resource/v1/resource.proto

namespace GPBMetadata\Opentelemetry\Proto\Resource\V1;

class Resource
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Opentelemetry\Proto\Common\V1\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.opentelemetry/proto/resource/v1/resource.protoopentelemetry.proto.resource.v1"i
Resource;

attributes (2\'.opentelemetry.proto.common.v1.KeyValue 
dropped_attributes_count (B�
"io.opentelemetry.proto.resource.v1BResourceProtoPZ*go.opentelemetry.io/proto/otlp/resource/v1�OpenTelemetry.Proto.Resource.V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

