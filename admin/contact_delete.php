<?php

include("header.php");
include("navbar.php")
?>

<?php

if(isset($_GET["id"]))
{
   
  echo "<div class=' login login-screen app-title'>
        <form action='contact_delete.php' method='post'>
        <h1>Are you Sure You Want to Delete this Field ?</h1>
        
        <input  type='text' name='re_id' value='". $_GET["id"]." ' style='height:40px;width:200px;'>
        <input type ='submit' name='delete' value='delete'class='btnmore btn' />
        </form>
        </div>";
}

if(isset($_POST["delete"])){
   echo $re_id = $_POST["id"];
    $delete_user = "DELETE FROM `contact` WHERE id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $re_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:contact_view.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>