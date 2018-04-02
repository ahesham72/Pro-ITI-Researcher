<?php

include("header.php");
include("navbar.php");
?>
    <div class="view_research">

            <div class="container">
            <?php
            $research_id = $_GET["research_id"];

            $select_user="SELECT * FROM researches where re_id = ? ";
                if($stmt =$connect->prepare($select_user))
                {
                $stmt->bind_param("i",$research_id);
                        if($stmt->execute())
                        {
                            $result=$stmt->get_result();
                            while($row=$result->fetch_assoc())
                            {
                                echo '<div class="viw_res_cont">'.

                                        '<h3 class="viw_res_title" >Title :</h3>
                                                 <output class="out_res_title">'.$row["re_title"]. '</output>'.

                                                 '<h4 class="viw_res_mgzn">Date of Publishment :</h4>
                                    <output class="out_res_mgzn">' .$row["re_date"].'</output>'.

                                       '<h3 class="viw_res_prv">Preview :</h3>
                                                <output class="out_res_prv"> <blockquote>'.$row["re_preview"]. '</blockquote></output>'.

                                      '<h4 class="viw_res_mgzn">Magazine Name :</h4>
                                               <output class="out_res_mgzn">' .$row["magazine_name"].'</output>'
                                               .'<button class="btn btnmore"><a style="text-decoration:none" href="upload_res/'.$row['file'].'" download  name="download" class="">Download</a></button>'.'</div>' ;

                }
            }
    }


?>

</div>
<?php
 
if(isset($_post['download']))
{
    $id = intval($_GET['re_id']); 
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $temp = explode(".", $_FILES['file']['name']);
	$file_name = round(microtime(true)) . '.' . end($temp);
	$file_loc = $_FILES['file']['tmp_name'];
    $filedow  = "SELECT `re_id`, `file` FROM `researches` WHERE re_id='".$id."'";  
	if($stmt =$connect->prepare($filedow))
	{
		$stmt->bind_param("is",
                                    $id,
                                    $file_name);
        $row = mysqli_fetch_array($file);  
        extract($row);  
        header("Content-Disposition: attachment; filename=".stripslashes($filename).""); 
        print $content; 
		if($stmt->execute())
	    {

		}
	}
}

?>
<?php
include("footer.php");
?>