<?php

$con = new PDO("mysql:host=localhost;dbname=project",'root','');



if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `student` WHERE firstname = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Email address</th>
			</tr>
			<tr>
				<td><?php echo $row->firstname; echo " "; echo $row->lastname; ?></td>
				<td><?php echo $row->email;?></td>
            </tr>
        </table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>