<?php

include("header.php");
include("navbar.php");
$_SESSION["research_id"] = 0 ;
$search_value=0;
?>

<!-- start Search Div -->
<!-- Start Search Box -->
<div class="searchdiv">
  <div class="container ">
    <h1>Serach Your Idea Here</h1>
    <form id="searchForm" method="post" action="">
            <fieldset>
                <input class="sbox" id="s" name="search" type="text" />

                <input class="btn btnsearch  " name="submit" type="submit" value="Search" id="submitButton" />

                <!-- <div id="searchInContainer">
                    <input type="radio" name="check" value="searches" checked />
                    <label class="item" for="searchSite" id="siteNameLabel">Searches</label>

                    <input type="radio" name="check" value="ma"  />
                    <label class="item" for="searchWeb">M.A</label>

                    <input type="radio" name="check" value="phd"  />
                    <label class="item" for="searchWeb">Ph.D</label>

                    <input type="radio" name="check" value="all"  />
                    <label class="item" for="searchWeb">All</label>
                </div> -->

            </fieldset>
        </form>
  </div>
</div>


<div class="awesome text-center">
    <div class="container">

        <h2 class="awesome-head h1 head-border-center uppercase">Search Results</h2>


<?php

if(isset($_POST['submit']))
{
    $search_value=$_POST["search"];
    
    $sql_re="select * from researches where re_title like '%$search_value%'";
    $res=$connect->query($sql_re);
    while($row=$res->fetch_assoc()){
        $_SESSION["research_id"] = $row['re_id'];
        echo "<div class='col-sm-6 col-md-4'>";
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

    $sql_ma="select * from master where m_title like '%$search_value%'";
    $res=$connect->query($sql_ma);
    while($row=$res->fetch_assoc())
    {
        $_SESSION["ma_id"] = $row['m_id'];
        echo "<div class='col-sm-6 col-md-4'>";
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

    $sql_phd="select * from phd where p_title like '%$search_value%'";

        $res=$connect->query($sql_phd);

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


?>

    </div>

</div>


<?php
include("footer.php");
?>