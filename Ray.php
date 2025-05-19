<?php
$number = $_GET['num'] ?? '';


if(empty($number)) {
    die("Enter 11 Digit number hare");
}


$url = "https://www.bajiok.com/wps/verification/sms/noLogin";
$data = json_encode(["mobileNum" => $number,"countryDialingCode" => "880"]);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$headers = [
    'Content-Type: application/json',
    'User-Agent: Mozilla/5.0'
];


curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


$response = curl_exec($ch);
curl_close($ch);

echo "API Owner: Abu Rayhan<br>";
echo "Stuter : $response<br>";
?>