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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAuditName() 获取跟踪集名称。3-128字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9，下划线 _。
 * @method void setAuditName(string $AuditName) 设置跟踪集名称。3-128字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9，下划线 _。
 * @method string getCosBucketName() 获取cos的存储桶名称。仅支持小写英文字母和数字即[a-z，0-9]、中划线“-”及其组合。用户自定义的字符串支持1 - 40个字符。存储桶命名不能以“-”开头或结尾。如果不是新创建的存储桶，云审计不会去校验该存储桶是否真的存在，请谨慎填写，避免日志投递不成功，导致您的数据丢失。
 * @method void setCosBucketName(string $CosBucketName) 设置cos的存储桶名称。仅支持小写英文字母和数字即[a-z，0-9]、中划线“-”及其组合。用户自定义的字符串支持1 - 40个字符。存储桶命名不能以“-”开头或结尾。如果不是新创建的存储桶，云审计不会去校验该存储桶是否真的存在，请谨慎填写，避免日志投递不成功，导致您的数据丢失。
 * @method string getCosRegion() 获取cos地域。目前支持的地域可以使用ListCosEnableRegion来获取。
 * @method void setCosRegion(string $CosRegion) 设置cos地域。目前支持的地域可以使用ListCosEnableRegion来获取。
 * @method integer getIsCreateNewBucket() 获取是否创建新的cos存储桶。1：是，0：否。
 * @method void setIsCreateNewBucket(integer $IsCreateNewBucket) 设置是否创建新的cos存储桶。1：是，0：否。
 * @method integer getIsEnableCmqNotify() 获取是否开启cmq消息通知。1：是，0：否。目前仅支持cmq的队列服务。如果开启cmq消息通知服务，云审计会将您的日志内容实时投递到您指定地域的指定队列中。
 * @method void setIsEnableCmqNotify(integer $IsEnableCmqNotify) 设置是否开启cmq消息通知。1：是，0：否。目前仅支持cmq的队列服务。如果开启cmq消息通知服务，云审计会将您的日志内容实时投递到您指定地域的指定队列中。
 * @method integer getReadWriteAttribute() 获取管理事件的读写属性。1：只读，2：只写，3：全部。
 * @method void setReadWriteAttribute(integer $ReadWriteAttribute) 设置管理事件的读写属性。1：只读，2：只写，3：全部。
 * @method string getCmqQueueName() 获取队列名称。队列名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。如果IsEnableCmqNotify值是1的话，此值属于必填字段。如果不是新创建的队列，云审计不会去校验该队列是否真的存在，请谨慎填写，避免日志通知不成功，导致您的数据丢失。
 * @method void setCmqQueueName(string $CmqQueueName) 设置队列名称。队列名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。如果IsEnableCmqNotify值是1的话，此值属于必填字段。如果不是新创建的队列，云审计不会去校验该队列是否真的存在，请谨慎填写，避免日志通知不成功，导致您的数据丢失。
 * @method string getCmqRegion() 获取队列所在的地域。可以通过ListCmqEnableRegion获取支持的cmq地域。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
 * @method void setCmqRegion(string $CmqRegion) 设置队列所在的地域。可以通过ListCmqEnableRegion获取支持的cmq地域。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
 * @method integer getIsCreateNewQueue() 获取是否创建新的队列。1：是，0：否。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
 * @method void setIsCreateNewQueue(integer $IsCreateNewQueue) 设置是否创建新的队列。1：是，0：否。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
 * @method string getLogFilePrefix() 获取日志文件前缀。3-40个字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9。可以不填，默认以账号ID作为日志前缀。
 * @method void setLogFilePrefix(string $LogFilePrefix) 设置日志文件前缀。3-40个字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9。可以不填，默认以账号ID作为日志前缀。
 */

/**
 *CreateAudit请求参数结构体
 */
class CreateAuditRequest extends AbstractModel
{
    /**
     * @var string 跟踪集名称。3-128字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9，下划线 _。
     */
    public $AuditName;

    /**
     * @var string cos的存储桶名称。仅支持小写英文字母和数字即[a-z，0-9]、中划线“-”及其组合。用户自定义的字符串支持1 - 40个字符。存储桶命名不能以“-”开头或结尾。如果不是新创建的存储桶，云审计不会去校验该存储桶是否真的存在，请谨慎填写，避免日志投递不成功，导致您的数据丢失。
     */
    public $CosBucketName;

    /**
     * @var string cos地域。目前支持的地域可以使用ListCosEnableRegion来获取。
     */
    public $CosRegion;

