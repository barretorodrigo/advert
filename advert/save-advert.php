<?php
if (isset($_GET['status'])) {

	$titulo    = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$tipo      = $_POST['tipo'];
	$pessoa    = $_POST['pessoa'];
	$data      = date('Y-m-d');

	$query = "INSERT INTO classificados (titulo, descricao, tipo, pessoa, data)
        VALUES ('$titulo', '$descricao', '$tipo', '$pessoa', '$data')";

	if (mysqli_query($conn, $query)) {?>
		<div class="alert alert-success" role="alert">Classificado cadastrado com sucesso</div>

		<?php } else {
		echo "Error: ".$query."<br>".mysqli_error($conn);
	}
}

?>