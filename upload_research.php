<?php

include("header.php");
include("navbar.php");
?>

<div class="container">

<h2 class="awesome-head h1 head-border-center uppercase text-center"> Uploading Researches</h2>
<div class="formdiv">
<form method="POST" action="upload_research.php" enctype="multipart/form-data" class="form_upload">
	<!-- COMPONENT START -->
    <br>
    <label for="">Titel of Research :</label>
    <input type="text" class="form-control" placeholder='Enter The Title......' name='title_research' required/><br>
    <label for="">Abstract:</label>
    <textarea  id="" cols="30" rows="10" class="form-control"  name='preview' required></textarea>
    <label for="">Date of Publication:</label>
    <input type="Date" class="form-control" placeholder='Enter The Date of Publication...'  name='date' required/><br>
    <label for="">Magazine Name:</label>
    <input type="text" class="form-control" placeholder='Enter The Magazine Name......' name='magazine' required/><br>
    <label for="">Your ID :</label>
    <input type="text" class="form-control" placeholder='Enter Your SSN...'  name='id' required/><br>
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
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	$file_loc = $_FILES['file']['tmp_name'];
	//update
	$research_title=$_POST["title_research"];
	$user_preview=$_POST["preview"];
    $research_date=$_POST["date"];
    $research_magazine=$_POST["magazine"];
	$user_id=$_POST["id"];
	$temp = explode(".", $_FILES['file']['name']);
	$file_name = round(microtime(true)) . '.' . end($temp);
	if(move_uploaded_file($_FILES['file']['tmp_name'], "./upload_res/". $file_name)){
		echo "success upload";
	} else {
		echo "move_uploaded_file function failed";
	}

	$insert_user="INSERT INTO `researches`(`re_title`, `re_preview`, `re_date`, `magazine_name`, `r_idFK`,`file`) VALUES (?,?,?,?,?,?)";

	if($stmt =$connect->prepare($insert_user))
	{
		$stmt->bind_param("ssssis",
                                    $research_title,
									$user_preview,
									$research_date,
									$research_magazine,
									$user_id,
									$file_name);
		if($stmt->execute())
	    {

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