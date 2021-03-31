<?php 

if(isset($_POST['submit'])){
$bgname=$_POST['bgname'];
$bname=$_POST['bname'];


include 'ncon.php';
include 'ms.php';
$sql="select bottle from bg where bgroup='$bgname'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num>0){
    
        for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($result);
            $ab="{$row['bottle']}";
        }
        if($ab>=$bname){
        echo"<div class='container'>
        <h3 class='text-center bg-dark text-white'>Welcome to Blood Bank</h3>
        <table class='table-light table table-strippted'>
        <tr>
        <th>Blood Group</th>
        <td>$bgname</td>
        </tr>
        <tr>
        <th>Available bottles</th>
        <td>$ab</td>
        </tr>
        <tr>
        <th class='text-success'><center><h4>$bname bottles of $bgname are  available.</h4></center></th>
        
        </tr>
        </table>
        ";
        }
       
     else
    { 
            echo"<div class='container'>
            <h3 class='text-center bg-dark text-white'>Welcome to Blood Bank</h3>
            <table class='table-light table table-strippted'>
            <tr>
            <th>Blood Group</th>
            <td>$bgname</td>
            </tr>
            <tr>
            <th>Available bottles</th>
            <td>$ab</td>
            </tr>
            <tr>
            <th class='text-danger'><center><h4>$bname bottles of $bgname are not available.</h4></center></th>
            
            </tr>
            </table>";
        
    }

}
}


mysqli_close($con);
?>