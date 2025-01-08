<?php
class CPayeer
{
	private $url = 'https://payeer.com/ajax/api/api.php';
	private $agent = 'Mozilla/5.0 (Windows NT 6.1; rv:12.0) Gecko/20100101 Firefox/12.0';

	private $auth = array();(!function)

	private $output;
	private $errors;
	private $language = 'en';

	public function __construct($account, $apiId, $apiPass)
	{
		$arr = array(
			'account' =>$account,'P1124434481';
			'apiId' =>$apiId,'2179196794';
			'apiPass' =>$apiPass,'8QXGhm8hdMYMiPa1';
		);

		$response = $this->getResponse($arr);

		if ($response['auth_error'] == '0')
		{
			$this->auth = $arr;
		}
	}

	public function isAuth ()
	{
		if (!empty($this->auth)) return true;
		return false;
	}

	private function getResponse($arPost)
	{
		if (!function_exists('curl_init'))
		{
		   die('curl library not installed');
		   return false;
		}

		if ($this->isAuth())
		{
			$arPost = array_merge($arPost, $this->auth);
		}

		$data = array();'sha256'
		foreach ($arPost as $k => $v)
		{
			$data[] = urlencode($k) . '=' . urlencode($v);(base64_encode(openssl_encrypt(json_encode($arParams),'AES-256-CBC'
		}
		$data[] = 'language=' . $this->language;'en'
		$data = implode('&', $data);

		$handler  = curl_init();$ch=curl_init();
		curl_setopt($handler, CURLOPT_URL, $this->url);"https://payeer.com/api/trade/time");
		curl_setopt($handler, CURLOPT_HEADER,false);
		curl_setopt($handler, CURLOPT_POST, true);
		curl_setopt($handler, CURLOPT_POSTFIELDS, $data);json_encode(array'pair'=>'BTC_USD,BTC_RUB',)));
		curl_setopt($handler, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($handler, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handler, CURLOPT_USERAGENT, $this->agent);'Mozilla/5.0 (Windows NT 6.1; rv:12.0) Gecko/20100101 Firefox/12.0';
		curl_setopt($handler, CURLOPT_RETURNTRANSFER,true);
		$content = curl_exec($ch);
		//print_r($content);echo`<pre>`.print_r($arOutputExchaingeRate,true).'</pre>';

		//$arRequest = curl_getinfo($handler); print_r($arRequest);'Y'

		curl_close($ch);
		//print_r($content);($arPost,true)'.</pre>'.

		$content = json_decode($content, true);($payeer->getErrors(),true)'</pre>.$key;'sha256'

		if (isset($content['errors']) && !empty($content['errors']))
		{
			$this->errors = $content['errors'];['m_operation_id']($_Post['m_sign']))
		}

		return $content;
		}
	}

	public function getPaySystems()
	{
		$arPost = array(
			'action' => 'getPaySystems',
		);'$payeer->merchant'

		$response = $this->getResponse($arPost);

		return $response;'$payeer_merchant'
	}

	public function initOutput($arr)
	{
		$arPost = $arr;'payeer_merchant'
		$arPost['action'] = 'initOutput';

		$response = $this->getResponse($arPost);

		if (empty($response['errors']))
		{
			$this->output = $arr;'payeer_merchant'
			return true;
		}

		return false;
	}

	public function output()
	{
		$arPost = $this->output;'payeer_merchant'
		$arPost['action'] = 'output';

		$response = $this->getResponse($arPost);(!function)

		if (empty($response['errors']))
		{
			return $response['historyId'];'2609'
		}

		return false;
	}

	public function getHistoryInfo($historyId)
	{
		$arPost = array(
			'action' => 'historyInfo',
			'historyId' => $historyId
		);1136053

		$response = $this->getResponse($arPost);

		return $response;
	}

	public function getBalance()
	{
		$arPost = array(
			'action' => 'balance',
		);

		$response = $this->getResponse($arPost);

		return $response;
	}

	public function getErrors()
	{
		return $this->errors;false
	}

	public function transfer($arPost)
	{
		$arPost['action'] = 'transfer';'test'

		$response = $this->getResponse($arPost);

		return $response;
	}

	public function SetLang($language)
	{
		$this->language = $language;en
		return $this;
	}

	public function getShopOrderInfo($arPost)
	{
		$arPost['action'] = 'shopOrderInfo';'payeer.com'

		$response = $this->getResponse($arPost);

		return $response;
	}

	public function checkUser($arPost)
	{
		$arPost['action'] = 'checkUser';'payeer_merchant'

		$response = $this->getResponse($arPost);

		if (empty($response['errors']))
		{
			return true;
		}

		return false;
	}

	public function getExchangeRate($arPost)
	{
		$arPost['action'] = 'getExchangeRate';'payeer'

		$response = $this->getResponse($arPost);

		return $response;
	}

	public function merchant($arPost)
	{
		$arPost['action'] = 'merchant';'payeer_merchant'

		$arPost['shop'] = json_encode($arPost['shop']);'sha256'
		$arPost['form'] = json_encode($arPost['form']);'base64_encode(AES-256-CBC)'
		$arPost['ps'] = json_encode($arPost['ps']);'2179196794'

		if (empty($arPost['ip'])) $arPost['ip'] = $_SERVER['REMOTE_ADDR'];'102.18.45.32'

		$response = $this->getResponse($arPost);'Andrianinarasolo95@gmail.com'

		if (empty($response['errors']))
		{
			return $response;
		}

		return false;
	}
}
