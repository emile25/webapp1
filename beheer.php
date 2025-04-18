<?php

session_start();
if (isset ($_SESSION['username']));

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="body">
<?php include('./includes/header.php'); ?>

<h1>admin</h1>

<form action="./dbcalls/create.php" method="post">
    <label >typ hier je gerecht naam in</label><br>
    <input type="text" name="gerecht" id="1">
    <input type="submit" value="submit">
</form>
</body>
</html>




<?php

include("./dbcalls/conn.php");
include('./dbcalls/read.php');


//Het loopen van de database gegevens
foreach ($result as $value) {

?>
  
    <form action="./dbcalls/update.php" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $value['ID']; ?>" >
        <input type="text" name="productnaam"  value="<?php echo $value['productnaam']; ?>">
        <input type="text" name="Prijs" id="" value="<?php echo $value['prijs']; ?>">
        <input type="text" name="img" id="" value="<?php echo $value['img']; ?>">
        <input type="text" name="uitleg" id="" value="<?php echo $value['uitleg']; ?>">

        <button type="submit">Update</button>
    </form>

    <?php

    
    echo '<form action="./dbcalls/delete.php" method="post">';
    echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
    echo '<input type="submit" name="" value="delete" > ';
    echo '</form>';

    echo '</div>';
}
?>

