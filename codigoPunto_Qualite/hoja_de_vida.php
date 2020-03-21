<head>
    <title>Hoja de vida</title>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
?>
    <div class="container cont-forms">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <!-- Código hoja vida integrantes -->
        <div class="marco-form">
            <h2 class="display-4 text-center">Hoja de vida</h2>
            <hr class="my-3">
            <br>

            <form action="" method="POST" id="form-hoja">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">Apellidos</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido" name="apellido">
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Ingrese su Email" name="email">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="celular">Telefono Celular</label>
                        <input type="tel" class="form-control" id="celular" placeholder="Ingrese su número de celular" name="celular">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for='cargo'>Cargo/puesto</label>
                        <input type="text" class="form-control" id="cargo" placeholder="Ingrese su cargo/puesto actual o ultimo cargo que ha tenido" name="cargo">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for='Experiencia laboral'>Experiencia Laboral</label>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-8">
                        <label for='Organización'>Organización</label>
                        <input type="text" class="form-control" id="organizacion" placeholder="Ingrese la organización donde trabajó" name="experiencia">

                    </div>
                    <div class="form-group col-md-2">
                        <label for="Fecha cuando inicio">Fecha de inicio</label>
                        <input type="number" placeholder="YYYY" min="1990" max="2100">
                        <script>
                            document.querySelector("input[type=number]")
                                .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                        </script>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="Fecha cuando fin">Fecha de Fin</label>
                        <input type="number" placeholder="YYYY" min="1990" max="2100">
                    </div>
                    <div class="form-group col-md-9">
                        <label for="info_empleo">Cuentanos sobre ese empleo</label>
                        <textarea class="form-control" id="text_area_empleo" rows="3"></textarea>
                    </div>

                </div>
               
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-8">
                    <div class="form-group col-md-2">
                        <button type="button" class="btn btn-info btn-sm">Añadir</button>
                    </div>
                </div>
                <br>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                    <div class="form-group col-md-9">
                        <label for="universidad">Universidad</label>
                        <input type="text" class="form-control" id="universidad" placeholder="Ingrese la universidad donde estudio" name="universidad">
                    </div>
                    <div>

                        <input type="checkbox" id="check" onchange="habilitar(this.checked);" checked> Tiene formación profesional

                    </div>


                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">

                    <div class="form-group col-md-9">
                        <label for="carrera">Estudio profesional</label>
                        <input type="text" class="form-control" id="carrera" placeholder="Ingrese la carrera que estudio" name="carrera">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="promedio">Promedio</label>
                        <input type="text" class="form-control" id="promedio" placeholder="Ingrese su promedio" name="promedio">
                    </div>

                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary mb-3">Subir</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>