<?php 


// Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”

//  e come valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso.

// Utilizzate questo array per stampare una frase di presentazione del tipo:

// “Sono paolo e sto studiando bootstrap con giuseppe”





$corsoHackademy = [
    "docenti" => [
        "giuseppe",
        "marco",
        "andrea"
    ],
    "studenti" => [
        "andrea",
        "marco",
        "yoel",
        "cristian"
    ],
    "argomenti" => [
        "sono",
        "studiando",
        "javascript",
        "php",
        "html e css"
    ],
];

// ciao io sono yoel e ho imparato javascript, html, css con andrea, giuseppe, marco. difianco a andrea, marco, cristian


echo "ciao io " .$corsoHackademy["argomenti"][0]." ".$corsoHackademy["studenti"][2]. "e ho imparato ".$corsoHackademy["argomenti"][2]. ", ".$corsoHackademy["argomenti"][4]. ", "
                .$corsoHackademy["argomenti"][3]." con ".$corsoHackademy["docenti"][2]. ", ".$corsoHackademy["docenti"][0]. ", ".$corsoHackademy["docenti"][1]. " .Difianco a ".$corsoHackademy["studenti"][0]. ", "
                .$corsoHackademy["studenti"][1]. ", ".$corsoHackademy["studenti"][3];
     






























?>