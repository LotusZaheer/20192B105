<head>
    <title>Registro</title>
<?php

//Creamos una variable global para saber si el email ya fue usado
$emailused = false;

//METODO POST DEL FORMULARIO DE REGISTRO
if ($_POST) {

    //VARIABLES TOMADADAS POR EL METODO POST
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password1'];
    $dir = $_POST['direccion'];
    $ciu = $_POST['ciudad'];
    $ctipo = $_POST['ctipo'];


    Conexion::abrir();
    //VERIFICACION DEL CORREO EXISTENTE
    $real = repositorioFunciones::obtener_usuario_email(Conexion::obtener(), $email);
    if ($real == null) {
        //TIPO DE USUARIO REGISTRADO CON UNA CONTRASEÑA ESPECIAL PARA AQUELLA GENTE QUE SERA ADMINISTRADORA
        if ($ctipo == "puntoqualite2019") {
            $ctipoes = 'a';
        } else {
            $ctipoes = 'c';
        }
        $new = date('Y-m-d', strtotime($_POST['fecha_nacimiento']));
        $usuario = new usuario('', $nombre, $new, $email, $pass, $dir, $ciu, $ctipoes);
        $newuser = repositorioFunciones::insertar_usuarios(Conexion::obtener(), $usuario);
        Conexion::cerrar();
        header('Location: ../index.php');
    } else {
        $emailused = true;
    }
}

?>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/navbar.inc.php";
?>

    <div class="container-registro">
        <div class="row">
            <div class="col-3">
                <div class="wall">

                </div>
            </div>
            <div class="col-9">
                
                <h4 id="titles1" >Datos personales </h4>
                <?php if ($emailused == true) {
                    echo ('<div id="alertas">
                
                    </div>');
                } ?> 
                
                <form method="POST" id="formregister" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" name="email" class="form-control" id="email" onchange="chan()" aria-describedby="emailHelp" placeholder="ejemplo@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="password1" id="password1" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar contraseña</label>
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Password" required>
                    </div>
                    <p id="demo"></p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre y Apellidos</label>
                        <input name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Juan Rodriguez" required>
                    </div>
                    <div id="dataform">
                        <label for="fecha">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" id="dat" name="dat" onclick="equalpass()" value="<?php echo date('Y-m-d'); ?>" required>
                        <label id="elementico"></label>
                    </div>

                    <label for="exampleInputEmail1">Ciudad</label>
                    <select class="form-control" id="ciudad" name="ciudad" required>
                        <option value=""></option>
                        <option value="1">Bucaramanga</option>
                        <option value="2">Giron</option>
                        <option value="3">Floridablanca</option>
                        <option value="4">Duitama</option>
                        <option value="5">Yopal</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Direccion</label>
                        <input name="direccion" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Bogota, Calle 53 # 27 - 08" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña especial</label>
                        <input type="password" name="ctipo" class="form-control" id="ctipo" aria-describedby="emailHelp" placeholder="Este campo no es necesario para clientes">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked="" required>
                            ¿Aceptas los terminos y condiciones?
                        </label>
                    </div>
                    <br>
                    <div class="g-recaptcha" data-sitekey="6LewsuEUAAAAAMjgmQb7iibwZfL8kYVAS5Ono_5e"></div>
                    <button type="submit" class="btn btn-primary form-group" id="topper" name="commit">Registrarse</button>
                    <form>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/singup.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/b_scripts.php";
include_once $_SERVER['DOCUMENT_ROOT']."/PFW/codigoPunto_Qualite/modulos/footer.php";
?>