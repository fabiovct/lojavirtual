<?php

Class Config{
	//INFORMAÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "lojavirtual";
	const SITE_NOME = 	"Loja Virtual - PHP7 e Mysqli";
	const SITE_EMAIL_ADM  = "vct.fabio.vct@gmail.com";

	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
	 BD_USER = "ROOT",
	 BD_SENHA = "",
	 BD_BANCO = "test",
	 BD_PREFIX = "";

	 //INFORMAÇÕES PARA PHP MAILER
	 
	 const EMAIL_HOST = "stmp.gmail.com";
	 const EMAIL_USER = "vct.fabio.vct@gmail.com";
	 const EMAIL_NOME = "Contato loja virtual";
	 const EMAIL_SENHA = "dezago87";
	 const EMAIL_PORTA = 587;
	 const EMAIL_SMTPAUTH = true;
	 const EMAIL_SMTPSECURE = "tls";
	 const EMAIL_COPIA = "fabio_vct@yahoo.com.br";
	 
	
}




?>