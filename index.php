<?php

require_once "class/Number.php";

$array = [1, 2, 3, 4, 5, 10, 20, 48, 9, 8];
$n = new Number($array);

$pairAndOddNumbers = $n->pairAndOddNumbers();
$max = $n->higherNumber();
$min = $n->lowestNumber();

// var_dump(json_encode($pairAndOddNumbers));
// var_dump($max);
// var_dump($min);

echo '<h1>Exercício 1:</h1>';

echo 'SELECT * FROM tarefas AS t LEFT JOIN categoria AS c ON t.categoria = c.ID INNER JOIN projeto AS p ON t.projeto = p.ID;';

echo '<h1>Exercício 2:</h1>';

echo '<h3>Array referência: </h3>' . json_encode($array);

foreach($pairAndOddNumbers as $key => $numbers){

    $title = $key == 'pair' ? 'Pares' : 'Ímpares';

    echo "<h3>Números {$title}:</h3>";

    foreach($numbers as $number){
        echo "- {$number} </br>";
    }    
}

echo '<h1>Exercício 3:</h1>';

echo "<h3>Maior número:</h3> - {$max} </br>";
echo "<h3>Menor número:</h3> - {$min} </br>";



