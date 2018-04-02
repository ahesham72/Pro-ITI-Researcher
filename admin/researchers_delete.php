<?php

include("header.php");
include("navbar.php")
?>

<?php

if(isset($_GET["r_id"]))
{
   
  echo "<div class=' login login-screen app-title'>
        <form action='researchers_delete.php' method='post'>
        <h1>Are you Sure You Want to Delete this Field ?</h1>
        
        <input  type='text' name='r_id' value='". $_GET["r_id"]." ' style='height:40px;width:200px;'>
        <input type ='submit' name='delete' value='delete'class='btnmore btn' />
        </form>
        </div>";
}

if(isset($_POST["delete"])){
   echo $r_id = $_POST["r_id"];
    $delete_user = "DELETE FROM `researchers` WHERE r_id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $r_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:researchers.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>