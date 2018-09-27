<?php
include 'header.php';
include 'save-advert.php';
?>
<main >
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Cadastrar Classificado</h1>

  </div>
</section>
<section>
	<div class="container">
		<form method="post" action="create-advert.php?status=save">
   		 <div class="form-group">
	      <label for="titulo">Título</label>
	      <input type="text" class="form-control" id="titulo" placeholder="Digite o título do classificado" name="titulo" required>
	    </div>
	    <div class="form-group">
	      <label for="descricao">Descrição</label>
	      <textarea class="form-control" id="descricao" rows="3" placeholder="Digite a descrição do classificado" name="descricao"></textarea>
	    </div>
	    <div class="form-group">
		    <label for="tipo">Tipo</label>
		    <select class="form-control" id="tipo" name="tipo">
			  <option>Selecione o tipo</option>
			  <option value="compra">Compra</option>
			  <option value="venda">Venda</option>
			</select>
		</div>

<?php include 'form-person.php';?>
<button type="submit" class="btn btn-primary">Cadastrar</button>
	  </form>

	</div>
</section>
</main>
<?php include 'footer.php';?>