<?php
include "session_start.php";
include "config.php";
include "connect.php";

$user_id = $_GET['u-id'];

$user_select="SELECT * FROM `researchers` WHERE r_id=?";
if($stmt = $connect->prepare($user_select) )
{
  $stmt -> bind_param("i",$user_id);
  if($stmt->execute())
  {
    $result=$stmt->get_result();
    while($row=$result->fetch_assoc()){
      if ($row['isActive']==0) {
        $update_isActive = "UPDATE `researchers` SET `active` = 1 WHERE `r_id` = ?";
        if($stmt = $connect->prepare($update_isActive) )
        {
          $stmt -> bind_param("i",$user_id);
          if($stmt->execute())
          {
                    header("location:index.php");
          }
        }
      }else {
        echo "activation done before";
      }

    }
  }
}
?>