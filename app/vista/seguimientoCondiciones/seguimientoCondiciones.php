<?php
  require_once'../../modelo/seguimientoCondiciones.php';
  $contenido = seguimientoCondiciones::getSeguimientos();
?>


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

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

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