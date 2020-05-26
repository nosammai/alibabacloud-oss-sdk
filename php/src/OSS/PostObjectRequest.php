<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS\OSS;

use AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header;
use AlibabaCloud\Tea\Model;

class PostObjectRequest extends Model
{
    /**
     * @description BucketName
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description header
     *
     * @var header
     */
    public $header;
    protected $_name = [
        'bucketName' => 'BucketName',
        'header'     => 'header',
    ];

    public function validate()
    {
        Model::validateRequired('bucketName', $this->bucketName, true);
        Model::validateRequired('header', $this->header, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['BucketName'] = $this->bucketName;
        $res['header']     = null !== $this->header ? $this->header->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['header'])) {
            $model->header = header::fromMap($map['header']);
        }

        return $model;
    }
}
