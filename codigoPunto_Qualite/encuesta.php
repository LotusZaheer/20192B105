<head>
    <title>Encuesta</title>
<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/navbar.inc.php";
?>
  <div class="container mt-5">
    <section class="row">
      <div class="col-md-12 mt-5">
        <h1 class="text-center">Encuesta sobre el uso de internet.</h1>
      </div>
    </section>
    <hr><br />
    <section class="row">
      <section class="col-md-12">
        <h3>Datos generales</h3>
        <p></p>
      </section>
    </section>
    <section class="row">
      <section class="col-md-12">
        <section class="row">
          <div class="col-md-4">
            <label for="tipoAtencion">Sexo:</label>
            <select class="form-control" id="tipoAtencion">
            <option value="ce">Masculino</option>
            <option value="farm">Femenino</option>
          </select>
          </div>
        </section>
        <section class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label for="nombreCompleto">Nombre Compelto: *</label>
              <input type="text" class="form-control" id="nombreCompleto" maxlength="128" placeholder="Nombre Compelto" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form_group">
              <label for="edadEncuestado">Edad: *</label>
              <input type="number" class="form-control" id="edadEncuestado" placeholder="Edad" maxlength="3" required/>
            </div>
          </div>
        </section>
        <section class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="idIdentificacion">Identificación: *</label>
              <input type="number" id="idIdentificacion" class="form-control" placeholder="Numero de Identificación" maxlength="15" required/>
            </div>
          </div>
          <div class="col-md-4">
            <label for="telefono">Telefono: *</label>
            <input type="text" class="form-control" id="telefono" placeholder="Numero Telefonico" maxlength="12" required/>
          </div>
        </section>
      </section>
    </section>
    <hr />

    <!--  Servicios  -->
    <section class="row">
      <div class="col-md-12">
        <h3>Celular.</h3>
        <p></p>
      </div>
    </section>
    <!--  Pregunta 1  -->
    <section class="row">
          <div class="col-md-12">
            <label for="tipoAtencion">1. Con que frecuencia usas el internet a la semana:</label>
            <select class="form-control" id="tipoAtencion">
            <option value="ce">Un día a la semana</option>
            <option value="farm">Dos días a la semana</option>
            <option value="farm">Tres días a la semana</option>
            <option value="farm">Cuatro días a la semana</option>
            <option value="farm">Todos los días</option>
          </select>
          </div>
        </section>
        <br>
    <!--  Pregunta 2  -->
    <section class="row">
      <div class="col-md-6">
        <p>2. Cual es el lugar habitual del uso de internet </p>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Casa</label><br>

      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Café-ciber</label>  
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Vecino</label><br>

          <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Universidad</label>
      </label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Oficina </label><br>
        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Otra</label>
      </label>
      </div>
    </section>
    <br>
    <!--  Pregunta 3  -->
    <section class="row">
      <div class="col-md-6">
          <label for="tipoAtencion">3. ¿Alguna vez ha hecho compras por internet?</label>
            <select class="form-control" id="tipoAtencion">
              <option value="ce">Sí</option>
              <option value="farm">No</option>
            </select>
      </div>
      <!-- Pregunta 4 -->
      <div class="col-md-6">
        <label for="tipoAtencion">4. ¿Crees que tu información en internet es confidencial?</label>
          <select class="form-control" id="tipoAtencion">
            <option value="ce">Sí</option>
            <option value="farm">No</option>
            <option value="farm">A veces</option>
           </select>
      </div>
    </section>
    <!-- Pregunta 5 -->
    <section class="row">
      <div class="col-md-6">
        <p>5. Cual es el lugar habitual del uso de internet </p>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Laptop</label><br>

      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Escritorio</label>  
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Mini-laptop</label><br>

          <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Universidad</label>
      </label>
      </div>
    </section>
    <br> 
    <!-- Pregunta 6 -->
    <section class="row">
      <div class="col-md-6">
          <label for="tipoAtencion">6. ¿Que hora prefieres para usar el internet?</label>
            <select class="form-control" id="tipoAtencion">
              <option value="ce">Mañana</option>
              <option value="farm">Tarde</option>
              <option value="farm">Noche</option>
            </select>
      </div>
      <!-- Pregunta 7 -->
      <div class="col-md-6">
        <label for="tipoAtencion">7. ¿Consideras que tú le das un buen uso al internet?</label>
          <select class="form-control" id="tipoAtencion">
            <option value="ce">Sí</option>
            <option value="farm">No</option>
            <option value="farm">No estoy seguro</option>
          </select>
      </div>
    </section>
    <br>
    <!-- Pregunta 8 -->
    <section>
    <section class="row">
      <div class="col-md-6">
          <label for="tipoAtencion">8. ¿Consideras que todos hacen buen uso del internet?</label>
            <select class="form-control" id="tipoAtencion">
              <option value="ce">Sí</option>
              <option value="farm">No</option>
              <option value="farm">No estoy seguro</option>
            </select>
      </div>
      <!-- Pregunta 9 -->
      <div class="col-md-6">
        <label for="tipoAtencion">9. ¿Confías en la información que usas en internet?</label>
          <select class="form-control" id="tipoAtencion">
            <option value="ce">Sí</option>
            <option value="farm">No</option>
            <option value="farm">Más o menos</option>
          </select>
      </div>
    </section>
    <br>
    <!-- Pregunta 10 -->
    <section class="row">
      <div class="col-md-4">
        <p>10. ¿Cual es el uso que más le das a internet? </p>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Chat</label><br>
      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Vídeo</label>  
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Música</label><br>
      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Deportes</label>
      </label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Ocio</label><br>
          <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Estudio</label>
      </label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Otro</label><br>
      </label>
      <!-- Pregunta 11 -->
    </section>
    <br> 
    <section class="row">
      <div class="col-md-4">
        <p>11. ¿Que crees que se descarga más en internet? </p>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Juegos</label><br>
      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Vídeos</label>  
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Música</label><br>
      <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Deportes</label>
      </label>
      </div>
      <div class="col-md-2">
      <label><input type="checkbox" id="cbox1" value="first_checkbox"> Estudio</label><br>
          <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Otros</label>
      </label>
      </div>
    </section>
    <br> 
    <button type="submit" class="btn btn-primary mb-3"> Enviar  </button>
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/security.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>

<?php
include_once $_SERVER['DOCUMENT_ROOT']."/20192B105/codigoPunto_Qualite/modulos/footer.php";
?>