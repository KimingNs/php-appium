# Windows下使用Appium框架自动测试App

## 1.	配置appium环境

### 1.1	安卓模拟器

​	下载MuMu模拟器，，地址：http://mumu.163.com/

​	MuMu模拟器端口号为7555，即127.0.0.1:7555

### 1.2	Android SDK

​	下载Android Studio自动安装SDK，地址：https://developer.android.google.cn/studio/

​	安装后在系统环境变量配置ANDROID_HOME：你的安装目录\android-sdk	(eg:E:\Server\android-sdk)

​	在path后加上：%ANDROID_HOME%\platform-tools;%ANDROID_HOME%\tools;

### 1.3	配置JDK

​	jdk 1.8及以上 地址：https://www.oracle.com/cn/java/technologies/javase/javase-jdk8-downloads.html

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612143200037.png" alt="image-20200612143200037" style="zoom: 67%;" />

配置环境变量教程地址：https://jingyan.baidu.com/article/6dad5075d1dc40a123e36ea3.html

### 1.4	Appium

​	下载Appium Desktop，地址：https://github.com/appium/appium-desktop/releases/tag/v1.3.1

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612142614922.png" alt="image-20200612142614922" style="zoom:50%;" />

### 1.5	配置adb

​	系统环境变量配置APPIUM_HOME：你的安装目录\Appium	(eg:E:\Server\Appium)

​	在path后加上：%APPIUM_HOME%;%APPIUM_HOME%\node_modules\.bin;

配置成功后在控制台输入adb会出现如下画面：<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612114304905.png" alt="image-20200612114304905"  />



adb常用命令：

获取app包名(appPackage)和界面名(appAvtivity)：adb shell dumpsys window windows | findstr mFocusedApp

连接MuMu模拟器：adb connect 127.0.0.1:7555

重启appium服务：adb kill-server + adb start-server  先kill再start



## 2.	配置php+appium环境

### 2.1	安装框架

github下载地址：https://github.com/appium/php-client.git

### 2.2	配置composer

框架下载好后的文件夹中打开composer.json

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612115056575.png" alt="image-20200612115056575" style="zoom: 67%;" />

首先修改name属性："name": "随便的内容",

在require属性中加入："appium/php-client": "dev-master"

在require-dev属性中加入："phpunit/phpunit": "^9"

然后在该目录下执行：composer update

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612120258811.png" alt="image-20200612120258811" style="zoom: 67%;" />

等文件全部下载完，出现vendor文件夹即安装成功



## 3.	自动化代码

### 3.1	引入文件

我的文件目录如下：

![image-20200612122030978](C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612122030978.png)

要引入的文件有：

```php
require_once('../vendor/autoload.php');
require_once 'PHPUnit/Autoload.php';
require_once('../PHPUnit/Extensions/AppiumTestCase.php');
require_once('../PHPUnit/Extensions/AppiumTestCase/Element.php');
require_once('../vendor/appium/php-client/test/functional/android/appium_tests.php');
require_once('config/SuperDana.php');
```

config目录下SuperDana相对应的APP配置如下:

```php
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
    'resetKeyboard' => true,
//    'app' => '',//执行要安装的app的绝对路径，android系统设置appPackage和appActivit，可以为空
//    'browserName' => '',//执行自动化测试的手机web，对app应用进行测试化为空
//    'language' => '',//设置模拟器语言
//    'locale' => '',//设置区域
//    'udid' => '',//设置连接的物理设备的唯一标识
//    'fullReset' => '',//android通过卸载来重置应用状态
//    'orientation' => '',//在一个设定的方向模式上测试，landscape（横向）和portrait（纵向）
//    'autoWebview' => '',//直接转换到WebView上下文，默认为false
//    'noRest' => '',//不在会话前重置应用状态，默认为false
////    android特有
//    'appPackage' => 'com.superdana.dana.id',//设置启动的app包名
//    'appActivity' => 'com.tp.money.hut.XieyiActivity',//app界面名
//    'appWaitActivity' => '.Settings',//想要等待启动的app界面名
//    'androidCoverage' => '',//用于执行测试的Instrumentation类，作为命令 adb shell am instrument -e coverage true -w 的 -w 参数
//    //eg：com.my.Pkg/com.my.Pkg.Instrumentation.MyInstrumentation
//    'enablePerformanceLogging' => '',//开机chrome的性能日志，默认为false
//    'androidDeviceSocket' => '',//开发工具的socket名称
//    'avd' => '',//需要启动的avd（安卓虚拟设备）名称
//    'avdLaunchTimeout' => '',//等待avd启动并连接到adb，单位ms，默认120000
//    'avdArgs' => '',//等待avd完成自动动画的超时时间，单位ms，默认120000
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
    );
```

