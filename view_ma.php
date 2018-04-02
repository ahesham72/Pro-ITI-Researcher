<?php

include("header.php");
include("navbar.php");
?>

    <div class="view_ma">

    <div class="container">

    <?php
    $ma_id = $_GET["ma_id"];

    $select_user="SELECT * FROM master where m_id = ? ";
        if($stmt =$connect->prepare($select_user))
        {
        $stmt->bind_param("i",$ma_id);
                if($stmt->execute())
            {
                $result=$stmt->get_result();
                while($row=$result->fetch_assoc())
                {

                    echo '<div class="viw_ma_cont">'.

                            '<h3 class="viw_ma_title" >Title :</h3>
                                <output class="out_ma_title">'.$row["m_title"]. '</output>'.

                                                 '<h4 class="viw_res_mgzn">Date of Publishment :</h4>
                                    <output class="out_res_mgzn">' .$row["m_date"].'</output>'.

                            '<h3 class="viw_ma_prv">Preview :</h3>
                                <output class="out_ma_prv"> <blockquote>'.$row["m_preview"]. '</blockquote></output>'.

                            '<h3 class="viw_ma_prv">Supervisor Name :</h3>
                                <output class="out_ma_prv"> <blockquote>'.$row["super_name"]. '</blockquote></output>'.

                            '<h4 class="viw_res_mgzn">University Name :</h4>
                                <output class="out_ma_uin">' .$row["uni_name"].'</output>'.

                            '<h4 class="viw_res_mgzn">Faculty Name :</h4>
                                <output class="out_ma_uin">' .$row["faculty_name"].'</output>'.'<button class="btn btnmore"><a style="text-decoration:none" href="upload_ma/'.$row['file'].'" download  name="download" class="">Download</a></button>'.'</div>';


                }
            }
    }


?>
</div>

    </div>
	<?php
 
if(isset($_post['download']))
{
    $id = intval($_GET['m_id']); 
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $temp = explode(".", $_FILES['file']['name']);
	$file_name = round(microtime(true)) . '.' . end($temp);
	$file_loc = $_FILES['file']['tmp_name'];
    $filedow  = "SELECT `m_id`, `file` FROM `master` WHERE m_id='".$id."'";  
	if($stmt =$connect->prepare($filedow))
	{
		$stmt->bind_param("is",
                                    $id,
                                    $file_name);
        $row = mysqli_fetch_array($file);  
        extract($row);  
        header("Content-Disposition: attachment; filename=".stripslashes($file_name).""); 
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