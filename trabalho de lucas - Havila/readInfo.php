<?php

include_once("conect.php");
include_once("Crud.php");



    
    
    $nome = $_POST['nome'];
    
    $obj = new Crud($conect);
    
    $dado = $obj->readInfoAll($nome);
    
    
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<main>";
    echo "<header>registros encontrados</header>";
    
    echo "<table border='1'>";
    echo "<th>nome</th>
    <th>idade</th>
    <th>e-mail</th>
    <th>data</th></tr>";


    echo "<br>";
    foreach($dado as $info){
        echo "<tr>
        <td>".$info['nome']."</td>
        <td>".$info['idade']."</td>
        <td>".$info['email']."</td>
        <td>".$info['data_now']."</td>
        </tr>";  
    }   
    
    echo "</table>";

    echo "</main>"
?>