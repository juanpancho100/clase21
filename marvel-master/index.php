<?php
$ts = "5";
$publicKey = "5c465051a788252db815c7bd342d97a1";
$privateKey = "68d5d07dd7a4ff064c19956ba9b3027df293824c";
$hash = md5($ts.$privateKey.$publicKey);

$URI = "https://gateway.marvel.com/v1/public/characters?name=hulk&ts=$ts&apikey=$publicKey&hash=$hash";

$data = file_get_contents($URI);

/*$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URI);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);*/

$result = json_decode($data, true);

echo "Personaje: ".$result["data"]["results"][0]["name"]."<br>";
echo "Descripcion: ".$result["data"]["results"][0]["description"]."<br>";
echo "<img src='".$result["data"]["results"][0]["thumbnail"]["path"].".jpg'><br>";


//echo "<pre>";
//var_dump($result);
//echo "</pre>";