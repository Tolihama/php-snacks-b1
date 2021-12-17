<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    <h1>PHP Snacks blocco 1</h1>

    <h2>Snack 1</h2>
    <p>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.<br>
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.<br>
    Stampiamo a schermo tutte le partite con questo schema.<br>
    Olimpia Milano - Cantù | 55-60</p>

    <?php
        // Snack 1
        // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
        // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        // Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60

        $matches = [
            [
                'team1' => 'Acqua S.Bernardo Cantù',
                'team2' => 'Oriora Pistoia',
                'point_team_1' => 70,
                'point_team_2' => 45
            ],
            [
                'team1' => 'Fortitudo Pompea Bologna',
                'team2' => 'Dolomiti Energia Trentino',
                'point_team_1' => 82,
                'point_team_2' => 83
            ],
            [
                'team1' => 'Pallacanestro Trieste',
                'team2' => 'Virtus Roma',
                'point_team_1' => 72,
                'point_team_2' => 33
            ],
            [
                'team1' => 'Openjobmetis Varese',
                'team2' => 'Germani Basket Brescia',
                'point_team_1' => 101,
                'point_team_2' => 99
            ],
        ];

        for ($i = 0; $i < count($matches); $i++) {
            echo $matches[$i]['team1'].' - '.$matches[$i]['team2'].' | '.$matches[$i]['point_team_1'].'-'.$matches[$i]['point_team_2'].'<br>';
        }
    ?>

    <h2>Snack 2</h2>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)<br>
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.<br>
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</p>

    <?php
        // Snack 2
        // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        // Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

        $name = $_GET['name'].'<br>';
        $mail = $_GET['mail'].'<br>';
        $age = $_GET['age'];

        if (strlen($name) > 3 && (strpos($mail, '@') !== false && strpos($mail, '.') !== false) && is_numeric($age)) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>

    <h2>Snack 3</h2>
    <p>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.</p>

    <?php
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];

        $posts_keys = array_keys($posts);

        for ($i = 0; $i < count($posts_keys); $i++) {
            echo 'Posts del '.$posts_keys[$i].':<br>';
            echo '<ul>';

            for ($j = 0; $j < count($posts[$posts_keys[$i]]); $j++) {
                echo '<li>Post '.($j + 1).'<ul>';

                echo '<li>Title: '.$posts[$posts_keys[$i]][$j]['title'].'</li>';
                echo '<li>Author: '.$posts[$posts_keys[$i]][$j]['author'].'</li>';
                echo '<li>Text: '.$posts[$posts_keys[$i]][$j]['text'].'</li>';

                echo '</ul></li>';
            }

            echo '</ul>';
        }
        
    ?>

    <h2>Snack 4</h2>
    <p>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta</p>

    <?php
        $randNumbersArray = [];

        while (count($randNumbersArray) < 15) {
            $rand = rand(0, 15);

            if (!in_array($rand, $randNumbersArray)) {
                $randNumbersArray[] = $rand;
            }
        }
        
        echo var_dump($randNumbersArray);
    ?>
    
</body>
</html>