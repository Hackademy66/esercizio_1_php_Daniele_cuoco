<?php
 /* ESERCIZIO 1 */

//Dato un array di numeri, scrivere un programma che mi permetta di avere la media SOLO dei numeri pari contenuti all’interno dell’array


//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
/* for($i=0 ; $i<= ($arr); $i ++){
    if($i % 2 == 0){
    }print_r ($arr);
// per gli array non si puo usare
}
 */


/* $counter = 0;
$somma = 0;
foreach($arr as $number){
    if($number % 2 == 0){
         $somma=$somma + $number;
        $counter++;
    };
}
echo $counter."\n";
echo $somma."\n";
$media = $somma / $counter;
echo $media."\n";
 */

/* ESERCIZIO 2 */


//Dato un array di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere

/* 
$persona1 = [
    `name` => "dario",
    `surname` => "pastrocchio",
    `gender` => "mascio"
];
$persona1 = [
    `name` => "luca",
    `surname` => "ginocchio",
    `gender` => "mascio"
];
$persona1 = [
    `name` => "flavia",
    `surname` => "battantuono",
`gender` => "femmina"
];
echo $persona1;




/* 
$persone=[
   [ "name"=> "luca","surname" => "fasoli","gender" => "maschio"],
    ["name"=> "amborgio","surname" => "lombardi","gender" =>"maschio"],
   ["name"=> "flavia","surname" => "rubotto","gender" => "femmina"]
];
foreach($persone as $persona){
     if($persona["gender"]== "maschio"){
        $surname = $persona['surname'];
        $name = $persona['name'];
        
        echo "Buongiorno signor $name $surname\n "; 
    }else if($persona["gender"]== "femmina"){
        $surname = $persona['surname'];
        $name = $persona['name'];
        echo "Buongiorno signora $name $surname\n ";
    }
}
 */

 //ESERCIZIO 3

 /* Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY66". */


/*  
 for ($i=1; $i <= 100 ; $i++) { 
    if ($i % 15==0){
        echo "hackademy66\n";
    }else if ($i % 5 ==0){
        echo "Jacascript\n";
    }else if ($i % 3 ==0){
        echo "PhP\n";
    }else echo"$i\n";
 }
 */

 for ($i=1; $i<=100; $i++)
    switch ($i){
        case $i%15==0:
            echo "HACKADEMY 66\n";
            break;
        case $i%5==0;
            echo "JAVASCRIPT\n";
            break;
        case $i%3==0;
            echo "PHP\n";
            break;
        default:
            echo "$i.\n";
            break;
       
}
