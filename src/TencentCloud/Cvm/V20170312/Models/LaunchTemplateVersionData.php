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
 * 实例启动模板版本信息
 *
 * @method Placement getPlacement() 获取实例所在的位置。
 * @method void setPlacement(Placement $Placement) 设置实例所在的位置。
 * @method string getInstanceType() 获取实例机型。
 * @method void setInstanceType(string $InstanceType) 设置实例机型。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceChargeType() 获取实例计费模式。取值范围：
<li>`PREPAID`：表示预付费，即包年包月</li>
<li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费</li>
<li>`CDHPAID`：`专用宿主机`付费，即只对`专用宿主机`计费，不对`专用宿主机`上的实例计费。</li>
<li>`SPOTPAID`：表示竞价实例付费。</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费模式。取值范围：
<li>`PREPAID`：表示预付费，即包年包月</li>
<li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费</li>
<li>`CDHPAID`：`专用宿主机`付费，即只对`专用宿主机`计费，不对`专用宿主机`上的实例计费。</li>
<li>`SPOTPAID`：表示竞价实例付费。</li>
 * @method SystemDisk getSystemDisk() 获取实例系统盘信息。
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置实例系统盘信息。
 * @method array getDataDisks() 获取实例数据盘信息。只包含随实例购买的数据盘。
 * @method void setDataDisks(array $DataDisks) 设置实例数据盘信息。只包含随实例购买的数据盘。
 * @method InternetAccessible getInternetAccessible() 获取实例带宽信息。
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置实例带宽信息。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取实例所属虚拟私有网络信息。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置实例所属虚拟私有网络信息。
 * @method string getImageId() 获取生产实例所使用的镜像`ID`。
 * @method void setImageId(string $ImageId) 设置生产实例所使用的镜像`ID`。
 * @method array getSecurityGroupIds() 获取实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
 * @method LoginSettings getLoginSettings() 获取实例登录设置。目前只返回实例所关联的密钥。
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置实例登录设置。目前只返回实例所关联的密钥。
 * @method string getCamRoleName() 获取CAM角色名。
 * @method void setCamRoleName(string $CamRoleName) 设置CAM角色名。
 * @method string getHpcClusterId() 获取高性能计算集群`ID`。
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群`ID`。
 * @method integer getInstanceCount() 获取购买实例数量。
 * @method void setInstanceCount(integer $InstanceCount) 设置购买实例数量。
 * @method EnhancedService getEnhancedService() 获取增强服务。
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置增强服务。
 * @method string getUserData() 获取提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。
 * @method void setUserData(string $UserData) 设置提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。
 * @method array getDisasterRecoverGroupIds() 获取置放群组ID，仅支持指定一个。
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置置放群组ID，仅支持指定一个。
 * @method ActionTimer getActionTimer() 获取定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
 * @method void setActionTimer(ActionTimer $ActionTimer) 设置定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
 * @method string getHostName() 获取云服务器的主机名。
 * @method void setHostName(string $HostName) 设置云服务器的主机名。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。
 * @method boolean getDisableApiTermination() 获取实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：

true：表示开启实例保护，不允许通过api接口删除实例
false：表示关闭实例保护，允许通过api接口删除实例

默认取值：false。
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：

true：表示开启实例保护，不允许通过api接口删除实例
false：表示关闭实例保护，允许通过api接口删除实例

默认取值：false。
 */
class LaunchTemplateVersionData extends AbstractModel
{
    /**
     * @var Placement 实例所在的位置。
     */
    public $Placement;

    /**
     * @var string 实例机型。
     */
    public $InstanceType;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例计费模式。取值范围：
<li>`PREPAID`：表示预付费，即包年包月</li>
<li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费</li>
<li>`CDHPAID`：`专用宿主机`付费，即只对`专用宿主机`计费，不对`专用宿主机`上的实例计费。</li>
<li>`SPOTPAID`：表示竞价实例付费。</li>
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk 实例系统盘信息。
     */
    public $SystemDisk;

