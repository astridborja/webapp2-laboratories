<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><?php 
        // TASK #1
        $name = 'Name: ASTRID D. BORJA '; 
        $age = 'Age: 22 yrs old';
        $address = 'Address: Aroma, Apalit, Pampanga';
        $hobbies = 'Hobbies: Journaling and Arts';
        $pet_peeve = 'Pet Peeve: Loud voices and nonsense yapping (basta sya)';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<hr>'; 


        // TASK #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // TASK #3
        define('NAME','Astrid D. Borja');
        define('AGE','22 yrs old');
        define('ADDRESS','Pampanga City');
        define('HOBBIES','Journaling and Arts');
        define('PET_PEEVE','Loud voices and nonsense yapping (basta sya)');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>', '<hr>';


        // TASK #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* TASK #5
           Sisigaw ka for 10 mins because??? Kalma lang po tayo dito ty (nakakasakit ng 
           sintido frfr ngl tbh) cringe na kasi <3 */
        ?>
    </p>
</body>
</html>