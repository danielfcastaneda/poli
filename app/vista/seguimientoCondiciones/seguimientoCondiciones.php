<?php
  require_once'../../modelo/seguimientoCondiciones.php';
  $contenido = seguimientoCondiciones::getSeguimientos();
?>

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


<!-- Modal -->
<div class="modal" id="modalLabUpdate" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Actualización Seguimiento condiciones</h5>
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
                <label for="exampleInputEmail1" class="form-label">Codigo</label>
                <input type="text" class="form-control" id="" name="idSeguimiento">
              </div>    

            </div>
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tipo</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="tipo">
              </div>    
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">fecha</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="fecha">
              </div>    
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">Diagnostico</label>
                <textarea class="form-control" id="descripcionlab" rows="3" name="diagnostico"></textarea>
              </div>    
              <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">tratamiento</label>
                <textarea class="form-control" id="descripcionlab" rows="3" name="tratamiento"></textarea>
              </div>
              <input required type="hidden"  name="seg" value="create">

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
                <label for="exampleInputEmail1" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="idSeguimiento" id="">
              </div>    

            </div>
            <div class="col-5">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <input type="date" class="form-control" name="tipo" id="exampleInputEmail1">
              </div>    
            </div>
            <div class="col-2">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="text" class="form-control" name="fecha" id="exampleInputEmail1">
              </div>    
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">Diagnostico</label>
                <textarea class="form-control" name="diagnostico" id="descripcionlab" rows="3"></textarea>
              </div>    

            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="descripcionlab" class="form-label">Tratamiento</label>
                <textarea class="form-control" name="tratamiento" id="descripcionlab" rows="3"></textarea>
              </div>    

            </div>
          </div>
          <input required type="hidden" name="exa" value="create">
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

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

<section class="table-section mt-4">
  <div class="container">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Tipo</th>
          <th scope="col">Fecha</th>
          <th scope="col">Diagnostico</th>
          <th scope="col">Tratamiento</th>
        </tr>
      </thead>
      
      <?php
          while ($valor = $contenido -> fetch_assoc()) {
        ?>
      <tbody>
        <tr>
        <td scope="row"><?php echo $valor['idSeguimiento']; ?> </td>
        <td><?php echo $valor['tipo']; ?> </td>
        <td><?php echo $valor['fecha']; ?> </td>
        <td><?php echo $valor['descripcionlab']; ?> </td>
        <td><?php echo $valor['idSeguimiento']; ?> </td>
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
        <td><?php echo $valor['idSeguimiento']; ?> </td>
        <td><?php echo $valor['tipo']; ?> </td>
        <td><?php echo $valor['descripcionlab']; ?> </td>
        <td><?php echo $valor['idSeguimiento']; ?> </td>
        <td>

          <form action="../../controlador/control.php" method="post">
            <input type="hidden" name="exa" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['idSeguimiento']; ?>">
            <button>borrar</button>
          </form>

          <form action="laboratorioExaUpdate.php" method="post">
            <input type="hidden" name="exa" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['idSeguimiento']; ?>">
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




<!--
<div >
    <form action="../../controlador/controlSeguimientoCondiciones.php" method="post">
        <label  for="">Codigo</label>
        <input type="text" name="idSeguimiento" alt="">
        <label  for="">Tipo</label>
        <input type="text" name="tipo" id="tipo">
        <label  for="">Fecha</label>
        <input type="date" name="fecha" id="">
        <label  for="">Diagnostico</label>
        <input type="text" name="diagnostico" id="">
        <label  for="">Tratamiento</label>
        <input type="text" name="tratamiento" id="">
        <input required type="hidden"  name="seg" value="create">

      <button>enviar</button>
        
    </form>
</div>

 TABLA CON CONTENIDO
------------------------------------------------------

<section>
  <fieldset>
    <legend>Lista de Seguimiento de Condiciones</legend>
     <?php
        $valido = 0;
        if (!empty($contenido)){
          while ($valor = $contenido -> fetch_assoc()) {
              $valido = 1;
        ?>
    <table  >
      <tr >
        <th>Codigo</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Diagnostico</th>
        <th>Tratamiento</th>
      </tr>

       

      <tr>
        <td><?php echo $valor['idSeguimiento']; ?> </td>
        <td><?php echo $valor['tipo']; ?> </td>
        <td><?php echo $valor['fecha']; ?> </td>
        <td><?php echo $valor['diagnostico']; ?> </td>
        <td><?php echo $valor['tratamiento']; ?> </td>
        
       <td>

          <form action="../../controlador/controlSeguimientoCondiciones.php" method="post">
            <input type="hidden" name="seg" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['idSeguimiento']; ?>">
            <button>borrar</button>
          </form>

          <form action="seguimientoCondicionesUpdate.php" method="post">
            <input type="hidden" name="seg" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['idSeguimiento']; ?>">
            <button>modificar</button>  
          </form>
          

        </td>  
      </tr>

    </table>
    
    
    <?php  
          }
        }
        if ($valido==0){
        ?>
    <label>No hay seguimientos de condiciones registrados</label>
     <?php  
          }
        ?>
  </fieldset>
</section>
  -->