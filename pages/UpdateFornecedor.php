<?php include("../config.php");?>
<div class="card-title mt-5 text-center">
   <h1>Alterar Cadastro</h1>
   <table class="container-fluid">
   <tbody>
      <tr>
         <td>
            <form method="post" class="formatar">
               <input type="hidden" name="id" value="" required>
               <input type="hidden" name="formulario" value="fornecedor" required>
               <input type="hidden" name="acao" value="updateF" required>
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
                              <label class="col-md-4 control-label">CNPJ</label>
                              <div class="col-md-8 inputGroupContainer" >
                              <input placeholder="CNPJ" name="cnpj" class="form-control" type="text" maxlength="18" OnKeyPress="formatar('##.###.###/####-##', this)" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Endereço</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Endereço" name="endereco" class="form-control" type="text" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Cidade</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Cidade" name="cidade" class="form-control" type="text" required></div>
                           </div>
                        </td>
                        <td>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Email</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="email" name="email" class="form-control" type="email" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Telefone</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Telefone" name="telefone" class="form-control" type="text"  maxlength="13" OnKeyPress="formatar('##-#####-####', this)" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Número</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Número" name="numero" class="form-control" type="text" required></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 control-label">Bairro</label>
                              <div class="col-md-8 inputGroupContainer">
                              <input placeholder="Bairro" name="bairro" class="form-control" type="text" required></div>
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