    /**
     * @var array 实例数据盘信息。只包含随实例购买的数据盘。
     */
    public $DataDisks;

    /**
     * @var InternetAccessible 实例带宽信息。
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud 实例所属虚拟私有网络信息。
     */
    public $VirtualPrivateCloud;

    /**
     * @var string 生产实例所使用的镜像`ID`。
     */
    public $ImageId;

    /**
     * @var array 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     */
    public $LoginSettings;

    /**
     * @var string CAM角色名。
     */
    public $CamRoleName;

    /**
     * @var string 高性能计算集群`ID`。
     */
    public $HpcClusterId;

    /**
     * @var integer 购买实例数量。
     */
    public $InstanceCount;

    /**
     * @var EnhancedService 增强服务。
     */
    public $EnhancedService;

    /**
     * @var string 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。
     */
    public $UserData;

    /**
     * @var array 置放群组ID，仅支持指定一个。
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var ActionTimer 定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
     */
    public $ActionTimer;

    /**
     * @var InstanceMarketOptionsRequest 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     */
    public $InstanceMarketOptions;

    /**
     * @var string 云服务器的主机名。
     */
    public $HostName;

    /**
     * @var string 用于保证请求幂等性的字符串。
     */
    public $ClientToken;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。
     */
    public $InstanceChargePrepaid;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。
     */
    public $TagSpecification;

    /**
     * @var boolean 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：

true：表示开启实例保护，不允许通过api接口删除实例
false：表示关闭实例保护，允许通过api接口删除实例

默认取值：false。
     */
    public $DisableApiTermination;

    /**
     * @param Placement $Placement 实例所在的位置。
     * @param string $InstanceType 实例机型。
     * @param string $InstanceName 实例名称。
     * @param string $InstanceChargeType 实例计费模式。取值范围：
<li>`PREPAID`：表示预付费，即包年包月</li>
<li>`POSTPAID_BY_HOUR`：表示后付费，即按量计费</li>
<li>`CDHPAID`：`专用宿主机`付费，即只对`专用宿主机`计费，不对`专用宿主机`上的实例计费。</li>
<li>`SPOTPAID`：表示竞价实例付费。</li>
     * @param SystemDisk $SystemDisk 实例系统盘信息。
     * @param array $DataDisks 实例数据盘信息。只包含随实例购买的数据盘。
     * @param InternetAccessible $InternetAccessible 实例带宽信息。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 实例所属虚拟私有网络信息。
     * @param string $ImageId 生产实例所使用的镜像`ID`。
     * @param array $SecurityGroupIds 实例所属安全组。该参数可以通过调用 [DescribeSecurityGroups](https://cloud.tencent.com/document/api/215/15808) 的返回值中的sgId字段来获取。
     * @param LoginSettings $LoginSettings 实例登录设置。目前只返回实例所关联的密钥。
     * @param string $CamRoleName CAM角色名。
     * @param string $HpcClusterId 高性能计算集群`ID`。
     * @param integer $InstanceCount 购买实例数量。
     * @param EnhancedService $EnhancedService 增强服务。
     * @param string $UserData 提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。
     * @param array $DisasterRecoverGroupIds 置放群组ID，仅支持指定一个。
     * @param ActionTimer $ActionTimer 定时任务。通过该参数可以为实例指定定时任务，目前仅支持定时销毁。
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions 实例的市场相关选项，如竞价实例相关参数，若指定实例的付费模式为竞价付费则该参数必传。
     * @param string $HostName 云服务器的主机名。
     * @param string $ClientToken 用于保证请求幂等性的字符串。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的云服务器、云硬盘实例。
     * @param boolean $DisableApiTermination 实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：

true：表示开启实例保护，不允许通过api接口删除实例
false：表示关闭实例保护，允许通过api接口删除实例

默认取值：false。
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ActionTimer",$param) and $param["ActionTimer"] !== null) {
            $this->ActionTimer = new ActionTimer();
            $this->ActionTimer->deserialize($param["ActionTimer"]);
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }
    }
}
