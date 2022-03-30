<?php
require_once'connect.php';

class seguimientoCondiciones{

 private $idSeguimiento;
 private $tipo;
 private $fecha;
 private $diagnostico; 
 private $tratamiento; 

    function __construct($arg)
    {
        $this->idSeguimiento = $arg['idSeguimiento'];
        $this->tipo = $arg['tipo'];
        $this->fecha = $arg['fecha'];
        $this->diagnostico = $arg['diagnostico'];
        $this->tratamiento = $arg['tratamiento'];
    }


    public function createSeguimiento()
    {
        global $connect;
        $sql= "INSERT INTO seguimientoCondiciones VALUES('$this->idSeguimiento','$this->tipo','$this->fecha',
                '$this->diagnostico','$this->tratamiento')";
        return $connect->query($sql);
    }

    public static function getSeguimientos()
    {
        global $connect;
        $sql="SELECT idSeguimiento,tipo,fecha,diagnostico,tratamiento FROM seguimientoCondiciones";
        return $result = $connect->query($sql);
    }

    public static function getSeguimientoCondicionesId($id)
    {
        global $connect;
        $sql="SELECT idSeguimiento,tipo,fecha,diagnostico,tratamiento FROM seguimientoCondiciones WHERE idSeguimiento = $id";
        return $result = $connect->query($sql);
    }

    public static function delete($idSeguimiento)
    {
        global $connect;
        $sql=" DELETE FROM seguimientoCondiciones WHERE idSeguimiento = $idSeguimiento";
        return $connect->query($sql);
    }

    public static function updateSegumientoCondiciones($tipo,$fecha,$diagnostico,$tratamiento,$idSeguimiento)
    {
        global $connect;
        $sql= "UPDATE seguimientoCondiciones 
                SET     
                        tipo = '$tipo', 
                        fecha = '$fecha',
                        diagnostico = '$diagnostico',                        
                        tratamiento = '$tratamiento'                        
                WHERE idSeguimiento = '$idSeguimiento'";
        return $connect->query($sql);
    }

    public static function arrayseguimientoCondiciones()
    {
       return [ 'idSeguimiento' => $_POST['idSeguimiento'], 
                'tipo' => $_POST['tipo'], 
                'fecha' => $_POST['fecha'],
                'diagnostico' => $_POST['diagnostico'],
                'tratamiento' => $_POST['tratamiento'],
                ] ; 
    }
}

?>