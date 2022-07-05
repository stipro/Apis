<?php
header('Content-type: application/json; charset=utf-8');
$rptController = array();
if ($_POST) {
  $arrayForm = json_decode($_POST['data'], true);
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.promart.pe/api/catalog_system/pub/products/search/?sc=2&ft=escoba&O=OrderByScoreDESC',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  // Procesamos STRING a JSON
  $val_JsonEncode =  json_decode($response);
  echo json_encode($val_JsonEncode);
} elseif ($_GET) {

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://www.promart.pe/api/catalog_system/pub/products/search/?sc=2&ft=escoba&O=OrderByScoreDESC',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  // Procesamos STRING a JSON
  $val_JsonEncode =  json_decode($response);
  $final_Json = json_encode($val_JsonEncode);
  $rptController = array(
    "estado" => '1',
    "rptController" => $final_Json
  );
} else {
  $rptController = array(
    "codigoEstado" => '0',
    "rptController" => 'no se recibio datos'
  );
}
echo json_encode($rptController);
