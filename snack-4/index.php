<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b" -->

<?php 
    $myArray = 
    [
        'gina',
        'pippo',
        'paperino',
        'paperina',
        'minnie',
        'topolino',
        'pluto'
    ];

    function addSubArray($array, $minNum, $maxNum) {
        $newArray = [];
        for($i = $minNum -1 ; $i <= $maxNum -1; $i++) {
            $newArray[] = $array[$i];
        }
        $array[] = $newArray;

        return $array;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php var_dump(addSubArray($myArray, 3, 6)) ?>
    </p>
</body>
</html>