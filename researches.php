<?php

include("header.php");
include("navbar.php");
$_SESSION["research_id"] = 0 ;
$search_value=0;
?>

<!-- start Search Div -->
<!-- Start Search Box -->
<div class="searchdiv">
  <div class="container animatedParent">
    <h1>Search Your Idea Here</h1>
    <form id="searchForm" method="post" action="searchresult_researches.php">
            <fieldset class="animatedParent" >
                <input class="sbox" id="s" name="search" type="text" />

                <input class="btn btnsearch animated shake  "  name="submit" type="submit" value="Search" id="submitButton" />

            </fieldset>
        </form>
  </div>
</div>

<!-- End Search Box -->

<!-- End Search Div -->

<!-- Start Content -->



<div class="awesome text-center ">
    <div class="container animatedParent">

        <h2 class="awesome-head h1 head-border-center uppercase animated bounceInDown slowest">Researches</h2>

        <?php
            $select_user="SELECT * FROM researches ";
            if($stmt =$connect->prepare($select_user))
            {
                    if($stmt->execute())
                    {
                        $result=$stmt->get_result();
                        while($row=$result->fetch_assoc())
                        {
                            $_SESSION["research_id"] = $row['re_id'];
                            echo "<div class='col-sm-6 col-md-4 animated fadeInRightShort  '>";
                            echo "<div class='thumbnail cedit   '>";
                            echo "<div class=' caption '>";
                            echo "<h3>".$row['re_title']."</h3>";
                            echo "<p>".$row['re_date']."</p>";
                            echo "<p>".$row['magazine_name']."</p>";
                            echo "<p><a class='btn btnmore' role='button' href='view_research.php?research_id=".$_SESSION["research_id"]."'>More</a> </p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
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