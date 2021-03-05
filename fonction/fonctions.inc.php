<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php

function read($csv){
    $file = fopen($csv, 'r');

    while ($line = fgetcsv($file, 1024, ";")) {

        if (!empty($line[0])) {
              $array[] = $line;
        }

    }

    return $array;
    fclose($file);
}






    function load_csv(){
    $nomOrigine = $_FILES['cataloguecsv']['name'];
    $elementsChemin = pathinfo($nomOrigine);



    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("csv");
    if (!(in_array($extensionFichier, $extensionsAutorisees))) {
        echo "<br> <br> <h1>Le fichier n'est pas un CSV</h1>";
        header('Refresh:3;url=index.php?uc=accueil');
    }


    else {

      // Copie dans le repertoire du script avec un nom
      // incluant l'heure a la seconde pres
      $repertoireDestination = dirname(__DIR__) . '\in\/';
      $nomDestination = "cataloguecsv_temp".".".$extensionFichier;

      if (move_uploaded_file($_FILES["cataloguecsv"]["tmp_name"], $repertoireDestination.$nomDestination))
      {
          echo "Le fichier temporaire ".
                  " a été déplacé vers ".$repertoireDestination.$nomDestination;
      } else {
          echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                  "Le déplacement du fichier temporaire a échoué".
                  " vérifiez l'existence du répertoire ".$repertoireDestination;
      }


      $csv = $repertoireDestination.$nomDestination;

      $csv = read($csv);
      createRQT($csv);
      // echo '<pre>';
      // print_r($csv);
      // echo '</pre>';
      }
    }
  function createRQT($csv)
  	{
      $monPdo = $_SESSION['pdo'];
  		 foreach ($csv as $ligne) {



         $rqt = "insert ignore into  produitp2r VALUES(".$ligne[0].", '".$ligne[1]."', ".$ligne[2].", ".$ligne[3].", ".$ligne[4].", ".$ligne[5].", '".$ligne[6]."', null , ".$ligne[8].",  '".$ligne[9]."','".$ligne[10]."')";
        $res = $monPdo->push_into_bdd($rqt);

       echo $res."<br>".$rqt;

  			}


  	}


?>
</body>
</html>
