<?php
require_once'connect.php';

class LaboratorioExa{

 private $fechacon;



    function __construct($arg)
    {
        $this->fechacon = $arg['fechacon'];
     
   
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO condisalud VALUES('$this->fechacon')";
        return $connect->query($sql);
    }

    public static function read()
    {
        global $connect;
        $sql="SELECT * FROM condisalud";
        return $result = $connect->query($sql);
    }

    public static function update($valor)
    {
        global $connect;
        $sql="SELECT * FROM condisalud WHERE fechacon = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($fechacon)
    {
        global $connect;
        $sql=" DELETE FROM condisalud WHERE fechacon = $fechacon";
        return $connect->query($sql);
    }

    public function modifylaboratorioexa($valor)
    {
        global $connect;
        $sql= "UPDATE condisalud 
                SET     fechacon = $this->fechacon 
                                             
                WHERE fechacon = $valor";
        return $connect->query($sql);
    }

    public static function arraylaboratorioexa()
    {
       return [ 'fechacon' => $_POST['fechacon'], 
                
    }
}

?>