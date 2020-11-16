<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework Class-3</title>
</head>
<body>
    <h2>
    <?php
    
    //Task-1

    for( $i = 20; $i >= 10; $i--){
        echo $i . "<br>";
    }
    
    echo "<br><br>";

    //Task-2 
   /* $sum = 0;

    for($i=1; $i<=4; $i++){
        $sum +=$i;
    }
    echo "The Sum is:" . $sum;

    echo "<br><br>";*/

    $start = 1;
    $end = 4;
    $sum = 0;
    for($i = $start; $i <= $end; $i++){
        $sum += $i;
    }
    echo implode('+', range($start, $end)). '=' . $sum;

    echo "<br><br>";
    //Task-3 

    for($i = 40; $i <= 45; $i++){
        
        for($j = 1; $j < 11; $j++){

            echo "$i X $j =" . ($i*$j) . "<br>";

        }
        echo "==========" . "<br>";
    }

    //Task-4 
    function recurSum($n) 
    { 
        if ($n <= 1) 
            return $n; 
        return $n + recurSum($n - 1); 
    } 
   
    $n = 5; 
    echo(recurSum($n)); 


   echo "<br><br>";

    //Task-5
       
        $a = 1;
        $b = 10;
        $arr = range($a, $b);
        //print_r($arr);

        foreach($arr as $num){
            if($num % 2 != 0){
                echo " " . $num;
            }
        }


        echo "<br><br>";

       
   
        //Task-6 

        $arr = array("Jashim", "kamal", "Jamal", "Shamim Khan", "Moni", "Shohid", "Rejaul", "Hasi", "Boni", "Bobi");
        
       foreach($arr as $value){
           if(strlen($value) >= 5){
               echo $value . "<br>";
           }
       }
        
        

        
    
    ?>
    </h2>
</body>
</html>