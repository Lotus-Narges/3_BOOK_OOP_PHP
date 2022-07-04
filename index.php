<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-Livres</title>
</head>
<body>

    <?php
        //localhost:8888/OOP-PHP(Book)-Part3/index.php

        include "Livre_class.php";
        include "Auteur_class.php";

        //OBJETS
        $auteur1 = new Auteur("KING", "Stephen ");
        $auteur2 = new Auteur("BBB", "AAAA");

        $livre1 = new Livre("Ca", 1138, 1986, 20, $auteur1);
        $livre2 = new Livre("Simetierre", 374, 1983, 15, $auteur1);
        $livre3 = new Livre("Le Fléau", 823, 1978, 14, $auteur1);
        $livre4 = new Livre("Shining", 447, 1977, 16, $auteur1);

        $livre5 = new Livre("Le Fléau", 823, 1978, 14, $auteur2);
        $livre6 = new Livre("Shining", 447, 1977, 16, $auteur2);

        // echo $auteur1."<br>";
        // echo $livre1."<br>";

        // echo $livre1->getAuteur()->getNom()."<br>";

        var_dump($auteur1);

        echo $auteur1->afficherBibliographie();
        echo "<hr>";
        echo $auteur2->afficherBibliographie();




    ?>

</body>
</html>
