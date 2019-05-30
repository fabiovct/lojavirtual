<?php
/* Smarty version 3.1.31, created on 2019-04-13 21:22:46
  from "C:\xampp\htdocs\lojavirtual\view\contato.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5cb23706a63756_52360657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae49e6784009faddbfcdfa2aeb3176d38be505d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lojavirtual\\view\\contato.tpl',
      1 => 1555183360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb23706a63756_52360657 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="envio">
				<span class="contact100-form-title">
					Contato
				</span>
				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Nome completo">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Envie sua pergunta"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					
						 <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
					
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div><?php }
}
