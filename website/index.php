<html>
    <head>
        <title>POZOS</title>
    </head>

    <body>
        <h1>Student Checking App</h1>
        <ul>
            <form action="" method="POST">
                <button type="submit" name="submit">List Students</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
                // Récupération des variables d'environnement
                $username = getenv('API_USER');
                $password = getenv('API_PASSWORD');

                // Valeurs par défaut si les variables d'environnement ne sont pas définies
                if (empty($username)) $username = 'fake_username';
                if (empty($password)) $password = 'fake_password';

                // Création du contexte HTTP avec authentification
                $context = stream_context_create(array(
                    "http" => array(
                        "header" => "Authorization: Basic " . base64_encode("$username:$password")
                    )
                ));

                // URL de l'API
                $url = 'http://api:5000/pozos/api/v1.0/get_student_ages';

                // Requête à l'API et traitement de la réponse
                $response = file_get_contents($url, false, $context);
                if ($response === false) {
                    echo "<p style='color:red;'>Erreur : Impossible de récupérer les données depuis l'API.</p>";
                } else {
                    $list = json_decode($response, true);
                    if (isset($list['student_ages'])) {
                        echo "<p style='color:green; font-size: 20px;'>This is the list of the students with age:</p>";
                        foreach ($list['student_ages'] as $key => $value) {
                            echo "<li>$key is $value years old</li>";
                        }
                    } else {
                        echo "<p style='color:red;'>Erreur : Réponse invalide reçue de l'API.</p>";
                    }
                }
            }
            ?>
        </ul>
    </body>
</html>

