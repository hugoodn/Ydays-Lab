<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/score.css">
    <title>Score - Qui sera le meilleur</title>
</head>

<body>
    <header><?php require '../compenents/topBar.php' ?></header>

    <main>

        <h2 class="title_classement">Classement General</h2>

        <table>
            <thead>
                <tr>
                    <th colspan="1">Rang</th>
                    <th colspan="1">Prenom</th>
                    <th colspan="1">Exp</th>
                    <th colspan="1">Filiere</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1</td>
                    <td>Ibrahim</td>
                    <td>1500</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#2</td>
                    <td>Enzo</td>
                    <td>1420</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#3</td>
                    <td>Hugo</td>
                    <td>1315</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#4</td>
                    <td>Lorenzo</td>
                    <td>1014</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#5</td>
                    <td>Axel</td>
                    <td>802</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#5</td>
                    <td>Mateo</td>
                    <td>745</td>
                    <td>Informatique</td>
                </tr>
                <tr>
                    <td>#...</td>
                    <td>...</td>
                    <td>...</td>
                    <td>...</td>
                </tr>
            </tbody>
        </table>

        <?php require '../compenents/background.php' ?>
    </main>

</body>

</html>