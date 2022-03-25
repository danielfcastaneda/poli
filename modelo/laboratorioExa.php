<?php
require_once'connect.php';

class LaboratorioExa{

 private $codigo;
 private $descripcion;
 private $fechaLaboratorio;
 private $nombreArchivo; 

    function __construct($arg)
    {
        $this->codigo = $arg['codigo'];
        $this->descripcion = $arg['descripcion'];
        $this->fechaLaboratorio = $arg['fechaLaboratorio'];
        $this->nombreArchivo = $arg['nombreArchivo'];
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO laboratorioexa VALUES('$this->codigo','$this->descripcion',
                '$this->fechaLaboratorio','$this->nombreArchivo')";
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
        $sql="SELECT * FROM laboratorioexa WHERE codigo = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($codigo)
    {
        global $connect;
        $sql=" DELETE FROM laboratorioexa WHERE codigo = $codigo";
        return $connect->query($sql);
    }

    public function modifylaboratorioexa($valor)
    {
        global $connect;
        $sql= "UPDATE laboratorioexa 
                SET     codigo = $this->codigo ,
                        descripcion = $this->descripcion, 
                        fechaLaboratorio = $this->fechaLaboratorio,
                        nombreArchivo = $this->nombreArchivo                        
                WHERE codigo = $valor";
        return $connect->query($sql);
    }

    public static function arraylaboratorioexa()
    {
       return [ 'codigo' => $_POST['codigo'], 
                'descripcion' => $_POST['descripcion'],
                'fechaLaboratorio' => $_POST['fechaLaboratorio'], 
                'nombreArchivo' => $_POST['nombreArchivo']
                ] ; 
    }
}

?>