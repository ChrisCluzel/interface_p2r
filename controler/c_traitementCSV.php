<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
        $action = $_REQUEST['action'];
        switch ($action) {
          case 'read_p2r':
            read_csv();
            break;

        }

?>
</body>
</html>
