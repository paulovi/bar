<?php 
	$sql = MySql::conectar()->prepare("
	SELECT *
	FROM tb_cliente C
	WHERE C.status != 0
	");
	$sql->execute();
	$qtd = $sql->rowCount();
?>
<div style="width: 100%;">
	<div class="left" style="width: 50%;float: left;">
		<input id="pesquisaSlide" class="form-control left" placeholder="Pesquisar Cliente" />
		<a href="<?php echo INCLUDE_PATH;?>CadastroCliente"><button type="button" class="btn btn-info right">+ Novo</button></a>
	</div>
	<div class="right" style="width: 15%;float: right">
		<label for="sel1">Resultados por página:</label> 
		<select class="form-control" id="sel1" onchange="pagination(this,'#list-thumbs','#pesquisaSlide')">
			
				<option value="5">5</option>
				<?php if($qtd > 5):?>
					<option value="10">10</option>
				<?php endif;?>
		
		</select>
	</div>
	<div class="clear"></div>
</div>
<h1 class="page-header">Lista de Clientes</h1>
				<div class="table-responsive">
				    <table class="table table-striped table-bordered table-hover" id="list-thumbs">
				      	<thead>
					        <tr>
					          	<th>CPF</th>
					          	<th>Nome</th>
					          	<th>Ação</th>
					        </tr>
				      	</thead>
				      	<tbody>
							<?php 
								$clientes = MySql::conectar()->prepare("
									SELECT * FROM `tb_cliente` WHERE status != 0"
								);
								$clientes->execute();
								$clientes = $clientes->fetchAll();

								foreach ($clientes as $key => $value):
							?>
				        <tr>
				          <th><?php echo $value['cpf'];?></th>
				          <td><?php echo $value['nome'];?></td>
				          <td>
				          		<form method="post" style="display: inline-block;" class="teste">
				          			<input type="hidden" name="id" value="<?php echo $value['idcliente']; ?>"/>

				          			<input type="hidden" name="acao" value="editarC">
				          			<input type="hidden" name="formulario" value="cliente">

						            <button class="btn btn-warning btn-xs" title="Alterar" data-toggle="modal" data-target="#myModal" type="submit">
					              		<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						            </button>
						        </form>
						        <form method="post" style="display: inline-block;" class="teste">
				          			<input type="hidden" name="id" value="<?php echo $value['idcliente']; ?>"/>

				          			<input type="hidden" name="acao" value="readDeleteC">
				          			<input type="hidden" name="formulario" value="cliente">
				          			
						            <button class="btn btn-danger btn-xs" title="Remover" type="submit" data-toggle="modal" data-target="#myModal" type="submit">
						              	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						            </button>
					            </form>
					            <a href="<?php echo INCLUDE_PATH;?>ClienteCadastrado?id=<?php echo $value['idcliente'];?>"><button class="btn btn-warning btn-xs" title="Alterar" data-toggle="modal" data-target="#myModal" type="submit">
					              		<strong>Abrir Pedido</strong>

					            </button>
						        </a>
				          </td>
				        </tr>
				    <?php endforeach;?>
				       	<tr class="nenhum-registro">
							<td colspan="6" style="text-align: center;">Nenhum cliente encontrado...</td>
						</tr>
				      </tbody>
				    </table>
				</div>
			<div id="paginacao" class="w100">
				<ul class="pagination"></ul>
			</div>
    	</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title"></h4>
	        </div>
	        <div class="modal-body">

	        </div>
	        <div class="modal-footer">
	        <div style="left:1px;bottom:1px;" class="situacao left">Formulário Salvo</div>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	        </div>
		</div>    
	</div>
</div>
