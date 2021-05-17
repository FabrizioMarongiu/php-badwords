<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    
   


</head>
<body>
<!-- 
- Creare una variabile con assegnato un testo per popolare un paragrafo.
- Visualizzare a schermo il paragrafo.
- Visualizzare a schermo la lunghezza di testo del paragrafo.
- Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
- Stampare a schermo il paragrafo con il testo censurato. 
-->


    <?php 
    //Creo la variabile e associo una frase
    $frase = 'Quello stronzo del tuo amico mi deve dei soldi. Digli a quello stronzo di rendermeli!!';
    //Utilizzo strlen per sapere la lunghezza di testo del paragrafo
    $frase_length = strlen($frase);
    //con il metoto GET estrapolo dalla query dell'URL la parola che devo oscurare
    $parola_censurata = $_GET['badword'];
    //Assegno ad una variabile la frase con la funzione str_replace che permette di sostituire la parola da censurare con ******
    $replace = str_replace($parola_censurata, '******', $frase);
    ?>
    <!-- Stampo a schermo la frase -->
    <p>La frase è: <?php echo $frase;?></p>
    <!-- Stampo a schermo la lunghezza della frase -->
    <p>La stringa è lunga <?php echo $frase_length;?></p>
    <!--
         LA QUERY DA AGGIUNGERE ALL'URL E':?badword=stronzo 
    -->
        <!-- Stampo a schermo la parola da censurare -->
    <p>Parola da censurare: <?php echo $parola_censurata?></p>
        <!-- Stampo a schermo la frase  censurata-->
    <p>La frase con le censure è:
      <?php echo $replace?>
     </p>

    
</body>
</html>