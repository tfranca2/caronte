<?php

if(!isset($_COOKIE['login']))
	echo "<h3>Acesso não autorizado!</h3>
			\n<meta http-equiv=\"refresh\" content=\"3; url=index.php\">
			\n<!-- Se fosse você não faria isso de novo! -->";
else {
	include 'header.php';
	echo "<h1 style='color: green;'>Alteração de dados pessoais</h1> 
			<br> ";

?>

<form id="form_inscricao"  method="post">
            <input type="hidden" value="senha5 = 'Electra'" />
			<fieldset style="padding: 10px;border: solid 2px #ccc;">
				<legend style="font-weight: bold;">Ficha de Dados</legend>
                                
                <div class="row">
                    <fieldset style="padding: 0px; padding-left: 10px;  padding-bottom: 10px; border: solid 2px #ccc;">
                    <legend style="font-weight: bold;">Identificação</legend>
		                        
						<div class="row">
							<div class="coluna_menor">
								<label>Primeiro Nome:</label>
								<input type="text" value="Luke" name="nome" id="nome" maxlength="" tabindex="" class="coluna_menor">
							</div>
							
							<div class="coluna_menor">
								<label>Ultimo Nome:</label>
								<input type="text" value="Skywalker" name="sobrenome" id="sobrenome" maxlength="" tabindex="" class="coluna_menor">
							</div>				
						</div>
						<div class="row">
							<div class="coluna_maior">
								<label>Email:</label>
								<input type="text" value="luke@starwars.com" name="email" id="email" maxlength="" tabindex="" class="coluna_maior">
							</div>
						</div>
						
		            	<div class="row">
		            		<div class="coluna_menor">
			            		<label>Senha:</label>
			            		<input type="password" value="senha2 = 'a4757d7419ff3b48e92e90596f0e7548'" maxlength="10" name="senha2" id="senha" class="coluna_menor"><br> 
			                </div>
						</div>
					</fieldset>
				</div>
				
				<div class="row">
					<div class='buttons'>
						<button type="submit" name="saveChanges"><img src="img/tick.png" alt="" /> Salvar</button>
						<a href="#" style="text-decoration: none;">
						<button id="buttonCancel" type="button" class="positive"><img src="img/exclude.png" alt="" border="0" /> Cancelar</button>
						</a>
					</div>
				</div> 
				
			</fieldset>
		
		</form>
<?php } ?>