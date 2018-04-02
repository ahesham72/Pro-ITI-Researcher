<?php
include("header.php");
include("navbar.php");

?>

<div class="container">


<h1 style="text-align: center">Supervisors</h1>
<a href="insert_supervisors.php"><input type="submit" class="btn insert" value="Insert" ></a>

<?php

$select_user="SELECT * FROM supervisors ";
	if($stmt =$connect->prepare($select_user))
	{
		// $stmt->bind_param("s",$user_name);
		if($stmt->execute())
	    {
			$result=$stmt->get_result();
			echo "<table class='table'>
			      <tr>
					<td>researcher ID</td>
					
					<td>researcher Name</td>
					
					
					<td>
					delete
					</td>
				  
					</tr>
				  ";

			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row["super_id"]."</td>";
				echo "<td>".$row["super_name"]."</td>";
				echo "<td><a class='btndelete' href='user_delete.php?user_id=".$row["super_id"]."'>delete</a></td>";


				echo "</tr>";
			}
			echo "</table>";
		}
	}





//clase connection

$connect->close();


?>

</div>


<?php
include("footer.php");
?>