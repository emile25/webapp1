<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <title>chapsallonetjes</title>
</head>

<body class="body">
    
    <?php include('./includes/header.php'); ?>
    
    <main class="menu">

        <div class="container-producten">
            <?php
            include('./dbcalls/read.php');

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
        </div>

        <footer>

        </footer>
</body>

</html>