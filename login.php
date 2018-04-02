<?php
$pagename ='Login '; //  معـــــــــــــــــــــــــــــــدل

include("header.php");
include("navbar.php");
$_SESSION["user_id"] = 0 ;
?>


<div class="login ">
    <div class="login-screen animatedParent">
        <div class="app-title animated  bounceInLeft ">
            <h1 class="">Login</h1>
            <form class="form-login" action="login.php" method="post">
				<input type="email" name="log-email" placeholder="Email" id="Email"><br>
				<input type="password" name="log-pass" placeholder="Password" id="password"><br>

				<input type="submit" name="login" class="btn-login" value="login"><br>
				<a href="signup.php"><p>Sign Up</p></a>

            </form>
        </div>
    </div>
</div>


<?php

if(isset($_POST["login"]))
{
	if(isset($_POST["log-email"]) && isset($_POST["log-pass"]))
	{

		$uemail=$_POST["log-email"];
		$upass=$_POST["log-pass"];

		$select_user="SELECT `r_id`,`r_email`, `r_password`, `admin` FROM `researchers`where r_email =? and r_password=?";
		if($stmt =$connect->prepare($select_user))
		{
			$stmt->bind_param("ss",$uemail,$upass);
			if($stmt->execute())
			{
				$result=$stmt->get_result();
				while($row=$result->fetch_assoc())
				{
					$_SESSION["isuser"]=1;
					$_SESSION["user_id"] = $row['r_id'];
					header("location:index.php");

					$admin_id = $row['admin'];
					if ($admin_id == 2) {
						$_SESSION["isadmin"] = 1;
						header("location:admin/index.php");
					}
				}
			}
		}
	}
}

?>



<?php
include("footer.php");
?>