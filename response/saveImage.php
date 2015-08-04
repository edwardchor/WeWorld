<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/31/15
 * Time: 9:41 AM
 */

require_once "jssdk.php";
$jssdk=new JSSDK("wxd1c57c307f05d877","f6473b539bf2b74d647350eb1d4fa26b");
$signPackage=$jssdk->getSignPackage();

$mediaId=$_POST["media_id"];

$access_token=$signPackage["access_token"];

$url="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=".$access_token."&media_id=".$mediaId;

$log=fopen("/var/www/html/WeWorld/backImg/log.txt","w");
fwrite($log,$url);
fclose($log);
$imgStream=file_get_contents($url);
$time=time();
$newImg=fopen("/var/www/html/WeWorld/backImg/".$time.".jpg","w");
fwrite($newImg,$imgStream);
fclose($newImg);
$tempj=['src'=>'backImg/'.$time.".jpg"];
$result=json_encode($tempj);
echo $result;