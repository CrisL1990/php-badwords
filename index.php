<?php

    $paragrafo = 'ciao a tutti! ciao mondo! ';
    $parLength = strlen($paragrafo);
    $miaParola = $_GET['parola'];
    $stringaModificata = str_replace($miaParola, '***', $paragrafo);

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
    <h1><?php echo $paragrafo?></h1>
    <h1>La lunghezza del paragrafo è di: <?php echo $parLength; ?> caratteri</h1>
    <h1>La stringa modificata è: </h1>
    <h1><?php echo $stringaModificata; ?></h1>
</body>
</html>