<?php
include("header.php");

include("navbar.php");
?>

<h1 style="text-align: center">Researchers</h1>


	<div class="container">
	
	<?php

$select_user="SELECT * FROM contact ";
	if($stmt =$connect->prepare($select_user))
	{
		// $stmt->bind_param("s",$user_name);
		if($stmt->execute())
	    {
			$result=$stmt->get_result();
			echo "<table class='table'>
			      <tr>
					<td> ID </td>
					<td>user Name </td>
					<td> email </td>
					<td> Subject </td>
					<td> Message</td>
					<td> delete</td>
				  </tr>
				  ";

			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["u_name"]."</td>";
				echo "<td>".$row["u_email"]."</td>";
				echo "<td>".$row["u_subj"]."</td>";
				echo "<td>".$row["u_message"]."</td>";
				echo "<td><a class='btndelete' href='contact_delete.php?id=".$row["id"]."'>delete</a></td>";


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