    /**
     * @var integer 是否创建新的cos存储桶。1：是，0：否。
     */
    public $IsCreateNewBucket;

    /**
     * @var integer 是否开启cmq消息通知。1：是，0：否。目前仅支持cmq的队列服务。如果开启cmq消息通知服务，云审计会将您的日志内容实时投递到您指定地域的指定队列中。
     */
    public $IsEnableCmqNotify;

    /**
     * @var integer 管理事件的读写属性。1：只读，2：只写，3：全部。
     */
    public $ReadWriteAttribute;

    /**
     * @var string 队列名称。队列名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。如果IsEnableCmqNotify值是1的话，此值属于必填字段。如果不是新创建的队列，云审计不会去校验该队列是否真的存在，请谨慎填写，避免日志通知不成功，导致您的数据丢失。
     */
    public $CmqQueueName;

    /**
     * @var string 队列所在的地域。可以通过ListCmqEnableRegion获取支持的cmq地域。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
     */
    public $CmqRegion;

    /**
     * @var integer 是否创建新的队列。1：是，0：否。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
     */
    public $IsCreateNewQueue;

    /**
     * @var string 日志文件前缀。3-40个字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9。可以不填，默认以账号ID作为日志前缀。
     */
    public $LogFilePrefix;
    /**
     * @param string $AuditName 跟踪集名称。3-128字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9，下划线 _。
     * @param string $CosBucketName cos的存储桶名称。仅支持小写英文字母和数字即[a-z，0-9]、中划线“-”及其组合。用户自定义的字符串支持1 - 40个字符。存储桶命名不能以“-”开头或结尾。如果不是新创建的存储桶，云审计不会去校验该存储桶是否真的存在，请谨慎填写，避免日志投递不成功，导致您的数据丢失。
     * @param string $CosRegion cos地域。目前支持的地域可以使用ListCosEnableRegion来获取。
     * @param integer $IsCreateNewBucket 是否创建新的cos存储桶。1：是，0：否。
     * @param integer $IsEnableCmqNotify 是否开启cmq消息通知。1：是，0：否。目前仅支持cmq的队列服务。如果开启cmq消息通知服务，云审计会将您的日志内容实时投递到您指定地域的指定队列中。
     * @param integer $ReadWriteAttribute 管理事件的读写属性。1：只读，2：只写，3：全部。
     * @param string $CmqQueueName 队列名称。队列名称是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)。如果IsEnableCmqNotify值是1的话，此值属于必填字段。如果不是新创建的队列，云审计不会去校验该队列是否真的存在，请谨慎填写，避免日志通知不成功，导致您的数据丢失。
     * @param string $CmqRegion 队列所在的地域。可以通过ListCmqEnableRegion获取支持的cmq地域。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
     * @param integer $IsCreateNewQueue 是否创建新的队列。1：是，0：否。如果IsEnableCmqNotify值是1的话，此值属于必填字段。
     * @param string $LogFilePrefix 日志文件前缀。3-40个字符，只能包含 ASCII 编码字母 a-z，A-Z，数字 0-9。可以不填，默认以账号ID作为日志前缀。
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
        if (array_key_exists("AuditName",$param) and $param["AuditName"] !== null) {
            $this->AuditName = $param["AuditName"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("IsCreateNewBucket",$param) and $param["IsCreateNewBucket"] !== null) {
            $this->IsCreateNewBucket = $param["IsCreateNewBucket"];
        }

        if (array_key_exists("IsEnableCmqNotify",$param) and $param["IsEnableCmqNotify"] !== null) {
            $this->IsEnableCmqNotify = $param["IsEnableCmqNotify"];
        }

        if (array_key_exists("ReadWriteAttribute",$param) and $param["ReadWriteAttribute"] !== null) {
            $this->ReadWriteAttribute = $param["ReadWriteAttribute"];
        }

        if (array_key_exists("CmqQueueName",$param) and $param["CmqQueueName"] !== null) {
            $this->CmqQueueName = $param["CmqQueueName"];
        }

        if (array_key_exists("CmqRegion",$param) and $param["CmqRegion"] !== null) {
            $this->CmqRegion = $param["CmqRegion"];
        }

        if (array_key_exists("IsCreateNewQueue",$param) and $param["IsCreateNewQueue"] !== null) {
            $this->IsCreateNewQueue = $param["IsCreateNewQueue"];
        }

        if (array_key_exists("LogFilePrefix",$param) and $param["LogFilePrefix"] !== null) {
            $this->LogFilePrefix = $param["LogFilePrefix"];
        }
    }
}
