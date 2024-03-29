<!-- create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->
<?php
require_once("./Models/Movie.php");
require_once("./DB.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('./Views/partials/header.php')
    ?>
    <h2>Movies</h2>
    <table>
        <thead>
            <tr>
                <th>Movie</th>
                <th>Category</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['movies'] as $movie) {
            ?>
                <tr>
                    <td><?= $movie->title ?></td>
                    <td>
                        <?= $movie->getCategory() ?>
                    </td>
                    <td><?= $movie->year ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>