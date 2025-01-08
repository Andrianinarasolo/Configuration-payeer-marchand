<?php
require_once('cpayeer.php');
$accountNumber='P1124434481';
$apiId='2179196794';
$apiKey='8QXGhm8hdMYMiPa1';
$payeer=nouveau cpayeer($accountNumber,$apiId,$apiKey);
si($payeer->isAuth())
{
$arShop=tableau=>('m_shop'=>'https://allegrobot.pro/profile/index','m_orderid'=>'','m_amount'=>number format(10,2,'.',"),'m_curr'=>'USD','m_desc'=>base64_encode('Test'),);
$arShop['m_sign']=strtoupper(hash('sha256'implode('.',array_merge($arShop,array('cle secrete de la boutique')))));
$arOrder=$payeer->marchand(tableau(//'merchantUrl'=>'https://payeer.com/merchant/',//'processUrl'=>'https://payeer.com/merchant/','boutique'=>$arshop,'lang'=>'en','ps'=>tableau('Id'=>'1136053','devise'=>'USD',),'formulaire'=>tableau('order_email'=>'Andrianinarasolo95@gmail.com',),
//'ip'=>$_SERVER['REMOTE_ADDR'],));
echo'<pre>';print_r($arOrder);echo'</pre>';
si(!vide($arOrder['location']))
{
    ?>
    <a href="<?=$arOrder['location']?>"target="_blank"><?=$arOrder['location']?></a>
    <?
}
}
autre
{
    echo'<pre>';print_r($payeer->getErrors());echo'</pre>';
}
}
autre
{
    echo'<pre>'.print_r($payeer->getErrors(),true).'</pre>';
}
?>