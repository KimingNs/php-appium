<?php
require_once('../../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../../vendor/appium/php-client/test/functional/android/appium_tests.php');


//var_dump($test->isAppInstalled('com.superdana.dana.id'));//检查app应用是否安装
//$test->openNotifications();//打开通知栏
//$test->keyEvent(3);//home键
//$test->keyEvent(4);//back键
//$test->keyEvent(82);//menu键
//$test->startActivity(array("appPackage" => "com.mumu.store",
//    "appActivity" => ".search.LauncherSearchActivity"));
//$res2 = $test->byId('com.mumu.store:id/tv_search')->value('哈哈哈哈哈哈');//找到文本框输入内容

function SuperDanaXy()
{
    $test = new AppiumTests();
    $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
    $test->setDesiredCapabilities(
        array(
            'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
            'platformVersion' => '6.0.1',//手机操作系统版本
            'platformName' => 'Android',//设置手机操作系统
            'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
//            'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
//            'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
            "newCommandTimeout" => 120,//设置命令超时时间，单位s

//    'language' => '',//设置模拟器语言
//    'locale' => '',//设置区域
//    'udid' => '',//设置连接的物理设备的唯一标识
//    'fullReset' => '',//android通过卸载来重置应用状态
//    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
//    'autoWebview' => '',//直接转换到WebView上下文，默认为false
//    'noRest' => '',//不在会话前重置应用状态，默认为false

            //android特有
//        'appPackage' => 'com.superdana.dana.id',//设置启动的app包名
//        'appActivity' => 'com.tp.money.hut.XieyiActivity',//app界面名
//            'appWaitActivity' => '.Settings',//想要等待启动的app界面名
            'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
//    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
//    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
//    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
            'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
//    'androidDeviceSocket' => '',//开发工具的socket名称
//            'avd' => '',//需要启动的avd（安卓虚拟设备）名称
//            'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
//            'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
//    'useKeystore' => '',//自定义keystore来对apk进行重签名，默认为false
//    'keystorePath' => '',//自定义keystore的路径
//    'keystorePassword' => '',//自定义keystore的密码
//    'keyAlias' => '',//key的别名
//    'keyPassword' => '',//key的密码
//    'chromedriverExecutable' => '',//webdriver可执行文件的绝对路径
//    'autoWebviewTimeout' => '',//等待webview上下文激活的时间，单位ms，默认为2000
//    'intentAction' => '',//用于启动activity的intent action，默认值：android.intent.action.MAIN
//    'intentCategory' => '',//用于启动activity的intent category，默认值：android.intent.category.LAUNCHER
//    'intentFlags' => '',//用于启动activity的标识（flags），默认值：0x10200000
//    'optionalIntentArguments' => '',//用于启动activity的额外intent参数
//    'stopAppOnReset' => '',//在使用adb启动应用前停止被测应用的进程，默认为true
//    'noSign' => '',//跳过检查和对应用debug签名的步骤，默认为false
//    'ignoreUnimportantViews' => '',//调用uiautomator的函数setCompressedLayoutHierarchy(),默认为false

            'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
            'resetKeyboard' => 'true'
        ));

    $test->startActivity(array("appPackage" => "com.superdana.dana.id",
        "appActivity" => "com.tp.money.hut.XieyiActivity"));//打开app应用
    //有两个同意协议
    $test->byId('com.superdana.dana.id:id/xycheck')->click();

    $test->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

    $test->byId('com.superdana.dana.id:id/xycheck')->click();

    $test->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

    $test->byXPath("//android.widget.TextView[@text='lzikan']")->click();
}

