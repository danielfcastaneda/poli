<?php
 require_once'../../modelo/laboratorioExa.php';

$r = LaboratorioExa::update($_POST['index']);
$llenar = $r->fetch_assoc();

?>


<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../controlador/control.php" method="post">
    <fieldset>
      <legend>Update</legend>
  
      <label  for="idAmbiente"> codigo</label>
      <input required type="text" id="Idlaboratorio"  
              title="Ingrese el codigo"  value=' <?php echo $llenar['Idlaboratorio'] ?> ' name="Idlaboratorio"  >
      
      <label  for="descripcionlab">Descripcion</label>
      <input required type="text" id="descripcionlab"   
              title="Ingrese las descripcion"  value=' <?php echo $llenar['descripcionlab'] ?> ' name="descripcionlab" >
      
      <label  for="fechalab">fecha laboratorio</label>
      <input required type="text" id="fechalab"   
              title="Ingrese la fecha"  value=' <?php echo $llenar['fechalab'] ?> ' name="fechalab" >
      
      
      <label  for="nombrearchivo">nombre del archivo</label>
      <input required type="text" id="nombrearchivo"   
              title="Ingrese el archivo"  value=' <?php echo $llenar['nombrearchivo'] ?> ' name="nombrearchivo"  >
      
      <input type="hidden"  name="idAntes"
       value="<?php echo $llenar['Idlaboratorio'] ?>" >
      <input type="hidden"  name ="exa" value="update">

      <button>enviar</button>
    </fieldset>
  </form>
</section>