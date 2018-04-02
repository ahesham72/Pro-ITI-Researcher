<?php
include("header.php");
include("navbar.php");

?>

<h1 style="text-align: center">Ph.D</h1>

<div class="container">

<a href="insert_phd.php"><input type="submit" class="btn insert" value="Insert" ></a>

<?php
$select_master="select * from phd";

if($stmt=$connect -> prepare($select_master))
{
    if($stmt ->execute())
    {
        $result=$stmt->get_result();
        echo "<table class=tableadmin >";
        echo "<th>"."p_id"."</th>";
        echo "<th>"."p_title"."</th>";
        echo "<th>"."uni_name"."</th>";
        echo "<th>"."Faculty_name"."</th>";
        echo "<th>"."p_preview"."</th>";
        echo "<th>"."p_date"."</th>";
        echo "<th>"."super_name"."</th>";
        echo "<th>"."file"."</th>";
        echo "<th>"."Delete"."</th>";
       

        while($row=$result-> fetch_assoc())
        {
            echo "<tr>";
            echo "<td>". $row["p_id"]. "</td>";
            echo "<td>". $row["p_title"] ."</td>";
            echo "<td>".$row["uni_name"]."</td>";
            echo "<td>".$row["faculty_name"]."</td>";
            echo"<td>". $row["p_preview"]."</td>";
            echo "<td>".$row["p_date"]."</td>";
            echo "<td>".$row["super_name"]."</td>";
            echo"<td>". $row["file"]."</td>";
            echo "<td>"."<a class='btndelete' href='phd_delete.php?p_id=".$row["p_id"]."'>Delete</a>"."</td>";
           
            
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