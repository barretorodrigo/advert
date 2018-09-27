<?php
include 'header.php';
include 'save-person.php';
?>
<main >
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Cadastrar Pessoa</h1>

  </div>
</section>
<section>
	<div class="container">
		<form method="post" action="create-person.php?status=save">
   		 <div class="form-group">
	      <label for="nome">Nome</label>
	      <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" required>
	    </div>
	    <div class="form-group">
	      <label for="email">Email</label>
	      <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email" required />
	    </div>
	    <div class="form-group">
	      <label for="telefone">Telefone</label>
	      <input type="number" class="form-control" id="telefone" placeholder="Digite o telefone" name="telefone" required />
	    </div>
	    <button type="submit" class="btn btn-primary">Cadastrar</button>
	  </form>

	</div>
</section>
</main>
<?php include 'footer.php';?>