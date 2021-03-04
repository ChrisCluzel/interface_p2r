<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
        $action = $_REQUEST['action'];





        switch ($action) {


          //traitement pour fournisseur P2r
          case 'read':


          switch ($_SESSION['fournisseur']) {
            case 'p2r':
              load_csv();
              break;

            case 'Europacc':
              echo "A cpmlété";

              break;

              //case 'variable':
                // code...
              //  break;

          break;

          }


        }

?>
</body>
</html>
