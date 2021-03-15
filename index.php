<?php   

error_reporting(0);
ini_set('display_errors', 0);

function generateRandomString($length, $alphabet) {
    $charactersLength = strlen($alphabet);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $alphabet[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}



    //echo $length . " " . $count . " " . $alphabet;
    /*for($i = 0; $i < $count; $i++) {
        $pwd = generateRandomString($length, $alphabet);
        echo "Passwort " . $i . " : " . $pwd . "<br>";
    }*/
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container myform z-depth-2">
    <form action="index.php" method="post">
        <h4>Password Generator</h4>
        <p>Länge:<br><input value="12" type="text" name="length" size="30" maxlength="2"></p>
        <p>Anzahl:<br><input value="10" type="text" name="count" size="30" maxlength="2"></p>
        <p>Alphabet:<br><input id="alph" type="text" name="alphabet" size="30"></p>

        <p>
            <label class="cbtext">
                <input class="cbtext" type="checkbox" id="uppercase" checked="true"/>
                 <span class="cbtext">Alle Großbuchstaben</span>
             </label>
        </p>

        <p>
            <label>
                <input type="checkbox" id="lowercase" checked="true" />
                 <span class="cbtext">Alle Kleinbchstaben</span>
             </label>
        </p>

        <p>
            <label>
                <input type="checkbox" id="digits" checked="true"/>
                 <span class="cbtext">Alle Ziffern</span>
             </label>
        </p>

        <p>
            <label>
                <input type="checkbox" id="special" checked="true" />
                 <span class="cbtext" >Sonderzeichen</span>
             </label>
        </p>

        <button class="btn waves-effect waves-light green accent-3 submitbutton" type="submit" name="action">generate
            <i class="material-icons right">send</i>
        </button>
        <br><br>

        <h5>Generated Passwords: </h5>

        <p>
        <?php

        $length = $_POST['length'];
        $count = $_POST['count'];
        $alphabet = $_POST['alphabet'];

        if(isset($count)) {
            echo $count . " Passwörter mit der Länge von " . $length . " Zeichen wurden erstellt";
        }
            
        ?>
        </p>

        <ul>
        <?php
            for($i = 0; $i < $count; $i++) {
                $pwd = generateRandomString($length, $alphabet);
                echo "<b>Passwort " . $i + 1 . "</b>: " . $pwd . "<br>";
            }
        ?>
        </ul>
    </form>
    </div>

    <script src="app.js"></script>
    
</body>
</html>