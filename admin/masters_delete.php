<?php

include("header.php");
include("navbar.php")

?>

<?php

if(isset($_GET["m_id"]))
{
   
  echo "<div class=' login login-screen app-title'>
        <form action='masters_delete.php' method='post'>
        <h1>Are you Sure You Want to Delete this Field ?</h1>
        
        <input  type='text' name='m_id' value='". $_GET["m_id"]." ' style='height:40px;width:200px;'>
        <input type ='submit' name='delete' value='delete'class='btnmore btn' />
        </form>
        </div>";
}

if(isset($_POST["delete"])){
   echo $mas_id = $_POST["m_id"];
    $delete_user = "DELETE FROM `master` WHERE m_id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $mas_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:mas.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>