<?php
include("connect.php");
$_SESSION["phd_id"] = 0 ;
?>

        <h2 class="awesome-head h1 head-border-center uppercase">PHD</h2>

        <?php
            $select_user="SELECT * FROM phd ";
            if($stmt =$connect->prepare($select_user))
            {
                    if($stmt->execute())
                    {
                        $result=$stmt->get_result();
                        while($row=$result->fetch_assoc())
                        {
                            $_SESSION["phd_id"] = $row['p_id'];
                            echo "<div class='col-sm-6 col-md-4 '>";
                            echo "<div class='thumbnail cedit'>";
                            echo "<div class='caption'>";
                            echo "<h3>".$row['p_title']."</h3>";
                            echo "<p>".$row['p_date']."</p>";
                            echo "<p>".$row['uni_name']."</p>";
                            echo "<p><a class='btn btnmore' role='button' href='view_phd.php?phd_id=".$_SESSION["phd_id"]."'>More</a> </p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                            if($row['p_id'] > 2) {
                                break;
                            }
                        }
                    }
            }
            $connect->close();
        ?>
<p><a href="phds.php" class="btn btnmore2" role="button">More Phd</a> </p><br><br>
