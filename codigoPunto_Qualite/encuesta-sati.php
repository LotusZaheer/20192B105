<html lang="es">

<head>
    <title>Encuesta Satisfacción</title>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
    ?>
    <!-- Bootstrap 4 -->
    <meta charset="UTF-8">
    <!-- Scrool reveal -->
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lux1.css">
    <script src="https://unpkg.com/scrollreveal"></script>


</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="" method="POST" id="encuesta">
        <div class="container">
            <br>
            <br>
            <div class="input-group mb-3">

                <input type="text" class="form-control" placeholder="Ingrese su cedula" aria-label="Ingrese su cedula" aria-describedby="basic-addon2" id="cedula" name="cedula">
                <div class="input-group-append">
                    <button class="btn  btn-sm btn-outline-success" type="button" id="btncontinue">Continuar</button>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="col-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Muy malo</th>
                                <th scope="col">Malo</th>
                                <th scope="col">Promedio</th>
                                <th scope="col">Bueno</th>
                                <th scope="col">Muy Bueno</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Experiencia del servicio al cliente</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp" id="exp" value="muy malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp" id="exp" value="malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp" id="exp" value="promedio" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp" id="exp" value="bueno" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exp" id="exp" value="muy bueno" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Entrega a tiempo del servicio</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo" value="muy malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo" value="malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo" value="promedio" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo" value="bueno" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tiempo" id="tiempo" value="muy bueno" disabled>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Profecionalismo</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prof" id="prof" value="muy malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prof" id="prof" value="malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prof" id="prof" value="promedio" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prof" id="prof" value="bueno" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="prof" id="prof" value="muy bueno" disabled>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Experiencia de compra</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expe" id="expe" value="muy malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expe" id="expe" value="malo" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expe" id="expe" value="promedio" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expe" id="expe" value="bueno" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expe" id="expe" value="muy bueno" disabled>
                                    </div>
                                </td>

                            </tr>
                            <th scope="row">Calidad del servicio</th>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calidad" id="calidad" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calidad" id="calidad" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calidad" id="calidad" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calidad" id="calidad" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="calidad" id="calidad" value="muy bueno" disabled>
                                </div>
                            </td>

                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </form>
    <script src="ajax/jquery-3.4.1.min.js"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>

</body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>


</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#btncontinue").click(function() {
            if ($('#cedula').val().length == 0 || $('#cedula').val().length < 8 || $('#cedula').val().length > 10) {
                alert('Ingrese una cédula válida');
                return false;
            } else {
                $(".form-check-input").removeAttr("disabled");
                var datos = $("#encuesta").serialize();
                $.ajax({
                    url:"insertar_encuesta.php",
                    type:"POST",                    
                    data:datos,
                    success:function(r) {
                        
                        if (r == 1) {
                            alert("Agregado con exito");
                        } else {
                            alert("Fallo el server");
                        }
                    }
                });
            }
        });
        $(".form-check-input").change(function() {
            var datos = $("#encuesta").serialize();
            
            $.ajax({
                    url:"insertar-r-encuesta.php",
                    type:"POST",                    
                    data:datos,
                    success:function(r) {
                        
                        if (r == 1) {
                            
                        } else {
                            alert("Fallo el server");
                        }
                    }
            });
        });

    });
</script>


