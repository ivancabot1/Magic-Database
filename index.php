<!DOCTYPE html>
<html>

<head>
    <title>Magic DB</title>
    <?php
    require "includes/head.php";
    ?>
</head>

<body>
    <h1>Magic DB</h1>
    <?php
    if (!$bbdd) {
        echo "Error";
        print(mysqli_connect_error());
    }
    ?>

</body>

</html>