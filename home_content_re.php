<?php
include("connect.php");
$_SESSION["research_id"] = 0 ;
?>


        <h2 class="awesome-head h1 head-border-center uppercase">Researches</h2>

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

                            if($row['re_id'] > 2) {
                                break;
                            }
                        }
                    }
            }
            $connect->close();
        ?>
<p><a href="researches.php" class="btn btnmore2" role="button">More Researches</a> </p><br><br>


