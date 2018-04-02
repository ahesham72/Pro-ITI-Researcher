<?php

include("header.php");
?>

	<!-- COMPONENT END -->



    <div class="login">
    <div class="login-screen  animatedParent">
        <div class="app-title  animated fadeIn">
            <h1>Sign Up</h1>
            <form class="form-login" action="insert_researchers.php" method="post">
				<input type="text" name="u-id" placeholder="User ID SSN" id="u-id"><br>
				<input type="text" name="u-name" placeholder="User Name" id="username"><br>
				<input type="email" name="u-email" placeholder="Email" id="Email"><br>
				<input type="password" name="u-pass" placeholder="Password" id="password"><br>
				<input type="password" name="pass" placeholder="confirm your Password" id="confirm_password"><br>
				<span id='message'></span>
				<input type="text" name="u-uni-name" placeholder="University Name" id="uni-name"><br>
				<input type="text" name="u-phone" placeholder="your Phone" id="phone"><br>
				<input type="submit" name="register" class="btn-login" value="Sgin Up"><br>
            </form>
        </div>

    </div>
</div>


</body>


<?php
if(isset($_POST['register']))
{
	//update

	$user_id=$_POST["u-id"];
	$user_name=$_POST["u-name"];
	$user_email=$_POST["u-email"];
	$user_password=$_POST["u-pass"];
	$user_uni=$_POST["u-uni-name"];
	$user_phone=$_POST["u-phone"];




	/*--------------*/

	$insert_user="INSERT INTO researchers
				( r_id, r_name,  uni_name, r_email,
				r_password, r_phone)
				VALUES (?,?,?,?,?,?)";

	if($stmt =$connect->prepare($insert_user))
	{
		$stmt->bind_param("issssi",
									$user_id,
									$user_name,
									$user_uni,
									$user_email,
									$user_password,
									$user_phone);
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