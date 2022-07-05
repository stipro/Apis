<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Punto de Venta para Farmacia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pos">POS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./compras">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./inventario">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ventas">Ventas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Usuarios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Asignaciones</a></li>
                            <li><a class="dropdown-item" href="#">Permisos</a></li>
                            <li><a class="dropdown-item" href="#">Usuarios</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./mantenimiento">Admin Usuarios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimiento
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./presentaciones">Presentaciónes</a></li>
                            <li><a class="dropdown-item" href="./laboratorios">Laboratórios</a></li>
                            <li><a class="dropdown-item" href="./grupos">Grupos</a></li>
                            <li><a class="dropdown-item" href="./principioactivo">Principios Activo</a></li>
                            <li><a class="dropdown-item" href="./indicaciones">Indicaciónes</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./mantenimiento">Mantenimiento</a></li>
                            <li><a class="dropdown-item" href="./productos">Productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Link</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Hola
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Administrar cuenta</a></li>
                        <li><a class="dropdown-item" href="logout">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container py-3">
        <h3>Divisa - [https://cuantoestaeldolar.pe]</h3>
        <hr>
        <div class="row g-3">
            <div class="col-auto">
                <label for="ipt-dateConsult-divisa" class="visually-hidden">Fecha [Mes]</label>
                <input type="text" class="form-control" name="datepicker" id="ipt-dateConsult-divisa" placeholder="Fecha">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3" id="btn-consultaMes-divisa">Consultar</button>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Resultado</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Codigo</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <canvas id="grafica"></canvas>

            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <pre class="bg-white text-dark">
&lt;?php 
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
        CURLOPT_POSTFIELDS => array('mes' => '05', 'anio' => '2022'),
    ));

    $result = curl_exec($curl);

    curl_close($curl);

    include('simple_html_dom.php');
    $domResult = new simple_html_dom();
    $domResult->load($result);
    $links = array();

    echo '&lt;h1&gt; MENSUAL &lt;/h1&gt;&lt;br&gt;';
    foreach ($domResult->find('div.block_cal_var') as $link) {

        foreach ($link->find('.num') as $linkDos) {
            echo '&lt;h2&gt; [DIA]' . $linkDos->plaintext . '&lt;/h2&gt;';
        }

        foreach ($link->find('.compra') as $linkTres) {
            echo '&lt;h2&gt; [COMPRA]' . $linkTres->plaintext . '&lt;/h2&gt;';
        }

        foreach ($link->find('.venta') as $linkCuatro) {
            echo '&lt;h2&gt; [VENTA]' . $linkCuatro->plaintext . '&lt;/h2&gt;&lt;br&gt;';
        }
    }
    $domResult->clear();
    unset($domResult);
?&gt;
</pre>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        const btnConsultaMes_divisa = document.getElementById('btn-consultaMes-divisa');
        const iptDate_divisa = document.getElementById('ipt-dateConsult-divisa');
        var comprasDivisa = '';


        // Las etiquetas son las que van en el eje X. 
        var etiquetas = [1, 2, 3, 4, 5, 6]
        // Podemos tener varios conjuntos de datos. Comencemos con uno
        const datosVentas2020 = {
            label: "Ventas por mes",
            data: "", // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        var datosCompras2020 = {
            label: "Compras por mes",
            data: "", // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
            backgroundColor: 'rgba(235, 55, 55, 0.3)', // Color de fondo
            borderColor: 'rgba(235, 55, 55, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        var config = {
            type: 'line', // Tipo de gráfica
            data: {
                labels: "",
                datasets: [
                    datosVentas2020,
                    datosCompras2020
                    // Aquí más datos...
                ]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: "Los cambios de divisa durante el Mes",
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            precision: 1,
                            beginAtZero: true
                        }
                    }]
                }
            }
        };
        // Obtener una referencia al elemento canvas del DOM
        const $grafica = document.querySelector("#grafica").getContext("2d");
        var charLine_divisa = new Chart($grafica, config);

        btnConsultaMes_divisa.addEventListener("click", (e) => {
            let val_dateConsult_divisa = iptDate_divisa.value;
            var paramentsConsult = {
                "dateConsult" : val_dateConsult_divisa             
            }
            getConsultaMes_divisa(paramentsConsult);
        });

        const getConsultaMes_divisa = async (paramentsConsult) => {
            const body = new FormData();
            body.append("data", JSON.stringify(paramentsConsult));
            const res = await fetch('consultaDivisa.php', {
                method: "POST",
                body
            });
            const data = await res.json()
            /* console.log(data); */
            divisaDias = data['dias'];
            divisaVenta = data['mesVenta'];
            divisaCompra = data['mesCompra'];
            
            addData(charLine_divisa, divisaDias, divisaVenta, divisaCompra);

        }

        function addData(chart, label, data, data2) {
            chart.data.labels = label;
            console.log(chart.data.datasets);
            console.log(chart.data.datasets[1]);
            chart.data.datasets[0].data = data;
            chart.data.datasets[1].data = data2;
            /* chart.data.datasets.forEach((dataset) => {
                dataset.data =  data;
            }); */
            chart.update();
        }

        $("#ipt-dateConsult-divisa").datepicker({
            format: "mm-yyyy",
            startView: "months",
            minViewMode: "months"
        });
    </script>
</body>

</html>