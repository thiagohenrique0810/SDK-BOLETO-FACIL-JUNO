<?php

/**
 * Prepara o array enviado para o request 
 */
function preparePostFields($array) {
    $params = array();
  
    foreach ($array as $key => $value) {
      $params[] = $key . '=' . urlencode($value);
    }

    return implode('&', $params);
}

/**
* metodo para fazer o envio da request 
*/
function sendRequest($data, $urlRequest) 
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $urlRequest,
        CURLOPT_RETURNTRANSFER => true,
        
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => preparePostFields($data),
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return json_decode($err);
    } else {
        return json_decode($response);
    }
}