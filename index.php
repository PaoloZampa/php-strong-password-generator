<?php

/* Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale/*  */

function generateRandomPassword($length)
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|:<>?-=[]\;,./';

    // Mescola i caratteri e seleziona i primi $length caratteri
    $password = substr(str_shuffle($chars), 0, $length);

    return $password;
}
?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css -->

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main class="py-5">
        <div class="container w-50 rounded shadow-lg py-2">

            <h3 class="my-4 text-center text-white">GENERATORE PASSWORD SUPER SICURE!</h3>
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="" method="get" class="">
                        <label for="password-length">Lunghezza password:</label>
                        <input type="number" class="form" id="password-length" name="password-length" min="1" max="50">
                        <input type="submit" class="btn btn-primary" value="Genera password">
                        <input type="reset" class="btn btn-secondary" value="Reset">
                    </form>
                    <h5 class="my-4">
                        <?php if (!empty($_GET['password-length'])) {
                            $length = $_GET['password-length'];

                            // Genera una password casuale
                            $password = generateRandomPassword($length);

                            // Mostra la password all'utente
                            echo "Ecco la tua password SUPER SICURA: $password";
                        }
                        ?>
                    </h5>
                </div>
            </div>


        </div>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>