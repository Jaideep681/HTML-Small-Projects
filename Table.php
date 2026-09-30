<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>TABLES</h1>
    <form method="post">
        <input type="number" name="table11" placeholder="Enter table number"/>
        <button name="table1">Table 1</button><br>
        <input type="number" name="table21" placeholder="Enter table number"/>
        <button name="table2">Table 2</button><br>
        <input type="number" name="table31" placeholder="Enter table number"/>
        <button name="table3">Table 3</button><br>
        <input type="number" name="table41" placeholder="Enter table number"/>
        <button name="table4">Table 4</button><br>
        <label>For Multiplication:</label><br>
        <input type="number" name="mul1" placeholder="Enter number"/>
        <input type="number" name="mul2" placeholder="Enter number"/>
        <button name="mul">Multiply</button><br>
    </form>
    <?php
    function mlt($g,$h){
        $x=$g;
        $y=$h;
        $mul=$x*$y;
        return $mul;
    }
    if(isset($_POST['table1'])){
        $table1=isset($_POST['table11'])?$_POST['table11']:0;
        echo "<br>";
        for($i=1;$i<=10;$i++){                                   //Using for loop
            if($i%2!=0){                                         //If break then it is called Recursion
                continue;
            }
            else{
                echo $table1*$i."<br>";
            }
        }
    }
    if(isset($_POST['table2'])){
    $table2=isset($_POST['table21'])?$_POST['table21']:0;
    echo "<br>";
    $a=1;
    while($a<=10){                                          //Using while loop
        echo $table2*$a."<br>";
        $a++;
    }
    }
    if(isset($_POST['table3'])){
        $table3=$_POST['table31'];
        echo "<br>";
        $b=1;
        do{                                                     //Using do while loop
            echo $table3*$b."<br>";
            $b++;
        }while($b<=10);
    }
    if(isset($_POST['table4'])){
        $table4=$_POST['table41'];
        echo "<br>";
        foreach(range(1,10) as $i){                             //Using foreach loop
            echo $table4." x ".$i." = ".($table4*$i)."<br>";
            //echo 25." x ".$i." = ".(25*$i)."<br>";
        }
    }
    echo "<br><br><h1>Multiplication of two numbers: </h1>";
    if(isset($_POST['mul'])){
        $g=isset($_POST['mul1'])?$_POST['mul1']:0;
        $h=isset($_POST['mul2'])?$_POST['mul2']:0;
        $mul;
        //Above mention function
        echo $g." x ".$h." = ".mlt($g,$h)."<br>";
    }
?>
</body>
</html>