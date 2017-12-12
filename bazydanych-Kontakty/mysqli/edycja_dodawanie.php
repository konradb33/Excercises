<?php
include('db_connect.php');
function createForm($f_imie='',$f_nazwisko='',$f_telefon='', $f_email='', $error='',$id='') { ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php if($id != '') { echo "Edytuj kontakt"; } else { echo "Dodaj kontakt"; } ?></title>
        <meta charset="UTF-8" />
    </head>
    
<body>
      <h1><?php if($id != '') { echo "Edytuj kontakt"; } else { echo "Dodaj kontakt"; } ?></h1>
            
            <?php if($error != '') {
                echo "<div style='color:red; padding: 5px'>" . $error . "</div>";
            } ?>
            
            <form action="" method="POST">
                <div>
                    <?php if($id != '') { ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <p> ID: <?php echo $id; ?></p>
                    <?php } ?>
                    
                    <p><label>Imie: </label><input type="text" name="imie" value="<?php echo $f_imie; ?>" /></p>
                    <p><label>Nazwisko: </label><input type="text" name="nazwisko" value="<?php echo $f_nazwisko; ?>" /></p>
                    <p><label>Telefon: </label><input type="integer" name="telefon" value="<?php echo $f_telefon; ?>" /></p>
                    <p><label>Email: </label><input type="text" name="email" value="<?php echo $f_email; ?>" /></p>
                    <input type="submit" name="submit" value="Wyslij" />
                    
                </div>
            </form>
        
        </body>
    </html>
<?php }
      if(isset($_GET['id'])){
          /* Edytowanie kontaktu */
          if(isset($_POST['submit'])){
        
              if (is_numeric($_POST['id'])){
                $id = $_POST['id'];
            $imie = htmlentities($_POST['imie'], ENT_QUOTES);
            $nazwisko = htmlentities($_POST['nazwisko'], ENT_QUOTES);
            $telefon = htmlentities($_POST['telefon'], ENT_QUOTES);
            $email = htmlentities($_POST['email'], ENT_QUOTES);
                
            if($imie == '' || $nazwisko == '' || $telefon == '' || $email == ''){
                $error = 'Wypełnij wszystkie pola';
                createForm($imie,$nazwisko,$telefon,$email,$error);
            } else {
                if($stmt = $mysqli->prepare("UPDATE Spis SET Imie = ?,Nazwisko = ?,Telefon = ?,Email = ? WHERE id = ?")){
                    $stmt->bind_param("ssisi",$imie,$nazwisko,$telefon,$email,$id);
                    $stmt->execute();
                    $stmt->close();
                } else {
                    echo "Błąd zapytania";
                }
                
                header("Location: index.php");
            }
            
        }
        
    } else {
        if(is_numeric($_GET['id']) && $_GET['id'] > 0 ){
            
            $id = $_GET['id'];
            
            if($stmt = $mysqli->prepare("SELECT * FROM Spis WHERE id = ?")){
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $stmt->bind_result($id,$imie,$nazwisko,$telefon,$email);
                $stmt->fetch();
                createForm($imie,$nazwisko,$telefon,$email,NULL,$id);
                $stmt->close();
            } else {
                echo "Błąd zapytania";
            }
            
        } else {
            header("Location: index.php");
        }
    }
    
} else {
    /*Dodanie nowego kontaktu*/
    
    if(isset($_POST['submit'])){
        
        $imie = htmlentities($_POST['imie'], ENT_QUOTES);
        $nazwisko = htmlentities($_POST['nazwisko'], ENT_QUOTES);
        $telefon = htmlentities($_POST['telefon'], ENT_QUOTES);
        $email = htmlentities($_POST['email'], ENT_QUOTES);
      
        if($imie == '' || $nazwisko == '' || $telefon == '' || $email == ''){
            $error = 'Wypełnij wszystkie pola';
            createForm($imie,$nazwisko,$telefon,$email,$error);
        } else {
            if($stmt = $mysqli->prepare("INSERT Spis (Imie,Nazwisko,Telefon,Email) VALUES (?,?,?,?)")){
                $stmt->bind_param("ssis",$imie,$nazwisko,$telefon,$email);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "Błąd zapytania";
            }
            
            header("Location: index.php");
        }
        
    } else {
        createForm();
    }
    
}

$mysqli->close();

?>