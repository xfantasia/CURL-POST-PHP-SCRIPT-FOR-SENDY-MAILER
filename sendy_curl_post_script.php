///////////////////// CURL POST REQUEST STARTS ///////////////////// 
//UPDATE SENDY MAIL LIST
		$datax = [
			'api_key' => 'SENDI_API_KEY_HERE',
			'name' => $first_name,
			'email'   => $email,
			'list' => 'SENDY_LIST_KEY_HERE'
			];
		$url = 'https://spreaditglobal.com/sendy/subscribe';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datax));
		$response = curl_exec($ch);
///////////////////// CURL POST REQUEST ENDS /////////////////////  
