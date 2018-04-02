<?php
include("connect.php");
?>

<div class="contact-us" id="con">
    <div class="container">
        <h2 class="contact-head h1 head-border-center uppercase text-center">Contact Us</h2>
        <p class="contact-desc text-center"></p>
        <!-- Start Grid -->
        <div class="row">
            <form class="contact"  action='contact.php' method='post'>
                <div class="col-md-6">
                    <input class="form-control input-lg" type="text" name="username" placeholder="Name" required />
                    <input class="form-control input-lg" type="email" name="email" placeholder="Email" required />
                    <input class="form-control input-lg" type="text" name="subject" placeholder="Subject" required/>
                </div>
             
                <div class="col-md-6">
                     <textarea class="form-control input-lg" name="Message" placeholder="Message"></textarea>
                </div>
                <input type="submit" class="contact-btn" value="Send Message" name="send"/>

            </form>

        </div>
        <!-- End Grid -->
    </div>
</div>

<?php
if(isset($_POST['send']))
{
$name=$_POST["username"];
$email=$_POST["email"];
$subj=$_POST["subject"];
$message=$_POST["Message"];

$query="INSERT INTO contact (`u_name`, `u_email`, `u_subj`, `u_message`) VALUES (?,?,?,?)";

if($stmt =$connect->prepare($query))
{		
  $stmt->bind_param("ssss",
                $name,
                $email,
                $subj,
                $message);
  if($stmt->execute())
    {
      header("location:index.php");
    }
      }
    }
$connect->close();
?>