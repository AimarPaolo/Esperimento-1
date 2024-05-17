<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>Interfaccia Utente ESP1</title>
        <meta name="author" content="Paolo Aimar">
        <link rel="stylesheet" href="modifica_stile.css">
    </head>
    <body>
        <?php
            if(isset($_REQUEST["nome"]) && $_REQUEST["nome"] != "" && isset($_REQUEST["cognome"]) && $_REQUEST["cognome"] != "" && isset($_GET["email"]) && $_REQUEST["email"] != "" && isset($_GET["message"]) && $_REQUEST["message"] != ""){
                $nome = $_GET["nome"];
                $cognome =$_GET["cognome"];
                $email = $_GET["email"];
                $message = $_GET["message"];

                echo "<p class=php>Nome: $nome</p>";
                echo "<p class=php>Cognome: $cognome</p>";
                echo "<p class=php>Email: $email</p>";
                echo "<p class=php>Messaggio: $message</p>";
            } else {
                echo "<p>Errore, tutti i campi sono obbligatori!!!!</p>";
            }
        ?>
    </body>
</html>
