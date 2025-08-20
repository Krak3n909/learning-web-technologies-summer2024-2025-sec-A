<?php
    $array=[1,2,3,5,7,9];
    $element=5;
    $isFound=false;
    for($i=0;$i<6;$i++)
    {
        if($array[$i]===$element)
        {
            echo "Element {$element} found at index {$i} <br>";
            $isFound=true;
            break;
        }
    }
    if($isFound===false)
    {
        echo "Element was not found <br>";
    }
?>