
<?php
    require_once'../modelo/laboratorioExa.php';

    /*PROVISIONAL*/

/*SECCION DE DIRECCIONAMIENTO DE LABORATORIO
----------------------------------------------------------------------*/

    if (isset($_POST['exa'])) 
    {    
        switch ($_POST['exa']) 
        {
            case 'create': 
                $exa1 = new Ins(Ins::arrayIns());
                $exa1->create(); 
                break;

            case 'update':
                $exa2 = new Ins(Ins::arrayIns());
                $exa2->modifyIns($_POST['idAntes']);
                break;

            case 'delete':
                Ins::delete($_POST['index']);
                break;
            
            default:
                echo "errorControl";
                break;
        }
    }




?>
