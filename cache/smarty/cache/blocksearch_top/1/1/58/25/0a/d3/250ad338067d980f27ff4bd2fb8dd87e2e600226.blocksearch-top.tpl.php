<?php /*%%SmartyHeaderCode:287905902514f520f09-00298658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '250ad338067d980f27ff4bd2fb8dd87e2e600226' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287905902514f520f09-00298658',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59034313d646f1_67391279',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59034313d646f1_67391279')) {function content_59034313d646f1_67391279($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/promaxilaser/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Busca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
