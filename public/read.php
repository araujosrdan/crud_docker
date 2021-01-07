<?php require "layout/header.php" ?>
	<h1>Cadastro de alunos</h1>
	<a href="create.php" class="btn btn-primary">Adicionar aluno(a)</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nome</th>
	      <th scope="col">Email</th>
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Mark</td>
	      <td>Otto</td>
	      <td>
	      	<a href="#" class="btn btn-warning">Editar</a>
	      	<a href="#" class="btn btn-danger">Deletar</a>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Jacob</td>
	      <td>Thornton</td>
	      <td>
	      	<a href="#" class="btn btn-warning">Editar</a>
	      	<a href="#" class="btn btn-danger">Deletar</a>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td colspan="2">Larry the Bird</td>
	      <td>
	      	<a href="#" class="btn btn-warning">Editar</a>
	      	<a href="#" class="btn btn-danger">Deletar</a>
	      </td>
	    </tr>
	  </tbody>
	</table>
<?php require "layout/footer.php" ?>