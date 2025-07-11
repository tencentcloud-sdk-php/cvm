<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义metadata key和value
 *
 * @method string getKey() 获取自定义metadata键，需符合正则 ^[a-zA-Z0-9_-]+$，长度 ≤128 字节（大小写敏感）；

 * @method void setKey(string $Key) 设置自定义metadata键，需符合正则 ^[a-zA-Z0-9_-]+$，长度 ≤128 字节（大小写敏感）；

 * @method string getValue() 获取自定义metadata值，支持任意数据（含二进制），大小 ≤256 KB（大小写敏感）；
 * @method void setValue(string $Value) 设置自定义metadata值，支持任意数据（含二进制），大小 ≤256 KB（大小写敏感）；
 */
class MetadataItem extends AbstractModel
{
    /**
     * @var string 自定义metadata键，需符合正则 ^[a-zA-Z0-9_-]+$，长度 ≤128 字节（大小写敏感）；

     */
    public $Key;

    /**
     * @var string 自定义metadata值，支持任意数据（含二进制），大小 ≤256 KB（大小写敏感）；
     */
    public $Value;

    /**
     * @param string $Key 自定义metadata键，需符合正则 ^[a-zA-Z0-9_-]+$，长度 ≤128 字节（大小写敏感）；

     * @param string $Value 自定义metadata值，支持任意数据（含二进制），大小 ≤256 KB（大小写敏感）；
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