### 3.2	php代码

简单的一套完整的代码：

```php
<?php
class testSuperDana extends AppiumTests{
function SuperDanaXy($appPackage, $appActivityBefore, $config)
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
}

$test = new testSuperDana();
$test->SuperDanaXy($appPackage, $appActivityBefore, $config);
```

**分解如下**：

启动appium服务：

```php
$this->setPort(4723); //APPIUM的服务器端口号，服务器默认是localhost
$this->setDesiredCapabilities($config);
```

打开APP：

```php
$this->startActivity(array("appPackage" => $appPackage,
    "appActivity" => $appActivityBefore));//打开app应用
```

寻找相对应的元素并进行操作：

```php
$this->byId('com.superdana.dana.id:id/xycheck')->click();

$this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

$this->byId('com.superdana.dana.id:id/xycheck')->click();

$this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']")->click();

$this->byXPath("//android.widget.TextView[@text='lzikan']")->click();
```

### 3.3	寻找元素工具

在Android SDK/tools/bin 目录下有一个UIAutomatorViewer工具

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612140956710.png" alt="image-20200612140956710" style="zoom: 67%;" />

双击运行：

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612141028385.png" alt="image-20200612141028385" style="zoom: 50%;" />

这是一个能确定元素位置的工具，打开模拟器启动app后，点击

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612141312971.png" alt="image-20200612141312971" style="zoom: 50%;" />

即可将app画面映射

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612141547308.png" alt="image-20200612141547308" style="zoom: 50%;" />

要将图片旋转，点击

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612141635009.png" alt="image-20200612141635009" style="zoom:50%;" />

将图片保存，再将图片旋转至想要的方向，点击

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612141843940.png" alt="image-20200612141843940" style="zoom:50%;" />

打开刚才保存的文件即可：

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612142010624.png" alt="image-20200612142010624" style="zoom:50%;" />

查找元素定位有id，class，xpath这3个基本方法

```php
//id
$this->byId('com.superdana.dana.id:id/xycheck');
//class
$this->byClassName('android.view.View');
//xpath
$this->byXPath("//android.widget.TextView[@text='Konfirmasi & Lanjut']");
```

查找同class下的同级元素定位：

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612152027908.png" alt="image-20200612152027908" style="zoom: 67%;" />

```php
    //由后面向前定位同级元素
    $this->byXPath("//android.widget.EditText[2]/preceding-sibling::android.widget.EditText[1]")
    //由前面向后面定位同级元素
    $this->byXPath("//android.view.View[1]/following-sibling::android.view.View[5]")
```

android.widget.EditText和android.view.View是class，序号是后面/前面第几个元素，

前面的方法意思是将第二个EditText作为参照物，找前面第一个EditText，

后面的方法意思是将第一个View作为参照物，找后面第5个View，参照物不计入数量。

前面的方法查找的是序号为1的元素，后面的方法查找的是序号为8的元素

## 4.	运行流程

1.每天使用前，先输入adb看appium服务是否启动成功

2.先打开MuMu模拟器，打开要测的App

3.输入 adb connect 127.0.0.1:7555，再输入 adb shell dumpsys window windows | findstr mFocusedApp，获取到当前测试的app的包名$appPackage和界面名$appActivity，配置到config目录下

<img src="C:\Users\Administrator\Pictures\Typora图片\image-20200612145106424.png" alt="image-20200612145106424" style="zoom: 67%;" />

4.启动Appium Desktop

<img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612145405232.png" alt="image-20200612145405232" style="zoom: 33%;" /><img src="C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612145518676.png" alt="image-20200612145518676" style="zoom:50%;" />

5.运行测试代码

6.查看MuMu模拟器端App测试流程效果



## 5.	查看日志

Appium Desktop服务器自带日志，也可以点击红框查看txt格式日志，时间戳可在高级设置中开启

![image-20200612145937646](C:\Users\Administrator\Desktop\selenium自动化测试框架\appium\Windows下使用Appium框架自动测试App.assets\image-20200612145937646.png)

该图中，绿色的200是执行成功，灰色的部分是要执行的功能/查找的元素，红色的500是执行失败，执行失败的原因也在上面说出来了

