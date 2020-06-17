<?php
require_once('../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../vendor/appium/php-client/test/functional/android/appium_tests.php');
require_once('config/NewSuperDanar.php');


//var_dump($test->isAppInstalled('com.superdana.dana.id'));//检查app应用是否安装
//$test->openNotifications();//打开通知栏
//$test->backgroundApp(4);//home键 4s


class TestSuperDanar extends AppiumTests
{
    //测试整个流程
    function SuperDanar($config)
    {
        //启动appium
        $this->setHost('127.0.0.1');
        $this->setPort(4723);
        $this->setDesiredCapabilities($config);
        $this->startActivity(array());

        //同意协议
        $this->byId('com.superdana.dana.id:id/xycheck')->click();
        $this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();
        sleep(1);
        $this->byId('com.superdana.dana.id:id/xycheck')->click();
        $this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();
        sleep(1);
        $this->byXPath("//android.widget.TextView[@text='lzikan']")->click();

        sleep(2);
        //注册
        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(2);
        $this->byId('com.superdana.dana.id:id/tv_option_loan')->click();
        sleep(1);
        $this->byId('com.superdana.dana.id:id/register_phone')->value('6282311200123');
        $this->byId('com.superdana.dana.id:id/get_code_btn_ok')->click();
        sleep(20);

        $this->byId('com.superdana.dana.id:id/ktp_name')->value('zxcv');
        $this->byId('com.superdana.dana.id:id/ktp_idcard')->value('123456789');
        $this->byId('com.superdana.dana.id:id/confirm_btn')->click();

        sleep(3);
        //完成第一项信息
        $this->byXPath("//android.widget.TextView[@text='基础信息']")->click();
        sleep(1);
        $this->byId('com.android.packageinstaller:id/permission_allow_button')->click();
        $this->byId('com.android.packageinstaller:id/permission_allow_button')->click();
        $this->byId('com.android.packageinstaller:id/permission_allow_button')->click();
        $this->byId('com.android.packageinstaller:id/permission_allow_button')->click();
        $this->byId('com.android.packageinstaller:id/permission_allow_button')->click();
        sleep(3);
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('ztm');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('006285333888888');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('9999999999999999');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1080);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[8]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1080);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[10]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1300);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[13]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1250);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 194, 'y' => 996))->release()->perform();
        sleep(2);
        $this->byId('com.superdana.dana.id:id/iv_camera_take')->click();
        $this->byId('com.superdana.dana.id:id/iv_camera_result_ok')->click();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 996))->release()->perform();
        sleep(2);
        $this->byXPath('//android.widget.ImageView[@content-desc="快门"]')->click();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 408, 'y' => 1187))->release()->perform();

        sleep(3);
        //完成第二项信息
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 176))->release()->perform();
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abc');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('aaa');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ccc');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('qqqqwwwweeeerrrrttttyyyy');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(2);
        $this->swipe(404, 1079, 404, 1187);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1002))->release()->perform();
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[4]")->value('123456789@qq.com');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[14]")->click();
        sleep(1);
        $this->swipe(136, 1047, 136, 1397);
        sleep(1);
        $this->swipe(404, 1222, 404, 1046);
        sleep(1);
        $this->swipe(676, 1396, 676, 1047);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 721, 'y' => 971))->release()->perform();
        sleep(1);
        $this->swipe(368, 1413, 342, 131);
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[1]")->click();
        sleep(1);
        $this->swipe(404, 1181, 404, 1240);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $this->swipe(405, 1236, 405, 1356);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $this->swipe(402, 1416, 402, 1100);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abcdefghijklmnopqrstuvwxyz');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('027123456789');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('asdfghjklzxcvbnm');
        $this->initiateTouchAction()->press(array('x' => 212, 'y' => 987))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 597, 'y' => 1008))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 410, 'y' => 1196))->release()->perform();

        sleep(3);
        //完成第三项信息
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('zzz');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('12345678910111');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[3]")->click();
        sleep(1);
        $this->swipe(402, 1240, 402, 1200);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('xxx');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('12345678910000');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(1);
        $this->swipe(402, 1240, 402, 1200);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();

        //完成第四项信息
        sleep(100);//人工完成验证

        //完成第五项信息
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('1111222233334444');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('ztm');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[3]")->click();
        sleep(1);
        $this->swipe(402, 1240, 402, 1040);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1004))->release()->perform();
        sleep(1);
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ztm');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();

        sleep(3);
        //完成第六项信息
        $this->initiateTouchAction()->press(array('x' => 38, 'y' => 496))->release()->perform();
        $this->initiateTouchAction()->press(array('x' => 392, 'y' => 627))->release()->perform();
    }
}

$test = new TestSuperDanar();
$test->SuperDanar($config);

