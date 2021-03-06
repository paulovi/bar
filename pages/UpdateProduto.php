<?php include("../config.php"); ?>
<div class="card-title mt-5 text-center">
   <h1>Alterar Produto</h1>
   <table class="container-fluid">
   <tbody>
      <tr>
         <td>
            <form method="post" class="formatar">
               <input type="hidden" name="id" value="" required>
               <input type="hidden" name="formulario" value="produto" required>
               <input type="hidden" name="acao" value="updateP" required>
               <fieldset>
                  <table>
                     <tr>
                        <td>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Nome</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Nome" name="nome" class="form-control" type="text" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Preço Unitário</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Preço Unitário" name="preco" class="form-control" type="text" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Aleta de Estoque</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Alertar Estoque" name="alerta_estoque" class="form-control" type="text"></div>
                           </div>
                        </td>
                        <tb>
                           <div class="form-group">
                              <label for="sel1">Categoria</label>
                              <select class="form-control categoria" id="sel1" name="categoria">
                                <?php 
                                    $forn = MySql::conectar()->prepare("
                                        SELECT * FROM tb_categoria WHERE status != 0"
                                    );

                                    $forn->execute();
                                    $forn = $forn->fetchAll();
                                    foreach ($forn as $key => $value):
                                ?>
                                <option value=<?php echo $value['idcategoria'];?>><?php echo $value['categoria'];?></option>
                              <?php endforeach;?>
                              </select>
                           </div>
                        </tb>
                        <td>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Quantidade</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Quantidade" name="qtd" class="form-control" type="text" required></div>
                           </div>
                           <div class="form-group">
                              <label for="sel1">Fornecedor</label>
                              <select class="form-control fornecedor" id="sel1" name="fornecedor">
                                <?php 
                                    $cat = MySql::conectar()->prepare("
                                        SELECT * FROM tb_fornecedor"
                                    );

                                    $cat->execute();
                                    $cat = $cat->fetchAll();
                                    foreach ($cat as $key => $value):
                                ?>
                                <option value=<?php echo $value['idfornecedor'];?>><?php echo $value['fornecedor'];?></option>
                              <?php endforeach;?>
                              </select>
                           </div>
                        <td>
                     </tr>
                  </table>
               </fieldset>
               <button type="submit" class="btn btn-primary salvar">Salvar</button>
            </form>
         </td>
          </tr>
   </tbody>
   </table>
</div>