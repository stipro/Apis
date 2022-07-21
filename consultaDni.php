<?php
header('Content-type: application/json; charset=utf-8');
$rptController = array();
$action = 'consultar';
// Verificación del metodo de comunicacion
if ($_POST) {
    $arrayForm = json_decode($_POST['data'], true);
} elseif ($_GET) {
    $controllerMsg = 'Dato recibido GET, ';
    $codeMsg = 401;
    $rptController['parament'] = $_GET;
    $rptController['codeMsg'] = $codeMsg;
    // Verificación de cantidad del parametro
    if (count($_GET) == 1) {
        $controllerMsg .= 'cantidad de parametro valido, ';
        // Verificación de clave del parametro
        if (array_key_exists('dni', $_GET)) {
            $controllerMsg .= 'clave valido, ';
            // Verificación de tipo del parametro
            if(is_numeric($_GET['dni']) ){
                $controllerMsg .= 'tipo clave Valido, ';
                $dnitoconsult = $_GET['dni'];
                if($dnitoconsult == 8){
                    $controllerMsg .= 'DNI Valido';
                    switch ($action) {

                    }
                }
                else{
                    $controllerMsg .= 'DNI invalido';
                }
            }
        } else {
            $controllerMsg .= 'parametro invalido';
        }
    } else {
        $controllerMsg .= 'demasiados parametros';
    }
    $rptController['msg'] = $controllerMsg;
} else {
    $controllerMsg = 'No hay información por ningun metodo HTTP';
    $codeMsg = 400;
    $controllerValue = null;
    $rptController = array(
        'msg' => $controllerMsg,
        'codeMsg' => $getRespose,
        'parament' => $controllerValue
    );
}
echo json_encode($rptController);
