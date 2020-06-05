<?php
require_once('../../vendor/autoload.php');

class MySuperTests extends PHPUnit_Extensions_AppiumTestCase
{
    public static $browsers = array(
        array(
            'local' => true,
            'port' => 4723,
            'browserName' => '',
            'desiredCapabilities' => array(
                'app' => APP_PATH
            )
        )
    );

    public function testStuff()
    {
        $element = $this->byAccessibilityId('Element on screen');

        $this->assertInstanceOf('PHPUnit_Extensions_AppiumTestCase_Element', $element);
    }
}

$app = new MySuperTests();
$app->testStuff();


//$test->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost

//$test->setDesiredCapabilities(array(
//    'automationName' => 'Appium',//设置自动化测试引擎，默认为appium
//    'platformVersion' => '6.0.1',//手机操作系统版本
//    'platformName' => 'Android',//设置手机操作系统
//    'deviceName' => '127.0.0.1:7555', //使用的手机模型或模拟器类型
//    'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
//    'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
//    "newCommandTimeout" => '120',//设置命令超时时间，单位s
//
////    'language' => '',//设置模拟器语言
////    'locale' => '',//设置区域
////    'udid' => '',//设置连接的物理设备的唯一标识
////    'fullReset' => '',//android通过卸载来重置应用状态
////    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
////    'autoWebview' => '',//直接转换到WebView上下文，默认为false
////    'noRest' => '',//不在会话前重置应用状态，默认为false
//
//    //android特有
//    'appPackage' => 'com.android.settings',//设置启动的app包名
//    'appActivity' => '.Settings',//app界面名
//    'appWaitActivity' => '.Settings',//想要等待启动的app界面名
//    'deviceReadyTimeout' => '5',//设置等待超时时间，单位s
////    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
////    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
////    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
//    'androidDeviceReadyTimeout' => '30',//等待设备在启动应用后准备就绪的超时时间，单位s
////    'androidDeviceSocket' => '',//开发工具的socket名称
//    'avd' => '',//需要启动的avd（安卓虚拟设备）名称
//    'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
//    'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
////    'useKeystore' => '',//自定义keystore来对apk进行重签名，默认为false
////    'keystorePath' => '',//自定义keystore的路径
////    'keystorePassword' => '',//自定义keystore的密码
////    'keyAlias' => '',//key的别名
////    'keyPassword' => '',//key的密码
////    'chromedriverExecutable' => '',//webdriver可执行文件的绝对路径
////    'autoWebviewTimeout' => '',//等待webview上下文激活的时间，单位ms，默认为2000
////    'intentAction' => '',//用于启动activity的intent action，默认值：android.intent.action.MAIN
////    'intentCategory' => '',//用于启动activity的intent category，默认值：android.intent.category.LAUNCHER
////    'intentFlags' => '',//用于启动activity的标识（flags），默认值：0x10200000
////    'optionalIntentArguments' => '',//用于启动activity的额外intent参数
////    'stopAppOnReset' => '',//在使用adb启动应用前停止被测应用的进程，默认为true
////    'noSign' => '',//跳过检查和对应用debug签名的步骤，默认为false
////    'ignoreUnimportantViews' => '',//调用uiautomator的函数setCompressedLayoutHierarchy(),默认为false
//
//    'unicodeKeyboard' => 'true', //这下面两个是输入中文的设置支持
//    'resetKeyboard' => 'true'
//));