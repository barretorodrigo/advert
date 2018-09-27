<?php
if (isset($_GET['apagar'])) {

	if ($_GET['apagar'] == "classificado") {
		$id     = $_GET['id'];
		$query  = "DELETE FROM classificados WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Classificado apagado sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	} else if ($_GET['apagar'] == "pessoa") {
		$id     = $_GET['id'];
		$query  = "DELETE FROM pessoas WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $query)) {?>
			<div class="alert alert-success" role="alert">Pessoa apagada sucesso</div>

			<?php } else {
			echo "Error: ".$query."<br>".mysqli_error($conn);
		}
	}

}

?>