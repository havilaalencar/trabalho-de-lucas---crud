<?php

include_once("conect.php");
include_once("Crud.php");

$obj = new Crud($conect);

$obj->readInfo();
$dados = $obj->getAll();

echo "<link rel='stylesheet' href='css/style.css'>";
echo "<main>";
echo "<header>delete registro!</header>";

echo "<table border='1'>";
echo "<th>nome</th>
    <th>idade</th>
    <th>e-mail</th>
    <th>data</th>
    <th>exluir</th></tr>";

foreach($dados as $info){
    echo "<tr>
            <td>".$info['nome']."</td>
            <td>".$info['idade']."</td>
            <td>".$info['email']."</td>
            <td>".$info['data_now']."</td>
            <td><a href=delete.php?id=".$info['idclientes'].">excluir</a></td>
          </tr>";
}    
echo "</table>";
echo "</main>";
?>  