<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/31/15
 * Time: 10:36 AM
 */
require_once "jssdk.php";
$jssdk=new JSSDK("wxd1c57c307f05d877","f6473b539bf2b74d647350eb1d4fa26b");
$signPackage=$jssdk->getSignPackage();

$backSrc=$_POST["back"];
$frontSrc=$_POST["front"];


$time=time();

$worldMap="/var/www/html/WeWorld/result/".$time.".jpg";



$tempj=['worldMapSrc'=>$worldMap];
$result=json_encode($tempj);
echo  $result;