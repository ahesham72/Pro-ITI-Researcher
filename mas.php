<?php

include("header.php");
include("navbar.php");
$_SESSION["ma_id"] = 0 ;
$search_value=0;

?>


<!-- start Search Div -->
<!-- Start Search Box -->
<div class="searchdiv ">
  <div class="container animatedParent">
    <h1>Search Your Idea Here</h1>
    <form id="searchForm" method="post" action="searchresult_mas.php">
            <fieldset>
                <input class="sbox" id="s" name="search" type="text" />

                <input class="btn btnsearch animated shake " type="submit" name="submit" value="Search" id="submitButton" />
            </fieldset>
        </form>
  </div>
</div>

<!-- End Search Box -->

<!-- End Search Div -->

<!-- Start Content -->

<div class="awesome text-center ">
        <div class="container animatedParent animateOnce">

            <h2 class="awesome-head h1 head-border-center uppercase animated bounceInDown slowest">Master</h2>

            <?php
                $select_user="SELECT * FROM master ";
                if($stmt =$connect->prepare($select_user))
                {
                        if($stmt->execute())
                        {
                            $result=$stmt->get_result();
                            while($row=$result->fetch_assoc())
                            {
                                $_SESSION["ma_id"] = $row['m_id'];
                                echo "<div class='col-sm-6 col-md-4 animated bounceInLeft '>";
                                echo "<div class='thumbnail cedit'>";
                                echo "<div class='caption'>";
                                echo "<h3>".$row['m_title']."</h3>";
                                echo "<p>".$row['m_date']."</p>";
                                echo "<p>".$row['uni_name']."</p>";
                                echo "<p><a class='btn btnmore' role='button' href='view_ma.php?ma_id=".$_SESSION["ma_id"]."'>More</a> </p>";
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