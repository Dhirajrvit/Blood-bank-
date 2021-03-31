<?php 
include('ncon.php');

$sql="select *from bg";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);

if($num>0){      
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
                
                <li class="nav-item"><a href="bg.php" class="nav-link "><h2>User</h2></a></li>
                   
                
                    
                    </ul>

                    
                </div>
                
                    
    </a> </div>
            </div>
            </nav>
    </header>
    <div class="container">
    <br>
    <main>

 
        <div class="container form-light bg-dark">
        <br>
            <h4 class="bg-white text-dark"><center>Welcome to blood bank</center></h4>
            <h5 class="bg-white text-dark"><center>Blood Record</center></h5>
            
    
    <form class="post-form" action="bdvalid.php"  method="post" enctype="multipart/form-data">
    <?php 
    for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($result);
            ?>
            <table class="table table-dark">
            <tr>
            <th width="500px" class="bg-light text-dark"><?php
            echo " <input type='text' value='{$row["bgroup"]}'name='bo$i' class='form-control'readonly>";
            ?>
          </th>
            <td  width="500px" class="bg-light text-dark"><?php
           echo " <input type='number' value='{$row["bottle"]}'name='b$i' class='form-control' required>";
            ?>
           
          </td>

            </tr>
            </table>
          
            <?php
        };
    }
        ?>
      
     
 <center> <button name="bsub" id="signup" type="submit" class="btn btn-primary">Submit</button></center>
<br>
</form>
</div>

    </main>
    </div>
    </body>

</html>
