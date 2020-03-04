<?php
function getArr()
{
    return array(
        //3 执行操作
        'approved'                  => array(
            'id'                        => array('name' => 'id', 'require' => true, 'min' => 1, 'type' => 'int'), //商户id
            'status'                    => array('name' => 'status', 'require' => true, 'min' => 1, 'type' => 'int'), //操作方式
            'reason'                    => array('name' => 'reason', 'require' => true, 'min' => 1), //操作原因
            'serviceTel'                => array('name' => 'serviceTel', 'require' => false), //服务人员电话（派单时传递）
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                    => true
        ),
        //4、查询商户信息列表
        'getUserInfoList'           => array(
            'phone'                       => array('name' => 'phone', 'require' => false), //联系人手机号
            'enterpriseName'              => array('name' => 'enterpriseName', 'require' => false), //商户名称
            'source'                      => array('name' => 'source', 'require' => false), //进件来源
            'status'                      => array('name' => 'status', 'require' => false), //操作状态
            'pageSize'                    => array('name' => 'pageSize', 'require' => true, 'min' => 1, 'type' => 'int'), //每页条数
            'pageNum'                     => array('name' => 'pageNum', 'require' => true, 'min' => 1, 'type' => 'int'), //页数
            'taxCombinePlan'              => array('name' => 'taxCombinePlan', 'require' => false, 'type' => 'int'), //是否税务共建计划
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                      => true
        ),
        //商户编辑（获取商户明细信息）
        'getUserDetail'               => array(
            'id'                         => array('name' => 'id', 'require' => true, 'min' => 1, 'type' => 'int'), //商户id
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                     => true
        ),
        //注册
        'register'                    => array(
            'id'                         => array('name' => 'id', 'require' => true, 'min' => 1, 'type' => 'int'), //商户id
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                     => true
        ),
        //获取营业执照ocr识别
        'getOCRInfo'                  => array(
            'url'                       => array('name' => 'url', 'require' => true, 'min' => 1), //图片链接
        ),
        //进件相关操作
        'incomingProcess'             => array(
            'userId'                        => array('name' => 'userId', 'require' => true), //商户id
            'materialPics'                  => array('name' => 'materialPics', 'require' => false), //材料汇总图片链接
            'appointTime'                   => array('name' => 'appointTime', 'require' => false), //预约上门时间
            'expressNo'                     => array('name' => 'expressNo', 'require' => false), //快递单号
            'expressCom'                    => array('name' => 'expressCom', 'require' => false), //快递公司名称
            'status'                        => array('name' => 'status', 'require' => true), //进件变更状态
            'isAgent'                       => array('name' => 'isAgent', 'require' => false), //是否购买税务代办服务
            'agentPrice'                    => array('name' => 'agentPrice', 'require' => false), //选择二次代办税务费用
            'specialManagerTel'             => array('name' => 'specialManagerTel', 'require' => false), //专管员联系方式
            'specialManagerName'            => array('name' => 'specialManagerName', 'require' => false), //专管员名称
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                        => true

        ),
        //获取税务服务操作信息
        'getTaxServiceProcess'       => array(
            'taxpayerNum'                   => array('name' => 'taxpayerNum', 'require' => true), //纳税人识别号
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                        => true
        ),
        //获取价格信息页面选项数据信息
        'getTaxServiceInfo'          => array(
            'taxpayerNum'                  => array('name' => 'taxpayerNum', 'require' => true), //纳税人识别号
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                       => true
        ),
        //开票服务类型购买逻辑
        'purchaseServiceSheets'      => array(
            'shopId'                      => array('name' => 'shopId', 'require' => true), //商户id
            'serviceType'                 => array('name' => 'serviceType', 'require' => true), //选择购买的开票服务类型
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                      => true
        ),
        //通过商户手机号获取商米账号(存在则返回，不存在则注册)
        'getSunmiId'                  => array(
            'shopId'                     => array('name' => 'shopId', 'require' => true), //商户id
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                     => true
        ),
        //通过手机号或者进件来源id获取商户信息
        'getUserInfoBySourceId'      => array(
            'phone'                     => array('name' => 'phone', 'require' => 'true'), //手机号码
            'sourceId'                  => array('name' => 'sourceId', 'require' => false), //进件来源id
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                    => true
        ),
        //同步商户进件信息到商户组
        'sysnUserInfo'              => array(
            'shopId'                    => array('name' => 'shopId', 'require' => true), //商户id
        ),
        //确认当前手机号是否与进件来源id对应
        'checkPhoneMatch'           => array(
            'sourceId'                  => array('name' => 'sourceId', 'require' => true), //进件来源id
            'phone'                     => array('name' => 'phone', 'require' => true), //手机号
            'adminId'                    => array('name' => 'adminId', 'require' => true),
            'verify'                    => true
        ),
        //预约上门时间选择接口
        'getAppiontTime'            => array(
            'time'                      => array('name' => 'time', 'require' => true),
        ),
        //更新商品税务编码
        'updateGoodsCode'           => array(),
        //校验纳税人识别号是否重复
        'checkTaxPayerNum'          => array(
            'taxpayerNum'               => array('name' => 'taxpayerNum', 'require' => true),
            'adminId'                   => array('name' => 'adminId', 'require' => true),
            'verify'                    => true
        ),
        //获取服务信息配置
        'getTaxServiceConfig'       => array(),
    );
}
