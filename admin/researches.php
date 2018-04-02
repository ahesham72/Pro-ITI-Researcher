<?php
include("header.php");
include("navbar.php");

?>
<div class="container">



<h1 style="text-align: center">Researches</h1>
<a href="insert_researches.php"><input type="submit" class="btn insert" value="Insert" ></a>

<?php

$select_user="SELECT * FROM researches ";
	if($stmt =$connect->prepare($select_user))
	{
		// $stmt->bind_param("s",$user_name);
		if($stmt->execute())
	    {
			$result=$stmt->get_result();
			echo "<table class='tableadmin'>
			      <tr>
					<td>
					researche ID
					</td>
					<td>
					researche Title
					</td>
					<td>
					researche Preview
					</td>
					<td>
					researche Date
					</td>
					<td>
					Magazine Name
					</td>
					<td>
					File
					</td>
					<td>
					delete
					</td>
				  </tr>
				  ";

			while($row=$result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row["re_id"]."</td>";
				echo "<td>".$row["re_title"]."</td>";
				echo "<td>".$row["re_preview"]."</td>";
				echo "<td>".$row["re_date"]."</td>";
				echo "<td>".$row["magazine_name"]."</td>";
				echo "<td>".$row["file"]."</td>";
				// echo "<td><a href='user_view.php?user_id=".$row["re_id"]."'>view</a></td>";
				// echo "<td><a href='user_update.php?user_id=".$row["re_id"]."'>update</a></td>";
				echo "<td><a class='btndelete' href='researches_delete.php?re_id=".$row["re_id"]."'>delete</a></td>";


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