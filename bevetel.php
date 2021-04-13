<?php
    $hajoLista="";
    $kivalasztott="";
    $bevetelLista="";
    require_once "config.php";
    $sql="Select nev from hajo";
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        extract($row);
        $hajoLista.="<option>{$nev}</option>";
    }

    if(isset($_POST["gomb"])){
        $kivalasztott=$_POST["hajok"];
        $sql="SELECT nev, sum(nap)*dij as 'bevetel' from tura inner join hajo on hajo.id=tura.hajo_id 
                where nev='{$kivalasztott}' group by nev";
        $stmt=$db->query($sql);
        while($row=$stmt->fetch()){
            extract($row);
            $bevetelLista.="<tr><td>{$row["nev"]}"." -> "."</td><td>{$row["bevetel"]}</td></tr>";
        }
    }
?>

<h1>Bevételek</h1>

<form method="post">
    <select name="hajok">
        <option value="0">
            Válassz egy hajót!
        </option>
        <?=$hajoLista?>
    </select>

<table>
    <thead>
        <th>Hajó</th>
        <th>Bevétele</th>
    </thead>

    <tbody>
        <?=$bevetelLista?>
    </tbody>

</table>
<input type="submit" value="Kilistáz" name="gomb">
</form>