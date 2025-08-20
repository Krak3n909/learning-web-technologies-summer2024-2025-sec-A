<?php
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";
    for($i=0;$i<3;$i++)
    {
        for($j=1;$j<=3-$i;$j++)
        {
            echo $j." ";
        }
        echo "<br>";
    }
    echo "<br>";
    $k=0;
    $letters=['A','B','C','D','E','F'];
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo $letters[$k++]." ";
        }
        echo "<br>";
    }
?>