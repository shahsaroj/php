


<table border='1' width=100%>
<tr>
<td>Marks</td>
<td> Grade</td>
</tr>



<?php
$marks= 90;
$grade;
if($marks>=90)
{
    $grade="A+";
}
else if($marks>=80){
    $grade="A";

}else if ($marks>=70){
    $grade="B+";
}else if($marks>=60){
    $grade="B";
}else{
     $grade= "Failed";
}

?>

 <tr>
<td> <?php echo $marks ?></td>
<td> <?php echo $grade ?></td>
</tr>
</table>

