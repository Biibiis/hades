<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar instrutor</h2>

<form action="edit.php?id=<?php echo $instrutor['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="instrutor['cpf']" value="<?php echo $instrutor['cpf']; ?>">
    </div>
	
	<div class="form-group col-md-6">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="instrutor['nome']" value="<?php echo $instrutor['nome']; ?>">
    </div>    
	
	<div class="form-group col-md-2">
      <label for="name">Data de nascimento</label>
      <input type="text" class="form-control" name="instrutor['data_nascimento']" value="<?php echo $instrutor['data_nascimento']; ?>">
    </div>     
  </div>
  
  <div class="row">
	<div class="form-group col-md-6">
      <label for="campo3">Endereço</label>
      <input type="text" class="form-control" name="instrutor['endereco']" value="<?php echo $instrutor['endereco']; ?>">
    </div>
        <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="instrutor['telefone']" value="<?php echo $instrutor['telefone']; ?>">
	</div>

	<div class="form-group col-md-2">
      <label for="campo1">Celular</label>
      <input type="text" class="form-control" name="instrutor['celular']" value="<?php echo $instrutor['celular']; ?>">
    </div>
	</div>
	
	<div class="row">
	<div class="form-group col-md-2">
      <label for="campo3">RG</label>
      <input type="text" class="form-control" name="instrutor['rg']" value="<?php echo $instrutor['rg']; ?>">
    </div>
        <div class="form-group col-md-6">
      <label for="campo2">Titulação</label>
      <input type="text" class="form-control" name="instrutor['titulacao']" value="<?php echo $instrutor['titulacao']; ?>">
	</div>	
	</div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>