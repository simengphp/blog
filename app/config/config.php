<?php
/**
 * create by simengphp
 * website www.simengphp.com
 * QQ 476319748 (备注博客)
 * Date: 2017/11/23
 * Time: 11:23
 */
return [
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => false,
    //验证码配置
    'captcha'  => [
        // 验证码字符集合
        'codeSet'  => '1234567890',
        // 验证码字体大小(px)
        'fontSize' => 25,
        // 是否画混淆曲线
        'useCurve' => false,
        // 验证码图片高度
        'imageH'   => 50,
        // 验证码图片宽度
        'imageW'   => 200,
        // 验证码位数
        'length'   => 4,
        // 验证成功后是否重置
        'reset'    => true
    ],

];