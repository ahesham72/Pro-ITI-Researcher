<?php
$pagename ='sign up '; //  معـــــــــــــــــــــــــــــــدل

// mail library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
//Load composer's autoloader
require 'vendor/autoload.php';
//include "session_start.php";
include ("config.php");
include("header.php");
include("navbar.php");
?>

<div class="login">
    <div class="login-screen  animatedParent">
        <div class="app-title  animated fadeIn">
            <h1>Sign Up</h1>
            <form class="form-login" action="signup.php" method="post">
				<input type="text" name="u-id" placeholder="User ID SSN" id="u-id" required maxlength="14" minlength="14"><br>
				<input type="text" name="u-name" placeholder="User Name" id="username" required><br>
				<input type="email" name="u-email" placeholder="someone@ex.com" id="Email" required><br>
				<input type="password" name="u-pass" placeholder="Password" id="password" required><br>
				<input type="password" name="pass" placeholder="confirm your Password" id="confirm_password" required><br>
				<span id='message'></span><br>
				<input type="text" name="u-uni-name" placeholder="University Name" id="uni-name" required><br>
				<input type="text" name="u-phone" placeholder="your Phone" id="phone" required maxlentgh="11" minlength="11"><br>
				<input type="submit" name="register" class="btn-login" value="Sgin Up"><br>
            </form>
        </div>

    </div>
</div>


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
$user_confirmcode="";




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

	
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
			  //Server settings
			  $mail->SMTPDebug = 1;                                 // Enable verbose debug output
			  $mail->isSMTP();                                      // Set mailer to use SMTP
			  $mail->Host = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
			  $mail->SMTPAuth = true;                               // Enable SMTP authentication
			  $mail->Username = 'salahyousef';                 // SMTP username
			  $mail->Password = 'salah111115';                           // SMTP password
			  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			  $mail->Port = 465;                                    // TCP port to connect to check this number is right
	
			  //Recipients
			  $mail->setFrom('bashteam83@gmail.com', 'bash');
			  $mail->addAddress($user_email);     // Add a recipient
	
	
			  //Attachments
			  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
			  //Content
			  $mail->isHTML(true);                                  // Set email format to HTML
			  $mail->Subject = 'Researcher Guide';
			  $mail->Body    = $root.'/confirm.php?id='.$id;
			  $mail->AltBody = 'Welcome You are success registered';
	
			  $mail->send();
			  //echo "doneeeeeeeeeeeeeee";
			  echo 'Message has been sent';
			  $flagSignUp = 10;
			  setcookie("flagSignUp", $flagSignUp); // 86400 = 1 day
			  header("location:confmail.php");
			} catch (Exception $e) {
			  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
	
			 $_SESSION['isuser']=1;
			 header("location:index.php");
		}
	}
}


//clase connection

$connect->close();

include "footer.php";
?>
