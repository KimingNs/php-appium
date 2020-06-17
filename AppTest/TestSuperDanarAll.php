<?php
require_once('../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../vendor/appium/php-client/test/functional/android/appium_tests.php');
require_once('config/SuperDanar.php');

class TestSuperDanarAll extends AppiumTests
{
    function SuperDanarXy($appPackage, $appActivityBefore, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);
        //SuperDana App的界面名更改了
        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityBefore));//打开app应用
        //有两个同意协议
        $this->byId('com.superdana.dana.id:id/xycheck')->click();

        $this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

        $this->byId('com.superdana.dana.id:id/xycheck')->click();

        $this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

        $this->byXPath("//android.widget.TextView[@text='lzikan']")->click();
    }

    function SuperDanarLoginin($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);
        //SuperDana App的界面名更改了
        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用
        //无同意协议
        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        $this->byId('com.superdana.dana.id:id/tv_option_loan')->click();
        $this->byId('com.superdana.dana.id:id/register_phone')->value('085223801076');
//        $this->byId('com.superdana.dana.id:id/get_code_btn_ok')->click();
    }

    //第一项信息已存在
    function SuperDanarText1($appPackage, $appActivityAfter, $config)
    {

        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();

        sleep(3);

        $this->byXPath("//android.widget.TextView[@text='基础信息']")->click();

        sleep(3);
        //由后面向前定位同级元素
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('ztm');
        //由前面向后面定位同级元素
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('006285333888888');

        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('9999999999999999');

        //教育
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[5]")->click();
        sleep(1);
        $this->swipe(401, 1080, 392, 1384);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //贷款用途
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $this->swipe(401, 1080, 392, 1384);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //每月收入
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[10]")->click();
        sleep(1);
        $this->swipe(401, 1080, 392, 1384);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

//    宗教信仰
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[13]")->click();
        sleep(1);
        $this->swipe(401, 1080, 392, 1384);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //身份证正面
        $this->initiateTouchAction()->press(array('x' => 194, 'y' => 996))->release()->perform();
        sleep(2);
        $this->initiateTouchAction()->press(array('x' => 586, 'y' => 1065))->release()->perform();
        sleep(3);
        $this->byId('com.superdana.dana.id:id/iv_camera_take')->click();
        $this->byId('com.superdana.dana.id:id/iv_camera_result_ok')->click();
        sleep(3);

        //身份证反面
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 996))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 577, 'y' => 1435))->release()->perform();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 396, 'y' => 82))->release()->perform();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //确定
//        $this->initiateTouchAction()->press(array('x' => 408, 'y' => 1187))->release()->perform();

    }

    //第一项信息不存在
    function SuperDanarText1New($appPackage, $appActivityAfter, $config)
    {

        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(2);

        $this->byXPath("//android.widget.TextView[@text='基础信息']")->click();
        sleep(2);
        //由后面向前定位同级元素
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('ztm');
        //由前面向后面定位同级元素
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('006285333888888');

        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('9999999999999999');

        //教育
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1080);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //贷款用途
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[8]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1080);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //每月收入
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[10]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1300);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

//    宗教信仰
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[13]")->click();
        sleep(1);
        $this->swipe(401, 1384, 392, 1250);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1005))->release()->perform();
        sleep(1);

        //身份证正面
        $this->initiateTouchAction()->press(array('x' => 194, 'y' => 996))->release()->perform();
        sleep(2);
        $this->byId('com.superdana.dana.id:id/iv_camera_take')->click();
        $this->byId('com.superdana.dana.id:id/iv_camera_result_ok')->click();
        sleep(3);

        //身份证反面
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 996))->release()->perform();
        sleep(2);
        $this->byXPath('//android.widget.ImageView[@content-desc="快门"]')->click();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //确定
        $this->initiateTouchAction()->press(array('x' => 408, 'y' => 1187))->release()->perform();

    }

    //第二项信息已存在
    function SuperDanarText2($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(2);

        $this->byXPath("//android.widget.TextView[@text='用户信息']")->click();
        sleep(2);

        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 176))->release()->perform();

        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abc');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('aaa');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ccc');

        //居住地址
