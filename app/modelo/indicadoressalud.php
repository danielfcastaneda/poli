<?php
require_once'connect.php';

class indicadoressalud{

 private $IIdindicador;
 private $frecCardiaca;
 private $tensArterial;
 private $saturaOxigeno;
 private $distanciarecorridas ;
    function __construct($arg)
    {
        $this->IIdindicador = $arg['IIdindicador'];
        $this->frecCardiaca = $arg['frecCardiaca'];
        $this->tensArterial = $arg['tensArterial'];
        $this->saturaOxigeno = $arg['saturaOxigeno'];
        $this->distanciarecorridas = $arg['distanciarecorridas'];
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO indicadoressalud VALUES('$this->IIdindicador','$this->tensArterial','$this->frecCardiaca',
                '$this->saturaOxigeno','$this->distanciarecorridas')";
        return $connect->query($sql);
    }

    public static function read()
    {
        global $connect;
        $sql="SELECT * FROM indicadoressalud";
        return $result = $connect->query($sql);
    }

    public static function update($valor)
    {
        global $connect;
        $sql="SELECT * FROM laboratorioexa WHERE IIdindicador = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($IIdindicador)
    {
        global $connect;
        $sql=" DELETE FROM laboratorioexa WHERE IIdindicador = $IIdindicador";
        return $connect->query($sql);
    }

    public function modifylaboratorioexa($valor)
    {
        global $connect;
        $sql= "UPDATE laboratorioexa 
                SET     IIdindicador = $this->IIdindicador ,
                        frecCardiaca = $this->frecCardiaca, 
                        tensArterial = $this->tensArterial,
                        saturaOxigeno = $this->saturaOxigeno     
                         distanciarecorridas = $this->distanciarecorridas                      
                WHERE IIdindicador = $valor";
        return $connect->query($sql);
    }

    public static function arraylaboratorioexa()
    {
       return [ 'IIdindicador' => $_POST['IIdindicador'], 
                'tensArterial' => $_POST['tensArterial'], 
                'frecCardiaca' => $_POST['frecCardiaca'],
                'saturaOxigeno' => $_POST['saturaOxigeno']
                'distanciarecorridas' => $_POST['distanciarecorridas']
                ] ; 
    }
}

?>