<?php
include("connect.php");
$_SESSION["ma_id"] = 0 ;
?>
<div class="ho_con-MS">


<h2 class="awesome-head h1 head-border-center uppercase ">Master</h2>

        <?php
            $select_ma="SELECT * FROM master ";
            if($stmt =$connect->prepare($select_ma))
            {
                    if($stmt->execute())
                    {
                        $result=$stmt->get_result();
                        while($row=$result->fetch_assoc())
                        {
                            $_SESSION["ma_id"] = $row['m_id'];
                            echo "<div class='col-sm-6 col-md-4    '>";
                            echo "<div class='thumbnail cedit'>";
                            echo "<div class='caption'>";
                            echo "<h3>".$row['m_title']."</h3>";
                            echo "<p>".$row['m_date']."</p>";
                            echo "<p>".$row['uni_name']."</p>";
                            echo "<p><a class='btn btnmore' role='button' href='view_ma.php?ma_id=".$_SESSION["ma_id"]."'>More</a> </p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                            if($row['m_id'] > 2) {
                                break;
                            }
                        }
                    }
            }
            $connect->close();
        ?>

<p><a href="mas.php" class="btn btnmore2" role="button">More Masters</a> </p><br><br>




</div>
