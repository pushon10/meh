<?php

include ("DBCONNECT1.php");

if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

$sql = "Select * from marvelmovies
        Where title LIKE 'X-Men'";

$result = $db -> query($sql);

while($row = $result->fetch_array()){
    echo "<p><strong>{$row[title]}</strong>: {$row[yearReleased]}</p>";
}

$result->close();

?>