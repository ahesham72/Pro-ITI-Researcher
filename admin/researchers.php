<?php
include("header.php");

include("navbar.php");
?>

<h1 style="text-align: center">Researchers</h1>


	<div class="container">
	
	<?php

$select_user="SELECT * FROM researchers ";
	if($stmt =$connect->prepare($select_user))
	{
		// $stmt->bind_param("s",$user_name);
		if($stmt->execute())
	    {
			$result=$stmt->get_result();
			echo "<table class='table'>
			      <tr>
					<td>researcher ID </td>
					<td>researcher Name </td>
					<td>university name </td>
					<td> email </td>
					<td> password </td>
					<td> Phone </td>
					<td> delete</td>
				  </tr>
				  ";

			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row["r_id"]."</td>";
				echo "<td>".$row["r_name"]."</td>";
				echo "<td>".$row["uni_name"]."</td>";
				echo "<td>".$row["r_email"]."</td>";
				echo "<td>".$row["r_password"]."</td>";
				echo "<td>".$row["r_phone"]."</td>";
				echo "<td><a class='btndelete' href='researchers_delete.php?r_id=".$row["r_id"]."'>delete</a></td>";


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