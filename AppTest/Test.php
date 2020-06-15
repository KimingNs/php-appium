<?php
require_once('../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../vendor/appium/php-client/test/functional/android/appium_tests.php');
require_once('config/SuperDana.php');


//var_dump($test->isAppInstalled('com.superdana.dana.id'));//检查app应用是否安装
//$test->openNotifications();//打开通知栏
//$test->backgroundApp(4);//home键 4s

class Test extends AppiumTests
{
    function SuperDanaText2($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(2);

        $this->byXPath("//android.widget.TextView[@text='用户信息']")->click();
        sleep(2);

        $this->swipe(368, 1413, 342, 131);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用
    }

}

$test = new Test();
$test->SuperDanaText2($appPackage, $appActivityAfter, $config);

