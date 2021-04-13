<?php
require_once "config.php";
$strAdat="";
$sql="SELECT nev, tipus, round(dij/utas, 0) as 'Dij' from hajo ORDER by nev";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strAdat.="<tr><td>{$row["nev"]}</td><td>{$row["tipus"]}</td><td>{$row["Dij"]}</td></tr>";
}
?>
<h1 class="text-center">Az 1 főre jutó napi bérleti díj</h1>
<div class="container bg-light d-flex justify-content-center text-center">
<br>
<table>
    <thead>
        <th>Hajó</th>
        <th>Típus</th>
        <th>Díj/személy</th>
    </thead>

    <tbody>
        <?=$strAdat?>
    </tbody>

</table>
</div>