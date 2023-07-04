<?php 
    $arrayLetters =  ['a','b','c','d','e'];
    $arrayNumbers = [1,2,3,4,5];
    
    function mergeArrays($firstArray, $secondArray) {
        $mergedArray = [];

        for ($i = 0; $i < count($firstArray); $i++) {
            $mergedArray[] = $firstArray[$i];
            $mergedArray[] = $secondArray[$i];
        }
        return $mergedArray;
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
    <p><?php var_dump(mergeArrays($arrayLetters,  $arrayNumbers)) ?></p>
</body>
</html>