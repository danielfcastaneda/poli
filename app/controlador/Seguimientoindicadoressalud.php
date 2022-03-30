<?php
  require_once'../../modelo/Seguimientoindicadoressalud.php';
  $contenido = Seguimientoindicadoressalud::getSeguimientos();
?>


<div >
    <form action="../../controlador/Seguimientoindicadoressalud.php" method="post">
        <label  for="">Codigo</label>
        <input type="text" name="Codigo" alt="">
        <label  for="">Frecuencia Cardiaca</label>
        <input type="text" name="Frecuencia Cardiaca" id="">
        <label  for="">Tension Arterial</label>
        <input type="text" name="Tension Arterial" id="">
        <label  for="">Saturación Oxigeno</label>
        <input type="text" name="aturación Oxigeno" id="">
        <label  for="">Distancia Recorridas</label>
        <input type="text" name="Distancia Recorridas" id="">
        <input required type="hidden"  name="seg" value="create">

      <button>enviar</button>
        
    </form>
</div>

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

<section>
  <fieldset>
    <legend>Lista de Seguimiento de Indicadores de Salud</legend>
     <?php
        $valido = 0;
        if (!empty($contenido)){
          while ($valor = $contenido -> fetch_assoc()) {
              $valido = 1;
        ?>
    <table  >
      <tr >
        <th>Codigo</th>
        <th>Frecuencia Cardiaca</th>
        <th>Tension Arterial</th>
        <th>Saturación Oxigeno</th>
        <th>Distancia Recorridas</th>
      </tr>

       

      <tr>
        <td><?php echo $valor['iIdindicador']; ?> </td>
        <td><?php echo $valor['frecCardiaca']; ?> </td>
        <td><?php echo $valor['tensArterial']; ?> </td>
        <td><?php echo $valor['saturaOxigeno']; ?> </td>
        <td><?php echo $valor['distanciarecorridas']; ?> </td>
        
       <td>

          <form action="../../controlador/controlSeguimientoCondiciones.php" method="post">
            <input type="hidden" name="ind" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['iIdindicador']; ?>">
            <button>borrar</button>
          </form>

          <form action="seguimientoCondicionesUpdate.php" method="post">
            <input type="hidden" name="ind" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['iIdindicador']; ?>">
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
    <label>No hay seguimientos de Indicadores registrados</label>
     <?php  
          }
        ?>
  </fieldset>
</section>