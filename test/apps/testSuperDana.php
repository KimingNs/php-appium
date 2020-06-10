<?php
require_once('../../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../../vendor/appium/php-client/test/functional/android/appium_tests.php');


//var_dump($test->isAppInstalled('com.superdana.dana.id'));//检查app应用是否安装
//$test->openNotifications();//打开通知栏
//$test->keyEvent(4);//back键
//$test->keyEvent(82);//menu键
//$test->startActivity(array("appPackage" => "com.mumu.store",
//    "appActivity" => ".search.LauncherSearchActivity"));
//$res2 = $test->byId('com.mumu.store:id/tv_search')->value('哈哈哈哈哈哈');//找到文本框输入内容
//$test->backgroundApp(4);//home键 4s

class testSuperDana
{
    function getConnectedBefore()
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
    }

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

    function getConnectedAfter()
    {
        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));
        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用
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
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
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

    function SuperDanaText1()
    {

        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));

        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

        $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();

        sleep(3);

        $test->byXPath("//android.widget.TextView[@text='基础信息']")->click();

        sleep(3);
        //由后面向前定位同级元素
        $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('ztm');
        //由前面向后面定位同级元素
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('006285333888888');

        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('9999999999999999');

        //教育
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[5]")->click();
        sleep(1);
        $test->swipe(401, 1080, 392, 1384);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //贷款用途
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $test->swipe(401, 1080, 392, 1384);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //每月收入
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[10]")->click();
        sleep(1);
        $test->swipe(401, 1080, 392, 1384);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

//    宗教信仰
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[13]")->click();
        sleep(1);
        $test->swipe(401, 1080, 392, 1384);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //身份证正面
        $test->initiateTouchAction()->press(array('x' => 194, 'y' => 996))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 586, 'y' => 1065))->release()->perform();
        sleep(3);
        $test->byId('com.superdana.dana.id:id/iv_camera_take')->click();
        $test->byId('com.superdana.dana.id:id/iv_camera_result_ok')->click();
        sleep(3);

        //身份证反面
        $test->initiateTouchAction()->press(array('x' => 594, 'y' => 996))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 577, 'y' => 1435))->release()->perform();
        sleep(3);
        $test->initiateTouchAction()->press(array('x' => 396, 'y' => 82))->release()->perform();
        $test->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //确定
        $test->initiateTouchAction()->press(array('x' => 408, 'y' => 1187))->release()->perform();
//        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[19]")->click();
    }

    function SuperDanaText2()
    {
        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));

        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

        $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $test->byXPath("//android.widget.TextView[@text='用户信息']")->click();
        sleep(3);

        $test->initiateTouchAction()->press(array('x' => 757, 'y' => 176))->release()->perform();

        $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abc');
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('aaa');
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ccc');

        //居住地址
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //居住详细地址
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('qqqqwwwweeeerrrrttttyyyy');

        //居住时间
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(2);
        $test->swipe(404, 1079, 404, 1187);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1002))->release()->perform();

        //电子邮箱
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[4]")->value('123456789@qq.com');

        //出生日期
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[14]")->click();
        sleep(1);
        $test->swipe(136, 1047, 136, 1397);
        sleep(1);
        $test->swipe(404, 1222, 404, 1046);
        sleep(1);
        $test->swipe(676, 1396, 676, 1047);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 721, 'y' => 971))->release()->perform();

        sleep(1);
        $test->swipe(368, 1413, 342, 131);

        //婚姻状态
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[1]")->click();
        sleep(1);
        $test->swipe(404, 1181, 404, 1240);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();
        //子女数量
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $test->swipe(405, 1236, 405, 1356);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //工作职位
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $test->swipe(402, 1416, 402, 1100);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //公司名称
        $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abcdefghijklmnopqrstuvwxyz');
        //公司电话
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('027123456789');

        //公司地址
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //公司详细地址
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('asdfghjklzxcvbnm');

        //社保卡图片
        $test->initiateTouchAction()->press(array('x' => 212, 'y' => 987))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $test->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $test->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //家庭卡页面
        $test->initiateTouchAction()->press(array('x' => 597, 'y' => 1008))->release()->perform();
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $test->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $test->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //提交
        $test->initiateTouchAction()->press(array('x' => 410, 'y' => 1196))->release()->perform();
    }

    function SuperDanaText3()
    {
        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));

        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

        $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $test->byXPath("//android.widget.TextView[@text='联系人信息']")->click();
        sleep(3);

        //紧急联系人1
        $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('zzz');
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('12345678910111');
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[3]")->click();
        sleep(1);
        $test->swipe(402, 1240, 402, 1200);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();

        //紧急联系人2
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('xxx');
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('12345678910000');
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(1);
        $test->swipe(402, 1240, 402, 1200);
        $test->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();

        //确认
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();
    }

    function SuperDanaText5()
    {
        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));

        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用

        $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $test->byXPath("//android.widget.TextView[@text='绑定银行卡']")->click();
        sleep(3);

        $test->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('1111222233334444');
        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('ztm');
        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[3]")->click();
        sleep(1);
        $test->swipe(402, 1240, 402, 1040);
        sleep(1);
        $test->initiateTouchAction()->press(array('x' => 712, 'y' => 1004))->release()->perform();
        sleep(1);

        $test->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ztm');

        $test->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();
    }

    function SuperDanaText6()
    {
        $test = new AppiumTests();
        $test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $test->setDesiredCapabilities(
            array(
                'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
                'platformVersion' => '6.0.1',//手机操作系统版本
                'platformName' => 'Android',//设置手机操作系统
                'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
                "newCommandTimeout" => 120,//设置命令超时时间，单位s
                'deviceReadyTimeout' => 10,//设置等待超时时间，单位s
                'androidDeviceReadyTimeout' => 30,//等待设备在启动应用后准备就绪的超时时间，单位s
                'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
                'resetKeyboard' => 'true'
            ));

        $test->startActivity(array("appPackage" => "com.superdana.dana.id",
            "appActivity" => "com.tp.money.hut.MainActivity"));//打开app应用


        $test->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $test->byXPath("//android.widget.TextView[@text='确认合同']")->click();
        sleep(3);

        $test->initiateTouchAction()->press(array('x' => 38, 'y' => 496))->release()->perform();
        $test->initiateTouchAction()->press(array('x' => 392, 'y' => 627))->release()->perform();
    }

}

$test = new testSuperDana();
$test->SuperDanaText6();
