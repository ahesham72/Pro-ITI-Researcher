<?php
$pagename ='Profile '; //  معـــــــــــــــــــــــــــــــدل

include("header.php");
include("navbar.php");
?>

<div class="profile">


<div class="container">

<?php
    $user_id=$_GET["user_id"];
    $select_user="SELECT `r_name`, `uni_name`, `r_email` FROM researchers where r_id = ? ";
    if($stmt =$connect->prepare($select_user))
    {
     $stmt->bind_param("i",$user_id);
            if($stmt->execute())
            {
                $result=$stmt->get_result();
                while($row=$result->fetch_assoc())
                {
                    echo '<h1 class="pro_wel uppercase ">Welcome '.$row["r_name"].' </h1>';

                    echo ' <div class="pro_covr"><div class="pro_viw_info">
                             <div class="pro_head">Your Personal Information :</div>'.
                            '<div class="pro_name" >Name:   <span>'.$row["r_name"]. '</span>'.' </div>'.
                            '<div class="pro_email">E-mail:   <span>'.$row["r_email"]. '</span>'.' </div>'.
                            '<div class="pro_uni">University :    <span>' .$row["uni_name"].'</span>'.' </div>'.
                        '</div>'.'</div>';

                }
            }
    }
?>


    <div class="pro_up">Your Upload:</div>


    <div class="ico_up">

            <div  class="col-md-4 upload">
                <a href="upload_master.php"><i class="fa fa-upload fa-3x"></i></a>
                <h3 class="pro_mes">Master</h3>

            </div>

            <div  class="col-md-4 upload">
                <a href="upload_phd.php"><i class="fa fa-upload fa-3x"></i></a>
                <h3>P.HD</h3>

            </div>

            <div  class="col-md-4 upload">
                <a href="upload_research.php"><i class="fa fa-upload fa-3x"></i></a>
                <h3 class="pro_rese">Research</h3>

            </div>

    </div>



</div>

</div>















<?php
include("footer.php");
?>