<?php
    // curl --location --request POST 'https://lavil.co/api/v1/saveTransactionsCashDirec' \
    // --form 'code_order_cashDirect=75783811999' \
    // --form 'code_item=A-002' \
    // --form 'quantite=2' \
    // --form 'name_ex=tes' \
    // --form 'phone_ex=757838199' \
    // --form 'type_p_ex=1' \
    // --form 'nif_cin_ex=75783814353' \
    // --form 'street_ex=test test' \
    // --form 'name_be=test 2' \
    // --form 'phone_be=7578381' \
    // --form 'name_co=test test test' \
    // --form 'phone_co=7578' \
    // --form 'global_montant=89' \
    // --form 'departement_be=test' \
    // --form 'commune_be=port au prince' \
    // --form 'street_be=hey test'

//     $url = 'https://lavil.co/api/v1/saveTransactionsCashDirec';
//     $fields = array(
// 	'code_order_cashDirect' => urlencode(75783811999),
// 	'code_item' => urlencode('A-002'),
// 	'quantite' => urlencode(2),
// 	'name_ex' => urlencode('tes'),
// 	'phone_ex' => urlencode('757838199'),
// 	'type_p_ex' => urlencode(1),
// 	'nif_cin_ex' => urlencode('75783814353')
// );

// //url-ify the data for the POST
// foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
// rtrim($fields_string, '&');

// //open connection
// $ch = curl_init();

// //set the url, number of POST vars, POST data
// curl_setopt($ch,CURLOPT_URL, $url);
// curl_setopt($ch,CURLOPT_POST, count($fields));
// curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

// //execute post
// $result = curl_exec($ch);

// //close connection
// curl_close($ch);
// API URL
$url = 'https://lavil.co/api/v1/saveTransactionsCashDirec';

// Create a new cURL resource
// $ch = curl_init($url); 

// Setup request to send json via POST
$data = array(
    'code_order_cashDirect' => 123456789010,
    'code_item' => 'A-002',
    'quantite' => 2,
    'name_ex' => 'aa',
    'phone_ex' => '509472321322',
    'type_p_ex' => 1,
    'nif_cin_ex' => '56789',
    'street_ex' => 'wertyu',
    'name_be' => 'ertyui',
    'phone_be' => '23456789',
    'name_co' => '3456789',
    'global_montant' => 234567,
    'departement_be' => '45678',
    'commune_be' => '456789',
    'street_be' => 'dfghj',
);
// $payload = json_encode(array("bundle" => $data));

// // Attach encoded JSON string to the POST fields
// curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// // Set the content type to application/json
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// // Return response instead of outputting
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // Execute the POST request
// $result = curl_exec($ch);

// print_r($result);
// // die();

// // Close cURL resource
// curl_close($ch);
// / kvstore API url
// $url = 'https://kvstore.p.rapidapi.com/collections';
// Collection object
// $data = [
//   'collection' => 'RapidAPI'
// ];
// Initializes a new cURL session
$curl = curl_init($url);
// Set the CURLOPT_RETURNTRANSFER option to true
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Set the CURLOPT_POST option to true for POST request
curl_setopt($curl, CURLOPT_POST, true);
// Set the request data as JSON using json_encode function
curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
// Set custom headers for RapidAPI Auth and Content-Type header
curl_setopt($curl, CURLOPT_HTTPHEADER, [ 
  'Content-Type: application/json'
]);
// Execute cURL request with all previous settings
$response = curl_exec($curl);
// Close cURL session
curl_close($curl);
echo $response . PHP_EOL;
?>