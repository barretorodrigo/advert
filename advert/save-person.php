<?php
if (isset($_GET['status'])) {

	$nome     = $_POST['nome'];
	$email    = $_POST['email'];
	$telefone = $_POST['telefone'];

	$query = "INSERT INTO pessoas (nome, email, telefone)
        VALUES ('$nome', '$email', '$telefone')";

	if (mysqli_query($conn, $query)) {?>
		<div class="alert alert-success" role="alert">Pessoa cadastrada com sucesso</div>

		<?php } else {
		echo "Error: ".$query."<br>".mysqli_error($conn);
	}
}

?>