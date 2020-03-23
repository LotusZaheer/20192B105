<html lang="es">

<head>
    <title>Matriz</title>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
    ?>
    <!-- Bootstrap 4 -->
    <meta charset="UTF-8">
    <!-- Scrool reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>


</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        <div class="input-group mb-3">

            <input type="text" class="form-control" placeholder="Ingrese su cedula" aria-label="Ingrese su cedula" aria-describedby="basic-addon2" id="cedula">
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
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="muy bueno" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Entrega a tiempo del servicio</th>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="muy bueno" disabled>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Profecionalismo</th>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="muy bueno" disabled>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Experiencia de compra</th>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="muy bueno" disabled>
                                </div>
                            </td>

                        </tr>
                        <th scope="row">Calidad del servicio</th>
                        <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="muy malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="malo" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="promedio" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="bueno" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="muy bueno" disabled>
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
    <script src="ajax/jquery-3.4.1.min.js"></script> 

</body>



</html>
<script type="text/javascript">
    $(document).ready(function() {
        $("#btncontinue").click(function() {
            if ($('#cedula').val().length == 0 || $('#cedula').val().length< 8 || $('#cedula').val().length>10) {
                alert('Ingrese una cédula válida');
                return false;
            } else {                
                $(".form-check-input").removeAttr("disabled")
                
            }
        });

    });
</script>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/b_scripts.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>