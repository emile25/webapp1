<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body class="body-login">
<h1>login voor admin</h1>
    <div class="container-login">

<form method="post" action="./dbcalls/checklogin.php">
    <input type="text" name="username">
    <input type="text" name="password">
    
    <input type="submit" value="login">
</form>
</div>


</body>
</html>
