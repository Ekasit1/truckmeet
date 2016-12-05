<?php

session_start();
$id = $_GET['id'];

require('sql.php');
$db = new sql;

$stmt = $db->sql()->prepare("SELECT * FROM vehicles WHERE id=?");
$stmt->execute([$id]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="row">

	<div class="col-md-6">
		<img class="img img-responsive" src="img/vehicles/<?php echo $result[0]['image'] ?>">
	</div><!-- /.col-md-6 -->
	<div class="col-md-6">
		<table class="table">
			<tr>
				<td><b>Chaufför</b></td>
				<td><?php echo $result[0]['name'] ?></td>
			</tr>
			<?php
			echo isAdmin() ? '<tr><td><b>Telefonnummer</b></td><td>'.$result[0]['phone'].'</td></tr>' : '';
			?>
			<?php
			echo isAdmin() ? '<tr><td><b>E-post</b></td><td>'.$result[0]['email'].'</td></tr>' : '';
			?>
			<tr>
				<td><b>Stad</b></td>
				<td><?php echo $result[0]['city'] ?></td>
			</tr>
			<tr>
				<td><b>Fordonstyp</b></td>
				<td><?php echo $result[0]['vehicleType'] ?></td>
			</tr>
			<tr>
				<td><b>Årsmodell</b></td>
				<td><?php echo $result[0]['vehicleYear'] ?></td>
			</tr>

		</table>
	</div><!-- /.col-md-6 -->

</div><!-- /.row -->