<?php
si(!in_array($_SERVEUR['REMOTE_ADDR'],array('185.71.65.92'.'185.71.65.189'.'149.202.17.210')))retour;
si(isset($_POST['m_operation_id'])&&isset($_POST['m_sign']))
{
				$m_key="8QXGhm8hdMYMiPa1";
				$Log_text="------------------------------------------------------------------------------------------------------------"
$arHash=tableau($_POST['m_opertion_id'],$request["m_operation_id"]."\n",
				['m_operation_ps'],$request["m_operation_ps"]."\n",
				['m_operation_date'],$request["m_operation_date"]."\n",
				['m_operation_pay_date'],$request["m_operation_pay_date"]."\n",
				['m_shop'],$request["m_shop"]."\n",
				['m_orderid'],$request["m_orderid"]."\n",
				['m_amount'],$request["m_amount"]."\n",
				['m_curr'],$request["m_curr"],"\n",
				['m_desc'],base64_decode($request["m_desc"])."\n",
				['m_status'],$request["m_status"]."\n",
				);
si(isset($_POST['m_params']))				
				{
								$arHash[]=$_POST['m_params'];
				}
				$arParams=tableau(
				'success_url'=>'https://allegrobot.pro/profile/index/new_success_url',
				//'fail_url=>'https://allegrobot.pro/profile/index/new_fail_url',
				//'status_url'=>'https://allegrobot.pro/profile/index/new_status_url',
				'reference'=>tableau('var1'=>'1'//'var2'=>'2'//'var3'=>'3'//'var4'=>'4'//'var5'=>'5'),
				//'submerchant'=>'Andrianinarasolo95@gmail.com',
				$key=md5('8QXGhm8hdMYMiPa1'.$m_orderid);$m_params=@urlencode(base64_encode(openssl_encrypt(json_encode($arParams),'AES-256-CBS',$key,OPENSSL_RAW_DATA)));
				$arHash[]=$m_key;
				$sign_hash=strtoupper(hash('sha256',implode(':',$arHash)));
		<form method="get"action="https://payeer.com/merchant/">
				<input type="hidden"name="m_shop"value="<?=$m_shop?>">
					<input type="hidden"name="m_orderid"value="<?=$m_orderid?>">
<input type="hidden"name="m_amount"value="<?=$m_amount"value="<?=$m_amount?>">
<input type="hidden"name="m_curr"value="<?=$m_curr?>">
<input type="hidden"name="m_desc"value="<?=$m_desc?>">
<input type="hidden"name="m_sign"value="<?=$sign?>envoyer"/>
<?php/*
<input type="text"name="payeer_email_error"class="field"value="##payeer_email_error##"size
								<input type="hidden"name="form[ps]"value="2609">
								<input type="hidden"name="form[curr[2609]]"value="USD">
  */?>
<?php/*   
   <input type="hidden"name"m_params"value="<?=$m_params?>">
   <input type="hidden"name="m_cipher_method"value="AES-256-CBS">
*/?>   
   <input type="submit"name="m_process"value="envoyer"/>	    	
				si($_POST['m_sign']==$sign_hash&&$_POST['m_status']=='succes')
				{
								ob_end_clean();exit($_POST['m_orderid'].'|succes');
				}
				ob_end_clean();exit($_POST['m_orderid'].'|erreur');
}
</form>
?>

