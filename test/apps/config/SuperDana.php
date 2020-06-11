<?php
$appPackage = 'com.superdana.dana.id';
$appActivityBefore = 'com.tp.money.hut.XieyiActivity';
$appActivityAfter = 'com.tp.money.hut.MainActivity';
$config = array(
    'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
    'platformVersion' => '6.0.1',//手机操作系统版本
    'platformName' => 'Android',//设置手机操作系统
    'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
    "newCommandTimeout" => 120,//设置命令超时时间，单位s
    'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
    'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
    'unicodeKeyboard' => true, //这下面两个是输入中文的设置支持
    'resetKeyboard' => true
);