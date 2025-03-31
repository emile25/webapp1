<?php

session_start();
if (isset{ $_SESSION['username']})
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>admin</h1>

<form action="./dbcalls/create.php" method="post">
    <label >typ hier je gerecht naam in</label><br>
    <input type="text" name="gerecht" id="1">
    <input type="submit" value="submit">
</form>
</body>
</html>
<?php}
else{
    header
}

