<?php

include("header.php");
include("navbar.php");
$_SESSION["phd_id"] = 0 ;
$search_value=0;
?>

<!-- start Search Div -->
<!-- Start Search Box -->
<div class="searchdiv">
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


<div class="awesome text-center">
    <div class="container">

        <h2 class="awesome-head h1 head-border-center uppercase">Ph.d</h2>


<?php

if(isset($_POST['submit']))
{
    $search_value=$_POST["search"];

        $sql="select * from phd where p_title like '%$search_value%'";

        $res=$connect->query($sql);

        while($row=$res->fetch_assoc())
        {
            $_SESSION["phd_id"] = $row['p_id'];
            echo "<div class='col-sm-6 col-md-4'>";
            echo "<div class='thumbnail cedit'>";
            echo "<div class='caption'>";
            echo "<h3>".$row['p_title']."</h3>";
            echo "<p>".$row['p_date']."</p>";
            echo "<p>".$row['uni_name']."</p>";
            echo "<p><a class='btn btnmore' role='button' href='view_phd.php?phd_id=".$_SESSION["phd_id"]."'>More</a> </p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

}
$connect->close();
?>

</div>

</div>

<!-- End Content -->


<?php
include("footer.php");
?>
