<?php
    $numbers1=array(1,2,3,4,5);
    $numbers2=array("Mahesh"=>11,"Monty"=>12,"Mahal"=>13,"Maharshi"=>14,"Mohit"=>"Hello");
    echo "<h1 style='text-align: center;'>Normal/Indexed Array</h1>";
    echo "<div style='display: flex; justify-content: center; align-items: center;'>";
    for($i=1;$i<=5;$i++){
        echo $numbers1[$i-1]."<br>";
    }
    echo "</div><h1 style='text-align: center;'>Associative Array</h1>";
    echo "<div style='display: flex; justify-content: center; align-items: center;'>";
    echo "<br><br><pre>";
        print_r($numbers2);
    echo "</pre></div>";
    echo "<h1 style='text-align: center;'>Multi-Dimensional Array</h1>";
    $emp=array(
        array(101,"Mohit",25000),
        array(102,"Mohan",50000),
        array(103,"Mahesh",45000),
        array(104,"Monty",75000),
    );
    echo "<div style='display: flex; justify-content: center; align-items: center;'>";
    echo "<table border='1' cellspacing='10' cellpadding='10' style='border-collapse: collapse; width: 50%; text-align: center;'>";
    echo "<tr>";
    for($j=0;$j<=count($emp[0]);$j++){
        foreach($emp[$j] as $data){
            echo "<td>".$data."</td>";
        }
        echo "</tr>";
    }
    echo "</table></div></div>";
    echo "<h1 style='text-align: center;'>Print Associative Array using Foreach loop</h1>";
    echo "<div style='display: flex; justify-content: center; align-items: center;'>";
    foreach($numbers2 as $name=>$val){
        echo $name." = ".$val."<br>";
    }
    echo "</div>";
?>