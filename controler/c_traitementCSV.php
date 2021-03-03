<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
        $action = $_REQUEST['action'];





        switch ($action) {


          //traitement pour fournisseur P2r
          case 'read_p2r':
            load_csv();
            break;

        }

?>
</body>
</html>
