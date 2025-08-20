<?php
    $numbers=[66,32,902];
    $biggest=$numbers[0];
    for($i=0;$i<3;$i++)
    {
        if($numbers[$i]>$biggest)
        {
            $biggest=$numbers[$i];
        }
    }
    echo "The numbers are: <br>";
    foreach($numbers as $v)
    {
        echo $v." <br>";
    }
    echo "The biggest number is ".$biggest;
?>