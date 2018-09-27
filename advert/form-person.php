<?php
$sql    = "SELECT * FROM pessoas";
$result = mysqli_query($conn, $sql);
?>
<div class="form-group">
	<label for="pessoa">Pessoa</label>
		<select class="form-control" id="pessoa" name="pessoa">
		<option>Selecione a pessoa</option>
<?php
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {?>
			    <option value="<?php echo $row["id"];?>"> <?php echo $row["nome"];
		?></option>
		<?php }
} else {
	echo "0 results";
}

?>

	</select>
</div>