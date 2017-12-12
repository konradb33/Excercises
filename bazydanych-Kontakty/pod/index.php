<!DOCTYPE html>
<html>
    <head>
        <title>Produkty</title>
        <meta charset="UTF-8" />
    </head>
    
<body>

    <h1>Lista rekordów</h1>
    
    <?php
    
        include('db_connect.php');
  
        echo "<table>";
                
        echo "<tr><th>ID</th><th>Nazwa</th><th>Kategoria</th></tr>";
        
        $sql = 'SELECT * FROM products ORDER BY id';
        foreach ($x -> query($sql) as $row) {
    
          $format = "<tr><th>%d</th><th>%s</th><th>%s</th></tr>";
          printf($format,$row['id'],$row['name'],$row['category']);
          
        }
  
        echo "</table>";
              
    ?>
    
</body>

</html>