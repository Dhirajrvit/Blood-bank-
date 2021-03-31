
<?php
if(isset($_POST['bsub'])){
$size=sizeof($_POST);
$records=$size/2;

for($i=1;$i<=$records;$i++)
{
$index1="bo".$i;
$name[$i]=$_POST[$index1];
$index2="b".$i;
$bg[$i]=$_POST[$index2];
echo $name[$i];
}
include 'ncon.php';
include 'ms.php';
for($i=1;$i<=$records;$i++)
{
$q="update `bg` set `bottle`='$bg[$i]' where bgroup='$name[$i]'";
mysqli_query($con,$q)or die("unsucess");

}
header("Location:bgdata.php");
mysqli_close($con);
}else{
    header("Location:bg.php");
}
?>

