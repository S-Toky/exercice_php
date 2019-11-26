<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>

<body>
    <form action="list.php" method="post">

        <input type="text" name="nom" placeholder="Nom"> <br> <br>
        <input type="text" name="prenom" placeholder="Prénom"> <br> <br>
        <input type="submit" value="Ajouter">
    </form>
    <p>
        <?php
        if (isset($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
            echo strip_tags("Bonjour" . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . "!");
        }
        ?>
    </p>
    <p> clique <a href="list.php">ici</a> pour changer </p>

</body>

</html>