
<?php

// Dati i seguenti array: 

// $words1 = [ 
//   'una', 
//   67, 
//   'vita', 
//   'colle',
//   'mi', 
//   'rosso', 
//   [ 
//     'oscura', 
//     'era', 
//     89, 
//     [ 
//       'mezzo',
//       [ 
//         'cammin', 
//         'Nel', 
//         [ 
//           'selva', 
//           'la', 
//           [ 
//             'via', 
//             'una', 
//             true, 
//           ] 
//         ], 
//       ] 
//     ], 
//   'ritrovai', 
//   'per' 
//   ], 
//   'diritta' 
// ]; 

// $words2 = [ 
//   'elemento1' => 25.89, 
//   'elemento2' => 'nostra', 
//   'elemento3' => [ 
//                     'Virgilio', 
//                     'smarrita', 
//                     'ché' 
//                   ] 
// ];

// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: 

// “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

// HINT: Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.


$words1 = [ 
    'una', //0
    67, //1
    'vita',//2 
    'colle',//3
    'mi', //4
    'rosso', //5
    [ //6
      'oscura', //0
      'era', //1
      89, //2
      [ //3
        'mezzo',//0
        [ //1
          'cammin',//0 
          'Nel', //1
          [ //2
            'selva',//0 
            'la', //1
            [ //2
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', //4
    'per' //5
    ], 
    'diritta'//7 
]; 
$words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
];

$newWords3 = [
    "di",
    "che'",
    "smarrita"

];



// “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.


$results = $words1[6][3][1][1]. " " .$words1[6][3][0]. " " .$newWords3[0]. " " .$words1[6][3][1][0]. " " .$newWords3[0]. " " .$words2["elemento2"]. " " .$words1[2]. " " .$words1[4]. " " .$words1[6][4]. " " 
           .$words1[6][5].  " " .$words1[0]. " " .$words1[6][3][1][2][0]. " " .$words1[6][0]. ", " .$newWords3[1]. " " .$words1[6][3][1][2][1]. " " .$words1[7]. " " .$words1[6][3][1][2][2][0]. " " .$words1[6][1]. " " 
           .$words2["elemento3"][1]; 



echo $results;
















?>