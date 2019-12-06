// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OSS.Models
{
    public class PutObjectAclRequest : TeaModel {
        [NameInMap("BucketName")]
        [Validation(Required=true)]
        public string BucketName { get; set; }

        [NameInMap("ObjectName")]
        [Validation(Required=true)]
        public string ObjectName { get; set; }

        [NameInMap("Header")]
        [Validation(Required=true)]
        public PutObjectAclRequestHeader Header { get; set; }
        public class PutObjectAclRequestHeader : TeaModel {
            [NameInMap("x-oss-object-acl")]
            [Validation(Required=true)]
            public string ObjectAcl { get; set; }
        };

    }

}