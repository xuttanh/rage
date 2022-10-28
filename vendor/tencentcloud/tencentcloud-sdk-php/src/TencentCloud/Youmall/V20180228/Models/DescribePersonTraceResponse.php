<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getMallId() 获取卖场系统编码
 * @method void setMallId(string $MallId) 设置卖场系统编码
 * @method string getMallCode() 获取卖场用户编码
 * @method void setMallCode(string $MallCode) 设置卖场用户编码
 * @method string getPersonId() 获取客户编码
 * @method void setPersonId(string $PersonId) 设置客户编码
 * @method array getTraceRouteSet() 获取轨迹列表
 * @method void setTraceRouteSet(array $TraceRouteSet) 设置轨迹列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribePersonTrace返回参数结构体
 */
class DescribePersonTraceResponse extends AbstractModel
{
    /**
     * @var string 卖场系统编码
     */
    public $MallId;

    /**
     * @var string 卖场用户编码
     */
    public $MallCode;

    /**
     * @var string 客户编码
     */
    public $PersonId;

    /**
     * @var array 轨迹列表
     */
    public $TraceRouteSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param string $MallId 卖场系统编码
     * @param string $MallCode 卖场用户编码
     * @param string $PersonId 客户编码
     * @param array $TraceRouteSet 轨迹列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("MallCode",$param) and $param["MallCode"] !== null) {
            $this->MallCode = $param["MallCode"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("TraceRouteSet",$param) and $param["TraceRouteSet"] !== null) {
            $this->TraceRouteSet = [];
            foreach ($param["TraceRouteSet"] as $key => $value){
                $obj = new PersonTraceRoute();
                $obj->deserialize($value);
                array_push($this->TraceRouteSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
