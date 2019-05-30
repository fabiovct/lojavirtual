<?php 

require './lib/autoload.php';


$smarty = new Template();



//valores para o template
$smarty->assign('NOME', 'HUGO VASCONCELOS DE FREITAS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

// $dados = new Conexao();
// $sql = "SELECT*FROM categorias";
//$sql = "SELECT*FROM produtos";
// $dados->ExecuteSQL($sql);
// $lista = $dados->ListarDados();
// echo $dados->GetItens();

// echo'<pre>';
// var_dump($lista);
// echo'</pre>';


$smarty->display('index.tpl');
 ?>