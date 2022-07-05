
<?php
header('Content-type: application/json; charset=utf-8');
/* $rptJson = []; */
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="prueba"');
    header('HTTP/1.0 401 Unauthorized');
    $rptJson = array(
        "rptController" => 'Acaba de cancelar para ingresar al sistema, Que tenga buen dia.',
    );
    exit;
} else {
    if ($_SERVER['PHP_AUTH_USER'] && $_SERVER['PHP_AUTH_PW']) {
        if ($_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'admin') {
            $rptJson = array(
                "rptController" => "Bienvenido",
                "Username" => $_SERVER['PHP_AUTH_USER'],
                "Password" => $_SERVER['PHP_AUTH_PW']
            );
        } else {
            $rptJson = array("rptController" => "Credenciales Incorrectas, Que tenga buen dia..");
        }
    } elseif (!$_SERVER['PHP_AUTH_USER']) {
        $rptJson = array("rptController" => "Falta Usuario.");
    } elseif (!$_SERVER['PHP_AUTH_PW']) {
        $rptJson = array("rptController" => "Falta Clave.");
    } else {
        $rptJson = array("rptController" => "Credenciales vacias");
    }
}
echo json_encode($rptJson);
?>