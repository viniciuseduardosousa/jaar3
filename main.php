<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for ($i = 33; $i <= 543; $i++) {  // for loop van 33 tot 543 wordt gestart

   
    if ($i % 5 == 0 && $i % 9 == 0) // als nummer gedeeld door 5 en 9 kan worden dan wordt t "web"
    {
       echo"Web</br>";
    }
    
    elseif ($i % 2 == 0) // als nummer gedeeld door 2 kan worden dan wordt t bold
    {
        echo "<b>$i</b> <br>";
    }

    elseif ($i%5==0) // als nummer gedeeld 5 kan worden dan wordt t "software"
    {
    echo"Software</br>";
    }

    elseif ($i%9==0) // als nummer gedeeld 9 kan worden dan wordt t "developer"
    {
    echo"Developer</br>";
    }

    else
    {
    echo $i, "<br>"; // alles wordt geprint
    }


}
?>

</body>
</html>