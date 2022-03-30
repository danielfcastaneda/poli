

<?php
 require_once'../../modelo/indicadoressalud.php';

$r = indicadoressalud::update($_POST['index']);
$llenar = $r->fetch_assoc();

?>


<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../controlador/indicadoressalud.php" method="post">
    <fieldset>
      <legend>Update</legend>
  
      <label  for="Idindicador"> codigo</label>
      <input required type="text" id="Idindicador"  
              title="Ingrese el codigo"  value=' <?php echo $llenar['Idindicador'] ?> ' name="Idindicador"  >
      
      <label  for="frecCardiaca">Frecuencia Cardiaca</label>
      <input required type="text" id="frecCardiaca"   
              title="Ingrese Frecuencia Cardiaca"  value=' <?php echo $llenar['frecCardiaca'] ?> ' name="frecCardiaca" >
      
      <label  for="tensArterial">Tension Arterial</label>
      <input required type="text" id="tensArterial"   
              title="Ingrese Tension Arterial"  value=' <?php echo $llenar['tensArterial'] ?> ' name="tensArterial" >
      
      
      <label  for="saturaOxigeno">Saturación Oxigeno</label>
      <input required type="text" id="saturaOxigeno"   
              title="Ingrese Saturación Oxigeno"  value=' <?php echo $llenar['saturaOxigeno'] ?> ' name="saturaOxigeno"  >


      <label  for="distanciarecorridas">Distancia Recorridas</label>
      <input required type="text" id="distanciarecorridas"   
              title="Ingrese Distancia Recorridas"  value=' <?php echo $llenar['distanciarecorridas'] ?> ' name="distanciarecorridas"  >
      
      <input type="hidden"  name="idAntes"
       value="<?php echo $llenar['Idindicador'] ?>" >
      <input type="hidden"  name ="ind" value="update">

      <button>enviar</button>
    </fieldset>
  </form>
</section>

<div class="box-1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="../../controlador/indicadoressalud.php" method="post">
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
            
        </form>
      </div>
    </div>
  </div>
</div>
