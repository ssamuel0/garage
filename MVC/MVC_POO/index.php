<?php
session_start();
require_once("controler/config_database.php");
require_once("controler/controleur.class.php");

$unControleur = new Controleur($server, $database, $user, $password);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Garage</title>
</head>

<body>

    <?php
    if (!isset($_SESSION["email"])) {
        echo "           
    <header>
        <nav class='navbar navbar-expand-lg  pt-0 pb-0'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='index.php?page=Garage'><i class='fa-solid fa-warehouse text-light'></i> <span class='first_color'>GAR</span><span class='snd_color'>AGE</span> </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse ' id='navbarNav'>
                    <ul class='navbar-nav '>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' aria-current='page' href='index.php?page=Garage'> <i class='fa-solid fa-house '></i> ACCUEIL</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' href='index.php?page=Intervention'><i class='fa-solid fa-toolbox '></i> INTERVENTIONS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4' >
                            <a class='nav-link' href='index.php?page=Techniciens'><i class='fa-sharp fa-solid fa-hospital-user'></i> TECHNICIENS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' href='index.php?page=Clients'><i class='fa-solid fa-id-card-clip '></i> CLIENTS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link ' href='index.php?page=Véhicules'><i class='fa-solid fa-car '></i> VEHICULES</a>
                        </li>
                    </li>
                    </ul>
                </div>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav '>
                        <li class='nav-item p-2'>
                            <a class='nav-link ' href='index.php?page=Connexion'><i class='fa-solid fa-user text-light border rounded fs-5'></i> Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>   
    
    
";

        /*****Action au clique du boutton se connecter */
        if (isset($_POST["se_connecter"])) {
            $email = $_POST["email"];
            $mdp = $_POST["mdp"];
            $unUser = $unControleur->verifconnexion($email, $mdp);
            if ($unUser == null) {
                echo "Mot de passe incorrect";
            } else {
                $_SESSION["email"] = $unUser["email"];
                $_SESSION["mdp"] = $unUser["mdp"];
                $_SESSION["nom"] = $unUser["nom"];
                $_SESSION["prenom"] = $unUser["prenom"];
                $_SESSION["role"] = $unUser["role"];
                header("location: index.php?page=Garage");
            }
        }

        /*****Action au clique du boutton creer un compte */
        if (isset($_POST['s_incrire'])) {
            $unControleur->CreateNewCompte($_POST);

            if (isset($_POST["s_incrire"])) {
                $email = $_POST["email"];
                $mdp = $_POST["mdp"];
                $unUser = $unControleur->verifconnexion($email, $mdp);
                if ($unUser == null) {
                    echo "Mot de passe incorrect";
                } else {
                    $_SESSION["email"] = $unUser["email"];
                    $_SESSION["mdp"] = $unUser["mdp"];
                    $_SESSION["nom"] = $unUser["nom"];
                    $_SESSION["prenom"] = $unUser["prenom"];
                    $_SESSION["role"] = $unUser["role"];
                    header("location: index.php?page=Garage");
                }
            }
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = "Garage";
        }

        switch ($page) {
            case "Garage":
                require_once("home.php");
                break;
            case "Intervention":
                require_once("templates/vue_interventions.php");
                break;
            case "Techniciens":
                require_once("templates/vue_technicien.php");
                break;
                case "Clients":
                require_once("templates/vue_clients.php");
                break;

                case "Véhicules":
                require_once("templates/vue_vehicules.php");
                break;

            case "Connexion":
                require_once("templates/vue_connexion.php");

                break;

            case "A_Propos":
                require_once("templates/vue_apropos.php");
                break;
            default:
                require_once("erreur.php");
        }
    } else {
    }


    if (isset($_SESSION["email"])) {
        echo "           
    <header>
        <nav class='navbar navbar-expand-lg  pt-0 pb-0'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='index.php?page=Garage'><i class='fa-solid fa-warehouse text-light'></i> <span class='first_color'>GAR</span><span class='snd_color'>AGE</span> </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse ' id='navbarNav'>
                    <ul class='navbar-nav '>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' aria-current='page' href='index.php?page=Garage'> <i class='fa-solid fa-house '></i> ACCUEIL</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' href='index.php?page=Intervention'><i class='fa-solid fa-toolbox '></i> INTERVENTIONS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4' >
                            <a class='nav-link' href='index.php?page=Techniciens'><i class='fa-sharp fa-solid fa-hospital-user'></i> TECHNICIENS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link' href='index.php?page=Clients'><i class='fa-solid fa-id-card-clip '></i> CLIENTS</a>
                        </li>
                        <li class='nav-item p-2 ps-4 pe-4'>
                            <a class='nav-link ' href='index.php?page=Véhicules'><i class='fa-solid fa-car '></i> VEHICULES</a>
                        </li>
                    </li>
                    </ul>
                </div>
                <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav '>
                        <li class='nav-item p-2'>
                            <a class='nav-link ' href='#'><i class='fa-solid fa-user text-light border rounded fs-5'></i> " . $_SESSION['nom'] . " " . $_SESSION['prenom'] . " : " . $_SESSION['role'] . "</a>
                        </li>
                        <li class='nav-item p-2'>
                        <a class='nav-link ' href='index.php?page=Deconnexion'><i class='fa-solid fa-arrow-right-from-bracket text-danger'></i> </a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>   
    
    
";

        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = "Garage";
        }

        switch ($page) {
            case "Garage":
                require_once("home.php");
                break;
            case "Intervention":
                require_once("interventions.php");
                break;
            case "Techniciens":
                require_once("techniciens.php");
                break;
            case "Clients":
                require_once("clients.php");
                break;

            case "Véhicules":
                require_once("vehicules.php");
                break;

            case "Deconnexion":
                session_destroy();
                unset($_SESSION["email"]);
                header("location: index.php?page=Garage");
                break;
            default:
                require_once("erreur.php");
        }
    }



    ?>

    <footer class="container-fluid py-5">
        <div class="row text-light">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <ul>
                    <li class="fw-bolder">Lien Utiles</li>
                    <li class="li_sp">Accueil</li>
                    <li class="li_sp">Interventions</li>
                    <li class="li_sp">Techniciens</li>
                    <li class="li_sp">Clients</li>
                    <li class="li_sp">Vehicules</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <ul>
                    <li class="fw-bolder">Contact</li>
                    <li class="li_sp">6 Impasse des 2 cousins</li>
                    <li class="li_sp">75017 Paris</li>
                    <li class="li_sp">+330110101010</li>
                    <li class="li_sp">contact@garage.com</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <ul>
                    <li class="fw-bolder">Suivez-nous</li>
                    <li class="li_sp"><i class="fa-brands pe-2  fs-4 fa-github text-white"></i> Github</li>
                    <li class="li_sp"><i class="fa-brands pe-2  fs-4  fa-twitter text-white"></i> Twitter</li>
                    <li class="li_sp"><i class="fa-brands pe-3  fs-4 fa-linkedin-in text-white"></i> Linkedin</li>
                    <li class="li_sp"><i class="fa-brands pe-2  fs-4 fa-youtube text-white"></i> Youtube</li>
                    <li class="li_sp"><i class="fa-brands pe-3  fs-4 fa-instagram text-white"></i> Instagram</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 ">
                <h1><a class='navbar-brand' href='index.php?page=Garage'><i class='fa-solid fa-warehouse text-light'></i> <span class='first_color'>GAR</span><span class='snd_color'>AGE</span> </a></h1>
                <h6 class="fw-bolder ">Inscription à la newsletter</h6>
                <input type="email" class="p-2" name="" id="" placeholder="Entrer votre email"><button type="submit" class="p-2">Je m'inscrit</button>
            </div>
        </div>
        <hr class="text-white">
        <p class="text-center text-white pt-2"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright @ 2022 Garage</p>
    </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>


</html>