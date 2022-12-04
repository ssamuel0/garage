<?php
if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {

    $interventions = null;
    $vehicules = null;
    $client = null;
    if (isset($_GET['action']) && isset($_GET['client_id'])) {
        $action = $_GET['action'];
        $client_id = $_GET['client_id'];
        switch ($action) {
            case 'edition':
                $client = $unControleur->selectWhereClients($client_id);

                break;
            case 'suppression':
                $unControleur->deleteClients($client_id);
                break;
            case 'voirInt':
                $interventions = $unControleur->selectInterventionClients($client_id);
                break;

            case 'voirVeh':
                $vehicules = $unControleur->selectVehiculesClients($client_id);
                break;
        }
    }


    require_once("templates/vue_insert_client.php");
    
if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {

    if ($interventions != null) {
        $client = $unControleur->selectWhereClients($client_id);

        require_once("templates/vue_intervention_clients.php");
    }
    if ($vehicules != null) {
        $client = $unControleur->selectWhereClients($client_id);

        require_once("templates/vue_vehicules_client.php");
    }
    //  else {

    //     echo '<div class="sectionID  " >
    //     <div class="bloc-vue position-relative rounded-2" id="bloc_view">
    //     <button class="rounded-2 border-light m-1" id="exitBtn"> <i class="fa-solid fa-x text-danger"></i>
    //     </button>
    //     <h5 class="text-white text-center pt-1">Liste des interventions de client</h5>
     
    //         <div class=" container-fluid p-5">
    //        <h3 class="text-center text-white">Vide</h3>
            
    //         </div>
    //     </div>
    // </div>';
    // }
}
    if (isset($_POST['valider'])) {
        $unControleur->insertClients($_POST);
    }
    if (isset($_POST['modifier'])) {
        $unControleur->updateClients($_POST);
    }
}

if (isset($_POST['filtrer'])) {
    $mot = $_POST['mot'];
    $clients = $unControleur->selectLikeClients($mot);
} else {
    $clients = $unControleur->selectAllClients();
}



require_once("templates/vue_clients.php");
