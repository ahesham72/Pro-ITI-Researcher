<?php

include("header.php");
?>

<div class="container">
	<h2 class="awesome-head h1 head-border-center uppercase text-center"> Insert Masters</h2>
	<div class="formdiv">
<form method="POST" action="insert_phd.php" enctype="multipart/form-data" class="form_upload">
	<!-- COMPONENT START -->
    <br>
    <label for="">Titel of Master :</label>
    <input type="text" class="form-control" placeholder='Enter The Title......' name='title_master' /><br>
    <label for="">University Name:</label>
    <input type="text" class="form-control" placeholder='Enter The University Name...' name='university_name' /><br>
    <label for="">Faculty name:</label>
    <input type="text" class="form-control" placeholder='Enter The Faculty Name...' name='faculty_name'/><br>
    <label for="">Preview:</label>
    <textarea  name='preview' id="" cols="30" rows="10" class="form-control"></textarea>
    <label for="">Date of Publication:</label>
    <input type="Date" class="form-control" placeholder='Enter The Date of Publication...'  name='date'/><br>
    <label for="">Your ID :</label>
    <input type="text" class="form-control" placeholder='Enter Your SSN...'  name='id'/><br>
	<div class="form-group">
		<div class="input-group input-file" name="Fichier1">
			<span class="input-group-btn">
        		<button class="btn btn-default btn-choose" type="button">Choose</button>
    		</span>
    		<input type="file" class="form-control" placeholder='Choose a file...' name="file" />
    		<span class="input-group-btn">
       			 <button class="btn btn-warning btn-reset btnsubmit" type="button">Reset </button>
    		</span>
		</div>
	</div>

	<!-- COMPONENT END -->
	<div class="form-group form">
		<button type="submit" class=" pull-right btn btnsubmit" name='register'>Upload</button>
		<button type="reset" class="btn btnreset btn-danger">Reset Form</button>
	</div>

</form>
</div>


	<!-- COMPONENT END -->


</div>

</body>



<?php
if(isset($_POST['register']))
{

	$file = rand(1000,100000)."-".$_FILES["file"]['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	//update
	$user_title=$_POST["title_master"];
	$user_university=$_POST["university_name"];
	$user_faculty=$_POST["faculty_name"];
	$user_preview=$_POST['preview'];
    $user_date=$_POST["date"];
	$user_id=$_POST["id"];
	$temp = explode(".", $_FILES['file']['name']);
	$file_name = round(microtime(true)) . '.' . end($temp);
	if(move_uploaded_file($_FILES['file']['tmp_name'], "./upload_ma/". $file_name)){
		echo "success upload";
	} else {
		echo "move_uploaded_file function failed";
	}


	$insert_user="INSERT INTO `phd`(`p_title`, `uni_name`, `faculty_name`, `p_preview`, `p_date`, `r_idFK`,`file`) VALUES (?,?,?,?,?,?,?)";

	if($stmt =$connect->prepare($insert_user))
	{
		$stmt->bind_param("sssssis",
									$user_title,
									$user_university,
									$user_faculty,
									$user_preview,
									$user_date,
									$user_id,
									$file_name);
		if($stmt->execute())
	    {
            header("location:index.php");

		}
	}
}
echo "</div></div></div>";
//clase connection
$connect->close();
?>


<?php
include("footer.php");
?>