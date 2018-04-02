<?php

include("header.php");
?>

<div class="login">
    <div class="login-screen  animatedParent">
        <div class="app-title  animated fadeIn">
            <h1>Insert suupervisor</h1>
            <form class="form-login" action="insert_supervisors.php" method="post">
                <label for="">supervisor name :</label>
				<input type="text" name="u-id" placeholder="name" id="u-id"><br>
				
				<input type="submit" name="register" class="btn-login" value="Insert"><br>
            </form>
        </div>

    </div>
</div>

<?php
if(isset($_POST['register']))
{
	//update

	$super_name=$_POST["u-id"];
	



	/*--------------*/

	$insert_super="INSERT INTO supervisors
				(super_name)
				VALUES (?)";

	if($stmt =$connect->prepare($insert_super))
	{
		$stmt->bind_param("s",
									$super_name
									);
		if($stmt->execute())
	    {
			 $_SESSION['isuser']=1;
			 header("location:index.php");
		}
	}
}


//clase connection

$connect->close();
?>
<?php
include("footer.php");
?>