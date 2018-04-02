<?php

include("header.php");
include("navbar.php")
?>

<?php

if(isset($_GET["p_id"]))
{
   
  echo "<div class='login login-screen app-title '>
        <form action='phd_delete.php' method='post' >
        <h1>Are you Sure You Want to Delete this Field ?</h1>
        
        <input  type='text' name='p_id' value='". $_GET["p_id"]." ' style='height:40px;width:200px;'>
        <input type ='submit' name='delete' value='delete'class='btnmore btn' />
        </form>
        </div>";
}

if(isset($_POST["delete"])){
   echo $phd_id = $_POST["p_id"];
    $delete_user = "DELETE FROM `phd` WHERE p_id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $phd_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:phds.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>