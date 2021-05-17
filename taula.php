<!DOCTYPE html>
<html>

<head>
    <title>Taula</title>
    <?php
    require "includes/head.php";
    ?>
</head>

<body>
    <form action="taula.php" method="GET">
        <label>Nombre</label>
        <select name="filtro1">
            <?php
            $query = "SELECT Nombre_Personaje FROM Personaje ORDER BY Nombre_Personaje";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value = \"$row[Nombre_Personaje]\"> $row[Nombre_Personaje]</option>";
            }
            $Where = "";
            if (isset($_GET["filtro1"])) {
                $Where = "WHERE Nombre_Personaje=\"$_GET[filtro1]\"";
            }
            ?>

        </select>
        <button type="submit">Submit</button>
    </form>
    <h1>Taula</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Historia</th>
                <th>Plano</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT Nombre_Personaje, Descripcion, Historia, fkNombre_Plano FROM Personaje $Where ORDER BY Nombre_Personaje;";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                "<tr>
         <td>$row[Nombre_Personaje]</td>
         <td>$row[Descripcion]</td>
         <td>$row[Historia]</td>
         <td>$row[fkNombre_Plano]</td>
         </tr>";
            }
            ?>
        </tbody>

    </table>
</body>

</html>