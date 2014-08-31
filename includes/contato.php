<div class="container">

      <div class="starter-template">
        
<form class="form-horizontal" method="post" action="<?php $_PHP_SELF ?>" role="form">

<fieldset>

<!-- Form Name -->
<legend><h1>Contato</h1></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputNome">Nome:</label>  
  <div class="col-md-5">
  <input id="textinputNome" name="inputNome" type="text" placeholder="Seu Nome" class="form-control input-md" required="">
  <span class="help-block">Ex.Fulano da Silva</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputEmail">Email:</label>  
  <div class="col-md-5">
  <input id="textinputEmail" name="inputEmail" type="email" placeholder="Seu email" class="form-control input-md" required="">
  <span class="help-block">Ex.seuemail@serv.com</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinputAssunto">Assunto</label>  
  <div class="col-md-5">
  <input id="textinputAssunto" name="inputAssunto" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textareaMensagem">Mensagem:</label>
  <div class="col-md-5">                     
    <textarea class="form-control" id="textareaMensagem" name="areaMensagem" rows="5">digite aqui a sua mensagem ...</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebuttonEnvia"></label>
  <div class="col-md-4">
    <button id="singlebuttonEnvia" name="singlebuttonEnvia" class="btn btn-primary">Envia</button>
  </div>
</div>

</fieldset>
</form>

<?php require_once ("envia.php"); ?>

             </div>
