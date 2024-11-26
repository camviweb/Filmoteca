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
    echo "<table>" .
        "<tr>" .
        "<th>Affiche</th>" .
        "<th>Titre</th>" .
        "<th>Année</th>" .
        "<th>Synopsis</th>" .
        "<th>Directeur</th>" .
        "<th>Genre</th>" .
        "<th>Notation</th>" .
        "</tr>";
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

<a href="edit.php"><button>Editer</button><br></a>
<a href="delete.php"><button>Supprimer</button><br></a>
<a href="grade.php"><button>Noter</button><br></a>
<a href="comment.php"><button>Laisser un commentaire/button><br></a>