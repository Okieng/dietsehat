<?php 

$conn = mysqli_connect("localhost","root","","diet");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}




function getCari($cari){

	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://nutritionix-api.p.rapidapi.com/v1_1/search/$cari?fields=item_name%2Citem_id%2Cbrand_name%2Cnf_calories%2Cnf_total_fat",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"x-rapidapi-host: nutritionix-api.p.rapidapi.com",
			"x-rapidapi-key: 097161c464mshac70d231683a73ep175ef2jsn1f30ea928918"
		],
	]);

	$response = curl_exec($curl);
	$hasil = json_decode($response, true);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		echo $response;
	}

	return $hasil['hits'];
}

if(isset($_POST['data'])) {
	
	$data = $_POST['data'];
	$key = $_POST['key'];
	$nama = $_POST['nama'];
	$kal = $_POST['kal'];
	$conn = mysqli_connect("localhost","root","","diet");
 	$query = "INSERT INTO $key VALUES ('','$nama','$data','$kal')";
 	$result = mysqli_query($conn, $query);
 	echo 'Data Berhasil Ditambah';
}

function tampil($query) {

	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows [] = $row;
	}

	return $rows;
}

function registrasi($data) {
	global $conn;
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO user VALUES ('','$nama','$email','$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);




}


function getResep($data)
{
	$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://edamam-recipe-search.p.rapidapi.com/search?q=$data",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"x-rapidapi-host: edamam-recipe-search.p.rapidapi.com",
				"x-rapidapi-key: 097161c464mshac70d231683a73ep175ef2jsn1f30ea928918"
			],
		]);

		$response = curl_exec($curl);
		$hasil = json_decode($response, true);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}

		return $hasil['hits'];
}
