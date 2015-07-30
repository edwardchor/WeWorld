<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/21/15
 * Time: 2:44 PM
 */
require_once "jssdk.php";
$jssdk = new JSSDK('wxd1c57c307f05d877', 'f6473b539bf2b74d647350eb1d4fa26b');
$signPackage = $jssdk->GetSignPackage();
/*
$appID="wxe54a995e512e8047";
$appSecret="f1531f263eb17a92251572c3dc048633";
$url1 = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appID&secret=$appSecret";
$rawresult=file_get_contents($url1);
$js=json_decode($rawresult);
$token=$js->{'access_token'};

if($token) {
    $url2 = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=$token&type=jsapi";
    $result2 = json_encode(file_get_contents($url2));
    var_dump($result2);
}
*/
$jsapiTicket=$signPackage["jsapi_ticket"];
$nonceStr= $signPackage["nonceStr"];
$timestamp=$signPackage["timestamp"];
$url=$signPackage["url"];
$string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
$result=sha1($string);
echo $signPackage["appId"];
echo '</br>';
echo $signPackage["access_token"];
echo '</br>';
echo $signPackage["timestamp"];
echo '</br>';
echo $signPackage["jsapi_ticket"];
echo '</br>';
echo $signPackage["nonceStr"];
echo '</br>';
echo $signPackage["url"];


echo '</br>';
echo $signPackage["jsapi_ticket"];
echo '</br>';


echo '</br>';echo '</br>';echo '</br>';echo '</br>';
echo $signPackage["signature"];
echo '</br>';


echo $result;

?>


