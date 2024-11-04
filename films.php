<?php

$host = "localhost";
$user = "root";
$mdp = "";
$name = "filmoteca";

$conn = new mysqli($host, $user, $mdp, $name);

echo "<h1>Liste des films</h1><br>";
$sql = "SELECT * FROM Movie";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td>" .
            "<td>" . $row["year"] . "</td>" .
            "<td>" . $row["synopsis"] . "</td>" .
            "<td>" . $row["director"] . "</td>" .
            "<td>" . $row["genre"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun film trouvé.";
}

$conn->close();
?>