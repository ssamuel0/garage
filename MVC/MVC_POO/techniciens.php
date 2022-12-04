<?php

if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
    $technicien = null;
    $vehicules = null;
    $interventions = null;
    if (isset($_GET['action']) && isset($_GET['technicien_id'])) {
        $action = $_GET['action'];
        $technicien_id = $_GET['technicien_id'];
        switch ($action) {
            case 'edition':
                $technicien = $unControleur->selectWhereTechniciens($technicien_id);

                break;
            case 'suppression':
                $unControleur->deleteTechniciens($technicien_id);
                break;
            case 'voirInt':
                $interventions = $unControleur->selectInterventionTechniciens($technicien_id);
                break;

            case 'voirVeh':
                $vehicules = $unControleur->selectVehiculesTechniciens($technicien_id);
                break;
        }
    }

    require_once("templates/vue_insert_technicien.php");
    if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {

        if ($interventions != null) {
            $technicien = $unControleur->selectWhereTechniciens($technicien_id);

            require_once("templates/vue_intervention_technicien.php");
        }
        if ($vehicules != null) {
            $technicien = $unControleur->selectWhereTechniciens($technicien_id);
    
            require_once("templates/vue_vehicule_technicien.php");
        }
        //  else {
    
        //     echo '<div class="sectionID  " >
        //     <div class="bloc-vue position-relative rounded-2" id="bloc_view">
        //     <button class="rounded-2 border-light m-1" id="exitBtn"> <i class="fa-solid fa-x text-danger"></i>
        //     </button>
        //     <h5 class="text-white text-center pt-1">Liste des interventions du client</h5>
         
        //         <div class=" container-fluid p-5">
        //        <h3 class="text-center text-white">Vide</h3>
                
        //         </div>
        //     </div>
        // </div>';
        // }
    }

    if (isset($_POST['valider'])) {
        $unControleur->insertTechniciens($_POST);
    }

    if (isset($_POST['modifier'])) {
        $unControleur->updateTechniciens($_POST);
 
    }
}
if (isset($_POST['filtrer'])) {
    $mot = $_POST['mot'];
    $techniciens = $unControleur->selectLikeTechniciens($mot);
} else {
    $techniciens = $unControleur->selectAllTechniciens();
}

require_once("templates/vue_technicien.php");
