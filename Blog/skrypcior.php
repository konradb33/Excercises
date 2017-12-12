<?php

$autor = $_POST['autor'];
$artykul = $_POST['artykul'];
$zawartosc = $_POST['zaw'];

echo "<h1>".$autor."</h1><br>";
echo "<h2>".$artykul."</h2><br>";
echo "<h3>".$zawartosc."</h3><br>";


if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      
      $expensions= array("jpeg","jpg","png");

  if($file_size > 2097152){
         $errors[]='Plik moze byc minimum 2MB';
      }
    if(empty($errors)==true){
         move_uploaded_file($file_tmp,"./images/".$file_name);
         echo "";
      }else{
         print_r($errors);
      }
   }
echo '<img src="./images/' . $file_name. '">'.' <br>';
echo date('d-m-Y H:i:s', strtotime('+5 hour'));