<?php

include("header.php");
include("navbar.php");
$_SESSION["research_id"] = 0 ;
$search_value=0;
?>

<!-- start Search Div -->
<!-- Start Search Box -->
<div class="searchdiv ">
  <div class="container">
    <h1>Serach Your Idea Here</h1>
    <form id="searchForm" method="post" action="">
            <fieldset>
                <input class="sbox" id="s" name="search" type="text" />

                <input class="btn btnsearch  " name="submit" type="submit" value="Search" id="submitButton" />

            </fieldset>
        </form>
  </div>
</div>


<div class="awesome text-center ">
    <div class="container animatedParent">

        <h2 class="awesome-head h1 head-border-center uppercase animated fadeInLeft">Researches</h2>


<?php

if(isset($_POST['submit']))
{
    $search_value=$_POST["search"];

        $sql="select * from researches where re_title like '%$search_value%'";

        $res=$connect->query($sql);

        while($row=$res->fetch_assoc()){
            $_SESSION["research_id"] = $row['re_id'];
            echo "<div class='col-sm-6 col-md-4 animated fadeInLeft'>";
            echo "<div class='thumbnail cedit'>";
            echo "<div class='caption'>";
            echo "<h3>".$row['re_title']."</h3>";
            echo "<p>".$row['re_date']."</p>";
            echo "<p>".$row['magazine_name']."</p>";
            echo "<p><a class='btn btnmore' role='button' href='view_research.php?research_id=".$_SESSION["research_id"]."'>More</a> </p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";


            }
}


?>

    </div>

</div>


<?php
include("footer.php");
?>