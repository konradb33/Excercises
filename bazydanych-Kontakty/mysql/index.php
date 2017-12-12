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
        
        $result = mysql_query("SELECT * FROM products ORDER BY id");

        while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
          
          $format = "<tr><th>%d</th><th>%s</th><th>%s</th></tr>";
          printf($format,$row[0],$row[1],$row[2]);
          
        }
  
        echo "</table>";
            
    ?>
    
</body>

</html>