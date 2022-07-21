<?php
header('Content-type: application/json; charset=utf-8');
//Configuracion de conexion de pagina
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://es.wikipedia.org/wiki/Categor%25C3%25ADa:Nacionalidades_por_pa%25C3%25ADs',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'Cookie: GeoIP=PE:ARE:Arequipa:-16.40:-71.53:v4; WMF-Last-Access-Global=20-Jul-2022; WMF-Last-Access=20-Jul-2022'
    ),
));
$result = curl_exec($curl);
curl_close($curl);

include('simple_html_dom.php');

$domResult = new simple_html_dom('https://es.wikipedia.org/wiki/Categor%25C3%25ADa:Nacionalidades_por_pa%25C3%25ADs');
/* $domResult->load($result); */
$rptJson = array();
$links = array();
foreach ($domResult->find('.mw-category-group') as $link) {
    foreach ($link->find('li a') as $a) {
        $links[] = $a->plaintext;
    }
}
print_r($domResult);
$domResult->clear();
unset($domResult);
echo json_encode($domResult);