//        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //居住详细地址
//        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('qqqqwwwweeeerrrrttttyyyy');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('qqqqwwwweeeerrrrttttyyyy');

        //居住时间
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(1);
        $this->swipe(404, 1187, 404, 1079);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1002))->release()->perform();

        //电子邮箱
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[4]")->value('123456789@qq.com');

        //出生日期
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

        //婚姻状态
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[1]")->click();
        sleep(1);
        $this->swipe(404, 1240, 404, 1100);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //子女数量
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $this->swipe(405, 1356, 405, 1240);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //工作职位
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $this->swipe(402, 1416, 402, 1100);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //公司名称
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abcdefghijklmnopqrstuvwxyz');
        //公司电话
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('027123456789');

        //公司地址
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //公司详细地址
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('asdfghjklzxcvbnm');

        //社保卡图片
        $this->initiateTouchAction()->press(array('x' => 212, 'y' => 987))->release()->perform();
        sleep(3);
        $this->byXPath('//android.widget.ImageView[@content-desc="快门"]')->click();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //家庭卡页面
        $this->initiateTouchAction()->press(array('x' => 597, 'y' => 1008))->release()->perform();
        sleep(3);
        $this->byXPath('//android.widget.ImageView[@content-desc="快门"]')->click();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //提交
        $this->initiateTouchAction()->press(array('x' => 410, 'y' => 1196))->release()->perform();
    }

    //第二项信息不存在
    function SuperDanarText2New($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $this->byXPath("//android.widget.TextView[@text='用户信息']")->click();
        sleep(3);

        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 176))->release()->perform();

        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abc');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('aaa');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('ccc');

        //居住地址
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[6]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //居住详细地址
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('qqqqwwwweeeerrrrttttyyyy');

        //居住时间
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(2);
        $this->swipe(404, 1079, 404, 1187);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1002))->release()->perform();

        //电子邮箱
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[4]")->value('123456789@qq.com');

        //出生日期
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

        //婚姻状态
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[1]")->click();
        sleep(1);
        $this->swipe(404, 1181, 404, 1240);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();
        //子女数量
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[4]")->click();
        sleep(1);
        $this->swipe(405, 1236, 405, 1356);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //工作职位
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[7]")->click();
        sleep(1);
        $this->swipe(402, 1416, 402, 1100);
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 712, 'y' => 1001))->release()->perform();

        //公司名称
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('abcdefghijklmnopqrstuvwxyz');
        //公司电话
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('027123456789');

        //公司地址
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 757, 'y' => 1089))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 333, 'y' => 839))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 242, 'y' => 667))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 208, 'y' => 1011))->release()->perform();

        //公司详细地址
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('asdfghjklzxcvbnm');

        //社保卡图片
        $this->initiateTouchAction()->press(array('x' => 212, 'y' => 987))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //家庭卡页面
        $this->initiateTouchAction()->press(array('x' => 597, 'y' => 1008))->release()->perform();
        sleep(1);
        $this->initiateTouchAction()->press(array('x' => 594, 'y' => 1434))->release()->perform();
        sleep(3);
        $this->initiateTouchAction()->press(array('x' => 405, 'y' => 74))->release()->perform();
        $this->byId('com.android.camera2:id/done_button')->click();
        sleep(3);

        //提交
        $this->initiateTouchAction()->press(array('x' => 410, 'y' => 1196))->release()->perform();
    }

    function SuperDanarText3($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $this->byXPath("//android.widget.TextView[@text='联系人信息']")->click();
        sleep(3);

        //紧急联系人1
        $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")->value('zzz');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[1]")->value('12345678910111');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[3]")->click();
        sleep(1);
        $this->swipe(402, 1240, 402, 1200);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();

        //紧急联系人2
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[2]")->value('xxx');
        $this->byXPath("//android.widget.EditText[1]/following-sibling::android.widget.EditText[3]")->value('12345678910000');
        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[9]")->click();
        sleep(1);
        $this->swipe(402, 1240, 402, 1200);
        $this->initiateTouchAction()->press(array('x' => 714, 'y' => 1001))->release()->perform();

        //确认
//        $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[12]")->click();
    }

    function SuperDanarText5($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $this->byXPath("//android.widget.TextView[@text='绑定银行卡']")->click();
        sleep(3);

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
    }

    function SuperDanarText6($appPackage, $appActivityAfter, $config)
    {
        $this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
        $this->setDesiredCapabilities($config);

        $this->startActivity(array("appPackage" => $appPackage,
            "appActivity" => $appActivityAfter));//打开app应用

        $this->byXPath("//android.widget.TextView[@text='CogitoX中文']")->click();
        sleep(3);

        $this->byXPath("//android.widget.TextView[@text='确认合同']")->click();
        sleep(3);

        $this->initiateTouchAction()->press(array('x' => 38, 'y' => 496))->release()->perform();
//        $this->initiateTouchAction()->press(array('x' => 392, 'y' => 627))->release()->perform();
    }
}

$test = new TestSuperDanarAll();
$test->SuperDanarText1New($appPackage, $appActivityAfter, $config);