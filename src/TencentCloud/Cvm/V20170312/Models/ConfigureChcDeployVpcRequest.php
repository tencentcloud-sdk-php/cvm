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
 * ConfigureChcDeployVpc请求参数结构体
 *
 * @method array getChcIds() 获取CHC物理服务器的实例Id。
 * @method void setChcIds(array $ChcIds) 设置CHC物理服务器的实例Id。
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() 获取部署网络信息。
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) 设置部署网络信息。
 * @method array getDeploySecurityGroupIds() 获取部署网络的安全组列表。
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) 设置部署网络的安全组列表。
 * @method ChcDeployExtraConfig getChcDeployExtraConfig() 获取部署所需要的dhcp选项参数
 * @method void setChcDeployExtraConfig(ChcDeployExtraConfig $ChcDeployExtraConfig) 设置部署所需要的dhcp选项参数
 */
class ConfigureChcDeployVpcRequest extends AbstractModel
{
    /**
     * @var array CHC物理服务器的实例Id。
     */
    public $ChcIds;

    /**
     * @var VirtualPrivateCloud 部署网络信息。
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var array 部署网络的安全组列表。
     */
    public $DeploySecurityGroupIds;

    /**
     * @var ChcDeployExtraConfig 部署所需要的dhcp选项参数
     */
    public $ChcDeployExtraConfig;

    /**
     * @param array $ChcIds CHC物理服务器的实例Id。
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud 部署网络信息。
     * @param array $DeploySecurityGroupIds 部署网络的安全组列表。
     * @param ChcDeployExtraConfig $ChcDeployExtraConfig 部署所需要的dhcp选项参数
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("DeployVirtualPrivateCloud",$param) and $param["DeployVirtualPrivateCloud"] !== null) {
            $this->DeployVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->DeployVirtualPrivateCloud->deserialize($param["DeployVirtualPrivateCloud"]);
        }

        if (array_key_exists("DeploySecurityGroupIds",$param) and $param["DeploySecurityGroupIds"] !== null) {
            $this->DeploySecurityGroupIds = $param["DeploySecurityGroupIds"];
        }

        if (array_key_exists("ChcDeployExtraConfig",$param) and $param["ChcDeployExtraConfig"] !== null) {
            $this->ChcDeployExtraConfig = new ChcDeployExtraConfig();
            $this->ChcDeployExtraConfig->deserialize($param["ChcDeployExtraConfig"]);
        }
    }
}
