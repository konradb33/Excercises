<!DOCTYPE html>
<html>
    <head>
        <title>Kontakty</title>
        <meta charset="UTF-8" />
    </head>
    
<body>

    <h1>Lista kontaktów</h1>
    
    <?php
    
        include('db_connect.php');
        
        if($result = $mysqli->query("SELECT * FROM Spis")){
            
            if($result->num_rows > 0){
                
                echo "<table border='1' cellpadding='5' rules='all'>";
                
                echo "<tr><td>Id</td><td>Imie</td><td>Nazwisko</td><td>Telefonu</td><td>Email</td></tr>";
                
                while($row = $result->fetch_object()){
                  $id = $row->Id;
                  $format = "<tr><td>%d</td><td>%s</td><td>%s</td><td>%d</td><td>%s</td><td><a href='usuwanie.php?id=$id'>Usuń</td><td><a href='edycja_dodawanie.php?id=$id'>Edytuj</td></tr>";
                  printf($format,$row -> Id,$row -> Imie,$row->Nazwisko,$row ->Telefon,$row ->Email);
                  
                }
                
                echo "</table>";
                
            } else {
                echo "Brak rekordów";
            }
            
        } else {
            echo "Błąd: " . $mysqli->error;
        }
            
    ?>
    <a href="edycja_dodawanie.php">Dodaj nowy kontakt</a>
</body>

</html>