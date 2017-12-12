<!DOCTYPE html>
<html>
    <head>
        <title>Usuwanie kontaktu</title>
        <meta charset="UTF-8" />
    </head>
    
<body>
  <?php
   include('db_connect.php');
   $id = $_GET['id'];
  
  if($stat=$mysqli->prepare("Delete from Spis where Id=?"))
  {
    $stat ->bind_param("i", $id);
    $stat ->execute();
    $stat ->close();
  }
  
  header("Location: index.php");  
  ?>
  
  
  
  </body>
</html>