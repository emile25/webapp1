<?php
include ('/conn.php');

$stmt = $conn->prepare("SELECT ID, productnaam, prijs FROM menuitems;");
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result2 as $key => $value) {
?>
<div class="test" style="background-color: red; width: 200px" ></div>
<?php
echo '<br>id: ' . $value['id'];
echo '<br> productnaam: ' . $value['productnaam'];
echo '<br>prijs: ' .  $value['prijs'] ;
}
?>
</div>

