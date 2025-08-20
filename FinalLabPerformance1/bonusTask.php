<?php
    $stds=[
        ['id'=>1,'name'=>'Nahid','cgpa'=>3.5],
        ['id'=>2,'name'=>'Jahid','cgpa'=>2.5],
        ['id'=>3,'name'=>'Mujahid','cgpa'=>3.9],
        ['id'=>4,'name'=>'Rohan','cgpa'=>3.2],
        ['id'=>5,'name'=>'Sayem','cgpa'=>3.1]
    ];
    echo "<table style=\"border:1px solid black;\"><tr><td><b>ID</b></td><td><b>Name</b></td><td><b>CGPA</b></td></tr>";
    foreach($stds as $student) {
        echo "<tr><td style=\"border:1px solid black;\">{$student['id']}</td><td style=\"border:1px solid black;\">{$student['name']}</td><td style=\"border:1px solid black;\">{$student['cgpa']}</td></tr>";
    }
    echo "</table>";
?>