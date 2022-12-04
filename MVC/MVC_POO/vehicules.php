<?php

if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
    $vehicule = null;
    if (isset($_GET['action']) && isset($_GET['vehicule_id'])) {
        $action = $_GET['action'];
        $vehicule_id = $_GET['vehicule_id'];
        switch ($action) {
            case 'edition':
                $vehicule = $unControleur->selectWhereVehicules($vehicule_id);

                break;
            case 'suppression':
                $unControleur->deleteVehicules($vehicule_id);
                break;
        }
    }
    $clients = $unControleur->selectAllClients();
    $techniciens = $unControleur->selectAllTechniciens();
    require_once("templates/vue_insert_vehicule.php");
    if (isset($_POST['valider'])) {
        $unControleur->insertVehicules($_POST);
    }

    if (isset($_POST['modifier'])) {
        $unControleur->updateVehicules($_POST);

    }
}
if (isset($_POST['filtrer'])) {
    $mot = $_POST['mot'];
    $vehicules = $unControleur->selectLikeVehicules($mot);
} else {
    $vehicules = $unControleur->selectAllVehicules();
}

require_once("templates/vue_vehicules.php");
