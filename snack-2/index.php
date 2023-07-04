<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form check</title>
</head>
<body>
    <form action="" method="GET">
        <label for="fname">name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="lname">email</label>
        <input type="mail" id="email" name="mail"><br><br>
        <label for="lname">age</label>
        <input type="number" id="age" name="age"><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>

<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    
    if (strlen($name) > 3) {
       echo "$name";
    }

    else {
        echo ' invalid name ';
    }
        
    if (str_contains($mail, "@" )) {
        echo "$mail";
     }
 
     else {
         echo ' invalid mail ';
     }

     if (is_numeric($age)) {
        echo "$age";
     }
 
     else {
         echo ' invalid age ';
     }
?>