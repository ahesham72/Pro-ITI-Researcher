<?php

include("header.php");
include("navbar.php")
?>

<?php

if(isset($_GET["re_id"]))
{
   
  echo "<div class=' login login-screen app-title'>
        <form action='researches_delete.php' method='post'>
        <h1>Are you Sure You Want to Delete this Field ?</h1>
        
        <input  type='text' name='re_id' value='". $_GET["re_id"]." ' style='height:40px;width:200px;'>
        <input type ='submit' name='delete' value='delete'class='btnmore btn' />
        </form>
        </div>";
}

if(isset($_POST["delete"])){
   echo $re_id = $_POST["re_id"];
    $delete_user = "DELETE FROM `researches` WHERE re_id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $re_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:researches.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>