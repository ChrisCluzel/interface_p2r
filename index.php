<link rel="stylsheet" type="text/css" href="util/cssGeneral">
<meta charset="utf-8" />
<?php

  session_start();

  require_once("fonction/fonctions.inc.php");
  // require_once("util/class.pdoVanille.inc.php");

  if(!isset($_REQUEST['uc']))
       $uc = 'accueil';
  else
  	$uc = $_REQUEST['uc'];


//controleur PRINCIPAL
  switch($uc)
  {
      case 'accueil':
        {include("view/v_accueil.html");}
        break;


          // action du form de selection du fichier
        case 'loadCatalogue':
          {


            include("controler/c_traitementCSV.php");

          }
          break;


  }
?>
