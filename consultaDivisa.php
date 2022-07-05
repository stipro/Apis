<?php
header('Content-type: application/json; charset=utf-8');

$arrayForm = json_decode($_POST['data'], true);
$fecha = $arrayForm['dateConsult'];
$parteFecha = explode("-", $fecha);
$mes = $parteFecha[0];
$anio = $parteFecha[1];

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://cuantoestaeldolar.pe/historial',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('mes' => $mes, 'anio' => $anio),
    /* CURLOPT_POSTFIELDS => array('mes' => '05', 'anio' => '2022'), */
));

$result = curl_exec($curl);

curl_close($curl);

include('simple_html_dom.php');

$domResult = new simple_html_dom();
$domResult->load($result);
$rptJson = array();
/* $rptDia */
$dia;
/* foreach($domResult->find('div#calendar_variacion, div, div.td') as $link) */
foreach ($domResult->find('div.block_cal_var') as $link) {
    /* $rptJson = array("Scrapping" => "Divisa"); */
    foreach ($link->find('.num') as $linkDos) {
        $dia[] = "Dia " . $linkDos->plaintext;
    }
    $rptJson['dias'] = $dia;

    foreach ($link->find('.compra') as $linkTres) {
        $compra[] = $linkTres->plaintext;
        /* array_push($rptJson, $dia); */
    }
    $rptJson['mesCompra'] = $compra;

    foreach ($link->find('.venta') as $linkCuatro) {
        $venta[] = $linkCuatro->plaintext;
    }
    $rptJson['mesVenta'] = $venta;
}

$domResult->clear();
unset($domResult);
echo json_encode($rptJson);
