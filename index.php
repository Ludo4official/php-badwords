<?php

$text = 'Io voglio per me le tue carezze
Sì, io tamo più della mia vita
Ritornerò in ginocchio da te
Laltra non è, non è niente per me
Ora lo so, ho sbagliato con te
Ritornerò in ginocchio da te
E bacerò le tue mani, amor
Negli occhi tuoi che hanno pianto per me
Io cercherò il perdono da te
E bacerò le tue mani, amor
Io voglio per me le tue carezze
Sì, io tamo più della mia vita
Io cercherò il perdono da te
E bacerò le tue mani, amor
Ritornerò in ginocchio da te
Laltra non è, non è niente per me
Ora lo so, ho sbagliato con te
Ritornerò in ginocchio da te
Sì, io tamo più della mia vita
Io voglio per me le tue carezze
Oh sì, io tamo più della mia vita';

$badword = $_GET['badword'];

$testoCensurato = str_replace($badword, '***', $text);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        <h1>
            PHP Badwords
        </h1>

        <form action="">
            <input type="text" name="badword" id="">
            <button>Censura</button>
        </form>

        <p>
            <?php echo $text; ?>
        </p>

        <div>
            Lunghezza totale: <?php echo strlen($text); ?>
        </div>

        <p>
            <?php echo $testoCensurato ?>
        </p>

        <div>
            Lunghezza totale paragrafo censurato: <?php echo strlen($testoCensurato); ?>
        </div>
    </body>
</html>