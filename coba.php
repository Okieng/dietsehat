<?php 

$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://nutritionix-api.p.rapidapi.com/v1_1/search/burger?fields=item_name%2Citem_id%2Cbrand_name%2Cnf_calories%2Cnf_total_fat",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "get",
		CURLOPT_HTTPHEADER => [
			"x-rapidapi-host: nutritionix-api.p.rapidapi.com",
			"x-rapidapi-key: 097161c464mshac70d231683a73ep175ef2jsn1f30ea928918"
		],
	]);

	$response = curl_exec($curl);
	
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $response;
	}
?>

 