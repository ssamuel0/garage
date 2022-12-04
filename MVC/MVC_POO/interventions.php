<?php
if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
    $intervention = null;
    $clients = null;
    if (isset($_GET['action']) && isset($_GET['intervention_id'])) {
        $action = $_GET['action'];
        $intervention_id = $_GET['intervention_id'];
        switch ($action) {
            case 'edition':
                $intervention = $unControleur->selectWhereInterventions($intervention_id);

                break;
            case 'suppression':
                $unControleur->deleteInterventions($intervention_id);
                break;
            case 'voir':
                $clients = $unControleur->selectClientsIntervention($intervention_id);
                break;
        }
    }


    $clients = $unControleur->selectAllClients();
    $techniciens = $unControleur->selectAllTechniciens();

    require_once("templates/vue_insert_intervention.php");
    if (isset($_POST['valider'])) {
        $unControleur->insertInterventions($_POST);
    }
    if (isset($_POST['modifier'])) {
        $unControleur->updateInterventions($_POST);
 
    }
}
if (isset($_POST['filtrer'])) {
    $mot = $_POST['mot'];
    $interventions = $unControleur->selectLikeIntrventions($mot);
} else {
    $interventions = $unControleur->selectAllInterventions();
}

require_once("templates/vue_interventions.php");

