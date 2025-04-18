<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title></title>
</head>





<?php
include("conn.php");

$searchResult = $_GET["searchresult"];

$test = '%' . $searchResult . '%';

$stmt = $conn->prepare("SELECT * FROM menuitems WHERE Productnaam LIKE :product;");
$stmt->bindParam(":product", $test);
$stmt->execute();

$result = $stmt->fetchAll();
?>
<section class="search">
<?php


foreach ($result as $value) {
    echo '<div class="menuitems-box">';
    echo '<br> <h1>productnaam</h1>' . $value['productnaam'];
    echo '<div class="container-img">';
    echo '<br> <img alt=" ' . $value['productnaam'] . '" src=' . $value['img'] . "></img>";
   echo '</div>';


   echo '<div class="container-uitleg">';
    echo '<br> <h1> uitleg</h1>' . $value['uitleg'];
    echo '</div>';

    echo '<div class="container-prijs">';
    echo '<div class="blok-prijs">' . $value['prijs'];
    echo '</div>';
    echo '</div>';
   
   
    echo '</div>';
}


?>
</section>


</html>