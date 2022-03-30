
<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
  @import url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

/* Global Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  padding-top: 45px;
}

.box-1 {
  width: 100%;
  height: auto;
  padding: 10px 25px;
}

.table-section {
}
</style>

<?php
  require_once'../../modelo/laboratorioExa.php';
  $contenido = LaboratorioExa::read();
  ?>

<!-- Modal -->
<div class="modal" id="modalLabUpdate" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualización Laboratorio de Exámenes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="../../controlador/laboratorioExaControlador.php" method="POST">
          <div class="row">
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del archivo</label>
                <input type="text" class="form-control" id="">
              </div>    

            </div>
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha del laboratorio</label>
                <input type="date" class="form-control" id="exampleInputEmail1">
              </div>    
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Código</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
              </div>    
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcionlab" rows="3"></textarea>
              </div>    

            </div>
          </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <button class="btn btn-success w-100">Enviar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="box-1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="../../controlador/laboratorioExaControlador.php" method="post">
          <div class="row">
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del archivo</label>
                <input type="text" class="form-control" name="nombrearchivo" id="">
              </div>    

            </div>
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha del laboratorio</label>
                <input type="date" class="form-control" name="fechalab" id="exampleInputEmail1">
              </div>    
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Código</label>
                <input type="text" class="form-control" name="Idlaboratorio" id="exampleInputEmail1">
              </div>    
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcionlab" id="descripcionlab" rows="3"></textarea>
              </div>    

            </div>
          </div>
          <input required type="hidden" name="exa" value="create">
        <div class="row justify-content-center">
          <div class="col-4">
            <button class="btn btn-success w-100">Enviar</button>
          </div>
        </div>
        <!-- <label  for="">Codigo</label>
            <input type="text" name="Idlaboratorio" alt="">
            <label  for="">Descripcion</label>
            <input type="text" name="descripcionlab" id="descripcionlab">
            <label  for="">fecha laboratorio</label>
            <input type="text" name="fechalab" id="">
            <label  for="">nombre del archivo</label>
            <input type="text" name="nombrearchivo" id="">
            
    
          <button>enviar</button> -->
            
        </form>
      </div>
    </div>
  </div>
</div>

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

<section class="table-section mt-4">
  <div class="container">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nombre Archivo</th>
          <th scope="col">Fecha Laboratorio</th>
          <th scope="col">Descripción</th>
        </tr>
      </thead>
      <?php
          while ($valor = $contenido -> fetch_assoc()) {
        ?>
      <tbody>
        <tr>
        <td scope="row"><?php echo $valor['Idlaboratorio']; ?> </td>
        <td><?php echo $valor['fechalab']; ?> </td>
        <td><?php echo $valor['descripcionlab']; ?> </td>
        <td><?php echo $valor['nombrearchivo']; ?> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
      <?php  
          }
        ?>
    </table>

  </div>
  <!-- <fieldset>
    <legend>Read Examenes laboratorio</legend>
    <table  >
      <tr >
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>fecha laboratorio</th>
        <th>nombre del archivo</th>
      </tr>

        <?php
          while ($valor = $contenido -> fetch_assoc()) {
        ?>

      <tr>
        <td><?php echo $valor['Idlaboratorio']; ?> </td>
        <td><?php echo $valor['fechalab']; ?> </td>
        <td><?php echo $valor['descripcionlab']; ?> </td>
        <td><?php echo $valor['nombrearchivo']; ?> </td>
        <td>

          <form action="../../controlador/control.php" method="post">
            <input type="hidden" name="exa" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['Idlaboratorio']; ?>">
            <button>borrar</button>
          </form>

          <form action="laboratorioExaUpdate.php" method="post">
            <input type="hidden" name="exa" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['Idlaboratorio']; ?>">
            <button>modificar</button>  
          </form>
          

        </td>
      </tr>

        <?php  
          }
        ?>

    </table>
  </fieldset> -->
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
