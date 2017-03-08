<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/pentaho/api/userroledao/createUser",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "<user><userName>fernando</userName><password>password</password></user>",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic YWRtaW46cGFzc3dvcmQ=",
    "cache-control: no-cache",
    "content-type: application/xml",
    "postman-token: 9590537c-1c27-6771-2b9b-e41b1952c592"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}