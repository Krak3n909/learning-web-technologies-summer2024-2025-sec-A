<?php
    $stds=[
        ['id'=>1,'name'=>'Nahid','cgpa'=>3.5],
        ['id'=>2,'name'=>'Jahid','cgpa'=>2.5],
        ['id'=>3,'name'=>'Mujahid','cgpa'=>3.9],
        ['id'=>4,'name'=>'Rohan','cgpa'=>3.2],
        ['id'=>5,'name'=>'Sayem','cgpa'=>3.1]
    ];
    echo "<table style=\"border:1px solid black; \"><tr><td><b>ID</b></td><td><b>Name</b></td><td><b>CGPA</b></td></tr>";
    for($i=0;$i<5;$i++)
    {
        echo "<tr>";
        foreach($stds[$i] as $v)
        {
            echo "<td style=\"border:1px solid black; \"> ".$v."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>