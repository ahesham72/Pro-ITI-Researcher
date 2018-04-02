<?php

include("header.php");

?>

<?php

if(isset($_GET["super_id"]))
{
   
  echo "<form action='supervisors_delete.php' method='post'>
        <h1>are you sure</h1>
        <input  type='text' name='super_id' value='". $_GET["super_id"]."'>
        <input type ='submit' name='delete' value='delete' />
        </form>";
}

if(isset($_POST["delete"])){
   echo $mas_id = $_POST["super_id"];
    $delete_user = "DELETE FROM `supervisors` WHERE super_id=?";
  echo"1";

    if($stmt = $connect->prepare($delete_user) )
    {echo"2";
      $stmt->bind_param("i", $mas_id);
      if($stmt->execute())
      {
        echo "deleted"  ;
        header("location:supervisors.php")   ;
      }
    }
  }
?>







<?php
include("footer.php");
?>