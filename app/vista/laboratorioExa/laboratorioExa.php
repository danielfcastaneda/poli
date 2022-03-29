<?php
  require_once'../../modelo/laboratorioExa.php';
  $contenido = LaboratorioExa::read();
?>


<div >
    <form action="../../controlador/control.php" method="post">
        <label  for="">Codigo</label>
        <input type="text" name="Idlaboratorio" alt="">
        <label  for="">Descripcion</label>
        <input type="text" name="descripcionlab" id="descripcionlab">
        <label  for="">fecha laboratorio</label>
        <input type="text" name="fechalab" id="">
        <label  for="">nombre del archivo</label>
        <input type="text" name="nombrearchivo" id="">
        <input required type="hidden"  name="exa" value="create">

      <button>enviar</button>
        
    </form>
</div>

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

<section>
  <fieldset>
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
  </fieldset>
</section>