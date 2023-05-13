<?php
// assuming your form data is in $_POST
$formData = $_POST;

var_dump($formData);
// add your RD Station token and form identifier
$formData['token_rdstation'] = 'your-token-here';
$formData['identificador'] = 'your-identifier-here';

// set up the curl resource
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.rdstation.com.br/api/1.3/conversions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $formData);

// execute the request
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);
?>