function SuperDanaLoginin()
{
    $test = new AppiumTests();
    $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
    $test->setDesiredCapabilities(
        array(
            'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
            'platformVersion' => '6.0.1',//手机操作系统版本
            'platformName' => 'Android',//设置手机操作系统
            'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
//            'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
//            'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
            "newCommandTimeout" => 120,//设置命令超时时间，单位s

//    'language' => '',//设置模拟器语言
//    'locale' => '',//设置区域
//    'udid' => '',//设置连接的物理设备的唯一标识
//    'fullReset' => '',//android通过卸载来重置应用状态
//    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
//    'autoWebview' => '',//直接转换到WebView上下文，默认为false
//    'noRest' => '',//不在会话前重置应用状态，默认为false

            //android特有
//        'appPackage' => 'com.superdana.dana.id',//设置启动的app包名
//        'appActivity' => 'com.tp.money.hut.XieyiActivity',//app界面名
//            'appWaitActivity' => '.Settings',//想要等待启动的app界面名
            'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
//    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
//    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
//    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
            'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
//    'androidDeviceSocket' => '',//开发工具的socket名称
//            'avd' => '',//需要启动的avd（安卓虚拟设备）名称
//            'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
//            'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
//    'useKeystore' => '',//自定义keystore来对apk进行重签名，默认为false
//    'keystorePath' => '',//自定义keystore的路径
//    'keystorePassword' => '',//自定义keystore的密码
//    'keyAlias' => '',//key的别名
//    'keyPassword' => '',//key的密码
//    'chromedriverExecutable' => '',//webdriver可执行文件的绝对路径
//    'autoWebviewTimeout' => '',//等待webview上下文激活的时间，单位ms，默认为2000
//    'intentAction' => '',//用于启动activity的intent action，默认值：android.intent.action.MAIN
//    'intentCategory' => '',//用于启动activity的intent category，默认值：android.intent.category.LAUNCHER
//    'intentFlags' => '',//用于启动activity的标识（flags），默认值：0x10200000
//    'optionalIntentArguments' => '',//用于启动activity的额外intent参数
//    'stopAppOnReset' => '',//在使用adb启动应用前停止被测应用的进程，默认为true
//    'noSign' => '',//跳过检查和对应用debug签名的步骤，默认为false
//    'ignoreUnimportantViews' => '',//调用uiautomator的函数setCompressedLayoutHierarchy(),默认为false

            'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
            'resetKeyboard' => 'true'
        ));

    //SuperDana App的界面名更改了
    $test->startActivity(array("appPackage" => "com.superdana.dana.id",
        "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

    //无同意协议
    $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();

    $test->byId('com.superdana.dana.id:id/tv_option_loan')->click();

    $test->byId('com.superdana.dana.id:id/register_phone')->value('085223801076');

    $test->byId('com.superdana.dana.id:id/get_code_btn_ok')->click();
}

function SuperDanaText()
{
    $test = new AppiumTests();
    $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
    $test->setDesiredCapabilities(
        array(
            'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
            'platformVersion' => '6.0.1',//手机操作系统版本
            'platformName' => 'Android',//设置手机操作系统
            'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
//            'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
//            'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
            "newCommandTimeout" => 120,//设置命令超时时间，单位s

//    'language' => '',//设置模拟器语言
//    'locale' => '',//设置区域
//    'udid' => '',//设置连接的物理设备的唯一标识
//    'fullReset' => '',//android通过卸载来重置应用状态
//    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
//    'autoWebview' => '',//直接转换到WebView上下文，默认为false
//    'noRest' => '',//不在会话前重置应用状态，默认为false

            //android特有
//        'appPackage' => 'com.superdana.dana.id',//设置启动的app包名
//        'appActivity' => 'com.tp.money.hut.XieyiActivity',//app界面名
//            'appWaitActivity' => '.Settings',//想要等待启动的app界面名
            'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
//    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
//    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
//    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
            'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
//    'androidDeviceSocket' => '',//开发工具的socket名称
//            'avd' => '',//需要启动的avd（安卓虚拟设备）名称
//            'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
//            'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
//    'useKeystore' => '',//自定义keystore来对apk进行重签名，默认为false
//    'keystorePath' => '',//自定义keystore的路径
//    'keystorePassword' => '',//自定义keystore的密码
//    'keyAlias' => '',//key的别名
//    'keyPassword' => '',//key的密码
//    'chromedriverExecutable' => '',//webdriver可执行文件的绝对路径
//    'autoWebviewTimeout' => '',//等待webview上下文激活的时间，单位ms，默认为2000
//    'intentAction' => '',//用于启动activity的intent action，默认值：android.intent.action.MAIN
//    'intentCategory' => '',//用于启动activity的intent category，默认值：android.intent.category.LAUNCHER
//    'intentFlags' => '',//用于启动activity的标识（flags），默认值：0x10200000
//    'optionalIntentArguments' => '',//用于启动activity的额外intent参数
//    'stopAppOnReset' => '',//在使用adb启动应用前停止被测应用的进程，默认为true
//    'noSign' => '',//跳过检查和对应用debug签名的步骤，默认为false
//    'ignoreUnimportantViews' => '',//调用uiautomator的函数setCompressedLayoutHierarchy(),默认为false

            'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
            'resetKeyboard' => 'true'
        ));

    //SuperDana App的界面名更改了
    $test->startActivity(array("appPackage" => "com.superdana.dana.id",
        "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

    $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();

    sleep(5);

    $test->byXPath("//android.widget.TextView[@text='基础信息']")->click();

    sleep(5);
    //由后面向前定位同级元素
    $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('ztm');
    //由前面向后面定位同级元素
    $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('006285333888888');

    $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('9999999999999999');

    //教育
    $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[5]")->click();
    sleep(2);
    $test->swipe(401, 1080, 392, 1384);
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
    sleep(5);

    //贷款用途
    $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
    sleep(2);
    $test->swipe(401, 1080, 392, 1384);
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
    sleep(5);

    //每月收入
    $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[10]")->click();
    sleep(2);
    $test->swipe(401, 1080, 392, 1384);
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
    sleep(5);

//    宗教信仰
    $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[13]")->click();
    sleep(2);
    $test->swipe(401, 1080, 392, 1384);
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
    sleep(5);

    $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('');
    $test->initiateTouchAction()->press(array('x' => 194, 'y' => 996))->release()->perform();
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
    sleep(2);
    $test->initiateTouchAction()->press(array('x' => 586, 'y' => 1065))->release()->perform();
    sleep(2);
    $test->byId('com.superdana.dana.id:id/iv_camera_take')->click();

    $test->byId('com.superdana.dana.id:id/iv_camera_result_ok')->click();

    sleep(5);

//    $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[30]")->click();
    $test->initiateTouchAction()->press(array('x' => 395, 'y' => 1190))->release()->perform();
}

function testScroll()
{
    $test = new AppiumTests();
    $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
    $test->setDesiredCapabilities(
        array(
            'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
            'platformVersion' => '6.0.1',//手机操作系统版本
            'platformName' => 'Android',//设置手机操作系统
            'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
            'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
            'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
            "newCommandTimeout" => '120',//设置命令超时时间，单位s

//    'language' => '',//设置模拟器语言
//    'locale' => '',//设置区域
//    'udid' => '',//设置连接的物理设备的唯一标识
//    'fullReset' => '',//android通过卸载来重置应用状态
//    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
//    'autoWebview' => '',//直接转换到WebView上下文，默认为false
//    'noRest' => '',//不在会话前重置应用状态，默认为false

            //android特有
//            'appPackage' => 'com.android.settings',//设置启动的app包名
//            'appActivity' => '.Settings',//app界面名
//            'appWaitActivity' => '.Settings',//想要等待启动的app界面名
            'deviceReadyTimeout' => '10',//设置等待超时时间，单位s
//    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
//    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
//    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
            'androidDeviceReadyTimeout' => '30',//等待设备在启动应用后准备就绪的超时时间，单位s
//    'androidDeviceSocket' => '',//开发工具的socket名称
            'avd' => '',//需要启动的avd（安卓虚拟设备）名称
            'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
            'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
//    'useKeystore' => '',//自定义keystore来对apk进行重签名，默认为false
//    'keystorePath' => '',//自定义keystore的路径
//    'keystorePassword' => '',//自定义keystore的密码
//    'keyAlias' => '',//key的别名
//    'keyPassword' => '',//key的密码
//    'chromedriverExecutable' => '',//webdriver可执行文件的绝对路径
//    'autoWebviewTimeout' => '',//等待webview上下文激活的时间，单位ms，默认为2000
//    'intentAction' => '',//用于启动activity的intent action，默认值：android.intent.action.MAIN
//    'intentCategory' => '',//用于启动activity的intent category，默认值：android.intent.category.LAUNCHER
//    'intentFlags' => '',//用于启动activity的标识（flags），默认值：0x10200000
//    'optionalIntentArguments' => '',//用于启动activity的额外intent参数
//    'stopAppOnReset' => '',//在使用adb启动应用前停止被测应用的进程，默认为true
//    'noSign' => '',//跳过检查和对应用debug签名的步骤，默认为false
//    'ignoreUnimportantViews' => '',//调用uiautomator的函数setCompressedLayoutHierarchy(),默认为false

            'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
            'resetKeyboard' => 'true'
        ));

    $test->startActivity(array("appPackage" => "com.android.settings",
        "appActivity" => ".Settings"));//打开app应用

    $test->swipe(619, 956, 619, 273);

    $test->tap(1, 236, 1329);
}

SuperDanaXy();
SuperDanaLoginin();
SuperDanaText();