<?php
require_once('cpayeer.php');
$accountNumber='P1124434481';
$apiId='2179196794';
$apiKey='8QXGhm8hdMYMiPa1';
$payeer=nouveau Cpayeer($accountNumber,$apiId,$apiKey);
si($payeer->isAuth())
{
    $historyId='1136053';
    $arHistory=$payeer->getHistoryInfo($historyId);
    echo'<pre>'.print_r($arHistory,true)'.</pre>';
}
autre
{
    echo'<pre>'.print_r($payeer->getErrors),true)'.</pre>';
								die('Error:('.$mysqli->connect_error.')'.$mysqli->connect_error);
}
?>

