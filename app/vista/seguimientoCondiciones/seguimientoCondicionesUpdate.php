<?php
 require_once'../../modelo/seguimientoCondiciones.php';

$r = seguimientoCondiciones::getSeguimientoCondicionesId($_POST['index']);
$llenar = $r->fetch_assoc();

?>


<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../controlador/controlSeguimientoCondiciones.php" method="post">
    <fieldset>
      <legend>Update</legend>
  
       <label  for="tipo">Codigo</label>
      <input required type="text" id="idSeguimiento"   
              title="idSeguimiento"  value=' <?php echo $llenar['idSeguimiento'] ?> ' name="idSeguimiento">
     
      <label  for="tipo">Tipo</label>
      <input required type="text" id="tipo"   
              title="tipo"  value=' <?php echo $llenar['tipo'] ?> ' name="tipo" >
      
      <label  for="fechalab">fecha</label>
      <input required type="date" id="fecha"   
              title="Ingrese la fecha"  value=' <?php echo $llenar['fecha'] ?> ' name="fecha" >
      
      
      <label  for="diagnostico">diagnostico</label>
      <input required type="text" id="diagnostico"   
              title="Ingrese el diagnostico"  value=' <?php echo $llenar['diagnostico'] ?> ' name="diagnostico"  >
              
      <label  for="tratamiento">tratamiento</label>
      <input required type="text" id="tratamiento"   
              title="Ingrese el tratamiento"  value=' <?php echo $llenar['tratamiento'] ?> ' name="tratamiento"  >
      
      <input type="hidden"  name="idSeg"
       value="<?php echo $llenar['idSeguimiento'] ?>" >
      <input type="hidden"  name ="seg" value="update">

      <button>enviar</button>
    </fieldset>
  </form>
</section>

