<?php
/**
 * Created by PhpStorm.
 * User: EdwardChor
 * Date: 7/23/15
 * Time: 2:38 PM
 */

require_once "jssdk.php";
$jssdk = new JSSDK("wxd1c57c307f05d877", "f6473b539bf2b74d647350eb1d4fa26b");
$signPackage= $jssdk->GetSignPackage();

$result=json_encode($signPackage);
echo $result;

?>