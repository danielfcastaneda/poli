
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
                $exa1 = new LaboratorioExa(LaboratorioExa::arrayLaboratorioExa());
                $exa1->create(); 
                break;

            case 'update':
                $exa2 = new LaboratorioExa(LaboratorioExa::arrayLaboratorioExa());
                $exa2->modifyLaboratorioExa($_POST['idAntes']);
                break;

            case 'delete':
                LaboratorioExa::delete($_POST['index']);
                break;
            
            default:
                echo "errorControl";
                break;
        }
    }




?>
