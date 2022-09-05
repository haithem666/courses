<?php
    include_once '../Model/inscription.php';
    include_once '../Controller/inscriptionC.php';

    $error = "";

    // create adherent
    $inscription = null;
    $idi = null;
    session_start();
    // create an instance of the controller
    $inscriptionC = new inscriptionC();
    
            $inscription = new inscription(
                $idi,
				$_SESSION["idu"],
        $_GET['idf']
            );
            $inscriptionC->ajouterinscription($inscription);
            header('Location:mailer.php');
      
    
    
?>