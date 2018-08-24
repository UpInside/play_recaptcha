<?php
/**
 * Created by PhpStorm.
 * User: gustavoweb
 * Date: 23/08/2018
 * Time: 11:18
 */

$postData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!$postData['g-recaptcha-response']){
    header("Location: index.php?recaptcha=false");
}

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=6Lc402sUAAAAAHoK_Y6YjbwlmHTNezC1sz7hjS0i&response=' . $postData['g-recaptcha-response'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$validateCaptcha = json_decode(curl_exec($ch));

curl_close($ch);

if($validateCaptcha->success === false) {
    header("Location: index.php?recaptcha=false");
}

unset($postData['g-recaptcha-response']);

var_dump($postData);