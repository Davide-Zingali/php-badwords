<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            background: purple;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            text-align: center;
        }        
    </style>
</head>
<body>
    <div>
        <!-- Titolo -->
        <h1>
            <?php
                $saluto = 'Hello!!!';
                echo $saluto;
            ?>
        </h1>

        <!-- stringa originale senza modifiche -->
        <p>
            <?php
                $paragrafo = 'Hello Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate illum ratione saepe corrupti tenetur.';
                echo $paragrafo;
            ?>
        </p>

        <hr>

        <!-- stringa modificata -->
        <p>
            <?php
                $paragrafo = 'Hello Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate illum ratione saepe corrupti tenetur. ';
                echo $paragrafoFinale = str_replace($_GET['badword'], '***', $paragrafo);
                echo '('.strlen($paragrafoFinale).')';
            ?>
        </p>
    </div>
</body>
</html>

<!-- 
Creare una variabile con un paragrafo di testo.

Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

NOTA: per maggiori informazioni, riguarda l'ultima parte del video di oggi 
-->