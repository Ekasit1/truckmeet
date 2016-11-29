<?php

$id = $_GET['id'];

require('sql.php');

$query = "SELECT * FROM vehicles WHERE id = $id;";
$sql = new sql;
$result = $sql->get($query);

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
			<tr>
				<td><b>Beskrivning</b></td>
				<td>Fyrväxlad 18-hästars cykel. <a href='#'>Läs mer</a></td>
			</tr>
		</table>
	</div><!-- /.col-md-6 -->

</div><!-- /.row -->