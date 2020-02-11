<?php
$db_Type = "mysql";
$host = "localhost";
$dbName = "netland";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $userName, $password);
    echo "<h1> Welkom op het netland beheerderspaneel </h1>";
} catch(PDOExeption $e) {
    echo $e->getMessage();
}


$result = $conn->query('select * from series');

while($row=$result->fetch()){
    echo "Title: ".$row['title']. ' ';
    echo "Rating: ".$row['rating'].'<br>';

}

echo '<br>';
$result = $conn->query('select * from films');

while($row=$result->fetch()){
    echo "Title: ".$row['title']. ' ';
    echo "Duur: ".$row['duur'].'<br>';

}

?>


