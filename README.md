========================== Current====================
Current version: V4 Beta1.0.0

Release date: the words in the plot

=========================================================== ==

====================Modification History=====================


=========================================================

Release introduction:

This client library currently supports the Baidu commercial promotion API V4 version.

This client library is designed to provide Baidu's commercial promotion API to call encapsulation and proxy class generation in Json mode, and does not provide client business logic.

If you encounter any problems during use, please contact apihelp@baidu.com and indicate in the title "Baidu API Client V4 use process for help"

Precautions:


1. How to initialize the service
The method for the user to obtain a specific service object is:
Require_once'../sms_service_AccountService.php';
$ service = new sms_service_AccountService();
The default user information is loaded from CommonService.php, including the URL, username, password, token, target accessToken, and so on.
If you want to reset these parameters, you can do the following:
/ / Reset the URL
$service -> setServiceurl("yourURL");
/ / Reset user information
$ newheader = new AuthHeader();
$ newheader-> setUsername( "provide yourname");
$ newheader-> setPassword( "yourpwd");
$ newheader-> setToken( "yourtoken");
$ newheader-> setTarget( "yourtarget");
$service -> setAuthHeader($ newheader);
Note: Users should not configure the accessToken when they are not used; please ensure that the username and password are not empty when using the accessToken (the wrong username and PWD are also available, but cannot be empty)

2. How to call the API to make a request?
Call the specified method with the specific service object obtained, the parameter is the request class to request the method, such as
$ inforequest = new UpdateAccountInfoRequest();
$ accountInfoType = new AccountInfoType();
$ ips = array("192.168.2.3","192.168.2.6");
$ accountInfoType-> setExcludeIp($ ips);
$ inforequest-> setAccountInfoType($ accountInfoType);
/ / Specify the underlying protocol as JSON
$service -> setIsJson(true);
/ / Execution call
$ jsonEnv = $ service-> updateAccountInfo($ inforequest);

3. How to get the result of the call?
As in step 2, $jsonEnv records the data returned by this request.
If you want to get the status information of this request, you can call it as follows:
// json way to call
$ resheader = $ service-> getJsonHeader();
/ / Get the original JSON string
$ resheader = $ service-> getJsonStr();
The status of this request is recorded in $ resheader. If it fails, the failure information is recorded in the fault attribute.
-------------------------------------------------- -------------------------------------------------- --------------
Copyright 2014 Baidu.com Inc.
Baidu API team



====================当前版本信息====================
当前版本：V4 Beta1.0.0

发布日期：2014-12-18

====================================================

====================修改历史====================


================================================

发布介绍:

此客户端库,目前支持百度商业推广API V4版本功能。

本客户端库旨在提供百度商业推广API以Json方式调用封装以及代理类生成，并不提供客户端业务逻辑。

使用过程中如果遇到任何问题，请联系apihelp@baidu.com并在标题注明《Baidu API Client V4使用过程问题求助》

注意事项:


1. 如何初始化Service
	使用者获取具体的service对象方法是：
	require_once '../sms_service_AccountService.php';
	$service = new sms_service_AccountService();
	此时会从CommonService.php里加载默认用户信息，包括url、username、password、token、target、accessToken等。
	若想重新设置这些参数，可以执行以下方法：
	//重设url
	$service->setServiceurl("yoururl")；
	//重设用户信息
	$newheader = new AuthHeader();
	$newheader->setUsername("yourname");
	$newheader->setPassword("yourpwd");
	$newheader->setToken("yourtoken");
	$newheader->setTarget("yourtarget");
	$service->setAuthHeader($newheader);
	说明：使用者在不使用accesstoken时不要对其配置；在使用accesstoken时请确保username和password不为空（错误的username和pwd也可以，但是不能为空）

2. 如何调用API进行请求？
	使用获取的具体service对象调用其指定方法，参数为要请求方法的Request类，如
	$inforequest = new UpdateAccountInfoRequest( );
	$accountInfoType = new AccountInfoType ( );
	$ips = array ("192.168.2.3", "192.168.2.6" );
	$accountInfoType->setExcludeIp ( $ips );
	$inforequest->setAccountInfoType ( $accountInfoType );
	//指定底层协议为json
	$service->setIsJson(true);
	$jsonEnv = $service->updateAccountInfo ( $inforequest );
	//执行调用

3. 如何取得调用结果 ?
	如步骤2，$jsonEnv 记录了本次请求返回的数据。
	若想获得本次请求的状态信息，可以如下调用：
	//json方式调用
	$resheader = $service->getJsonHeader();
	//获取原始json字串
	$resheader = $service->getJsonStr();
	$resheader中记录本次请求的状态，如失败，失败信息记录在failures属性中。
------------------------------------------------------------------------------------------------------------------
Copyright 2014 Baidu.com Inc.
Baidu API Team

