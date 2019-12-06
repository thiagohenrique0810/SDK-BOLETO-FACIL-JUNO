<?php

/**
 * Prepara o array enviado para o request 
 */
function preparePostFields($array) {
    $params = array();

    foreach ($array as $key => $value) {
        if(isset($value)) {
            $params[] =  str_word_count($key, 1)[1] . '=' . urlencode($value);
        }
    }

    return implode('&', $params);
}


function objectToArray ($object) {
    if(!is_object($object) && !is_array($object))
        return $object;

    return array_map('objectToArray', (array) $object);
}

function deepValues(array $array) {
    $values = array();
    foreach($array as $key => $level) {
        if (is_array($level)) {
            $values = array_merge($values,deepValues($level));
        } else {
            $values[$key] = $level;
        }
    }
    return ($values);
}

/**
* metodo para fazer o envio da request 
*/
function sendRequest($data, $urlRequest) 
{

    $data = preparePostFields(deepValues(objectToArray($data)));

    //die(print_r($data));

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
        CURLOPT_POSTFIELDS => $data,
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