<?php

$host = "localhost";
$user = "root";
$mdp = "";
$name = "filmoteca";

$conn = new mysqli($host, $user, $mdp, $name); #La connexion est stockée dans la variable '$conn'.

echo "<h1>Liste des films</h1><br>";
$sql = "SELECT * FROM Movie";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>" .
            "<p><b>Année : </b>" . $row["year"] . "</p>" .
            "<p><b>Synopsis : </b>" . $row["synopsis"] . "</p>" .
            "<p>Directeur : <b>" . $row["director"] . "</b></p>" .
            "<p>Genre : <b>" . $row["genre"] . "</b></p>";
    }
} else {
    echo "Aucun film trouvé.";
}

$conn->close();
?>