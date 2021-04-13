<?php
$uzenet="";
require_once "config.php";

if(isset($_POST["gomb"])){
    extract($_POST);
    $sql="INSERT INTO hajo values(null,'{$nev}','{$tipus}','{$utasok}','{$dij}')";
    $stmt=$db->exec($sql);

if($stmt){
    $uzenet="Sikeres adatbeírás.";
}
else{ 
    $uzenet="Nem sikerült az adatbeírás!";
}
}
?>

<form method="post">
    <label>Új hajó neve: </label> <input type="text" name="nev">
    <br>
    <label>Típusa: </label> <input type="text" name="tipus">
    <br>
    <label>Férőhelyek: </label> <input type="text" name="utasok">
    <br>
    <label>Bérleti díja: </label> <input type="text" name="dij">
    <br>
    <input type="submit" value="Beír" name="gomb">
</form>

<div>
    <?=$uzenet?>
</div>