<?php 
include('ncon.php');
$ex="Select* from bg";
$result=mysqli_query($con,$ex);
$num=mysqli_num_rows($result);

?>
<?php 


$sql="select *from bg";
$result1=mysqli_query($con,$sql);
$num1=mysqli_num_rows($result1);

if($num1>0){      
?>
<html>
    <head>
    <?php include "ms.php" ?>
        <title>Home</title>
       
    </head>
    <body>
    <header  >
<div >
          
            <div >
            <nav class="navbar navbar-expand-lg text-white bg-light">
                
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my">
                    <span class="btn bdiv"></span>
                </button>
                <div class="collapse navbar-collapse" id="my">
                <ul class="navbar-nav"><br>
                
                <li class="nav-item"><a href="bgdata.php" class="nav-link "><h2>Home</h2></a></li>
                   
                
                    
                    </ul>

                    
                </div>
                
                    
    </a> </div>
            </div>
            </nav>
    </header>
        
    <div class="container">
    <br>
    <main>
 
        <div class="container form-light bg-light">
        <br>
            <h4 class="bg-dark text-white"><center>Welcome to blood bank</center></h4>
            <br>
            <?php 
    for($i=1;$i<=$num1;$i++){
            $row1=mysqli_fetch_array($result1);
            ?>
            <table class="table">
            
            <tr>
            <th width="500px" class="bg-light text-dark"><?php echo $row1['bgroup'];?></th>
            
            <td width="500px" class="bg-light text-dark"><?php echo $row1['bottle'];?></td>
            </tr>
            </table>
            <?php
    }
    ?>
            <h5 class="bg-dark text-white"><center>Requirement Form</center></h5>
   
    
    <form class="post-form" action="bgvalid.php"  method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label for="user">Blood Group</label>
      <select name="bgname" class="form-control" required >
          <option value="" selected disabled>Select Blood group</option>
          <?php for($i=1;$i<=$num;$i++)
          {
            $rowf=mysqli_fetch_array($result);
           ?>
 
      <option value="<?php echo $rowf['bgroup']; ?>"><?php echo $rowf['bgroup']; ?></option>
      <?php }
      } ?>
    </select>
  </div>
  <div class="form-group">
     
    <label for="user">Required Bottle</label>
    <input type="number" name="bname" class="form-control" id="user"required >
    
  </div>
 <center> <button name="submit" id="signup" type="submit" class="btn btn-primary">Submit</button></center>
<br></form>
</div>

    </main>
    </div>
    </body>

</html>
