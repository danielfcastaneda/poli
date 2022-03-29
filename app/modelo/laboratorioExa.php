<?php
require_once'connect.php';

class LaboratorioExa{

 private $Idlaboratorio;
 private $descripcionlab;
 private $fechalab;
 private $nombrearchivo; 

    function __construct($arg)
    {
        $this->Idlaboratorio = $arg['Idlaboratorio'];
        $this->descripcionlab = $arg['descripcionlab'];
        $this->fechalab = $arg['fechalab'];
        $this->nombrearchivo = $arg['nombrearchivo'];
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO laboratorioexa VALUES('$this->Idlaboratorio','$this->fechalab','$this->descripcionlab',
                '$this->nombrearchivo')";
        return $connect->query($sql);
    }

    public static function read()
    {
        global $connect;
        $sql="SELECT * FROM laboratorioexa";
        return $result = $connect->query($sql);
    }

    public static function update($valor)
    {
        global $connect;
        $sql="SELECT * FROM laboratorioexa WHERE Idlaboratorio = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($Idlaboratorio)
    {
        global $connect;
        $sql=" DELETE FROM laboratorioexa WHERE Idlaboratorio = $Idlaboratorio";
        return $connect->query($sql);
    }

    public function modifylaboratorioexa($valor)
    {
        global $connect;
        $sql= "UPDATE laboratorioexa 
                SET     Idlaboratorio = '$this->Idlaboratorio',
                        descripcionlab = '$this->descripcionlab', 
                        fechalab = '$this->fechalab',
                        nombrearchivo = '$this->nombrearchivo'                        
                WHERE Idlaboratorio = $valor";
        return $connect->query($sql);
    }

    public static function arraylaboratorioexa()
    {
       return [ 'Idlaboratorio' => $_POST['Idlaboratorio'], 
                'fechalab' => $_POST['fechalab'], 
                'descripcionlab' => $_POST['descripcionlab'],
                'nombrearchivo' => $_POST['nombrearchivo']
                ] ; 
    }
}

?>