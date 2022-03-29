
<?php
    require_once'../modelo/seguimientoCondiciones.php';

    /*PROVISIONAL*/

/*SECCION DE DIRECCIONAMIENTO DE LABORATORIO
----------------------------------------------------------------------*/

    if (isset($_POST['seg'])) 
    {    
        switch ($_POST['seg']) 
        {
            case 'create': 
                $segControlCreate = new seguimientoCondiciones(seguimientoCondiciones::arrayseguimientoCondiciones());
                $segControlCreate->createSeguimiento(); 
                break;

            case 'update':
                $segControlUpdate = new seguimientoCondiciones(seguimientoCondiciones::arrayseguimientoCondiciones());
        $segControlUpdate->updateSegumientoCondiciones($_POST['tipo'],$_POST['fecha'],$_POST['diagnostico'],$_POST['tratamiento'],$_POST['idSeg']);
                break;

            case 'delete':
                seguimientoCondiciones::delete($_POST['index']);
                break;
            
            default:
                echo "errorControl";
                break;
        }
    }




?>
