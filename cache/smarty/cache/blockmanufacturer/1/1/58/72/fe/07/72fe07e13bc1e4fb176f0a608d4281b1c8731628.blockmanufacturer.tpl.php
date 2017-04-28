<?php /*%%SmartyHeaderCode:2148559038b75e71ce0-62632366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fe07e13bc1e4fb176f0a608d4281b1c8731628' => 
    array (
      0 => 'C:\\WebServer\\Apache2.2\\htdocs\\promaxilaser\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1489520958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2148559038b75e71ce0-62632366',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59038b75f23b39_00673658',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59038b75f23b39_00673658')) {function content_59038b75f23b39_00673658($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost/promaxilaser/index.php?controller=manufacturer" title="Fabricantes">
						Fabricantes
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost/promaxilaser/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Mais sobre Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/promaxilaser/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Todos os fabricantes</option>
													<option value="http://localhost/promaxilaser/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
