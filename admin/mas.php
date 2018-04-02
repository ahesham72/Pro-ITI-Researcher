<?php

include("header.php");
include("navbar.php");

?>
<div class="container">
<h1 style="text-align: center">Masters</h1>

<a href="insert_mas.php"><input type="submit" class="btn insert" value="Insert" ></a>

<?php
$select_master="select * from master";

if($stmt=$connect -> prepare($select_master))
{
    if($stmt ->execute())
    {
        $result=$stmt->get_result();
        echo "<table class='tablemas'>";
        echo "<th>"."m_id"."</th>";
        echo "<th>"."m_title"."</th>";
        echo "<th>"."uni_name"."</th>";
        echo "<th>"."Faculty_name"."</th>";
        echo "<th>"."m_preview"."</th>";
        echo "<th>"."m_date"."</th>";
        echo "<th>"."super_name"."</th>";
        echo "<th>"."file"."</th>";
        echo "<th>"."Delete"."</th>";
       

        while($row=$result-> fetch_assoc())
        {
            echo "<tr>";
            echo "<td>". $row["m_id"]. "</td>";
            echo "<td>". $row["m_title"] ."</td>";
            echo "<td>".$row["uni_name"]."</td>";
            echo "<td>".$row["faculty_name"]."</td>";
            echo"<td>". $row["m_preview"]."</td>";
            echo "<td>".$row["m_date"]."</td>";
            echo "<td>".$row["super_name"]."</td>";
            echo"<td>". $row["file"]."</td>";
            echo "<td>"."<a class='btndelete' href='masters_delete.php?m_id=".$row["m_id"]."'>Delete</a>"."</td>";
           
            
            echo "</tr>";
        }
        echo "</table>";
    }
}



?>



</div>

<?php
include("footer.php");
?>