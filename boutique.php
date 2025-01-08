<?php
require_once('cpayeer.php');
$accountNumber='P1124434481';
$apiId='2179196794';
$apikey='8QXGhm8hdMYMiPa1  ';
$payeer=nouveau Cpayeer($accountNumber,$apiId,$apikey);
Si($payeer->isAuth())
{
				$historyId='1136053';
				$arShopHistory=$payeer->gethistoryInfo($historyId);
				echo'<pre>'.print_r($arHistory,true)'.</pre>';
}
autre
{
				echo'<pre>'.print_r($payeer->getErrors(),true)'.</pre>';
}
?>
