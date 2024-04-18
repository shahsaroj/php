<?php 

// echo "Hello world";
// $name="Saroj";
// echo "<br>".$name;

$s=67;
$n=89;
$sum=$n +$s;
echo $sum;

echo "<br>";

$c="saroj";
$f="shah";
$name=$c.$f;
echo $name;

echo "<br>";

$p=54;
$t=2;
$r=6;
$interest= $p*$t*$r/100;
echo  "Simple interest = $interest";

echo "<br>";

$t=4;
$u=2;
$num=$t**$u;
echo $num;

echo "<br>";

$h=8;
$k=8;
echo ($h<=> $k);

echo "<br>";

$h=8;
$k=4;
echo ($h<=> $k);

echo "<br>";

$h=5;
$k=8;
echo ($h<=> $k);


echo"<br>";


//accessing the global variable inside the function 

$b=6;
$p=12;

function myTest(){
    global $b,$p;
    $b=$b+$p;
}
myTest();
echo $b;

echo"<br>";

// refernece variable that stores value inside it 

$_c ="abc";
$$_c=70;
echo $_c."<br>";
echo $$_c."<br>";
echo $abc;


?>

