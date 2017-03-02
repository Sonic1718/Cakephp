
<?php

//// mag set ng number sa api.chikka.com
/// send using curl
$id = uniqid();
$arr_post_body = array(
    "message_type" => "SEND",
    "mobile_number" => "639466573049", //RECEIVER
    "shortcode" => "2929030850", //NASA CHIKKA ACCOUNT
    "message_id" => "546546464647",
    "message" => "trysana", //MESSAGE
    "client_id" => "c1e4405af0e3c2cb003ab99b4ee45bc76e83b065e03a4c76cc982e170c97cbc5", //NASA CHIKKA ACCOUNT
    "secret_key" => "49f09da3a4d008dccac22635e523330d186b8443773fff8b5297d9106e87969d"//NASA CHIKKA ACCOUNT
);
$query_string = "";
foreach ($arr_post_body as $key => $frow) {
    $query_string .= '&' . $key . '=' . $frow;
}
$URL = "https://post.chikka.com/smsapi/request";
$curl_handler = curl_init();
curl_setopt($curl_handler, CURLOPT_URL, $URL);
curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl_handler, CURLOPT_SSL_VERIFYPEER, FALSE);
$response = curl_exec($curl_handler);
curl_close($curl_handler);
exit(0);
?>

